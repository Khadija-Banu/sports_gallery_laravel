@extends('backend.master')

@section('content')
<div class="container ">
    <div class="card">
    <div class="card-body m-4 ">
    <h3 style="color:rgba(55,180,236,255)">Update Product<a class="btn btn-sm btn-info" style="margin-left: 20px" href="{{route('product_index')}}">Product list</a></h3>
        
    <form action="{{route('product_update',$products->id)}}" method="post" class="mt-4" enctype="multipart/form-data">
        @csrf
            <div class="form-group mt-2">
                <input class="form-control" type="text "value="{{$products->product_name}}" name="product_name" >
            </div>
            <div class="form-group mt-2">
                <input type="file" name="product_image" value="{{$products->product_image}}"class="form-control" >
              </div>
              <div class="form-group mt-2">
                <input class="form-control" type="text "value="{{$products->product_description}}" name="product_description" >
            </div>
            <div class="form-group mt-2">
                <input class="form-control" type="text "value="{{$products->product_price}}" name="product_price" >
            </div>
            <div class="form-group mt-2">
                <select class="form-select" name="category_id" >
                  <option value="">Select category name</option>
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}" >{{$category->category_name}}</option>
                  @endforeach
              
                </select>
              </div>

              <div class="form-group mt-2">
                <input type="text" name="company_name" class="form-control"  value="{{old('company_name')}}" placeholder="company name" >

                @error('company_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              
       
              <button type="submit" class="btn btn-success mt-2">Update</button>
            </form>
        </div>
    </div>
</div>
    
@endsection