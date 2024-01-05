<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SearchController extends Controller
{
  

       
      //Search blog title in navbar search field
      public function product_search(Request $request){
        $categories=Category::all();
        $query=$request->input(key: 'query');
        $products=Product::where('product_name','LIKE',"%$query%")->get();
        return view('frontend.product_search_list',compact('products','query','categories'));
      }
    
    
      // public function f_medicine_search(Request $request){
      
      //   $query=$request->input(key: 'query');
        
      //   $medicines=Medicine::where('medicine_name','LIKE',"%$query%")->get();
      //   return view('backend.medicine_details.medicine_search_list',compact('medicines','query'));
      // }
    
     
    }

