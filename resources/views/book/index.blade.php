@extends('layout')
@section('content')
    <div class="row">
        <div class="col-6"><h1>Bài viết</h1></div>
        <div class="col-6 text-end"><a href="{{route('book.create')}}" class="btn btn-success ">Thêm mới</a></div>
    </div>
    <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example m-0 border-0">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                     @foreach ($books as $book)
                        <tr>
                            <th scope="row">{{$book->id}}</th>
                            <td>{{$book->title}}</td>
                            <td>{{$book->category->name ?? ''}}</td>
                            <td>{{$book->author ?? ''}}</td>
                            <td>{{$book->description}}</td>
                            <td class="d-flex"> <a href="{{route('book.edit', $book->id )}}" class="btn btn-warning me-2">Sửa</a>
                                <form action="{{route('book.delete',$book->id)}}" method="post">
                                    @csrf
                                    <button  class="btn btn-danger ">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-3 float-end">
                {{ $books->links() }}
            </div>
        </div>
    </div>
@endsection
