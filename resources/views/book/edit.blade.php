@extends('layout')
@section('content')
    <div class="row">
        <div class="col-12"><h1>Sửa</h1></div>
    </div>
    <div class="card">
        <div class="card-body">
             <form action="{{route('book.update', $book->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
                        @error('title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Danh mục</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{$book->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>

                            @endforeach
                        </select>
                         @error('category_id')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                    </div>
                     <div class="mb-3">
                        <label for="title" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="description" name="description" cols="30" rows="10">{{ old('description', $book->description) }}</textarea>
                        @error('description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
        </div>
    </div>
@endsection
