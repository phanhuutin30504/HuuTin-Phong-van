@extends('layout')
@section('content')
    <div class="row">
        <div class="col-6"><h1>Bài viết</h1></div>
        <div class="col-6 text-end"><a href="{{route('category.create')}}" class="btn btn-success ">Thêm mới</a></div>
    </div>
    <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example m-0 border-0">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                     @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{$category->id}}</th>
                            <td>{{$category->name}}</td>
                            <td class="d-flex"> <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning me-2">Sửa</a>
                                <form action="{{route('category.delete',$category->id)}}" method="post">
                                    @csrf
                                    <button  class="btn btn-danger ">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-3 float-end">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
