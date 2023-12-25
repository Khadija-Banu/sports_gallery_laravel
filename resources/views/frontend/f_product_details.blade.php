@extends('frontend.master')

@section('content')

<main class="main">
    
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-9">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="{{asset('storage/products/'. $product->product_image)}}" alt="product image">
                                        </figure>
                                     
                                    </div>
                                    <!-- THUMBNAILS -->
                                 
                                </div>
                                <!-- End Gallery -->
 
                            </div>
                          
 

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <form action="{{route('cart_store')}}" method="POST">
                                        @csrf
                                    
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{$product->product_name}}</h2>
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Brands: <a href="">{{$product->company->company_name?? ''}}</a></span>
                                            </div>
                                            
                                        </div>



                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">${{$product->product_price}}</span></ins>
                                             
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{$product->product_description}}</p>
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                               
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div>
                                      
                                       
                                    
                                        <div class="detail-extralink" >
                                         
                                              <div> <input type="number"  name='quantity' value="1" w-25></div>
                                              <div>  <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                              </div>  
                                         
                                                                           
                                              
                                        </div>
                                       </form>
                                 
                                        <ul class="product-meta font-xs color-grey mt-50">
                                         
                                            <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                          
                        </div>
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div class="">
                                        <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop
                                            tightly neurotic hungrily some and dear furiously this apart.</p>
                                        <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped
                                            besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
                                        </p>
                        
                                        
                                    </div>
                                </div>
                               
                                <div class="tab-pane fade" id="Reviews">
                                    <!--Comments-->
                                    <div class="comments-area">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 >Customer questions & answers</h4>
                                                <div >
                                                    <div > 
                                                        <div >
                                                            @foreach($comments as $comment)
                                                            <h5 class="ms-3">{{$comment->name}}</h5>
                                                            <p class="ms-3 ">{{$comment->comment}}</p>
                                                            
                                                            <span class=" ms-3">{{$comment->created_at}}</span> 
                                                            <a href="javascript::void(0)" class="text-brand btn-reply mb-5" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply </a>

                                                            @foreach($replies as $reply)

                                                            @if($reply->comment_id==$comment->id)
                                                            <div class=" ms-5" style=" padding-bottom:10%;">
                                                                <h5>{{$reply->name}}</h5>
                                                                <b>{{$reply->reply}}</b>
                                                                <a href="javascript::void(0)" class="text-brand btn-reply mb-5" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply </a>
                                                            </div>
                                                            @endif
                                                            @endforeach 
                                                            @endforeach    
                                                       

                                                            <div class="replyDiv " style="display:none;">
                                                            <form action="{{route('add_reply')}}" method="POST">
                                                            @csrf
                                                           
                                                            <input type="text" name="commentId" id="commentId" hidden="">
                                                                <textarea class="form-control w-100 " name="reply" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                                <div class="  d-flex">
                                                                    <button type="submit" class="btn btn-outline-warning btn-sm">Reply</button>
                                                                <a href="javascript::void(0)" class="text-brand btn-reply" onclick="reply_close(this)">Close  </a>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>                                   
                                                </div>
                                            </div>
                                       
                                        </div>
                                    </div>
                                    <!--comment form-->
                                    <div class="comment-form">
                                        <h4 class="mb-15">Add a review</h4>
                                        <div class="product-rate d-inline-block mb-30">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <form action="{{route('add_comment')}}" method="post" class="form-contact comment_form" action="#" id="commentForm">
                                                @csrf    
                                                <div class="row">
                                                    <div class="col-12">
                                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>                                                          
                                                        <button type="submit" class="button button-contactForm">Submit
                                                            Review</button>
                                                    </div>   
                                                    </div>
                                              
                                                  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                               
                    </div>
                </div>
                @endforeach
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                        <ul>   
                            @foreach ($categories as $category)
                            <li><a href="{{route('frontend_shop',$category->id)}}">{{$category->category_name}}
                               
                            </a></</li>
                            @endforeach
                          
                         
                        </ul>
                    </div>
                              
                </div>
            </div>
        </div>
    </section>
</main>





<script type="text/javascript">
    function reply(caller){
        document.getElementById('commentId').value=$(caller).attr('data-Commentid');
        $('.replyDiv').insertAfter($(caller));
        $('.replyDiv').show();
    }
    function reply_close(caller){
        $('.replyDiv').hide();
    }
</script>

@endsection

