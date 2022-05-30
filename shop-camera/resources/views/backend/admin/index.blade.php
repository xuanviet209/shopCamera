@extends('backend.layout.app')
@section('title', 'Admin page')

@section('content_app')
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="col-md-5">
                <div class="input-group">
                    {{-- <select class="form-control" name="choose_select" id="">
                    <option value="name">Name</option>
                    <option value="address">Address</option>
                </select>
                <input class="form-control" type="text" name="key" placeholder="Tìm kiếm ở đây" />
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button> --}}
                </div>
            </div>
            @foreach ($admin as $key => $item)
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="{{ asset('storage/images/' . $item->avatar) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Chức vụ: {{ $item->username }}</h5>
                        <p class="card-text">{{ $item->fullname }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <?php 
                                if($item->gender == 1){
                                ?>
                                Giới tính: Nam
                                <?php 
                                }else{
                                ?>
                                Giới tính: Nữ
                                <?php
                                }
                                ?>
                        </li>
                        <li class="list-group-item">Ngày sinh: {{ $item->birthday }}</li>
                        <li class="list-group-item">SĐT: {{ $item->phone }}</li>
                        <li class="list-group-item">Email: {{ $item->email }}</li>
                    </ul>
                    <div class="card-body">
                        <a class="btn btn-info" href="{{ route('admin.admin.edit', ['slug' => Str::slug($item->username, '-'), 'id' => $item->id]) }}"><i class="fas fa-edit"></i></a>
                        {{-- <a href="#" class="card-link">Another link</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
