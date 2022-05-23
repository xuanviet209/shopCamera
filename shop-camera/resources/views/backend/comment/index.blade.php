@extends('backend.layout.app')

@section('content_app')
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
                                @if ($item->comment_status == 0)
                                    <br>
                                    <textarea class="reply_comment" rows="3"></textarea>
                                    <br><button class="btn btn-info btn-reply-comment" data-comment_id="{{$item->comment_id }}" 
                                    id="{{ $item->comment_products_id }}">Trả lời</button>
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
            var comment = $('.reply_comment').val();
            var comment_id = $(this).data('comment_id');
            var comment_products_id = $(this).attr('id');
            alert(comment);
            // $.ajax({
            //     url: "{{ url('admin/reply-comment') }}",
            //     method: "POST",
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //     data: {
            //         comment: comment,
            //         comment_id: comment_id,
            //         comment_products_id: comment_products_id
            //     },
            //     success: function(data) {
            //         $('#notify_comment').html('<span class="text text-alert">Trả lời bình luận thành công</span>');
            //     }
            // });
        });
    </script>
@endpush
