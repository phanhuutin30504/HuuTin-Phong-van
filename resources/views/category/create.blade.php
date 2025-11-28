@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12"><h1>Thêm mới</h1></div>
    </div>
    <div class="card">
        <div class="card-body">
             <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
        </div>
    </div>
@endsection
