@extends('backend.master')

@section('content')

<div class="container ">
    <div class="card">
    <div class="card-body m-4">
    <h3 style="color:rgba(55,180,236,255)">Create Cart<a class="btn btn-sm btn-info" style="margin-left: 20px" href="{{route('cart_index')}}">Cart list</a></h3>
        
    <form action="{{route('cart_store')}}" method="post" class="mt-4" enctype="multipart/form-data">
        @csrf
            <div class="form-group mt-2">
                <input class="form-control" type="text " name="quantity" value="{{old('quantity')}}" placeholder="Quantity">

                @error('quantity')
                <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group mt-2">
              <input class="form-control" type="text " name="unit_price" value="{{old('unit_price')}}" placeholder="Unit Price">

              @error('unit_price')
              <span class="text-danger">{{ $message }}</span>
              @enderror

          </div>
              <div class="form-group mt-2">
                <input type="text" name="total_price" class="form-control" value="{{old('total_price')}}" placeholder="Total Price ">

                @error('total_price')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="form-group mt-2">
                <select class="form-select" name="user_id" >
                  <option value="">Select user name</option>
                  @foreach ($users as $user)
                  <option value="{{$user->id}}" >{{$user->name}}</option>
                  @endforeach        
                </select>

                @error('user_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <div class="form-group mt-2">
                <select class="form-select" name="product_id" >
                  <option value="">Select Product name</option>
                  @foreach ($products as $product)
                  <option value="{{$product->id}}" >{{$product->product_name}}</option>
                  @endforeach        
                </select>

                @error('product_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
              <button type="submit" class="btn btn-success mt-2">Submit</button>
            </form>
        </div>
    </div>
</div>
    
@endsection