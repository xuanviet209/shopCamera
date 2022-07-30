@extends('backend.layout.app')

{{-- truyền title --}}
@section('title', 'Dashboard page')
@section('breadcrumb_title', 'Thống kê sản phẩm')
@section('breadcrumb_title_sub', 'Thông tin sản phẩm')

{{-- viết css ở đây, đẩy nó ra ngoài file app.blade layout --}}
@push('stylesheets')
    <link href="{{ asset('backend/css/dashboard.css') }}" rel="stylesheet" />
@endpush

@section('content_app')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Sản phẩm</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $product_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Hãng</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $brand_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tag fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Danh mục sản phẩm
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $category_count }}</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Khách hàng</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $customer_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Đơn hàng</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $order_detail_count }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Doanh thu</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($price_product) }}đ</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-money-bill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Lợi nhuận</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($price_orders) }}đ</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-money-bill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h3>Khách hàng đặt</h3>
            <form action="" class="form-inline" role="form" method="GET">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <input type="date" class="form-control" name="date_form" >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <input type="date" class="form-control" name="date_to" >
                        </div>
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Lọc khách hàng</button>
                    </div>
                </div>
            </form>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Ngày đặt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $od)
                            <tr>
                                <td style="text-align: right">{{ $od->id }}</td>
                                <td>{{ $od->cus->name }}</td>
                                <td>{{ $od->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 pt-5">
            <h3>Đơn hàng</h3>
            <form action="" class="form-inline" role="form" method="GET">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <input type="date" class="form-control" name="form" >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <input type="date" class="form-control" name="to" >
                        </div>
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Lọc đơn hàng</button>
                    </div>
                </div>
            </form>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Id_KH</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá SP</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Ngày mua</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail as $key =>$item)
                            <tr>
                                <td style="text-align: right">{{ $item->orders_id }}</td>
                                <td>{{ optional($item->product)->name }}</td> 
                                <td style="text-align: right">{{ number_format($item->price) }}đ</td>
                                <td style="text-align: right">{{ $item->quantity }}</td>
                                <td style="text-align: right">{{  $item->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<style>
.my-custom-scrollbar {
    position: relative;
    height: 200px;
    overflow: auto;
}
.table-wrapper-scroll-y {
    display: block;
}
</style>