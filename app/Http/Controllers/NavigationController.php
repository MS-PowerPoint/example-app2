<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class NavigationController extends Controller
{


    public function catalog()
    {
        $Products=Product::all();
        $Categories=Category::all();
        return view('catalog',['Products'=>$Products, 'Categories'=>$Categories]);
    }

    // public function waitinglist()
    // {
    //     $Products=Product::all();
    //     $Categories=Category::all();

    // }

    // public function basket()
    // {
    //     $Products=Product::all();
    //     $Categories=Category::all();

    // }

    // public function help()
    // {
    //     $Products=Product::all();
    //     $Categories=Category::all();

    // }

}
