<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory()
    { 
        $categories = Category::all();
        return view('categorypage', compact('categories'));
    }

    // public function showCategory($user_id)
    // {
    //     $categories = Category::where('user_id', $user_id)->get();
    //     return view('categorypage', compact('categories'));
    // }

    public function createCategory()
    {
        return view('createCategory');
    }

    public function storeCategory(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return redirect()->route('category.index');
    }

    public function editCategory(Category $category)
    {
        return view('updateCategory')->with('category', $category);
    }

    public function updateCategory(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('category.index');
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');

    }
}
