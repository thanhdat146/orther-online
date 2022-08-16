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
                            <li class="breadcrumb-item active">Cart Page</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#" class="cart-table">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="plantmore-product-thumbnail">Hình Ảnh</th>
                                            <th class="cart-product-name">Món Ăn</th>
                                            <th class="plantmore-product-price">Đơn Giá</th>
                                            <th class="plantmore-product-quantity">Số lượng</th>
                                            <th class="plantmore-product-subtotal">Thành Tiền</th>
                                            <th class="plantmore-product-remove">Sửa Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form method="POST" action="">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            @foreach($content as $item)
                                            <tr>
                                                <td class="plantmore-product-thumbnail"><a href="#"><img style="width: 150px;height: 150px" src="assets/images/food/{{$item->options->img}}" alt=""></a></td>
                                                <td class="plantmore-product-name"><a href="#">{{$item->name}}</a></td>
                                                <td class="plantmore-product-price"><span class="amount">{{number_format($item->price)}} đ</span></td>
                                                <td class="plantmore-product-quantity">
                                                    <input class="qty" min="1" max="40" value="{{$item->qty}}" type="number">
                                                </td>
                                                <td class="product-subtotal"><span class="amount">{{number_format($item->price*$item->qty)}} đ</span></td>
                                                <td class="plantmore-product-remove">
                                                    <a href="#" class="updateCart" id="{{$item->rowId}}"><i class="icon-edit"></i></a>
                                                    &emsp;
                                                    <a href="{{route('removeCart',[$item->rowId,$item->name])}}"><i class="icon-x"></i></a>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="coupon-all">

                                        <div class="coupon2">
                                            <a href="{{route('index')}}" class=" continue-btn">Trở về trang chủ</a>
                                        </div>

                                        <!-- <div class="coupon">
                                            <h3>Coupon</h3>
                                            <p>Enter your coupon code if you have one.</p>
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-4 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Thanh Toán</h2>
                                        <ul>
                                            <li>Tổng Tiền <span> {{$total}} đ</span></li>
                                        </ul>
                                        <a href="{{route('checkout')}}" class="proceed-checkout-btn">Tiến hành thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->
@endsection