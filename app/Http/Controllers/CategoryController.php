<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
public function store(Request $request){
    $userInputs = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:2048'
    ]);
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('categories', 'public');
        $userInputs['image'] = $imagePath;
    }
    $UserExist= Category::where('name', $userInputs['name'])->count();   
    if($UserExist>0){
        return "name is already exists";
    }
   else{
    Category::create($userInputs);
    return redirect('/')->with('success', 'Category created successfully');
   } 
}
//WE NEED TO REMEBER NOT TO FORGET TO RUN THE COMMAND::
// Run this command in your terminal:

// php artisan storage:link -->It will create a symbolic link from public/storage → storage/app/public



public function ShowIndex(){
    $categories = Category::all();
    return view('category.index', compact('categories'));
}

public function edit($id){
   $category_data = Category::find($id);
   return view('category.edit', compact('category_data'));
}

public function update(Request $request, $id){  //dont forget to (run php artisan storage:link)
    $category_data = Category::findOrFail($id);
    $userInputs = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'nullable|image|max:2048'
    ]);
    if ($request->hasFile('image')) {  //it says Did the user upload an image file with the form submission?”If yes, then(delete old image, store new image). If no, the block is skipped.
        Storage::disk('public')->delete($category_data->image); // means it is using the "public" disk configured in Laravel, usually storage/app/public. also delete the last current one

        $userInputs['image'] = $request->file('image')->store('categories', 'public'); //Store the new uploaded image inside the "categories" folder on the public disk.
    }
    $category_data->update($userInputs);
    return redirect('/')->with('success', 'Category updated successfully');
}

public function destroy($id){
  $category_data = Category::find($id);
  $category_data->delete();
 return redirect('/');
}

public function viewData($id){
    $view_data=Category::find($id);
    return view('category.view_data', compact('view_data'));
}

}
