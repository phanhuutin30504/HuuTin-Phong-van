@extends('layout')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Chi tiết sách</h1>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label ">Tiêu đề:</label>
            <div>{{ $book->title }}</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Tác giả:</label>
            <div>{{ $book->author }}</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Danh mục:</label>
            <div>{{ $book->category->name ?? '' }}</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Mô tả:</label>
            <div>{{ $book->description }}</div>
        </div>
        <a href="{{ route('frontend.books.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
</div>

@endsection
