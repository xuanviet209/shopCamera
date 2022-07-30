@extends('backend.layout.app')

@section('content_app')
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="col-md-5">
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 pb-3" method="get"
                    action="{{ route('admin.detail') }}">
                    <div class="input-group">
                        <select class="form-control" name="choose_select" id="">
                            <option value="orders_id">id_Đơn hàng</option>
                        </select>
                        <input class="form-control" type="text" name="key" placeholder="Tìm kiếm ở đây" />
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        {{-- <th scope="col">STT</th> --}}
                        <th scope="col">id_Đơn hàng</th>
                        <th scope="col">id_Sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Ngày mua</th>
                        {{-- <th scope="col">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order_detail as $key => $item)
                        <tr id="rowCustomer_{{ $item->id }}">
                            {{-- <td>{{ $key + 1 }}</td> --}}
                            <td>{{ $item->orders_id }}</td>
                            <td style="text-align: center">{{ $item->products_id }}</td>
                            <td>{{ optional($item->product)->name }}</td>
                            <td>{{ number_format($item->price) }}đ</td>
                            <td style="text-align: center">{{ $item->quantity }}</td>
                            <td>{{ $item->created_at }}</td>
                            {{-- <td><a href="{{ url('/print_order/'.$item->orders_id) }}">In đơn hàng</a></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $order_detail->links() }}
        </div>
    </div>
@endsection
