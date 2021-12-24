<!DOCTYPE html>
<html>

<head>
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset ('js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    <script src="{{ asset ('js/signIn.js') }}"></script>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/signIn.css') }}">

    <title>Promobit</title>

    <style>

    </style>

</head>

<body class="antialiased" style="background-color: #1a2226;">
    <div class="container" style="text-align-last: center;">


        <div class="row">
            <form>

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
                                        <form>
                                            <div class="form-group">
                                                <label class="form-control-label">Email</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Senha</label>
                                                <input type="password" class="form-control" i>
                                            </div>

                                            <button type="submit" class="btn btn-primary">LOGIN</button>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-2"></div>
                            </div>
                        </div>
                </body>

            </form>
        </div>
    </div>
</body>

</html>