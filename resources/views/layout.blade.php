<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    @auth
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4" style="min-height: 70px">
            <div class="container">
                <div class="d-flex gap-5">
                    <a class="nav-link text-white" href="{{ route('book.index') }}">Book</a>

                    <a class="nav-link text-white" href="{{ route('category.index') }}">Categories</a>

                </div>

                <div class="d-flex gap-1">
                    <a class="nav-link  text-white" >
                        {{ auth()->user()->name }} |
                    </a>
                    <form action="{{route('auth.logout')}}" method="post">
                        @csrf
                        <button href="" class="nav-link pe-1  text-white" >
                            Đăng xuất
                        </button>
                    </form>

                </div>

            </div>
        </nav>
    @endauth



    <div class="container {{ $paddingBody ?? 'pt-3' }}">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @yield('content')
    </div>

</body>

</html>
