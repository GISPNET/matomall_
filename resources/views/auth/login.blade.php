<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png') }}">
    <title>MatoMall - Login</title>
    <link href="{{asset('dist/css/style.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Oculta o formulário de login e exibe o formulário de recuperação de senha
            $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });

            // Oculta o formulário de recuperação de senha e exibe o formulário de login
            $('#to-login').click(function() {
                $("#recoverform").hide();
                $("#loginform").fadeIn();
            });
        });
    </script>
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="{{asset('assets/images/logo.png') }}" alt="logo" /></span>
                    </div>
                    <div id="loginform">
                        <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row p-b-30">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Senha">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row border-top border-secondary">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="p-t-20">
                                            <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Senha perdida?</button>
                                              <button class="btn btn-success float-right" type="submit">Entrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="recoverform">
                    <div class="text-center">
                        <span class="text-white">Digite seu endereço de e-mail abaixo e nós lhe enviaremos instruções de como recuperar sua senha.</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="{{ route('password.email') }}" method="POST" >
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Endereço de email" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="#" id="to-login" name="action">Volte ao login</a>
                                    <button class="btn btn-info float-right" type="submit" name="action">Recuperar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>

</html>
