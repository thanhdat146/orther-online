@extends('master.layout')
@section('content')
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Shop left sidebar</li>
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
                                    <h4 class="title">Product categories</h4>
                                    <!-- category-sub-menu start -->
                                    <div class="category-sub-menu">
                                        <ul>
                                            <li class="has-sub"><a href="#">Butter & Eggs</a>
                                                <ul>
                                                    <li><a href="#">Compound Butter (3)</a></li>
                                                    <li><a href="#">Cultured Butter (4)</a></li>
                                                    <li><a href="#">Whipped Butter (4)</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#">Dried Fruits (2)</a>
                                                <ul>
                                                    <li><a href="#">Mango (2)</a></li>
                                                    <li><a href="#">Plumsor (1)</a></li>
                                                    <li><a href="#">Raisins (1)</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#">Fast Food (12)</a>
                                                <ul>
                                                    <li><a href="#">Cheeseburger (4)</a></li>
                                                    <li><a href="#">Hamburger (4)</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#">Fresh Meat (8)</a>
                                                <ul>
                                                    <li><a href="#">Beef (8)</a></li>
                                                    <li><a href="#">Sheep's meat (8)</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#">Fruits (11)</a>
                                                <ul>
                                                    <li><a href="#">Beef (8)</a></li>
                                                    <li><a href="#">Sheep's meat (8)</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#">Milk & Cream (12)</a>
                                                <ul>
                                                    <li><a href="#">Beef (8)</a></li>
                                                    <li><a href="#">Sheep's meat (8)</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#">Ocean Food (7)</a>
                                                <ul>
                                                    <li><a href="#">Beef (8)</a></li>
                                                    <li><a href="#">Sheep's meat (8)</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-sub"><a href="#">Uncategorized (0)</a>

                                            </li>
                                            <li class="has-sub"><a href="#">Vegetables (11)</a>
                                                <ul>
                                                    <li><a href="#">Beef (8)</a></li>
                                                    <li><a href="#">Sheep's meat (8)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- category-sub-menu end -->
                                </div>
                                <!--sidebar-categores-box end  -->

                                <!-- shop-sidebar start -->
                                <div class="shop-sidebar mb-30">
                                    <h4 class="title">Filter By Price</h4>
                                    <!-- filter-price-content start -->
                                    <div class="filter-price-content">
                                        <form action="#" method="post">
                                            <div id="price-slider" class="price-slider"></div>
                                            <div class="filter-price-wapper">

                                                <a class="add-to-cart-button" href="#">
                                                    <span>FILTER</span>
                                                </a>
                                                <div class="filter-price-cont">

                                                    <span>Price:</span>
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
                                    <!-- filter-price-content end -->
                                </div>
                                <!-- shop-sidebar end -->

                                <!-- shop-sidebar start -->
                                <div class="shop-sidebar mb-30">
                                    <h4 class="title">Filter by Color</h4>

                                    <ul class="category-widget-list">
                                        <li><a href="#">Red (1)</a></li>
                                        <li><a href="#">White (1)</a></li>
                                    </ul>

                                </div>
                                <!-- shop-sidebar end -->

                                <!-- shop-sidebar start -->
                                <div class="shop-sidebar mb-30">
                                    <h4 class="title">Product tags</h4>

                                    <ul class="sidebar-tag">
                                        <li><a href="#">accesories</a></li>
                                        <li><a href="#">blouse</a></li>
                                        <li><a href="#">clothes</a></li>
                                        <li><a href="#">desktop</a></li>
                                        <li><a href="#">digital</a></li>
                                        <li><a href="#">fashion</a></li>
                                        <li><a href="#">women</a></li>
                                        <li><a href="#">men</a></li>
                                        <li><a href="#">laptop</a></li>
                                        <li><a href="#">handbag</a></li>
                                    </ul>

                                </div>
                                <!-- shop-sidebar end -->

                            </div>
                        </div>
                        <!-- shop-sidebar-wrap end -->
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">

                        <div class="shop-banner mb-30">
                            <img src="assets/images/bg/shop-catergorypage.jpg" alt="Shop banner">
                        </div>

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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
                                                    <!-- Single Product Start -->
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product-wrap mt-10">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt=""></a>
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
                                                    <!-- Single Product Start -->
                                                    <div class="single-product-wrap mt-10">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-08.jpg" alt=""></a>
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                                <div class="product-col col-lg-3 col-md-4 col-sm-6">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="list">
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-14.jpg" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">
                                                        <div class="price-box">
                                                            <span class="new-price"> $144.00 – $147.00	</span>
                                                        </div>
                                                        <p><a href="product-details.html" class="product-name">Auctor gravida enim</a></p>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li class="add-to-compare">
                                                                    <div class="compare-button"><a href="compare.html"><i class="icon-sliders"></i> Compare</a></div>
                                                                </li>
                                                                <li class="quickviewbtn">
                                                                    <a class="detail-link quickview" href="#"> <i class="icon-eye2"></i> Quick View</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-13.jpg" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">
                                                        <div class="price-box">
                                                            <span class="new-price"> $144.00</span>
                                                        </div>
                                                        <p><a href="product-details.html" class="product-name">Auctor gravida enim</a></p>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li class="add-to-compare">
                                                                    <div class="compare-button"><a href="compare.html"><i class="icon-sliders"></i> Compare</a></div>
                                                                </li>
                                                                <li class="quickviewbtn">
                                                                    <a class="detail-link quickview" href="#"> <i class="icon-eye2"></i> Quick View</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-10.jpg" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">
                                                        <div class="price-box">
                                                            <span class="new-price"> $144.00</span>
                                                            <span class="old-price"> $147.00</span>
                                                        </div>
                                                        <p><a href="product-details.html" class="product-name">Auctor gravida enim</a></p>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li class="add-to-compare">
                                                                    <div class="compare-button"><a href="compare.html"><i class="icon-sliders"></i> Compare</a></div>
                                                                </li>
                                                                <li class="quickviewbtn">
                                                                    <a class="detail-link quickview" href="#"> <i class="icon-eye2"></i> Quick View</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-06.jpg" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">
                                                        <div class="price-box">
                                                            <span class="new-price"> $147.00	</span>
                                                        </div>
                                                        <p><a href="product-details.html" class="product-name">Auctor gravida enim</a></p>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li class="add-to-compare">
                                                                    <div class="compare-button"><a href="compare.html"><i class="icon-sliders"></i> Compare</a></div>
                                                                </li>
                                                                <li class="quickviewbtn">
                                                                    <a class="detail-link quickview" href="#"> <i class="icon-eye2"></i> Quick View</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">
                                                        <div class="price-box">
                                                            <span class="new-price"> $144.00 – $147.00	</span>
                                                        </div>
                                                        <p><a href="product-details.html" class="product-name">Auctor gravida enim</a></p>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto suscipit aliquam, dignissimos nesciunt, quos voluptas tenetur necessitatibus voluptate vitae quo quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                                <li class="add-to-compare">
                                                                    <div class="compare-button"><a href="compare.html"><i class="icon-sliders"></i> Compare</a></div>
                                                                </li>
                                                                <li class="quickviewbtn">
                                                                    <a class="detail-link quickview" href="#"> <i class="icon-eye2"></i> Quick View</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a class="Next" href="#">Next</a>
                                            </li>
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