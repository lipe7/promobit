@include('sweetalert::alert')

<head>
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset ('js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/signIn.css') }}">
    <script src="{{ asset ('js/signIn.js') }}"></script>

    <title>Promobit</title>

    <style>

    </style>

</head>

<main class="login-form">

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box">
                    <!-- <div class="col-lg-12 login-title">
                                    Bem-Vindo!
                                </div> -->
                    <a href="{{route('products.index')}}">
                        <img class="zoom" src="{{ asset('images/promobit.png') }}" alt="logo">
                    </a>

                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Senha</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="checkbox">

                                        <label style="color: white;">
                                            <input type="checkbox" name="remember"> Lembrar
                                        </label>
                                    </div>
                                </div>

                                <button type=" submit" class="btn btn-primary">LOGIN</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
            </div>
    </body>

</main>