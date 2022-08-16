@extends('master.layout')
@section('content')

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Chi Tiết Món {{$sanpham->tensp}}</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row single-product-area product-details-inner">
                    <div class="col-lg-5 col-md-6">
                        <!-- Product Details Left -->
                        <div class="product-large-slider">
                            <div class="pro-large-img" style="margin-left: 30%;margin-top:10px  ">
                                <img src="../../assets/images/food/{{$sanpham->hinhanh}}" alt="product-details" />
                            </div>
   

                        </div>
                        <!--// Product Details Left -->
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="product-details-view-content">
                            <div class="product-info">
                                <h3>{{$sanpham->tensp}}</h3>
                                 <div class="product-rating d-flex">
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                    </ul>
                                    
                                </div>
                                <div class="price-box">
                                    <span class="new-price">{{number_format($sanpham->gia)}} đ</span>
                                </div>
                                <p>{{$sanpham->mota}}</p>

                                <div class="single-add-to-cart">
                                    <form action="{{route('getCartForm',[$sanpham->id,$sanpham->tensp])}}" class="cart-quantity d-flex" method="get">
                                        <div class="quantity">
                                            <div class="cart-plus-minus">
                                                <input type="number" class="input-text" name="quantity" value="1" title="Qty" max="30">
                                            </div>
                                        </div>
                                        <p></p>
                                        <button class="add-to-cart" type="submit">
                                        Mua Ngay
                                        </button>
                                        {{csrf_field()}}
                                    </form>
                                </div>
                                <ul class="single-add-actions">
                                    <li class="add-to-wishlist">
                                        
                                    </li>
                                    <li class="add-to-compare">
                                        
                                    </li>
                                </ul>
                                
                                <div class="share-product-socail-area">
                                    <p>Chia sẽ Món Ăn</p>
                                    <ul class="single-product-share">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-description-area section-pt">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-details-tab">
                                <ul role="tablist" class="nav">
                                    <li class="active" role="presentation">
                                        <a data-toggle="tab" role="tab" href="#description" class="active">Mô tả Chi Tiết</a>
                                    </li>
                                    <!-- <li role="presentation">
                                        <a data-toggle="tab" role="tab" href="#reviews">Đánh Giá</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product_details_tab_content tab-content">
                                <!-- Start Single Content -->
                                <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                                    <div class="product_description_wrap  mt-30">
                                        <div class="product_desc mb-30">
                                            <p>
                                                @if($sanpham->motachitiet == null)
                                                    <p>Đang cập nhật thông tin món ăn</p>
                                                @else
                                                    {{$sanpham->motachitiet}}</p>
                                                @endif
                                        </div>

                                    </div>
                                </div>
                                <!-- End Single Content -->
                                <!-- Start Single Content -->
                                <!-- <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                                    <div class="review_address_inner mt-30">
                                        Start Single Review
                                        <div class="pro_review">
                                            <div class="review_thumb">
                                                <img alt="review images" src="{{URL::asset('assets/images/other/reviewer-60x60.jpg')}}">
                                            </div>
                                            <div class="review_details">
                                                <div class="review_info mb-10">
                                                    <ul class="product-rating d-flex mb-10">
                                                        <li><span class="icon-star"></span></li>
                                                        <li><span class="icon-star"></span></li>
                                                        <li><span class="icon-star"></span></li>
                                                        <li><span class="icon-star"></span></li>
                                                        <li><span class="icon-star"></span></li>
                                                    </ul>
                                                    <h5>Admin - <span> November 19, 2019</span></h5>
                                
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex, vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel. Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet quam tincidunt iaculis.</p>
                                            </div>
                                        </div>
                                        End Single Review
                                    </div>
                                    Start RAting Area
                                    <div class="rating_wrap mt-50">
                                        <h5 class="rating-title-1">Add a review </h5>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <h6 class="rating-title-2">Your Rating</h6>
                                        <div class="rating_list">
                                            <div class="review_info mb-10">
                                                <ul class="product-rating d-flex mb-10">
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    End RAting Area
                                    <div class="comments-area comments-reply-area">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="#" class="comment-form-area">
                                                    <div class="row comment-input">
                                                        <div class="col-md-6 comment-form-author mt-15">
                                                            <label>Name <span class="required">*</span></label>
                                                            <input type="text" required="required" name="Name">
                                                        </div>
                                                        <div class="col-md-6 comment-form-email mt-15">
                                                            <label>Email <span class="required">*</span></label>
                                                            <input type="text" required="required" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="comment-form-comment mt-15">
                                                        <label>Comment</label>
                                                        <textarea class="comment-notes" required="required"></textarea>
                                                    </div>
                                                    <div class="comment-form-submit mt-15">
                                                        <input type="submit" value="Submit" class="comment-submit">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- End Single Content -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="related-product-area section-pt">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3> Món ăn Tương Tự</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row row-8 product-row-6-active">
                    	@foreach($sp_tuongtu as $sptt)
							<div class="product-col">
                            <!-- Single Product Start -->
                            <div class="single-product-wrap mt-10">
	                                <div class="product-image">
	                                    <a href="{{route('detail',[$sptt->id,$sptt->slug])}}"><img src="../../assets/images/food/{{$sptt->hinhanh}}" alt=""></a>
	                                    <span class="onsale">Sale!</span>
	                                </div>
	                                <div class="product-button">
	                                    <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
	                                </div>
	                                <div class="product-content">
	                                    <div class="price-box">
	                                        <span class="new-price">{{number_format($sptt->gia)}} đ</span>
	                                    </div>
	                                    <h6 class="product-name"><a href="product-details.html">{{$sptt->tensp}}</a></h6>

	                                    <div class="product-button-action">
	                                        <a href="{{route('getCart',[$sptt->id,$sptt->tensp])}}" class="add-to-cart">Mua Ngay</a>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- Single Product End -->
	                        </div>
                    	@endforeach
                        
                      
                    </div>
                </div>
<!-- 
               

            </div>
        </div>
        <!-- main-content-wrap end -->


@endsection