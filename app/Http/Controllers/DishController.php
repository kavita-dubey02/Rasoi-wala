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
use App\Models\Dish;

class DishController extends Controller
{
     public function dishlist(){

         $chefs = Dish::get();

    return view('admin.dishes.dishlist', compact('chefs'));
    }

    public function dishedit($id){

          $dish = Dish::findOrFail($id);  
    $categories = Category::all(); 
    return view('admin.dishes.dishedit', compact('dish', 'categories'));
    }
    public function dishadd(Request $request){
        $categories=Category::get();
        return view('admin.dishes.dishadd',compact('categories'));

    }

    public function dishstore(Request $request)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    DB::beginTransaction();

    try {
        // Upload Image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('dishes', 'public');
        }

        // Create Dish
        Dish::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        DB::commit();

        return redirect()->route('web-admin.dishlist')
                         ->with('success', 'Dish Added Successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error', $e->getMessage());
    }
}

   

public function dishupdate(Request $request, $id)
{
    $dish = Dish::findOrFail($id);

    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    DB::beginTransaction();

    try {
        // If new image uploaded
        if ($request->hasFile('image')) {

            // Delete old image from storage
            if ($dish->image && Storage::disk('public')->exists($dish->image)) {
                Storage::disk('public')->delete($dish->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('dishes', 'public');
            $dish->image = $imagePath;
        }

        // Update other fields
        $dish->category_id = $request->category_id;
        $dish->name = $request->name;
        $dish->description = $request->description;

        $dish->save();

        DB::commit();

        return redirect()->route('web-admin.dishlist')
                         ->with('success', 'Dish Updated Successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error', $e->getMessage());
    }
}
public function dishdestroy($id)
{
    // dd('kavi');
    DB::beginTransaction();

    try {
        $chef = Dish::findOrFail($id);

        
       
        // Finally delete user
        $chef->delete();

        DB::commit();

        return redirect()->back()->with('success', 'Dish deleted successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Delete failed: '.$e->getMessage());
    }
}
}
