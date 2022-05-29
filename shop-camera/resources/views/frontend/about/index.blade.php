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
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css" rel="stylesheet">

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
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        vietd8k11@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        0971046025
                    </div>
                </div>
                <div class="ht-right">
                    @if (Auth::guard('cus')->check())
                        <a href="{{ route('fr.home.logout') }}" class="login-panel"><i
                                class="fa fa-user"></i>Logout</a>
                        <a href="" title="" class="login-panel"><i>{{ Auth::guard('cus')->user()->name }}</i></a>
                    @else
                        <a href="{{ route('fr.home.login') }}" class="login-panel"><i
                                class="fa fa-user"></i>Login</a>
                    @endif
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="frontend/assets/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="frontend/assets/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{ route('fr.home') }}">
                                <img src="frontend/assets/img/text.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Products</button>
                            <form class="input-group" action="{{ route('fr.home') }}" method="GET">
                                <input type="text" name="key" placeholder="What do you need?">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span></span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>{{ \Cart::count() }}</span>
                                </a>
                                {{-- <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img class="card-img-top" width="30%" height="30%"src="{{ asset('storage/images/'.$products->image) }}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>{{$products->price}}$</p>
                                                            <h6>{{$products->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span></span>
                                        <h5></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Danh mục</span>
                        {{-- <ul class="depart-hover">
                            @foreach ($categories as $key => $item)
                                <li class="active">
                                    <a href="{{ route('fr.view', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul> --}}
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{ route('fr.home') }}">Trang chủ</a></li>
                        <li><a href="{{ route('fr.about') }}">Sản phẩm</a></li>
                        <li><a href="{{ route('fr.introduce') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('fr.contact') }}">Liên Hệ</a></li>
                        <li><a href="{{ route('fr.create') }}">Đăng ký</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="breadcrumb-text">
                        <a href="{{ route('fr.home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="breadcrumb-text">
                        <form id="form_order" method="">
                            @csrf
                            <select name="sort" id="sort" class="form-control">
                                <option value="{{ Request::url() }}?sort_by=name">--Lọc--</option>
                                <option value="{{ Request::url() }}?sort_by=tang_dan">--Giá tăng dần--</option>
                                <option value="{{ Request::url() }}?sort_by=giam_dan">--Giá giảm dần--</option>
                                <option value="{{ Request::url() }}?sort_by=kytu_az">--Lọc theo tên A đến Z--
                                </option>
                                <option value="{{ Request::url() }}?sort_by=kytu_za">--Lọc theo tên Z đến A--
                                </option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header" style="color: blue">
                            Danh mục sản phẩm
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach ($categories as $key => $item)
                                <li class="list-group-item">{{ $item->name }} 
                                    <span class="badge badge-pill badge-primary">New</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card mt-5" style="width: 18rem;">
                        <div class="card-header" style="color: blue">
                            Cam kết của chúng tôi
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Chúng tôi chỉ bán hàng chính hãng và đúng giá, vui lòng tham
                                khảo kỹ trước khi đặt mua.</li>
                            <li class="list-group-item">Mọi nhu cầu cần giải đáp, vui lòng liên hệ trực tiếp hotline:
                                0971.046.025</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-9">
                    <div class="row">
                        @foreach ($products as $key => $item)
                            <div class="col-12 col-sm-12 col-md-4 ">
                                <div class="card" style="">
                                    <img id="zoom" class="card-img-top" width="10%" height="10%"
                                        src="{{ asset('storage/images/' . $item->image) }}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="">

                                            </a>
                                        </h5>
                                        <p class="card-text font-weight-bold">{{ $item->name }}</p>
                                        <p class="card-text "></p>
                                    </div>
                                    <div class="card-footer">
                                        {{ number_format($item->price) }} $
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="frontend/assets/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="frontend/assets/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="frontend/assets/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="frontend/assets/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="frontend/assets/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="frontend/assets/img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 18/335 Xuân Đỉnh Bắc Từ Liêm Hà Nội</li>
                            <li>Phone: 0971.046.025</li>
                            <li>Email: vietd8k11@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="{{ route('fr.contact') }}">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="{{ route('admin.login') }}">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://www.facebook.com/thuy.huynhvan" target="_blank">Nguyen Xuan Viet</a>
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
    <!-- Footer Section End -->

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
    <div class="zalo-chat-widget" data-oaid="1958423497335534901" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
        data-autopopup="0" data-width="300" data-height="300"></div>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sort').on('change', function() {
                var url = $(this).val();
                //alert(url);
                if (url) {
                    window.location = url;
                }
                return false;
            });

            $('.addcart').click(function(e) {
                //    e.preventDefault();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Sản phẩm đã được thêm vào giỏ hàng',
                    showConfirmButton: false,
                    timer: 3000
                });
            });
        });
    </script>
</body>

</html>
<style>
    #zoom {
    transition: all 1s ease;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    }
    #zoom:hover {
    transform: scale(1.5,1.5);
    -webkit-transform: scale(1.5,1.5);
    -moz-transform: scale(1.5,1.5);
    -o-transform: scale(1.5,1.5);
    -ms-transform: scale(1.5,1.5);
    }
    </style>