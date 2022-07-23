<h2>Hi {{ Auth::guard('cus')->user()->name }}</h2>
<p>
    <b>Bạn đã đặt hàng thành công tại cửa hàng</b>
</p>
<h4>Thông tin đơn hàng của bạn</h4>
<h4>Mã đơn hàng: {{ $order->id }}</h4>
<h4>Ngày đặt hàng: {{ $order->created_at }}</h4>

<h4>Chi tiết đơn hàng</h4>

<table border="1" cellspacing="0" cellpadding="10" width="400">
    <thead>
        <tr>
            <th class="p-name">Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cart as $key => $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['qty'] }}</td>
                <td>{{ number_format($item['price'])}}đ</td>
                <td>{{ number_format($item['price'] * $item['qty']) }}đ</td>
            </tr>
        @endforeach
    </tbody>
</table>

<p>Tổng đơn hàng = {{ number_format(str_replace(',', '',  \Cart::priceTotal())) }} đ</p>
