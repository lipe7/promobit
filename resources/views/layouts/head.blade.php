<head>

    <meta charset="utf-8">
    <script src="{{ asset ('js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">

    @include('scripts.select')


    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="{{route('tags.index')}}" class="nav-link">Tags</a></li>
                <li class="nav-item"><a href="{{route('products.index')}}" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="{{route('signout')}}" class="nav-link">Logout</a></li>
            </ul>
        </header>
    </div>
</head>