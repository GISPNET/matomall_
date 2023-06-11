<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Matomall</title>


    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{asset('assets/js/config.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
        <div class="container">
            <div class="row flex-center min-vh-100 py-5">
                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
                    <a class="d-flex flex-center text-decoration-none mb-4" href="index.html">
                        <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img src="assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
                    </a>
                    <div class="text-center mb-7">
                        <h3 class="text-1000">Registrar</h3>
                        <p class="text-700">Crie sua conta hoje</p>
                    </div>
                    <button class="btn btn-phoenix-secondary w-100 mb-3"><span class="fab fa-google text-danger me-2 fs--1"></span>Registrar com o Google</button>
                    <button class="btn btn-phoenix-secondary w-100"><span class="fab fa-facebook text-primary me-2 fs--1"></span>Registrar com o Facebook</button>
                    <div class="position-relative mt-4">
                        <hr class="bg-200" />
                        <div class="divider-content-center">ou use o email</div>
                    </div>
                    <form action="<?php echo e(route('register')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="name">Nome</label>
                            <input class="form-control" id="name" type="text" placeholder="Nome" name="name" value="<?php echo e(old('name')); ?>"  autofocus>
                            <?php if($errors->has('name')): ?>
                                <span class="text-danger" style="font-size: 12px;"><?php echo e($errors->first('name')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">Endereço de email</label>
                            <input class="form-control" id="email" type="email" placeholder="nome@exemplo.com" name="email" value="<?php echo e(old('email')); ?>" >
                            <?php if($errors->has('email')): ?>
                                <span class="text-danger" style="font-size: 12px;"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="password">Senha</label>
                                <input class="form-control form-icon-input" id="password" type="password" placeholder="Senha" name="password" >
                                <?php if($errors->has('password')): ?>
                                    <span class="text-danger" style="font-size: 12px;"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="password_confirmation">Confirmar Senha</label>
                                <input class="form-control form-icon-input" name="password_confirmation" id="password_confirmation" type="password" placeholder="Confirmar Senha" name="password_confirmation" >
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="termsService" type="checkbox" name="termsService" >
                            <label class="form-label fs--1 text-none" for="termsService">Eu aceito os <a href="#!">termos</a> e a <a href="#!">política de privacidade</a></label>
                            <?php if($errors->has('termsService')): ?>
                                <span class="text-danger" style="font-size: 12px;"><?php echo e($errors->first('termsService')); ?></span>
                            <?php endif; ?>
                        </div>
                        <input hidden name="role" value="customer">
                        <button class="btn btn-primary w-100 mb-3" type="submit">Registrar</button>
                        <div class="text-center"><a class="fs--1 fw-bold" href="pages/authentication/simple/sign-in.html">Entrar em uma conta existente</a></div>
                    </form>

                </div>
            </div>

        </div>
      </div>
    </main>


  <script src="{{asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/phoenix.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendors/rater-js/index.j') }}s"></script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/phoenix.js') }}"></script>
    <script src="{{asset('js/toastr.min.js') }}"></script>
  </body>

</html>
