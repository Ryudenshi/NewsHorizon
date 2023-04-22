<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    /*public function chooseCategory($category){

        $categories = Category::where('code', $category)->first();
        dd(($categories));
        return view('category.categories', compact('category'));

    }*/

    public function category(){
        return view('category');
    }
}
