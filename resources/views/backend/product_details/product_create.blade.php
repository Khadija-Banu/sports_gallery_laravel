@extends('backend.master')

@section('content')
<div class="container ">
    <div class="card">
    <div class="card-body m-4 ">
    <h3 style="color:rgba(55,180,236,255)">Create Product<a class="btn btn-sm btn-info" style="margin-left: 20px" href="{{route('product_index')}}">Product list</a></h3>
        
    <form action="{{route('product_store')}}" method="post" class="mt-4" enctype="multipart/form-data">
        @csrf
            <div class="form-group mt-2">
                <input class="form-control" type="text " name="product_name"  value="{{old('product_name')}}" placeholder="product name">

                @error('product_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group mt-2">
                <input type="file" name="product_image" class="form-control"   >

                @error('product_image')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="form-group mt-2">
                <input type="text" name="product_description" class="form-control"  value="{{old('product_description')}}" placeholder="product description">

                @error('product_description')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="form-group mt-2">
                <input type="text" name="product_price" class="form-control"  value="{{old('product_price')}}" placeholder="product price" >

                @error('product_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="form-group mt-2">
                <select class="form-select" name="category_id" >
                  <option value="">Select category name</option>
                  @foreach ($categories as $category)
                  <option value="{{$category->id}}" >{{$category->category_name}}</option>
                  @endforeach             
                </select>

                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>

              
              <div class="form-group mt-2">
                <select class="form-select" name="company_id" >
                  <option value="">Select company name</option>
                  @foreach ($companies as $company)
                  <option value="{{$company->id}}" >{{$company->company_name}}</option>
                  @endforeach             
                </select>

                @error('company_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

      
              <button type="submit" class="btn btn-success mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>
    
@endsection