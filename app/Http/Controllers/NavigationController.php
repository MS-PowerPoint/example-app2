<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class NavigationController extends Controller
{


    public function catalog( Request $request)
    {

        $Products=Product::all();
        $Categories=Category::all();
        return view('catalog',['Products'=>$Products, 'Categories'=>$Categories]);
    }

    public function waitinglist()
    {
         $Products=Product::all();
         $Categories=Category::all();
            return view('waitinglist',['Products'=>$Products, 'Categories'=>$Categories]);

    }

    public function basket()
    {
        $Products=Product::all();
        $Categories=Category::all();
        return view('basket',['Products'=>$Products, 'Categories'=>$Categories]);


    }

    public function help()
    {
        $Products=Product::all();
        $Categories=Category::all();
        return view('help',['Products'=>$Products, 'Categories'=>$Categories]);


    }

}
