<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Company;
use App\Models\Vendor;
use Illuminate\Support\Carbon;
use Image;


class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view ('backend.product_details.product_index',compact('products'));
    }

    public function create(){
        $companies=Company::all();
        $categories=Category::all();
        return view ('backend.product_details.product_create',compact('categories','companies'));
    }

    public function store(ProductRequest $request){
        try{
     $data=$request->all();
    
     if($request->product_image){
         $image=$this->UploadImage($request->product_name,$request->product_image);
     }
    
     $data['product_image']=$image;
     Product::create($data);
     return redirect()->route('product_index');
    }
    catch(Exception $e){
     return redirect()-route('product_create')->withMessage($e->getMessage());
    }
    }

    
    public function edit($id){
        $categories=Category::all();
        $products=Product::find($id);
        return view ('backend.product_details.product_edit',compact('products','categories'));
    }

    public function update(Request $request,$id){
        try{
            $data=$request->except('_token');

            if($request->hasFile('product_image')){
                $products=Product::where('id',$id)->first();
                $this->unlink($products->product_image);
                $data['product_image']=$this->UploadImage($request->product_name,$request->product_image);
            }
            Product::where('id', $id)->update($data);
            return redirect()->route('product_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }  
    }

        //Individual post delete
        public function delete($id){
            $data=Product::find($id);
            $data->delete();
            return redirect()->back();
            
        }


     //Image upload function
     public function UploadImage($product_name,$product_image){
        $timestamp=str_replace([' ',':'],'-',Carbon::now()->toDateTimeString());
        $file_name=$timestamp . '-'.$product_name. '.' .$product_image->getClientOriginalExtension();
        $pathToUpload=storage_path().'/app/public/products/';
 
        if(!is_dir($pathToUpload)){
         mkdir($pathToUpload, 0755, true);
 
        }
        Image::make($product_image)->resize(634,792)->save($pathToUpload.$file_name);
        return $file_name;
     }
 
     //Image update then previous image delete in storage folder
     private function unlink($product_image){
         $pathToUpload=storage_path().'/app/public/products/';
         if($product_image != '' && file_exists($pathToUpload.$product_image)){
             @unlink($pathToUpload.$product_image);
         }
     }
}
