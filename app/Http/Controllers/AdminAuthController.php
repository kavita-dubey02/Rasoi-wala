<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 use App\Models\User;
 use Illuminate\Support\Facades\Hash;
 use App\Services\OtpService;
 

class AdminAuthController extends Controller
{
    public function showLogin()
{
    return view('admin.auth.login');
}

public function showAdminRegister()
{
    return view('admin.auth.register');
}

public function saveAdminRegister(Request $request){
     $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'mobile' => 'required|digits:10|unique:users,mobile',
        'password' => 'required|min:6|same:confirm-password',
    ]);
// if ($request->hasFile('profile_photo')) {
//     $path = $request->file('profile_photo')->store('profiles', 'public');
//     $user->profile_photo = $path;
// }

    $user=User::create([
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'password' => Hash::make($request->password)
    ]);
    $user->assignRole('admin');
// dd($user);
    return redirect()->route('admin.login')
        ->with('success', 'User registered successfully! Please login.');
}

public function login(Request $request)
{
    $request->validate([
        'mobile' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt([
        'mobile' => $request->mobile,
        'password' => $request->password
    ])) {
        $request->session()->regenerate();

        $user = Auth::user();

        
        if ($user->hasRole('admin')) {
            return redirect()->route('web-admin.dashboard');
        }

        // if ($user->hasRole('chef')) {
        //     return redirect('/chef/dashboard'); 
        // }

        // if ($user->hasRole('customer')) {
        //     return redirect('/'); 
        // }

        // fallback
        return redirect('/');
    }

    return back()->withErrors([
        'mobile' => 'Invalid mobile or password',
    ])->onlyInput('mobile');
}


 public function logout(Request $request)
    {
        Auth::logout(); 

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/admin/login'); 
    }
}
