@extends('master.layout')
@section('content')

	       <!-- Hero Section Start -->
        <div class="hero-slider hero-slider-four">

            <!-- Single Slide Start -->
            @foreach($slide as $item)
            <div class="single-slide" style="background-image: url(assets/images/food/{{$item->imgslide}})">
                <!-- Hero Content One Start -->
                <div class="hero-content-two container-ext">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- <div class="slider-content-text text-center text-black">
                                <h1> <br></h1>
                                    <p> </p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="slider-btn">
                                        <a href="#">Xem Ngay</a>
                                    </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- Hero Content One End -->
            </div>
            @endforeach
            <!-- Single Slide End -->

        </div>
        <!-- Hero Section End -->

        <!-- Our Customer Support Area  Start -->
        <div class="our-customer-support section-pt-30">
            <div class="container-ext">
                <div class="row row-8">
                    <div class="custom-col-service col-md-4">
                        <!-- Single Support Start-->
                        <div class="single-support mt-30">
                            <img src="assets/images/icon/icon-policy.png" alt="">
                            <div class="support-content">
                                <strong>Miễn Phí Vận Chuyện</strong>
                                <p>Với Hóa Đơn Trên 200,000 Đ</p>
                            </div>
                        </div>
                        <!-- Single Support End-->
                    </div>
                    <div class="custom-col-service col-md-4">
                        <!-- Single Support Start-->
                        <div class="single-support mt-30">
                            <img src="assets/images/icon/icon-policy2.png" alt="">
                            <div class="support-content">
                                <strong>Hoàn Trả Thanh Toán</strong>
                                <p>Nếu Xảy Ra Vấn Đề</p>
                            </div>
                        </div>
                        <!-- Single Support End-->
                    </div>
                    <div class="custom-col-service col-md-4">
                        <!-- Single Support Start-->
                        <div class="single-support mt-30">
                            <img src="assets/images/icon/icon-policy3.png" alt="">
                            <div class="support-content">
                                <strong>Hỗ Trợ 24/7</strong>
                                <p>Hỗ Trợ Khách Hàng</p>
                            </div>
                        </div>
                        <!-- Single Support End-->
                    </div>
                    <div class="custom-col-service col-md-4">
                        <!-- Single Support Start-->
                        <div class="single-support mt-30">
                            <img src="assets/images/icon/icon-policy4.png" alt="">
                            <div class="support-content">
                                <strong>Thanh Toán An Toàn</strong>
                                <p>Nhận Hàng Mới Trả Tiền</p>
                            </div>
                        </div>
                        <!-- Single Support End-->
                    </div>
                    <div class="custom-col-service col-md-4">
                        <!-- Single Support Start-->
                        <div class="single-support mt-30">
                            <img src="assets/images/icon/icon-policy5.png" alt="">
                            <div class="support-content">
                                <strong>Ưu Đãi VIP</strong>
                                <p>Tích Hóa Đơn Nhận Ưu Đãi</p>
                            </div>
                        </div>
                        <!-- Single Support End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Customer Support Area  End -->

        <!-- Categories Item Warap Start -->
        <div class="categories-item-warap section-pt-30 section-pb">
            <div class="container-ext">
                <div class="row">
                    
                    @foreach($loaimonan as $loai)
                    
                    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                        <!-- single-categories-item Start -->
                        
                        <div class="single-categories-item mt-30">
                             <div class="categories-title"    >
                                <!-- <a href="#"><img src="assets/images/category/category-thumb-1.jpg" alt=""></a> -->
                            </div>  
                            <div class="categories-title">
                                <h6>
                                    <a href="{{route('getloai',[$loai->id,$loai->slug])}}">{{$loai->tenloai}}</a>
                                </h6>
                                
                                            @if($loai->status == 1 )
                                                <p>Còn Hàng</p>
                                            @else

                                                <p>Hết Hàng</p>

                                            @endif
                                        
                            </div>
                        </div>
                        <!-- single-categories-item End -->
                    </div>
                    
                    @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Categories Item Warap End -->

