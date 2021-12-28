<!doctype html>
<html>
@include('layouts.head')
@include('sweetalert::alert')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<body>

    <div class="container">

        @yield('content')

    </div>
</body>


</html>