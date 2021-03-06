<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>V | Camera</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="frontend/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="frontend/assets/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="frontend/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="frontend/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="frontend/assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="frontend/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="frontend/assets/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{ route('fr.home') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Đặt hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-md-4">
                    <form action="" method="POST" role="form">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Tên khách hàng</label>
                            <input type="text" class="form-control" name="name"
                                value="{{ Auth::guard('cus')->user()->name }}" placeholder="Nhập tên bạn vào đây">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com"
                                value="{{ Auth::guard('cus')->user()->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phone</label>
                            <input type="" class="form-control" name="phone"
                                placeholder="Nhập số điện thoại bạn vào đây"
                                value="{{ Auth::guard('cus')->user()->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <input class="form-control" name="address" value="{{ Auth::guard('cus')->user()->address }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Order Note</label>
                            <textarea class="form-control" name="orders_note" rows="3"
                                placeholder="Nhập ghi chú của bạn vào đây"
                                value=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mr-5">Đặt hàng</button>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th class="p-name">Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $key => $item)
                                        <tr>
                                            <td class="cart-pic first-row"><img width="40%" height="40%"
                                                    src="{{ asset('storage/images/' . $item->options->image) }}"
                                                    alt="">
                                            </td>
                                            <td class="cart-title first-row">
                                                <h5>{{ $item->name }}</h5>
                                            </td>
                                            <form method="POST" action="{{ route('fr.update.cart') }}">
                                                @csrf
                                                <td class="qua-col first-row">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input name="qtyCart" type="number"
                                                                value="{{ $item->qty }}">
                                                            <input name="rowIdItem" type="hidden"
                                                                value="{{ $item->rowId }}" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="total-price first-row">
                                                    {{ number_format($item->price) }}đ
                                                </td>
                                                <td class="total-price first-row">
                                                    {{ number_format($item->price * $item->qty) }}đ
                                                </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <form action="{{ url('/vnpay_payment') }}" method="POST" >
                                    @csrf
                                    <button type="submit" class="btn btn-primary" name="redirect">Thanh toán VNPAY</button>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <form action="{{ url('/check-coupon') }}" method="POST">
                                    @csrf
                                    <input type="text" class="form-control" name="coupon" value="" placeholder="Nhập mã giảm giá">
                                    <input type="submit" class="btn btn-info" name="check_coupon" value="Tính mã giảm giá">
                                </form>
                            </div>
                            <div class="col-lg-5">
                                <div class="proceed-checkout">
                                    <ul>
                                        <li class="cart-total">Tổng tiền : <span>{{ number_format(str_replace(',', '',  \Cart::priceTotal()))}}đ</span></li>
                                        <li class="cart-total">
                                            @if(Session::get('coupon'))
                                                @foreach(Session::get('coupon') as $key => $cou)
                                                    @if($cou['coupon_condition'] == 1)
                                                        <li class="cart-total">Mã giảm : <span>{{ $cou['coupon_number'] }} %</span></li>
                                                            @php
                                                                $total_coupon=(str_replace(',', '',  \Cart::priceTotal())*$cou['coupon_number'])/100;
                                                                echo '<li class="cart-total">Tổng giảm : <span> '.number_format(str_replace(',', '',$total_coupon)).'đ</span></li>';
                                                            @endphp
                                                        <li class="cart-total">Tổng đã giảm : <span>{{ number_format(str_replace(',', '',  \Cart::priceTotal())-$total_coupon)}} đ</span></li>
                                                    @elseif($cou['coupon_condition'] == 2)
                                                        <li class="cart-total">Mã giảm : <span>{{ number_format($cou['coupon_number']) }} đ</span></li>
                                                            @php
                                                                $total_coupon=(str_replace(',', '',  \Cart::priceTotal())-$cou['coupon_number']);
                                                            @endphp
                                                        <li class="cart-total">Tổng đã giảm : <span>{{ number_format($total_coupon)}} đ</span></li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="footer-section">
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="frontend/assets/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Js Plugins -->
    <script src="frontend/assets/js/jquery-3.3.1.min.js"></script>
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <script src="frontend/assets/js/jquery-ui.min.js"></script>
    <script src="frontend/assets/js/jquery.countdown.min.js"></script>
    <script src="frontend/assets/js/jquery.nice-select.min.js"></script>
    <script src="frontend/assets/js/jquery.zoom.min.js"></script>
    <script src="frontend/assets/js/jquery.dd.min.js"></script>
    <script src="frontend/assets/js/jquery.slicknav.js"></script>
    <script src="frontend/assets/js/owl.carousel.min.js"></script>
    <script src="frontend/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.js"></script>