<!--         Banner Area Start
<div class="banner-area section-pb-30">
    <div class="container-ext">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-banner mb-30">
                    <a href="#"><img src="assets/images/banner/banner3-1-2.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-banner mb-30">
                    <a href="#"><img src="assets/images/banner/banner3-2.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-banner mb-30">
                    <a href="#"><img src="assets/images/banner/banner3-3-2.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
Banner Area End -->

        <!-- Product Area Start -->
        <div class="product-area section-ptb bg-gray">
            <div class="container-ext">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-box-wrapper">

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <!-- Section Title Start -->
                                    <div class="section-title ml-3 mb-20">
                                        <h3>Nổi Bật </h3>
                                    </div>
                                    <!-- Section Title End -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs-categorys-list  ml-3 mb-20">
                                        <ul class="nav menu-tabs-two " role="tablist">
                                            <li class="active"><a class="active" href="#tab-07" role="tab" data-toggle="tab"> Hot</a></li>
                                            <li><a href="#tab-08" role="tab" data-toggle="tab"> Sale </a></li>
                                            <li><a href="#tab-09" role="tab" data-toggle="tab">New</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-8 border-tp-gray no-gutters box-product-wrap">
                                <div class="col-lg-4 col-md-4">
                                    <div class="product-col border_none">
                                        <!-- Single Product Start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image text-center" style="padding-top: 25% ">
                                                <a href="{{route('detail',[$spnoibat->id,$spnoibat->slug])}}"><img src="assets/images/food/{{$spnoibat->hinhanh}}" alt=""></a>
                                                <span class="onsale">Nổi bật!</span>

                                            </div>
                                            <div class="product-button">
                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="price-box">
                                                    <span class="new-price">{{number_format($spnoibat->gia)}}</span>
                                                </div>
                                                <h6 class="product-name"><a href="{{route('detail',[$spnoibat->id,$spnoibat->slug])}}">{{$spnoibat->tensp}}</a></h6>
                                                
                                                <div class="product-button-action">
                                                    <a href="#" class="add-to-cart">Mua Ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="product-wrapper-five">
                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tab-07">
                                                <div class="row row-8 product-two-row-5">
                                                    @foreach($sanphamhot as $sp)
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="{{route('detail',[$sp->id,$sp->slug])}}"><img src="assets/images/food/{{$sp->hinhanh}}" alt=""></a>
                                                                <span class="onsale">Hot!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">{{number_format($sp->gia)}} đ</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">{{$sp->tensp}}</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="{{route('getCart',[$sp->id,$sp->tensp])}}" class="add-to-cart">Mua Ngay</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Single Product End -->
                                                    </div>
                                                    @endforeach
                                                
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00 - 147.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Select options</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-06.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tab-08">
                                                <div class="row row-8 product-two-row-5">
                                                    @foreach($sanphamsale as $sp)
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="{{route('detail',[$sp->id,$sp->slug])}}"><img src="assets/images/food/{{$sp->hinhanh}}" alt=""></a>
                                                                <span class="onsale">Sale {{$sp->sale}}%! </span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">{{number_format($sp->gia)}} đ</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">{{$sp->tensp}}</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="{{route('getCart',[$sp->id,$sp->tensp])}}" class="add-to-cart">Mua Ngay</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Single Product End -->
                                                    </div>
                                                    @endforeach

                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-14.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00 - 147.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Select options</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-06.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tab-09">
                                                <div class="row row-8 product-two-row-5">

                                                    @foreach($sanphamnew as $sp)
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="{{route('detail',[$sp->id,$sp->slug])}}"><img src="assets/images/food/{{$sp->hinhanh}}" alt=""></a>
                                                                <span class="onsale">New!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">{{number_format($sp->gia)}} đ</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">{{$sp->tensp}}</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="{{route('getCart',[$sp->id,$sp->tensp])}}" class="add-to-cart">Mua Ngay</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Single Product End -->
                                                    </div>
                                                    @endforeach    

                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00 - 147.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Select options</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                    <div class="product-col">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area Start -->

        <!-- Product Area Start
        <div class="product-area section-ptb">
            <div class="container-ext">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-box-wrapper">
        
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    Section Title Start
                                    <div class="section-title ml-3 mb-20">
                                        <h3>Fresh Meat Products</h3>
                                    </div>
                                    Section Title End
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs-categorys-list mb-20">
                                        <ul class="nav menu-tabs-two ml-3 " role="tablist">
                                            <li class="active"><a class="active" href="#tab-10" role="tab" data-toggle="tab"> Fresh Meat </a></li>
                                            <li><a href="#tab-11" role="tab" data-toggle="tab"> Beef </a></li>
                                            <li><a href="#tab-12" role="tab" data-toggle="tab">Sheep’s meat </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row row-8 border-tp-gray no-gutters box-product-wrap">
                                <div class="col-imgbanner">
                                    <div class="box-area-image">
                                        <img src="assets/images/banner/img-tab2-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-single-product">
                                    <div class="product-col border_none">
                                        Single Product Start
                                        <div class="single-product-wrap">
                                            <div class="product-image text-center">
                                                <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt=""></a>
                                                <span class="onsale">Sale!</span>
        
                                            </div>
                                            <div class="product-button">
                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="price-box">
                                                    <span class="new-price">144.00 - 147.00</span>
                                                </div>
                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
                                                <div class="product-rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-button-action">
                                                    <a href="#" class="add-to-cart">Select options</a>
                                                </div>
                                            </div>
                                        </div>
                                        Single Product End
                                    </div>
                                </div>
                                <div class="col-lg-5 col-group-products">
                                    <div class="product-wrapper-five">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-10">
                                                <div class="row row-8 product-two-row-3">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-14.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-11">
                                                <div class="row row-8 product-two-row-3">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-12">
                                                <div class="row row-8 product-two-row-3">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Product Area Start
        
        Product Area Start
        <div class="product-area section-ptb bg-gray">
            <div class="container-ext">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-box-wrapper">
        
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    Section Title Start
                                    <div class="section-title ml-3 mb-20">
                                        <h3>Fast Food Products</h3>
                                    </div>
                                    Section Title End
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs-categorys-list  ml-3  mb-20">
                                        <ul class="nav menu-tabs-two " role="tablist">
                                            <li class="active"><a class="active" href="#tab-13" role="tab" data-toggle="tab"> Fast Food </a></li>
                                            <li><a href="#tab-14" role="tab" data-toggle="tab"> Cheeseburger </a></li>
                                            <li><a href="#tab-15" role="tab" data-toggle="tab">Hamburger</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row row-8 border-tp-gray no-gutters box-product-wrap">
                                <div class="col-lg-4 col-md-4">
                                    <div class="product-col border_none">
                                        Single Product Start
                                        <div class="single-product-wrap">
                                            <div class="product-image text-center">
                                                <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt=""></a>
                                                <span class="onsale">Sale!</span>
        
                                            </div>
                                            <div class="product-button">
                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="price-box">
                                                    <span class="new-price">144.00</span>
                                                </div>
                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
                                                <div class="product-rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-button-action">
                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        Single Product End
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="product-wrapper-five">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-13">
                                                <div class="row row-8 product-two-row-5">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00 - 147.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Select options</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-06.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-14">
                                                <div class="row row-8 product-two-row-5">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-14.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00 - 147.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Select options</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-06.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-15">
                                                <div class="row row-8 product-two-row-5">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00 - 147.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Select options</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Product Area Start
        
        Product Area Start
        <div class="product-area section-ptb ">
            <div class="container-ext">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-box-wrapper">
        
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    Section Title Start
                                    <div class="section-title ml-3 mb-20">
                                        <h3>Fruit Juice Products</h3>
                                    </div>
                                    Section Title End
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tabs-categorys-list ml-3 mb-20">
                                        <ul class="nav menu-tabs-two" role="tablist">
                                            <li class="active"><a class="active" href="#tab-16" role="tab" data-toggle="tab"> Fruits </a></li>
                                            <li><a href="#tab-17" role="tab" data-toggle="tab"> Apples </a></li>
                                            <li><a href="#tab-18" role="tab" data-toggle="tab">Citrus Fruits</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row row-8 border-tp-gray no-gutters box-product-wrap">
                                <div class="col-imgbanner">
                                    <div class="box-area-image">
                                        <img src="assets/images/banner/img-tab2-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-single-product">
                                    <div class="product-col border_none">
                                        Single Product Start
                                        <div class="single-product-wrap">
                                            <div class="product-image text-center">
                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                <span class="onsale">Sale!</span>
        
                                            </div>
                                            <div class="product-button">
                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="price-box">
                                                    <span class="new-price">144.00 - 147.00</span>
                                                </div>
                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
                                                <div class="product-rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-button-action">
                                                    <a href="#" class="add-to-cart">Select options</a>
                                                </div>
                                            </div>
                                        </div>
                                        Single Product End
                                    </div>
                                </div>
                                <div class="col-lg-5 col-group-products">
                                    <div class="product-wrapper-five">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-16">
                                                <div class="row row-8 product-two-row-3">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-14.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-17">
                                                <div class="row row-8 product-two-row-3">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-11.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab-18">
                                                <div class="row row-8 product-two-row-3">
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">144.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquam lobortis</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">70.00</span>
                                                                    <span class="old-price">80.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">90.00</span>
                                                                    <span class="old-price">95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Auctor gravida enim</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-15.jpg" alt=""></a>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                    <div class="product-col">
                                                        Single Product Start
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="product-details.html"><img src="assets/images/product/product-12.jpg" alt=""></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">14.00</span>
                                                                    <span class="old-price">18.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="product-details.html">Aliquet auctor sem</a></h6>
        
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        Single Product End
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Product Area Start -->

        <!-- Section Box Area Start -->
