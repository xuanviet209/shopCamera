@extends('backend.layout.app')

@section('content_app')
@section('title', 'Comment page')
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <h5 id="title_category">Bình luận</h5>
            <div id="notify_comment"></div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Duyệt</th>
                        <th>Tên người gủi</th>
                        <th>Bình luận</th>
                        <th>Ngày gửi</th>
                        <th>Sản phẩm</th>
                        <th colspan="2" class="text-center" width="5%"> Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comment as $key => $item)
                        <tr>
                            <td>
                                @if ($item->comment_status == 1)
                                    <input type="button" data-comment_status="0" data-comment_id="{{ $item->comment_id }}"
                                        id="{{ $item->comment_products_id }}" class="btn btn-primary comment_duyet_btn"
                                        value="Duyệt">
                                @else
                                    <input type="button" data-comment_status="1" data-comment_id="{{ $item->comment_id }}"
                                        id="{{ $item->comment_products_id }}" class="btn btn-dark comment_duyet_btn"
                                        value="Bỏ Duyệt">
                                @endif
                            </td>
                            <td>{{ $item->comment_name }}</td>
                            <td>{{ $item->comment }}
                                <ul>
                                    @foreach($comment as $key => $value)
                                        @if($value->comment_parent_comment == $item->comment_id)
                                            <li>{{ $value->comment }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                @if ($item->comment_status == 0)
                                    <br>
                                    <textarea class="reply_comment_{{$item->comment_id }}" rows="3"></textarea>
                                    <br><button class="btn btn-info btn-reply-comment" data-comment_id="{{$item->comment_id }}" 
                                    data-products_id="{{ $item->comment_products_id }}">Trả lời</button>
                                @endif
                            </td>
                            <td>{{ $item->comment_date }}</td>
                            <td><a href="{{ url('detail?slug=' . $item->product->slug) }}"
                                    target="_blank">{{ $item->product->name }}</a></td>
                            <td>
                                <button class="btn btn-success"><i class="fas fa-check"></i></button>
                            </td>
                            <td>
                                <button id="" class="btn btn-danger" onclick="confirm('Bạn có muốn xóa mã này không !');
                            "><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $comment->links() }}
        </div>
    </div>
@endsection

@push('javascripts')
    <script>
        $('.comment_duyet_btn').click(function() {
            var comment_status = $(this).data('comment_status');
            var comment_id = $(this).data('comment_id');
            var comment_products_id = $(this).attr('id');
            if (comment_status == 0) {
                var alert = 'Thay đổi duyệt thành công';
            } else {
                var alert = 'Thay đổi thành duyệt không thành công';
            }
            $.ajax({
                url: "{{ url('admin/allow-comment') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    comment_status: comment_status,
                    comment_id: comment_id,
                    comment_products_id: comment_products_id
                },
                success: function(data) {
                    location.reload();
                    $('#notify_comment').html('<span class="text text-danger">' + alert + '</span>');
                }
            });
        });
        
        $('.btn-reply-comment').click(function() {
            var comment_id = $(this).data('comment_id');
            var comment = $('.reply_comment_'+comment_id).val();
            var comment_products_id = $(this).data('products_id');
            // alert(comment_products_id);
            $.ajax({
                url: "{{ url('admin/reply-comment') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    comment: comment,
                    comment_id: comment_id,
                    comment_products_id: comment_products_id
                },
                success: function(data) {
                    $('.reply_comment_'+comment_id).val('');
                    $('#notify_comment').html('<span class="text text-danger">Trả lời bình luận thành công</span>');
                }
            });
        });
    </script>
@endpush
