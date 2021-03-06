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
                        <a href="{{ route('fr.home.detailCustomer') }}" class="login-panel"><i>L???ch s??? ????n h??ng</i></a>
                        <a href="{{ route('fr.home.show') }}" class="login-panel"><i>Th??ng tin kh??ch h??ng</i></a>
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
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{ route('fr.home') }}">Trang ch???</a></li>
                        <li><a href="">S???n ph???m</a></li>
                        <li><a href="{{ route('fr.introduce') }}">Gi???i thi???u</a></li>
                        <li><a href="{{ route('fr.contact') }}">Li??n H???</a></li>
                        <li><a href="{{ route('fr.create') }}">????ng k??</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <section class="">
        <div class="container">
            <div class="row">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="frontend/assets/img/slide.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="mt-5 font-weigt-bold text-center">V??? CH??NG T??I</h2>
            <hr>
            <h5 class="mt-4 font-weight-bold">C??ng ty TNHH ViewCamera g???i t???t l?? V|Camera</h5>
            <p class="mt-5">V|Camera ???????c th??nh l???p t??? n??m 2022, t??? nh???ng ng?????i th???c s??? th???u hi???u v??
                quan t??m t???i v???n ????? an ninh c???a c??c gia ????nh, con ng?????i v?? x?? h???i???. Tr???i qua h??n 10 n??m ph??t tri???n
                DigiOne ???? t???ng b?????c x??y d???ng x??y d???ng cho m??nh m???t ch??? ?????ng nh???t ?????nh trong l??nh v???c gi???i ph??p thi???t b???
                gi??m s??t, m??y ch???m c??ng, camera h??nh tr??nh,.. t???i th??? tr?????ng Vi???t Nam. Hi???n t???i, Th??? Gi???i Camera ???? tr???
                th??nh ?????i t??c ph??n ph???i v?? cung c???p c??c gi???i ph??p an ninh ?????n t??? c??c th????ng hi???u n???i ti???ng tr??n th??? gi???i
                nh??: HIKVISION, EZVIZ, DAHUA, HILOOK, KBVISION, KBONE, IMOU, VIETMAP, 70MAI, TP-LINK, ZKTECO, RONALD
                JACK ,???</p>
            <h3 class="mt-5 mb-3">T???m nh??n</h3>
            <ul>
                <li>Tr??? th??nh th????ng hi???u h??ng ?????u trong l??nh v???c camera an ninh, m??y ch???m c??ng, camera h??nh tr??nh t???i
                    Vi???t Nam</li>
                <li>L?? s??? l???a ch???n h??ng ?????u c???a qu?? kh??ch h??ng c??ng nh?? ?????i t??c chi???c l?????c c???a c??c th????ng hi???u trong v??
                    ngo??i n?????c.</li>
                <li>Mang ?????n nh???ng s???n ph???m ch???t l?????ng, d???ch v??? t???t nh???t t???i qu?? kh??ch h??ng.</li>
            </ul>
            <h3 class="mt-5 mb-3">S??? m???nh</h3>
            <p>DigiOne lu??n mong mu???n th??ng qua nh???ng s???n ph???m m?? ch??ng t??i cung c???p, qu?? kh??ch h??ng s??? ???????c t???n h?????ng
                m???t cu???c s???ng an to??n, c?? th??m nhi???u th???i gian d??nh cho nh???ng ho???t ?????ng c?? ??ch g??p ph???n n??ng cao ch???t
                l?????ng cu???c s???ng.</p>
            <h3 class="mt-5 mb-3">Gi?? tr??? c???t l???i</h3>
            <ul>
                <li>S???n ph???m, ch???t l?????ng d???ch v??? t???t nh???t</li>
                <li>?????i ng?? nh??n vi??n chuy??n nghi???p, s??ng t???o</li>
                <li>Uy t??n l?? gi?? tr??? t???o n??n s??? b???n v???ng c???a c??ng ty</li>
            </ul>
            <h3 class="mt-5 mb-3">H??? th???ng c???a h??ng</h3>
            <p>V???i 15 c???a h??ng tr???i d??i tr??n to??n l??nh th??? Vi???t Nam, V|Camera hy v???ng t???t c??? c??c kh??ch h??ng khi
                ?????n v???i ch??ng t??i ?????u ???????c tr???c ti???p tr???i nghi???m t???t c??? c??c s???n ph???m</p>
            <h3 class="mt-5 mb-3">L?? do t???i sao ch???n V|Camera</h3>
            <ul>
                <li>H??? tr??? t?? v???n, kh???o s??t l???p ?????t mi???n ph??. Ch??? c???n cho V|Camera bi???t b???n c???n g??, ch??ng t??i s???
                    t?? v???n cho b???n s???n ph???m ph?? h???p nh???t.</li>
                <li>Tr???i nghi???m tr???c ti???p t???t c??? c??c s???n ph???m t???i c??c c???a h??ng trong h??? th???ng V|Camera</li>
                <li>Giao h??ng mi???n ph?? to??n qu???c</li>
                <li>H??? tr??? ?????i m???i trong th???i gian quy ?????nh c???a t???ng s???n ph???m</li>
                <li>H??? tr??? b???o h??nh t???i nh?? n???u g???p v???n ????? trong th???i gian s??? d???ng</li>
            </ul>
            <h3 class="mt-5 mb-3">Cam k???t ?????n t??? V|Camera</h3>
            <p>N???u v?? b???t c??? l?? do g?? b???n kh??ng h??i l??ng khi mua h??ng t???i V|Camera h??y li??n h??? hotline
                0971046025. Ch??ng t??i lu??n lu??n l???ng nghe v?? lu??n mu???n b???n ?????n v???i V|Camera v???i s??? t??? tin bi???t
                r???ng ch??ng t??i s??? h??? tr??? b???n n???u c?? m???t v???n ????? v???i h??ng h??a ???? mua.</p>
            <h3 class="mt-5 mb-3">L???i c???m ??n</h3>
            <p>V|Camera ch??n th??nh c???m ??n v?? hy v???ng b???n s??? gh?? th??m c??c c???a h??ng c???a ch??ng t??i, n???u b???n ??ang ???
                xa ho???c kh??ng ti???n ?????n mua h??ng t???i c???a h??ng h??y g???i cho ch??ng t??i ????? ???????c h?????ng d???n mua h??ng t??? xa.</p>
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
                            <li>Address: 18/335 Xu??n ?????nh B???c T??? Li??m H?? N???i</li>
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
    <div class="zalo-chat-widget" data-oaid="1958423497335534901" data-welcome-message="R???t vui khi ???????c h??? tr??? b???n!"
        data-autopopup="0" data-width="300" data-height="300"></div>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
