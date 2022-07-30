<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Quản lý thống kê sản phẩm
                </a>
                <a class="nav-link" href="{{ route('admin.brand') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tag"></i></div>
                    Quản lý hãng sản phẩm
                </a>
                <a class="nav-link" href="{{ route('admin.category') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                    Quản lý danh mục sản phẩm
                </a>
                <a class="nav-link" href="{{ route('admin.product') }}">
                    <div class="sb-nav-link-icon"><i class="fab fa-product-hunt"></i></div>
                    Quản lý sản phẩm
                </a>
                <a class="nav-link" href="{{ route('admin.coupon') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-ticket-alt"></i></div>
                    Mã giảm giá
                </a>
                <a class="nav-link" href="{{ route('admin.comment') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                    Bình luận
                </a>
                <a class="nav-link" href="{{ route('admin.customer') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Quản lý khách hàng
                </a>
                <a class="nav-link" href="{{ route('admin.order') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                    Quản lý đặt hàng
                </a>
                <a class="nav-link" href="{{ route('admin.detail') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                    Quản lý đơn hàng 
                </a>
                <a class="nav-link" href="{{ route('admin.admin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-lock"></i></div>
                    Admin
                </a>
                {{-- <a class="nav-link" href="{{ route('admin.user') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    User
                </a> --}}
    </nav>
</div>
