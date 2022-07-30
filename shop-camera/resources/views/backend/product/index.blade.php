@extends('backend.layout.app')

{{--truyền title--}}
@section('title','Product page')
{{-- @section('breadcrumb_title','Product') 
@section('breadcrumb_title_sub','List Product')  --}}
  
@section('content_app')
  <div class="row">
    <div class="col-xl-12 col-md-12">
      <h5 id="title_product">Sản phẩm</h5>
      <div class="col-md-12">
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 pb-3" method="get" action="{{route('admin.product')}}">
      <div class="input-group">
        <select class="form-control" name="choose_select" id="">
          <option value="name">Name</option>
        </select>
          <input class="form-control" type="text" name="key" placeholder="Tìm kiếm ở đây" />
          <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
      </div>
    </form>
    <a href="{{route('admin.add.product')}}" class="btn btn-primary">Add Products</a>
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Categories_ID</th>
            <th>Brands_ID</th>
            <th>Desc</th>
            <th>Image Product</th>
            <th>Price</th>
            <th>Price_Cost</th>
            <th>Quantity</th>
            <th>Status</th>
            <th colspan="2" class="text-center" width="5%"> Action </th>
          </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $item)
            <tr id="rowProduct_{{ $item->id }}">
              <td>{{ $key + 1 }}</td>
              <td> {{ $item->name }}</td>
              <td>{{$item->slug}}</td>
              <td style="text-align: right">{{$item->categories_id}}</td>
              <td style="text-align: right">{{$item->brands_id}}</td>
              <td>{!! $item->description !!}</td>
              <td>
                  <img class="img-fluid" width="90%" height="90%" src={{ asset('storage/images/'.$item->image) }} />
              </td>
              <td style="text-align: right"> {{ number_format($item->price)}}đ</td>
              <td style="text-align: right">{{ number_format($item->price_cost) }}đ</td>
              <td style="text-align: right"> {{ $item->quantity }}</td>
              <td><?php 
                if($item->quantity == 0){
                    ?>
                      Hết hàng  
                    <?php 
                  }else{
                    ?>
                      Còn hàng
                    <?php
                  }
                    ?>
              </td>
              <td>
                <a class="btn btn-info" href="{{ route('admin.product.edit',['slug' => Str::slug($item->name, '-'), 'id' => $item->id]) }}"><i class="fas fa-edit"></i></a>
              </td>
              <td>
                <button id="delete_product_{{$item->id}}" class="btn btn-danger" onclick="confirm('Bạn có muốn xóa không !');deleteProduct({{$item->id}})"><i class="fas fa-trash"></i></button>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      {{ $products->links() }}
    </div>
  </div>
@endsection

@push('javascripts')
  <script>
    function deleteProduct(id) {
      // viet ajax
      $.ajax({
        url: "{{ route('admin.delete.product') }}",
        type: "POST",
        data : { id },
        beforSend: function() {
          $('#delete_product_'+id).text('Loading ...');
        },
        success: function(result) {
          if(result.cod === 200){
            // xoa thanh cong
            $('#rowProduct_'+id).hide();
          } else {
            alert(result.mess);
          }
        }
      })
    }
  </script>
@endpush