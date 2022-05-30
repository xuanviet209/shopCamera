@extends('backend.layout.app')

@section('title', 'Admin page')
@section('breadcrumd_title', 'Admin')
@section('breadcrumd_title_sub', $info->username)

@section('content_app')
    <div class="row">
        <div class="col">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="{{ route('admin.handle.edit.admin', ['id' => $info->id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label> UserName </label>
                    <input value="{{ $info->username }}" class="form-control" name="usernameAdmin" />
                </div>
                <div class="form-group">
                    <label> FullName </label>
                    <input value="{{ $info->fullname }}" class="form-control" name="fullnameAdmin" />
                </div>
                <div class="form-group">
                    <label>Giới tính</label>
                    <select class="form-control" name="genderAdmin">
                        <option {{ $info->gender == 1 ? 'selected' : '' }} value="1"> Nam </option>
                        <option {{ $info->gender == 0 ? 'selected' : '' }} value="0"> Nữ </option>
                    </select>
                </div>
                <div class="form-group">
                    <label> Birthday </label>
                    <input type="date" value="{{ $info->birthday }}" class="form-control" name="birthdayAdmin" />
                </div>
                <div class="form-group">
                    <label> Phone </label>
                    <input value="{{ $info->phone }}" class="form-control" name="phoneAdmin" />
                </div>
                <div class="form-group">
                    <label> Email </label>
                    <input value="{{ $info->email }}" class="form-control" name="emailAdmin" />
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <input type="file" class="form-control" name="avatarAdmin" />
                    <div class="my-2">
                        <img class="img-fluid" width="10%" height="10"
                            src={{ asset('storage/images/' . $info->avatar) }} />
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary my-3"> Save </button>
                </div>
            </form>
        </div>
    </div>
@endsection
