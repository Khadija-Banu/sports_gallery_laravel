<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\User;
use App\Models\Category;
use App\Models\product;
use Illuminate\Support\Carbon;
use Image;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $carts=Cart::paginate(4);
        return view ('backend.cart_details.cart_index',compact('carts'));
    }

    public function create(){
        $products=Product::all();
        $users=User::all();
        return view ('backend.cart_details.cart_create',compact('users','products'));
    }


    public function store(Request $request){

        $product = Product::find($request->product_id);



        DB::table('carts')->insert([
            'product_id' => $product->id,
            'user_id' => auth()->user()->id,
            'unit_price' => $product->product_price,
            'quantity' => $request->quantity,
            'total_price' =>( $product->product_price * $request->quantity ) ?? 0


        ]);
        return redirect()->back();

    //     try{
    //  $data=$request->all();
    //  Cart::create($data);
    //  return redirect()->route('cart_index');
    // }
    // catch(Exception $e){
    //  return redirect()-route('cart_create')->withMessage($e->getMessage());
    // }
    }

    public function edit($id){
        $products=Product::all();
        $users=User::all();
        $carts=Cart::find($id);
        return view ('backend.cart_details.cart_edit',compact('carts','users','products'));
    }


    public function update(Request $request,$id){

        try{
            $data=$request->except('_token');
            Cart::where('id', $id)->update($data);
            return redirect()->route('cart_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }



      //Individual post delete
      public function delete($id){
        $data=Cart::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function cartItems()

    { 
        $carts=Cart::all();
        $categories = Category::all();
        $cartItems=Cart::with('product')->where('user_id',auth()->user()->id)->get();
        return view('frontend.f_cart',compact('cartItems','categories','carts'));
    }

}
