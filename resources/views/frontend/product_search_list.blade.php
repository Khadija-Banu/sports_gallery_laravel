@extends('frontend.master')

@section('content')
    

        <div class="container p-5">

          <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
              <h4 style="color:rgba(141,196,66,255)">{{$products->count()}} Results for: {{$query}}</h4>

            <div class="container mt-4">
              <table class="table" >
                <thead >
                  <tr >
                    <th style="color:rgba(141,196,66,255)" >Ser No</th>
                    <th style="color:rgba(141,196,66,255)">product Name</th> 
                    <th style="color:rgba(141,196,66,255)" >product Image</th> 
                    <th style="color:rgba(141,196,66,255)" >Price</th>
                
                    <th style="color:rgba(141,196,66,255)" >Company Name</th>
                                 
                  
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
                      <img src="{{asset('storage/categories/default.jpg')}}"height="100px" width="150px">
                      @endif
                    </td>
                    <td>{{$product->product_price}}</td>
                  
                    <td>{{$product->company->company_name?? ''}}</td>
                   
                
                  </tr>  
                  @endforeach      
                </tbody>
              </table>
     

      </div> 
    
            </div>
        </section>
        
      </div> 
      
      


@endsection