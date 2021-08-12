<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $category = Category::all();
        return view('category.index', compact('category',$category));
    }

    public function store(Request $request) {
        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->cat_des = $request->cat_des;
        $category->save();
        return redirect()->back();
    }
}