<!--         <div class="section-box section-ptb bg-gray">

    Banner Area Start
    <div class="banner-area section-pb-30">
        <div class="container-ext">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="assets/images/banner/banner4-1-2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="assets/images/banner/banner4-2-2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="assets/images/banner/banner4-3-2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Bnner Area End

    <div class="container-ext">
        <div class="row ">
            <div class="col-lg-6">
                <div class="product-box-wrapper mt-30">
                    <div class="row row-8 border-bm-gray">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            Section Title Start
                            <div class="section-title ml-2">
                                <h3>Latest Blog Posts</h3>
                            </div>
                            Section Title End
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="view-all-product text-right mb-15">
                                <a href="#">View All <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="box-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                Single Latest Blog Start
                                <div class="single-latest-blog mt-30">
                                    <div class="latest-blog-image">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-05.jpg" alt=""></a>
                                    </div>
                                    <div class="latest-blog-content text-left">
                                        <h4><a href="blog-details.html">Continue Reading</a></h4>
                                        <ul class="post-meta">
                                            <li class="post-author">By <a href="#">admin </a></li>
                                            <li class="post-date">April 25, 2018</li>
                                        </ul>
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                        <div class="blog-read-more">
                                            <a href="#">Continue Reading</a>
                                        </div>
                                    </div>
                                </div>
                                Single Latest Blog End
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="group-blog-list mt-10">
                                    <div class="post-wrapper">
                                        <div class="latest-blog-list">
                                            <h5><a href="blog-details.html">Post with Gallery</a></h5>
                                            <ul class="post-meta">
                                                <li class="post-author">By <a href="#">admin </a></li>
                                                <li class="post-date">April 25, 2018</li>
                                            </ul>
                                        </div>
                                        <div class="latest-blog-list">
                                            <h5><a href="blog-details.html">Maecenas ultricies</a></h5>
                                            <ul class="post-meta">
                                                <li class="post-author">By <a href="#">admin </a></li>
                                                <li class="post-date">April 25, 2018</li>
                                            </ul>
                                        </div>
                                        <div class="latest-blog-list">
                                            <h5><a href="blog-details.html">Tortor posuere</a></h5>
                                            <ul class="post-meta">
                                                <li class="post-author">By <a href="#">admin </a></li>
                                                <li class="post-date">April 25, 2018</li>
                                            </ul>
                                        </div>
                                        <div class="latest-blog-list">
                                            <h5><a href="blog-details.html">Hello world!</a></h5>
                                            <ul class="post-meta">
                                                <li class="post-author">By <a href="#">admin </a></li>
                                                <li class="post-date">April 25, 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-box-wrapper mt-30">
                    <div class="row row-8 border-bm-gray">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            Section Title Start
                            <div class="section-title ml-2">
                                <h3>Our Agence</h3>
                            </div>
                            Section Title End
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="view-all-product text-right mb-15">
                                <a href="#">View All <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="box-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                Single Agence Start
                                <div class="single-agence mt-30">
                                    <div class="single-agence-image">
                                        <a href="#"><img src="assets/images/other/img-agence.jpg" alt=""></a>
                                    </div>
                                    <div class="agence-content">
                                        <p><i class="icon-map-pin"></i></p>
                                        <p class="dec"><strong>Address:</strong> No2C, Ullenhall, Henley in Arden B578 5C, USA.</p>
                                    </div>
                                    <div class="agence-content">
                                        <p><i class="icon-phone-call"></i></p>
                                        <p class="dec"><strong>Number Phone:</strong> <br> (+800) 123 456 789</p>
                                    </div>
                                    <div class="agence-content">
                                        <p><i class="icon-printer"></i></p>
                                        <p class="dec"><strong>Number Fax:</strong> <br>(+800) 123 456 789</p>
                                    </div>
                                </div>
                                Single Agence End
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                Single Agence Start
                                <div class="single-agence mt-30">
                                    <div class="single-agence-image">
                                        <a href="#"><img src="assets/images/other/img-agence2.jpg" alt=""></a>
                                    </div>
                                    <div class="agence-content">
                                        <p><i class="icon-map-pin"></i></p>
                                        <p class="dec"><strong>Address:</strong> No2C, Ullenhall, Henley in Arden B578 5C, USA.</p>
                                    </div>
                                    <div class="agence-content">
                                        <p><i class="icon-phone-call"></i></p>
                                        <p class="dec"><strong>Number Phone:</strong> <br> (+800) 123 456 789</p>
                                    </div>
                                    <div class="agence-content">
                                        <p><i class="icon-printer"></i></p>
                                        <p class="dec"><strong>Number Fax:</strong> <br>(+800) 123 456 789</p>
                                    </div>
                                </div>
                                Single Agence End
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    our brand Start
    <div class="our-brand-area section-pt">
        <div class="container-ext">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-box ">
                        <div class="row brand-active-two">
                            <div class="col-lg-2">
                                <a href="#"><img src="assets/images/brand/brand-01.png" alt=""></a>
                            </div>
                            <div class="col-lg-2">
                                <a href="#"><img src="assets/images/brand/brand-02.png" alt=""></a>
                            </div>
                            <div class="col-lg-2">
                                <a href="#"><img src="assets/images/brand/brand-03.png" alt=""></a>
                            </div>
                            <div class="col-lg-2">
                                <a href="#"><img src="assets/images/brand/brand-04.png" alt=""></a>
                            </div>
                            <div class="col-lg-2">
                                <a href="#"><img src="assets/images/brand/brand-02.png" alt=""></a>
                            </div>
                            <div class="col-lg-2">
                                <a href="#"><img src="assets/images/brand/brand-06.png" alt=""></a>
                            </div>
                            <div class="col-lg-2">
                                <a href="#"><img src="assets/images/brand/brand-06.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    our brand End

</div> -->
        <!-- Section Box Area End -->

@endsection