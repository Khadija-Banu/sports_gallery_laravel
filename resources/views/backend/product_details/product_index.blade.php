@extends('backend.master')

@section('content')

<div class="container ">
    <div class="card">
        <div class="card-body m-4">
          <h3 style="color:rgba(55,180,236,255)">Product List <a class="btn btn-sm btn-success" style="margin-left: 20px" href="{{route('product_create')}}">Add New Product</a></h3>

            <table class="table" >
                <thead >
                  <tr >
                    <th style="color:rgba(70,99,202,255)" >Ser No</th>
                    <th style="color:rgba(70,99,202,255)">Product Name</th> 
                    <th style="color:rgba(70,99,202,255)">Product Image</th> 
                    <th style="color:rgba(70,99,202,255)">Product Description</th>  
                    <th style="color:rgba(70,99,202,255)">Price</th>
                    <th style="color:rgba(70,99,202,255)">Category Name</th>
                    <th style="color:rgba(70,99,202,255)">Company Name</th>
                    
                    <th style="color:rgba(70,99,202,255)">Actions</th>     
                  </tr>
                </thead>
                <tbody>
                  @php
                      $id=1;
                  @endphp
                  @foreach ($products as $product)
                  <tr>             
                    <td>{{$id++}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>
                      @if(file_exists(storage_path().'/app/public/products/'.$product->product_image) &&(!is_null($product->product_image)))
                      <img src="{{asset('storage/products/'. $product->product_image)}}"height="100px"width="150px">
                      @else         
                      <img src="{{asset('storage/products/default.jpg')}}"height="100px" width="150px">
                      @endif
                    </td>

                    <td>{{$product->product_description}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->category->category_name?? ''}}</td>
                    <td>{{$product->company->company_name?? ''}}</td>           
                    <td>
                      <a class="btn btn-sm btn-warning" href="{{route('product_edit',$product->id)}}">Edit</a>
                      <a class="btn btn-sm btn-danger" href="{{route('product_delete',$product->id)}}">Delete</a>
                    </td>
                  </tr>  
                  @endforeach      
                </tbody>
              </table>
   
             
        </div>
    </div>
</div>
      
@endsection