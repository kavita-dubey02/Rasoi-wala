<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 use App\Models\User;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\DB;
 use App\Models\chef_profile; ;
use App\Models\chef_document;
use App\Models\chef_bank;
use App\Models\EventType;
use App\Models\Category;

class EventController extends Controller
{
    public function eventlist(){

         $chefs = EventType::get();

    return view('admin.Event.Eventlist', compact('chefs'));
    }

    public function eventadd(Request $request){
        return view('admin.Event.eventadd');

    }

    public function eventstore(Request $request)
{
    // dd('kavi');
    $request->validate([
         'name' => 'required|string|max:255',
       
    ]);

    DB::beginTransaction();

    try {
        // Create User
        $chef = EventType::create([
            'name' => $request->name,
        ]);

        
        DB::commit();

        return redirect()->route('web-admin.eventlist')->with('success','Event Added Successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error',$e->getMessage());
    }
}


     public function eventedit($id)
        {
            $chef = EventType::findOrFail($id);

            return view('admin.Event.eventedit', compact('chef'));
        }

public function eventupdate(Request $request, $id)
{
    $chef = EventType::findOrFail($id);

    // Update user
    $chef->update($request->only(['name']));

   
    return redirect()->route('web-admin.eventlist')->with('success','event updated successfully');
}

public function destroy($id)
{
    // dd('kavi');
    DB::beginTransaction();

    try {
        $chef = EventType::findOrFail($id);

        
       
        // Finally delete user
        $chef->delete();

        DB::commit();

        return redirect()->back()->with('success', 'Event deleted successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Delete failed: '.$e->getMessage());
    }
}

///categories function
public function categorylist(){

         $chefs = Category::get();

    return view('admin.category.categorylist', compact('chefs'));
    }

    public function categoryadd(Request $request){
        // dd('kavi');
        return view('admin.category.categoryadd');

    }

    public function categorystore(Request $request)
{
    // dd('kavi');
    $request->validate([
         'name' => 'required|string|max:255',
       
    ]);

    DB::beginTransaction();

    try {
        // Create User
        $chef = Category::create([
            'name' => $request->name,
        ]);

        
        DB::commit();

        return redirect()->route('web-admin.categorylist')->with('success','category Added Successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error',$e->getMessage());
    }
}


     public function categoryedit($id)
{
    $chef = Category::findOrFail($id);

    return view('admin.category.categoryedit', compact('chef'));
}

public function categoryupdate(Request $request, $id)
{
    $chef = Category::findOrFail($id);

    // Update user
    $chef->update($request->only(['name']));

   
    return redirect()->route('web-admin.categorylist')->with('success','category updated successfully');
}

public function categorydestroy($id)
{
    // dd('kavi');
    DB::beginTransaction();

    try {
        $chef = Category::findOrFail($id);

        
       
        // Finally delete user
        $chef->delete();

        DB::commit();

        return redirect()->back()->with('success', 'Category deleted successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Delete failed: '.$e->getMessage());
    }
}
}