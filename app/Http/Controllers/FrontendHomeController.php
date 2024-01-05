<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Company;
use App\Models\Slider;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\User;


class FrontendHomeController extends Controller
{
    public function home(){
        $sliders=Slider::all();
        $categories=Category::all();
        $products=Product::all();
        $companies=Company::all();
        $comments=Comment::all();
        $replies=Reply::all();
        return view ('frontend.f_home',compact('categories','products','companies','sliders','comments','replies'));
    }
    public function about(){
        $categories=Category::all();
        $products=Product::all();
        $companies=Company::all();
        return view ('frontend.f_about',compact('categories','products','companies'));
    }

    public function shop($id){
        $products=Product::all();
        $categories = Category::where('id', $id)->get();
        return view ('frontend.f_shop',compact('products','categories'));
    }

    public function product($id){
        $myItems=Cart::where('user_id',auth()->user()->id)->count();
        $products=Product::where('id', $id)->get();
        $categories=Category::all();
        $comments=Comment::all();
        $replies=Reply::all();
        return view ('frontend.f_product_details',compact('categories','products','myItems','comments','replies'));
    }

    public function contact(){
        $categories=Category::all();
        $products=Product::all();
        return view ('frontend.f_contact',compact('categories','products'));
    }

  
    public function checkout(){
        $categories=Category::all();
        $users=User::all();
        $cartItems=Cart::with('product')->where('user_id',auth()->user()->id)->get();
        return view ('frontend.f_checkout',compact('categories','cartItems','users'));
    }

    public function myAccount(){
        $categories=Category::all();
        $orders=Order::all();
        return view ('frontend.f_myAccount',compact('categories','orders'));
    }

    public function add_comment(Request $request){
        if(Auth::id()){
            $comment = new comment;
            $comment->name=Auth::user()->name;
            $comment->user_id=Auth::user()->id;
            $comment->comment=$request->comment;
            $comment->save();
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function add_reply(Request $request){
        if(Auth::id()){
            $reply=new reply;
            $reply->name=Auth::user()->name;
            $reply->user_id=Auth::user()->id;
            $reply->comment_id=$request->commentId;
            $reply->reply=$request->reply;
            $reply->save();
            return redirect()->back();

        }else{
            return redirect('login');
        }
    }
    
}

