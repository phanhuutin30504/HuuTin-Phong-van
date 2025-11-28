@extends('layout')
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Danh sách sách</h1>
    </div>
</div>

<div class="card mt-3">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th>Danh mục</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $book)
                        <tr>
                            <td>{{ $books->firstItem() + $loop->index }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->category->name ?? '' }}</td>
                            <td><a href="{{ route('frontend.books.show', $book->id) }}" class="btn btn-sm btn-primary">Xem</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Không có sách nào</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-3 float-end">
            {{ $books->links() }}
        </div>
    </div>
</div>

@endsection
