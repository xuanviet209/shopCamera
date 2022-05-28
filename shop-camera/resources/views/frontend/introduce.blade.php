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
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="{{ route('fr.home') }}">Trang chủ</a></li>
                        <li><a href="">Sản phẩm</a></li>
                        <li><a href="{{ route('fr.introduce') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('fr.contact') }}">Liên Hệ</a></li>
                        <li><a href="{{ route('fr.create') }}">Đăng ký</a></li>
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
            <h2 class="mt-5 font-weigt-bold text-center">VỀ CHÚNG TÔI</h2>
            <hr>
            <h5 class="mt-4 font-weight-bold">Công ty TNHH ViewCamera gọi tắt là V|Camera</h5>
            <p class="mt-5">V|Camera được thành lập từ năm 2022, từ những người thực sự thấu hiểu và
                quan tâm tới vấn đề an ninh của các gia đình, con người và xã hội…. Trải qua hơn 10 năm phát triển
                DigiOne đã từng bước xây dựng xây dựng cho mình một chỗ đứng nhất định trong lĩnh vực giải pháp thiết bị
                giám sát, máy chấm công, camera hành trình,.. tại thị trường Việt Nam. Hiện tại, Thế Giới Camera đã trở
                thành đối tác phân phối và cung cấp các giải pháp an ninh đến từ các thương hiệu nổi tiếng trên thế giới
                như: HIKVISION, EZVIZ, DAHUA, HILOOK, KBVISION, KBONE, IMOU, VIETMAP, 70MAI, TP-LINK, ZKTECO, RONALD
                JACK ,…</p>
            <h3 class="mt-5 mb-3">Tầm nhìn</h3>
            <ul>
                <li>Trở thành thương hiệu hàng đầu trong lĩnh vực camera an ninh, máy chấm công, camera hành trình tại
                    Việt Nam</li>
                <li>Là sự lựa chọn hàng đầu của quý khách hàng cũng như đối tác chiếc lược của các thương hiệu trong và
                    ngoài nước.</li>
                <li>Mang đến những sản phẩm chất lượng, dịch vụ tốt nhất tới quý khách hàng.</li>
            </ul>
            <h3 class="mt-5 mb-3">Sứ mệnh</h3>
            <p>DigiOne luôn mong muốn thông qua những sản phẩm mà chúng tôi cung cấp, quý khách hàng sẽ được tận hưởng
                một cuộc sống an toàn, có thêm nhiều thời gian dành cho những hoạt động có ích góp phần nâng cao chất
                lượng cuộc sống.</p>
            <h3 class="mt-5 mb-3">Giá trị cốt lỗi</h3>
            <ul>
                <li>Sản phẩm, chất lượng dịch vụ tốt nhất</li>
                <li>Đội ngũ nhân viên chuyên nghiệp, sáng tạo</li>
                <li>Uy tín là giá trị tạo nên sự bền vững của công ty</li>
            </ul>
            <h3 class="mt-5 mb-3">Hệ thống cửa hàng</h3>
            <p>Với 15 cửa hàng trải dài trên toàn lãnh thổ Việt Nam, V|Camera hy vọng tất cả các khách hàng khi
                đến với chúng tôi đều được trực tiếp trải nghiệm tất cả các sản phẩm</p>
            <h3 class="mt-5 mb-3">Lý do tại sao chọn V|Camera</h3>
            <ul>
                <li>Hỗ trợ tư vấn, khảo sát lắp đặt miễn phí. Chỉ cần cho V|Camera biết bạn cần gì, chúng tôi sẽ
                    tư vấn cho bạn sản phẩm phù hợp nhất.</li>
                <li>Trải nghiệm trực tiếp tất cả các sản phẩm tại các cửa hàng trong hệ thống V|Camera</li>
                <li>Giao hàng miễn phí toàn quốc</li>
                <li>Hỗ trợ đổi mới trong thời gian quy định của từng sản phẩm</li>
                <li>Hỗ trợ bảo hành tại nhà nếu gặp vấn đề trong thời gian sử dụng</li>
            </ul>
            <h3 class="mt-5 mb-3">Cam kết đến từ V|Camera</h3>
            <p>Nếu vì bất cứ lý do gì bạn không hài lòng khi mua hàng tại V|Camera hãy liên hệ hotline
                0971046025. Chúng tôi luôn luôn lắng nghe và luôn muốn bạn đến với V|Camera với sự tự tin biết
                rằng chúng tôi sẽ hỗ trợ bạn nếu có một vấn đề với hàng hóa đã mua.</p>
            <h3 class="mt-5 mb-3">Lời cảm ơn</h3>
            <p>V|Camera chân thành cảm ơn và hy vọng bạn sẽ ghé thăm các cửa hàng của chúng tôi, nếu bạn đang ở
                xa hoặc không tiện đến mua hàng tại cửa hàng hãy gọi cho chúng tôi để được hướng dẫn mua hàng từ xa.</p>
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
