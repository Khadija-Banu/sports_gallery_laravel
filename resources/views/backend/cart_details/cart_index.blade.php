@extends('backend.master')

@section('content')

<div class="container ">
    <div class="card ">
        <div class="card-body m-4">
          <h3 style="color:rgba(55,180,236,255)">Cart List <a class="btn btn-sm btn-success" style="margin-left: 20px" href="{{route('cart_create')}}">Add New Cart</a></h3>
            <table class="table" >
                <thead >
                  <tr >
                    <th style="color:rgba(70,99,202,255)">Ser No</th>
                    <th style="color:rgba(70,99,202,255)" > Quantity</th> 
                    <th style="color:rgba(70,99,202,255)" >Unit price</th> 
                    <th style="color:rgba(70,99,202,255)"  >Total price</th> 
                    <th style="color:rgba(70,99,202,255)"  >User Name</th>   
                    <th style="color:rgba(70,99,202,255)"  >Product Name</th>                               
                   <th style="color:rgba(70,99,202,255)"  >Actions</th>     
                  </tr>
                </thead>
                <tbody>
                  @php
                      $id=1;
                  @endphp
                  @foreach ($carts as $cart)
                  <tr>             
                    <td>{{$id++}}</td>
                    <td>{{$cart->quantity}}</td>
                    <td>{{$cart->unit_price}}</td>               
                    <td>{{$cart->total_price}}</td>
                    <td>{{$cart->user->name?? ''}}</td> 
                    <td>{{$cart->product->product_name?? ''}}</td>              
                    <td>
                      <a class="btn btn-sm btn-warning" href="{{route('cart_edit',$cart->id)}}">Edit</a>
                      <a class="btn btn-sm btn-danger" href="{{route('cart_delete',$cart->id)}}">Delete</a>
                    </td>
                  </tr>  
                  @endforeach      
                </tbody>
              </table>

                
        </div>
    </div>
</div>
    
@endsection