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
                        <a href="" class="login-panel"><i>{{ Auth::guard('cus')->user()->name }}</i></a>
                        <a href="{{ route('fr.home.show') }}" class="login-panel"><i>Thông tin khách hàng</i></a>
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
                                <input type="text" name="key" placeholder="Bạn cần tìm gì">
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
                            <li class="cart-icon"><a href="{{ route('fr.cart') }}">
                                    <i class="icon_bag_alt"></i>
                                    <span>{{ \Cart::count() }}</span>
                                </a>
                                {{-- <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img class="card-img-top" width="30%" height="30%" src="" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>1233</p>
                                                            <h6>22222</h6>
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
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            @foreach ($products as $key => $item)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img id="img_product{{ $item->id }}"class="card-img-top" width="10%" height="10%"
                                                src="{{ asset('storage/images/' . $item->image) }}" alt="">
                                            <div class="sale pp-sale">Sale</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt">

                                                </i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a
                                                        href="{{ route('fr.detail', ['slug' => $item->slug]) }}"><i
                                                            class="icon_bag_alt"></i></a></li>
                                                <li class="addcart"><a
                                                        href="{{ route('fr.add.cart', ['id' => $item->id]) }}">+ Add
                                                        Cart</a></li>
                                                <li class="w-icon"><a style="cursor: pointer"
                                                        onclick="add_compare({{ $item->id }})"><i
                                                            class="fa fa-random"></i></a></li>
                                            </ul>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="modal fade" id="compare" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><span id="title-compare"></span></h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-hover" id="row_compare">
                                                                    <thead>
                                                                      <tr>
                                                                        <th>Tên sản phẩm</th>
                                                                        <th>Hình ảnh</th>
                                                                        <th>Giá</th>
                                                                        <th>Xóa</th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                        
                                                                    
                                                                    
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Đóng</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name"></div>
                                            <input type="hidden" id="name_product{{ $item->id }}" value="{{$item->name}}"><h5>{{ $item->name }}</h5>
                                            <input type="hidden" id="desc_product{{ $item->id }}" value="{!! $item->description !!}"><h5>{!! $item->description !!}</h5>
                                            <div class="product-price">
                                                <input type="hidden" id="price_product{{ $item->id }}" value="{{ number_format($item->price) }} đ">
                                                {{ number_format($item->price) }} đ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{ $products->links() }}
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

    <script type="text/javascript">
        sosanh();
        function sosanh(){
            if(localStorage.getItem('compare')!=null);
                const data = JSON.parse(localStorage.getItem('compare'));
                for(i=0;i<data.length;i++){
                    var product_id =data[i].product_id;
                    var img = data[i].img;
                    var name = data[i].name;
                    var price = data[i].price;
                    $('#row_compare').find('tbody').append(`
                        <tr id="row_compare`+product_id+`"> 
                            <td>`+name+`</td>
                            <td><img width="120px" src="`+img+`"></td>
                            <td>`+price+`</td>
                            <td><a style="cursor:pointer" onclick="delete_compare(`+product_id+`)">Xóa so sánh</a></td>
                        </tr>
                    `);
                }
        }
        
        function add_compare(id) {
            document.getElementById('title-compare').innerText = 'So sánh sản phẩm';
            var product_id = id;
            var img = document.getElementById('img_product'+product_id).src;
            var name = document.getElementById('name_product'+product_id).value;
            var price = document.getElementById('price_product'+product_id).value;
            var desc = document.getElementById('desc_product'+product_id).value;
            
            var newItem = {
                'product_id':product_id,
                'img':img,
                'name':name,
                'price':price,
                'desc':desc
            }
            
            if(localStorage.getItem('compare')==null){
                localStorage.setItem('compare','[]');
            }
            
            var old_data = JSON.parse(localStorage.getItem('compare'));
            
            var matches = $.grep('old_data',function(obj){
                return obj.product_id == product_id;
            })
            
            if(matches.length){
            
            }else{
                if(old_data.length<=3){
                    old_data.push(newItem);
                    $('#row_compare').find('tbody').append(`
                                                            <tr id="row_compare`+product_id+`">
                                                                <td>`+newItem.name+`</td>
                                                                <td><img width="120px" src="`+newItem.img+`"></td>
                                                                <td>`+newItem.price+`</td>
                                                                <td><a style="cursor:pointer" onclick="delete_compare(`+product_id+`)">Xóa so sánh</a></td>
                                                            </tr>
                    `);
                }
            }
            localStorage.setItem('compare',JSON.stringify(old_data));
            $('#compare').modal();
        }
        
        function delete_compare(product_id){
            if(localStorage.getItem('compare')!=null){
                const data = JSON.parse(localStorage.getItem('compare'));
                const index = data.findIndex(item => item.product_id === product_id);
                //tìm vị trí phần từ trong mảng
                data.splice(index,1); // cắt đi 1
                localStorage.setItem('compare',JSON.stringify(data));
                //remove element by Id
                document.getElementById("row_compare"+product_id).remove();
            }
        }
        
        // hover_cart();
        // function hover_cart(){
        //     $('.cart-hover').click(function(e) {
        //         //    e.preventDefault();
        //         Swal.fire({
        //             position: 'center',
        //             icon: 'success',
        //             title: 'Sản phẩm đã được thêm vào giỏ hàng',
        //             showConfirmButton: false,
        //             timer: 3000
        //         });
        //     });
        // }
    </script>
</body>
<style>
    .pagination {
        display: inline-block;
        margin-top: 10px;
        float: right
    }

    .pagination li {
        width: 36px;
        display: block;
        float: left;
        color: black;
        padding: 5px 5px;
        list-style: none;
        text-decoration: none;
        transition: background-color .3s;
        background: #FFF;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 0 4px;
        cursor: pointer;
        text-align: center;
        font: 400 .9em Arial, Helvetica, sans-serif;
    }

    .pagination li a {
        color: #333;
        text-decoration: none;
        display: block;
        width: 100%;
        height: 100%;
    }

    .pagination li span {
        color: #333;
        font-size: .9em;
    }

    .pagination li.active {
        /* background-color: #4CAF50;
color: white;
border: 1px solid #4CAF50; */
    }

    .pagination li:hover:not(.active) {
        background-color: #ddd;
    }

</style>

</html>
