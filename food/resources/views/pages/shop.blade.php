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
                            <li class="breadcrumb-item active">Danh Mục Món Ăn</li>
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
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- shop-sidebar-wrap start -->
                        <div class="shop-sidebar-wrap">
                            <div class="shop-box-area">

                                <!--sidebar-categores-box start  -->
                                <div class="sidebar-categores-box shop-sidebar mb-30">
                                    <h4 class="title">Thực Đơn</h4>
                                    <!-- category-sub-menu start -->
                                    <div class="category-sub-menu">
                                        <ul>
                                            @foreach($danhmuc as $dm)
                                                <li class="has-sub"><a href="{{route('getdm',[$dm->id,$dm->slug])}}">{{$dm->ten}}</a>
                                                <ul>
                                                    @foreach($loaisanpham as $loai)
                                                        @if($dm->id == $loai->id_danhmuc)
                                                        <li><a href="{{route('getloai',[$loai->id,$loai->slug])}}">{{$loai->tenloai}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- category-sub-menu end -->
                                </div>
                                <!--sidebar-categores-box end  -->

                                <!-- shop-sidebar start -->
                                <!-- <div class="shop-sidebar mb-30">
                                    <h4 class="title">Lọc theo giá</h4>
                                    filter-price-content start
                                    <div class="filter-price-content">
                                        <form action="#" method="post">
                                            <div id="price-slider" class="price-slider"></div>
                                            <div class="filter-price-wapper">
                                
                                                <a class="add-to-cart-button" href="#">
                                                    <span>Lọc</span>
                                                </a>
                                                <div class="filter-price-cont">
                                
                                                    <span>Giá:</span>
                                                    <div class="input-type">
                                                        <input type="text" id="min-price" readonly="" />
                                                    </div>
                                                    <span>—</span>
                                                    <div class="input-type">
                                                        <input type="text" id="max-price" readonly="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    filter-price-content end
                                </div> -->
                                <!-- shop-sidebar end -->

                                <!-- shop-sidebar start -->
                                <!-- shop-sidebar end -->

                                <!-- shop-sidebar start -->
                                <div class="shop-sidebar mb-30">
                                    <h4 class="title">Từ Khóa </h4>

                                    <ul class="sidebar-tag">
                                        <li><a href="#">Phở</a></li>
                                        <li><a href="#">Bún</a></li>
                                        <li><a href="#">Cơm</a></li>
                                        <li><a href="#">Xôi</a></li>
                                        <li><a href="#">Trà Sữa</a></li>
                                        
                                    </ul>

                                </div>
                                <!-- shop-sidebar end -->

                            </div>
                        </div>
                        <!-- shop-sidebar-wrap end -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">

                        

                        <!-- shop-product-wrapper start -->
                        <div class="shop-product-wrapper">
                            <div class="row align-itmes-center">
                                <div class="col">
                                    <!-- shop-top-bar start -->
                                    <div class="shop-top-bar">
                                        <!-- product-view-mode start -->

                                        <div class="product-mode">
                                            <!--shop-item-filter-list-->
                                            <ul class="nav shop-item-filter-list" role="tablist">
                                                <li class="active"><a class="active grid-view" data-toggle="tab" href="#grid"><i class="ion-ios-keypad-outline"></i></a></li>
                                                <li><a class="list-view" data-toggle="tab" href="#list"><i class="ion-ios-list-outline"></i></a></li>
                                            </ul>
                                            <!-- shop-item-filter-list end -->
                                        </div>
                                        <!-- product-view-mode end -->
                                        <!-- product-short start -->
                                        <div class="product-short">
                                            <p>Sort By :</p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name(A - Z)</option>
                                                <option value="sales">Name(Z - A)</option>
                                                <option value="rating">Price(Low > High)</option>
                                                <option value="date">Rating(Lowest)</option>
                                            </select>
                                        </div>
                                        <!-- product-short end -->
                                    </div>
                                    <!-- shop-top-bar end -->
                                </div>
                            </div>

                            <!-- shop-products-wrap start -->
                            <div class="shop-products-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="shop-product-wrap">
                                            <div class="row row-8">
                                                @foreach($sanpham as $sp)

                                                    <div class="product-col col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Single Product Start -->
                                                        <div class="single-product-wrap mt-10">
                                                            <div class="product-image">
                                                                <a href="{{route('detail',[$sp->id,$sp->slug])}}"><img src="{{asset('assets/images/food/'.$sp->hinhanh)}}" alt="{{$sp->hinhanh}}"></a>
                                                                <span class="onsale">Sale!</span>
                                                            </div>
                                                            <div class="product-button">
                                                                <a href="wishlist.html" class="add-to-wishlist"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <div class="price-box">
                                                                    <span class="new-price">{{number_format($sp->gia)}} đ<span>
                                                                </div>
                                                                <h6 class="product-name"><a href="#">{{$sp->tensp}}</a></h6>

                                                                <div class="product-button-action">
                                                                    <a href="{{route('getCart',[$sp->id,$sp->tensp])}}" class="add-to-cart">Mua Ngay</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single Product End -->
                                                    </div>

                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- shop-products-wrap end -->

                            <!-- paginatoin-area start -->
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <ul class="pagination-box">
                                            <li>{{$sanpham->links()}} </li>
                                            <!-- <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a class="Next" href="#">Next</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- paginatoin-area end -->
                        </div>
                        <!-- shop-product-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->
@endsection