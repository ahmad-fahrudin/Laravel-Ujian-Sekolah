<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category()
    {
        $category = Category::all();
        return view('admin.category.category', compact('category'));
    }

    public function CategoryStore(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:categories'
        ]);
        Category::insert([
            'name' => $request->name,
        ]);
        $toastr = array(
            'success' => 'Category Data Inserted.'
        );
        return redirect()->route('category')->with($toastr);
    }

    public function categoryEdit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit_category', compact('category'));
    }

    public function categoryUpdate(Request $request)
    {
        $category_id = $request->id;

        Category::findOrFail($category_id)->update([
            'name' => $request->name,
        ]);

        $toastr = array(
            'success' => 'Category Updated Successfully.'
        );
        return redirect()->route('category')->with($toastr);
    }

    public function categoryDelete($id)
    {
        Category::findOrFail($id)->delete();

        $toastr = array(
            'success' => 'Category Deleted.'
        );
        return redirect()->route('category')->with($toastr);
    }
}
