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
            <th class="p-name">Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
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
<p>
    @foreach(Session::get('coupon') as $key => $cou)
    @if($cou['coupon_condition'] == 1)
        <li class="cart-total">Mã giảm : <span>{{ $cou['coupon_number'] }} %</span></li>
            @php
                $total_coupon=(str_replace(',', '',  \Cart::priceTotal())*$cou['coupon_number'])/100;
                echo '<li class="cart-total">Tổng giảm : <span> '.number_format(str_replace(',', '',$total_coupon)).'đ</span></li>';
            @endphp
        <li class="cart-total">Tổng đơn hàng : <span>{{ number_format(str_replace(',', '',  \Cart::priceTotal())-$total_coupon)}} đ</span></li>
    @elseif($cou['coupon_condition'] == 2)
        <li class="cart-total">Mã giảm : <span>{{ number_format($cou['coupon_number']) }} đ</span></li>
            @php
                $total_coupon=(str_replace(',', '',  \Cart::priceTotal())-$cou['coupon_number']);
            @endphp
        <li class="cart-total">Tổng đơn hàng : <span>{{ number_format($total_coupon)}} đ</span></li>
    @endif
@endforeach
</p>
