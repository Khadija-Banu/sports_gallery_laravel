@extends('frontend.master')

@section('content')

<div class="container p-5">


<div class="row">
<div class="col-md-6">
        <div class="order_review">
            <div class="mb-20">
                <h4>Your Orders</h4>
            </div>
            <div class="table-responsive order_table text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total=0
                        @endphp
                        @foreach ($cartItems as $item)
                        @php
                       
                        $total +=$item->total_price;
                         @endphp
                        <tr>
                            <td class="image product-thumbnail"><img src="{{asset('storage/products/'. $item->product->product_image)}}" alt="#"></td>
                            <td>
                                <h5><a href="product-details.html"> {{$item->product->product_name}}</a></h5> <span class="product-qty">x {{$item->quantity}}</span>
                            </td>
                            <td>${{$item->total_price}}</td>
                        </tr>
                        @endforeach                 
                        <tr>
                            <th>SubTotal</th>
                            <td class="product-subtotal" colspan="2">${{$total}}</td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td colspan="2"><em>Free Shipping</em></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">${{$total}}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
 
            <div class="payment_method">

                <div class="payment_option">
                    <div class="custome-radio">
                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios3"  onclick="myFunction()">
                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>                                        
                    </div>
                    
                    <div >
                        <button id="sslczPayBtn"
                        token="if you have any token validation"
                        postdata=""
                        order="If you already have the transaction generated for current order"
                        endpoint="/pay-via-ajax"> Pay Now
                            </button>
                    </div>
                   
                </div>
            
            </div>
          
        
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-25">
            <h4>Billing Details</h4>
        </div>
        <form method="post" action="{{route('order_store')}}">
@csrf
            <div class="form-group">
                <select class="form-select" style="font-size:12px" name="user_id" >
                  <option value="">Select user name</option>
                  @foreach ($users as $user)
                  <option value="{{$user->id}}" >{{$user->name}}</option>
                  @endforeach        
                </select>

                @error('user_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror

              </div>
        
            <div class="form-group">
                <input type="text" name="billing_address" required="" placeholder="Address *">
            </div>
           
            <div class="form-group">
                <input required="" type="text" name="phone" placeholder="Phone *">
            </div>
            <div class="form-group">
                <input  type="text" name="total" hidden value="{{$total}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100" name="submit">Place Order</button>
            </div>

        </form>
    </div>
   
</div>

</div>

<!-- <script>
    function myFunction() {
      document.getElementById("demo").innerHTML = "Place Order";
    }
    </script> -->

<script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();

    $('#sslczPayBtn').prop('postdata', obj);

    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>


@endsection