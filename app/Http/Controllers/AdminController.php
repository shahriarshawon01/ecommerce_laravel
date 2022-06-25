<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function viewCategory()
    {
        return view('admin.category');
    }
    public function addCategory(Request $request)
    {
        $category_data = new Category();
        $category_data->category_name = $request->categoryName;
        $category_data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
}
