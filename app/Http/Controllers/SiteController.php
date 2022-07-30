<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Employee;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getData()
    {
        $products = DB::table('categories')
        ->leftjoin('products','categories.id','=','products.category_id')
        ->where('name','=','furnitures')
        ->get();
      
        return view('welcome',compact('products'));        
       
    }

    public function index(){
        $products = DB::table('categories')
        ->leftjoin('products','categories.id','=','products.category_id')
        // ->where('name','=','furnitures')
        ->get();
        return view('welcome',compact('products'));
    }
}
