@extends('layout')
@section('content')
<div class="row">
    <div class="col-12"><h1>Đăng ký</h1></div>
</div>
<div class="d-flex justify-content-center">
     <div class="card w-50">
        <div class="card-body">
            <form action="{{route('register.post')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tên người dùng</label>
                    <input  class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="eg: Hữu tín" >
                     @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input  class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="eg: huutin@gmail.com" >
                     @error('email')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                     @error('password')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="d-flex float-end gap-2">
                    <a href="{{route('login')}}" class="btn btn-warning">Đã có tài khoản</a>
                    <button type="submit" class="btn btn-primary float-end">Đăng ký</button>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection
