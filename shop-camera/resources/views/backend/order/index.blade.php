@extends('backend.layout.app')

@section('content_app')
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="col-md-5">
                <div class="input-group">
                    <select class="form-control" name="choose_select" id="">
                        <option value="name">Name</option>
                        <option value="address">Address</option>
                    </select>
                    <input class="form-control" type="text" name="key" placeholder="Tìm kiếm ở đây" />
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">id_KH</th>
                        <th scope="col">Tên_KH</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col">Ngày đặt hàng</th>
                        <th scope="col">Tình trạng đơn hàng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $key => $item)
                        <tr id="rowOrder_{{ $item->id }}">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->customer_id }}</td>
                            <td>{{ $item->cus->name }}</td>
                            <td>{{ $item->orders_note }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <?php 
                                if($item->status == 1){
                                ?>
                                Đã xử lý
                                <?php 
                                }else{
                                ?>
                                Chưa xử lý
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $order->links() }}
        </div>
    </div>
@endsection
