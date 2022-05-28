<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $products->name }}</title>

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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
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
                    <a href="" class="login-panel"><i class="fa fa-user"></i>Login</a>
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
                                    @foreach ($products as $key => $item)
                                    <tbody>
                                        <tr>
                                            <td class="si-pic"><img class="card-img-top" width="30%" height="30%"src="{{ asset('storage/images/'.$item->image) }}" alt=""></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>{{$item->price}}$</p>
                                                    <h6>{{$item->name}}</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
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
                        <ul class="depart-hover">
                            @foreach ($categories as $key => $item)
                                <li class="active">
                                    <a href="{{ route('fr.view', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{route('fr.home')}}">Trang chủ</a></li>
                        <li><a href="{{ route('fr.about') }}">Sản phẩm</a></li>
                        <li><a href="{{ route('fr.introduce') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('fr.contact') }}">Liên hệ</a></li>
                        <li><a href="{{ route('fr.about') }}">Đăng ký</a></li>
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

    <!-- Detail Product -->
    <section class="product-shop spad">
        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img
                                        src="{{ asset('storage/images/' . $products->image) }}"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" />
                                </div>
                                <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" />
                                </div>
                                <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" />
                                </div>
                                <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" />
                                </div>
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                {{-- <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                            src="http://placekitten.com/200/126" /></a></li> --}}
                                {{-- <li><a data-target="#pic-2" data-toggle="tab"><img
                                            src="http://placekitten.com/200/126" /></a></li>
                                <li><a data-target="#pic-3" data-toggle="tab"><img
                                            src="http://placekitten.com/200/126" /></a></li>
                                <li><a data-target="#pic-4" data-toggle="tab"><img
                                            src="http://placekitten.com/200/126" /></a></li>
                                <li><a data-target="#pic-5" data-toggle="tab"><img
                                            src="http://placekitten.com/200/126" /></a></li> --}}
                            </ul>

                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">{{ $products->name }}</h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div>
                            {{-- <div class="rating">
                                <ul class="stars">
                                    <li class="fa fa-star"></li>
                                </ul>
                            </div> --}}
                            <p class="product-description">{!! $products->description !!}</p>
                            <h4 class="price">current price: <span>${{ $products->price }}</span></h4>
                            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87
                                    votes)</strong></p>
                            {{-- <h5 class="sizes">Tính năng:
                                <span class="size" data-toggle="tooltip" title="small">Chống nước</span>
                                <span class="size" data-toggle="tooltip" title="medium">Đàm thoại 2 chiều</span>
                                <span class="size" data-toggle="tooltip" title="large">Xem trực tiếp</span>
                                <span class="size" data-toggle="tooltip" title="xtra large">Lưu trữ thẻ nhớ</span>
                            </h5> --}}
                            {{-- <h5 class="colors">colors:
                                <span class="color orange not-available" data-toggle="tooltip"
                                    title="Not In store"></span>
                                <span class="color green"></span>
                                <span class="color blue"></span>
                            </h5> --}}
                            <div class="action">
                                <button class="add-to-cart btn btn-default" type="button"><a
                                        href="{{ route('fr.cart') }}">add to cart</a></button>
                                <button class="like btn btn-default" type="button"><span
                                        class="fa fa-heart"></span></button>
                            </div>
                            <div class="zalo-share-button mt-3" data-href="" data-oaid="1958423497335534901" data-layout="1" data-color="blue" data-share-type="2" data-customize="false"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header" style="color:#0076ad;">Bình luận & Đánh giá</h5>
                <div class="card-body">
                    <form action="" >
                        @csrf
                        <input type="hidden" name="comment_products_id" class="comment_products_id"
                            value="{{ $products->id }}">
                        <div id="comment_show"></div>
                    </form>
                    <form action="">
                        <div class="form-floating pb-3">
                            <p>Viết bình luận của bạn vào đây</p>
                            <input class="form-control comment_name" type="text" style="width:40%"
                                placeholder="Tên bình luận">
                            <p></p>
                            <textarea class="form-control comment_content" name="comment" style="height: 100px"
                                placeholder="Nội dung bình luận"></textarea>
                            <div id="notify_comment"></div>
                        </div>
                        <button type="button" class="btn btn-primary send-comment">Thêm bình luận</button>
                    </form>
                </div>
            </div>
    </section>
    <!-- Detail Product -->


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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
        });

        $(document).ready(function() {
            load_comment();
            function load_comment() {
                var id = $('.comment_products_id').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ url('/load-comment') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: _token
                    },
                    success: function(data) {
                        $('#comment_show').html(data);
                    }
                });
            }
            $('.send-comment').click(function() {
                var id = $('.comment_products_id').val();
                var comment_name = $('.comment_name').val();
                var comment_content = $('.comment_content').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ url('/send-comment') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: _token,
                        comment_name: comment_name,
                        comment_content: comment_content
                    },
                    success: function(data) {
                        $('#notify_comment').html('<span class="text text-success">Thêm bình luận thành công , Bình luận đang chờ duyệt</span>')
                        load_comment();
                        $('#notify_comment').fadeOut(9000);
                        $('.comment_name').val('');
                        $('.comment_content').val('');
                    }
                });
            });
        });
    </script>
</body>

</html>

<style>
    .style_comment {
        border: 1px solid #ddd;
        border-radius: 10px;
        background: #ddd;
    }

    body {
        font-family: 'open sans';
        overflow-x: hidden;
    }

    img {
        max-width: 100%;
    }

    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px;
        }
    }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px;
    }

    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%;
    }

    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block;
    }

    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0;
    }

    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0;
    }

    .tab-content {
        overflow: hidden;
    }

    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s;
    }

    .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em;
    }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
    }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }

    .product-title,
    .price,
    .sizes,
    .colors {
        text-transform: UPPERCASE;
        font-weight: bold;
    }

    .checked,
    .price span {
        color: #ff9f1a;
    }

    .product-title,
    .rating,
    .product-description,
    .price,
    .vote,
    .sizes {
        margin-bottom: 15px;
    }

    .product-title {
        margin-top: 0;
    }

    .size {
        margin-right: 10px;
    }

    .size:first-of-type {
        margin-left: 40px;
    }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px;
    }

    .color:first-of-type {
        margin-left: 20px;
    }

    .add-to-cart,
    .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
        transition: background .3s ease;
    }

    .add-to-cart:hover,
    .like:hover {
        background: #b36800;
        color: #fff;
    }

    .not-available {
        text-align: center;
        line-height: 2em;
    }

    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff;
    }

    .orange {
        background: #ff9f1a;
    }

    .green {
        background: #85ad00;
    }

    .blue {
        background: #0076ad;
    }

    .tooltip-inner {
        padding: 1.3em;
    }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3);
        }

        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

</style>
