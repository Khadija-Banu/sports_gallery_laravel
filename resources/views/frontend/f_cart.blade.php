@extends('frontend.master')

@section('content')


<main class="main">
    
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
  
                <div class="table-responsive">
                        <table class="table shopping-summery text-center clean">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            @foreach ($cartItems as $item)

                                <tr>
                                    <td class="image product-thumbnail"><img src="{{asset('storage/products/'. $item->product->product_image)}}" alt="#"></td>
                                    <td class="product-des product-name">
                                        {{$item->product->product_name}}
                                    </td>
                                    <td class="price" data-title="Price"><span>${{$item->unit_price}}</span></td>
                                    <td style="width: 100px">
                                    <input type="number"  name='quantity' value="{{$item->quantity}}">
                                    </td>
                                    <td >
                                        <span>${{$item->total_price}}</span>
                                    </td>
                                    <td class="action" data-title="Remove"><a href="{{route('cart_delete',$item->id)}}" class="text-muted"><i class="fi-rs-trash"></i></a></td>
                                </tr>

                                @endforeach

                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-action text-end">
                        <a class="btn  mr-10 mb-sm-15" type="submit" href="{{route('frontend_checkout')}}"><i class="fi-rs-shuffle mr-10"></i>Update Cart</a>
                    </div>


                    <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>

                </div>
            </div>
        </div>
    </section>
</main>

@endsection