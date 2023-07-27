<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Matomall</title>


    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('vendors/simplebar/simplebar.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

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

    <main style="--phoenix-scroll-margin-top: 1.2rem;">
        <div class="bg-white sticky-top landing-navbar" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
            <nav class="navbar navbar-expand-lg container-small px-3 px-lg-7 px-xxl-3"><a
                    class="navbar-brand flex-1 flex-lg-grow-0" href="index.html">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix"
                            width="27" />
                        <p class="logo-text ms-2">matomall</p>
                    </div>
                </a>
                <div class="d-lg-none">
                    <div class="theme-control-toggle fa-icon-wait px-2"><input
                            class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                            data-theme-control="phoenixTheme" value="dark" id="themeControlToggleSm" /><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                            for="themeControlToggleSm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Switch theme"><span class="icon" data-feather="moon"></span></label><label
                            class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggleSm"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon"
                                data-feather="sun"></span></label></div>
                </div><button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="border-bottom border-bottom-lg-0 mb-2">
                        <div class="search-box d-inline d-lg-none">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input search rounded-pill my-4" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item border-bottom border-bottom-lg-0"><a
                                class="nav-link lh-1 py-0 fs--1 fw-bold py-3 active" aria-current="page"
                                href="#">Início</a></li>
                        <li class="nav-item border-bottom border-bottom-lg-0"><a
                                class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#feature">Recursos</a></li>
                        <li class="nav-item border-bottom border-bottom-lg-0"><a
                                class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="#team">Equipe</a>
                        </li>
                    </ul>
                    <div class="d-grid d-lg-flex align-items-center">
                        <div class="nav-item d-flex align-items-center d-none d-lg-block pe-2">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input
                                    class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                    data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch theme"><span class="icon"
                                        data-feather="moon"></span></label><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch theme"><span class="icon" data-feather="sun"></span></label>
                            </div>
                        </div><a class="text-700 hover-text-1100 px-2 d-none d-lg-inline lh-sm" href="#"
                        data-bs-toggle="modal" data-bs-target="#searchBoxModal"><span data-feather="search"
                            style="height: 20px; width: 20px;"></span></a><a
                        class="btn btn-link text-900 order-1 order-lg-0 ps-3 me-2"
                        href="{{ route('seller.auth.login') }}">Entrar</a><a
                        class="btn btn-phoenix-primary order-0"
                        href="pages/authentication/simple/sign-up.html"><span class="fw-bold">Registrar-se</span></a>
</div>
                </div>
            </nav>
        </div>
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
            data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
            <div class="modal-dialog">
                <div class="modal-content mt-15">
                    <div class="modal-body p-0">
                        <div class="chat-search-box">
                            <div class="form-icon-container"><input
                                    class="form-control py-3 form-icon-input rounded-1" type="text"
                                    autofocus="autofocus" placeholder="Search People, Groups and Messages" /><span
                                    class="fa-solid fa-magnifying-glass fs--1 form-icon"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="bg-white pb-8" id="home">
            <div class="container-small hero-header-container px-lg-7 px-xxl-3">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
                        <div class="position-relative p-5 p-md-7 d-lg-none">
                            <div class="bg-holder"
                                style="background-image:url({{ asset('assets/img/bg/bg-23.png') }});background-size:contain;">
                            </div>

                            <div class="position-relative">
                                <img class="w-100 shadow-lg d-dark-none rounded-2"
                                    src="{{ asset('assets/img/bg/bg-31.png') }}" alt="hero-header" />
                                <img class="w-100 shadow-lg d-light-none rounded-2"
                                    src="{{ asset('assets/img/bg/bg-30.png') }}" alt="hero-header" />
                            </div>
                        </div>
                        <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
                            <div class="position-relative h-100 w-100">
                                <div
                                    class="position-absolute h-100 top-0 d-flex align-items-center end-0 hero-image-container-bg">
                                    <img class="pt-7 pt-md-0 w-100" src="{{ asset('assets/img/bg/bg-1-2.png') }}"
                                        alt="hero-header" />
                                </div>
                                <div class="position-absolute h-100 top-0 d-flex align-items-center end-0">
                                    <img class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2"
                                        src="{{ asset('assets/img/bg/bg-28.png') }}" alt="hero-header" />
                                    <img class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2"
                                        src="{{ asset('assets/img/bg/bg-29.png') }}" alt="hero-header" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0 position-relative">
                        <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4"><span
                                class="text-primary me-3">Venda seus produtos</span>no Matomall</h1>
                        <p class="mb-5">Aproveite as vantagens do Matomall, o marketplace líder para vendedores.
                            Alcance uma ampla base de clientes, gerencie facilmente seus produtos e impulsione suas
                            vendas. assine ou confira a demonstração abaixo.</p>
                        <a class="btn btn-lg btn-primary rounded-pill me-3" href="#planos"
                            role="button">Planos</a>
                        <a class="btn btn-link me-2 fs-0 p-0 text-decoration-none" href="#!" role="button">Ver
                            Demonstração<span class="fa-solid fa-angle-right ms-2 fs--1"></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 pt-xl-13 bg-white">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row g-0">
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end">
                            <img class="w-100" src="assets/img/brand2/netflix-n.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md">
                            <img class="w-100" src="assets/img/brand2/blender.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md">
                            <img class="w-100" src="assets/img/brand2/upwork.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0">
                            <img class="w-100" src="assets/img/brand2/facebook-f.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-bottom-md-0">
                            <img class="w-100" src="assets/img/brand2/pocket.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div
                            class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-bottom-md-0">
                            <img class="w-100" src="assets/img/brand2/mail-bluster-1.png" alt="" />
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end"><img
                                class="w-100" src="assets/img/brand2/discord.png" alt="" /></div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0"><img
                                class="w-100" src="assets/img/brand2/google-g.png" alt="" /></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-15 pb-0" id="feature">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="position-relative z-index-2">
                    <div class="row">
                        <div class="col-lg-6 text-center text-lg-start pe-xxl-3">
                            <h4 class="text-primary fw-bolder mb-4">Recursos</h4>
                            <h2 class="mb-3 text-black lh-base">Um conjunto totalmente integrado<br />de produtos de
                                pagamento</h2>
                            <p class="mb-5">Com o poder do Matomall, você pode se concentrar apenas nas
                                funcionalidades para seus produtos digitais, deixando o design da interface por nossa
                                conta! Com o poder do Matomall, você pode se concentrar apenas nas funcionalidades para
                                seus produtos digitais, deixando o design da interface por nossa conta!</p>
                            <a class="btn btn-lg btn-outline-primary rounded-pill me-2" href="#!"
                                role="button">Saiba mais<i class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
                            <div class="h-100 d-flex flex-column justify-content-between">
                                <div class="border-start-lg border-dashed ps-4">
                                    <img class="mb-4" src="{{ asset('assets/img/icons/illustrations/bolt.png') }}"
                                        width="48" height="48" alt="" />
                                    <div>
                                        <h5 class="fw-bolder mb-2">Velocidade Relâmpago</h5>
                                        <p class="fw-semi-bold lh-sm">Apresente tudo o que você precisa em um só lugar
                                            em questão de minutos! Cresça com o Matomall!</p>
                                    </div>
                                    <div>
                                        <a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Ver
                                            Demonstração<span class="fa-solid fa-angle-right ms-2"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
                            <div class="h-100 d-flex flex-column">
                                <div class="border-start-lg border-dashed ps-4">
                                    <img class="mb-4" src="{{ asset('assets/img/icons/illustrations/pie.png') }}"
                                        width="48" height="48" alt="" />
                                    <div>
                                        <h5 class="fw-bolder mb-2">Solução Tudo-em-um</h5>
                                        <p class="fw-semi-bold lh-sm">Mostre seu crescimento e produção em um só lugar
                                            com o Matomall!</p>
                                    </div>
                                    <div>
                                        <a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Ver
                                            Demonstração<i class="fa-solid fa-angle-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="row mt-12 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                        <div class="col-lg-5">
                            <img class="feature-image mb-9 mb-lg-0 d-dark-none"
                                src="{{ asset('assets/img/spot-illustrations/22_2.png') }}" alt="" />
                            <img class="feature-image mb-9 mb-lg-0 d-light-none"
                                src="{{ asset('assets/img/spot-illustrations/dark_22.png') }}" alt="" />
                        </div>
                        <div class="col-lg-6">
                            <h6 class="text-primary mb-2 ls-2">SINAL</h6>
                            <h3 class="fw-bolder mb-3">Receba os sinais instantaneamente</h3>
                            <p class="mb-4 px-md-7 px-lg-0">O Matomall torna possível receber rapidamente e de forma
                                eficaz todos os sinais. Não há necessidade de esperas demoradas.</p>
                            <a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Ver Demonstração<i
                                    class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                    <div
                        class="row mt-2 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                        <div class="col-lg-5 order-0 order-lg-1">
                            <img class="feature-image mb-9 mb-lg-0 d-dark-none"
                                src="{{ asset('assets/img/spot-illustrations/23_2.png') }}" height="394"
                                alt="" />
                            <img class="feature-image mb-9 mb-lg-0 d-light-none"
                                src="{{ asset('assets/img/spot-illustrations/dark_23.png') }}" height="394"
                                alt="" />
                        </div>
                        <div class="col-lg-6">
                            <h6 class="text-primary mb-2 ls-2">RECEITA</h6>
                            <h3 class="fw-bolder mb-3">Veja sua receita crescer</h3>
                            <p class="mb-4 px-md-7 px-lg-0">Cresça com o Matomall. Nós ajudamos você com tudo o que
                                você precisa. Tornamos tudo fácil e simples.</p>
                            <a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Ver Demonstração<i
                                    class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                    <div
                        class="row mt-2 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
                        <div class="col-lg-5">
                            <img class="feature-image mb-9 mb-lg-0 d-dark-none"
                                src="{{ asset('assets/img/spot-illustrations/24_2.png') }}" height="394"
                                alt="" />
                            <img class="feature-image mb-9 mb-lg-0 d-light-none"
                                src="{{ asset('assets/img/spot-illustrations/dark_24.png') }}" height="394"
                                alt="" />
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <h6 class="text-primary mb-2 ls-2">RELATÓRIOS</h6>
                            <h3 class="fw-bolder mb-3">Obtenha relatórios prontos</h3>
                            <p class="mb-4 px-md-7 px-lg-0">Com o Matomall, você pode obter relatórios prontos sobre
                                sua análise de crescimento a qualquer momento. Este painel também possui todos os
                                filtros acessíveis de acordo com suas necessidades.</p>
                            <a class="btn btn-link me-2 p-0 fs--1" href="#!" role="button">Ver Demonstração<i
                                    class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="position-relative">
            <div class="bg-holder z-index-2 d-none d-md-block"
                style="background-image:url(assets/img/bg/13.png);background-size:auto;background-position:right;">
            </div>
            <div class="bg-holder z-index-2 d-none d-md-block d-lg-none d-xl-block"
                style="background-image:url(assets/img/bg/bg-12.png);background-size:auto;background-position:left;">
            </div>
            <div class="bottom-0 start-0 end-0 bg-white"><svg class="w-100 text-soft" viewBox="0 0 1920 368"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg></div>
            <section class="pb-0 bg-white overflow-hidden position-static">
                <div class="container-small px-lg-7 px-xxl-3">
                    <div class="row">
                        <div class="col-lg-6 mb-6 text-center text-lg-start z-index-2">
                            <h4 class="text-primary fw-bolder mb-3">Testimonial</h4>
                            <h2 class="mb-3 text-black">More than 2 Millions happy<br />Customers and counting</h2>
                            <p class="mb-5">You may now concentrate on the functionality and other <br
                                    class="d-none d-sm-block" />aspects of your web products thanks to Phoenix s
                                strength<br class="d-none d-sm-block" />before leaving the UI design to us. It is
                                simple to complete<br class="d-none d-sm-block" />the work after checking and
                                double-checking.</p>
                        </div>
                        <div class="col-lg-6 z-index-2">
                            <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                                            <div class="col-lg-6 col-xl-5 text-center">
                                                <div
                                                    class="testimonial-avatar-container d-inline-block position-relative">
                                                    <div class="bg-holder"
                                                        style="background-image:url(assets/img/bg/bg-2.png);background-size:contain;">
                                                    </div>

                                                    <img class="rounded-3 mb-lg-0 opacity-100 position-relative"
                                                        src="assets/img/team/61.webp" width="153" height="153"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                                                <div class="mb-4 light"><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span></div>
                                                <h3 class="fs-1 fs-xl-2 mb-5 lh-sm me-md-7 me-lg-0">Brilliant app! Will
                                                    definitely going to be my first choice starting from today</h3>
                                                <h6>Monica Gomez</h6>
                                                <h6 class="fw-normal">UX designer, Google</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                                            <div class="col-lg-6 col-xl-5 text-center">
                                                <div
                                                    class="testimonial-avatar-container d-inline-block position-relative">
                                                    <div class="bg-holder"
                                                        style="background-image:url(assets/img/bg/bg-2.png);background-size:contain;">
                                                    </div>

                                                    <img class="rounded-3 mb-lg-0 opacity-100 position-relative"
                                                        src="assets/img/team/35.webp" width="154"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                                                <div class="mb-4 light"><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span><span
                                                        class="fa fa-star text-primary"></span></div>
                                                <h3 class="fs-1 fs-xl-2 mb-5 lh-sm me-md-7 me-lg-0">“Phoenix is all you
                                                    can ask for. This is perfect fit for everything you might want to
                                                    work on!”</h3>
                                                <h6>Axel Barry</h6>
                                                <h6 class="fw-normal">UX designer, Apple</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="position-relative">
            <div class="bg-holder world-map-bg" style="background-image:url(assets/img/bg/bg-13.png);"></div>

            <div class="bg-holder z-index-2 opacity-25"
                style="background-image:url(assets/img/bg/bg-right-21.png);background-size:auto;background-position:right;">
            </div>

            <div class="bg-holder z-index-2 mt-9 opacity-25"
                style="background-image:url(assets/img/bg/bg-left-21.png);background-size:auto;background-position:left;">
            </div>

            <svg class="w-100 text-white position-relative" preserveAspectRatio="none" viewBox="0 0 1920 368"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
            </svg>
            <section class="overflow-hidden z-index-2">
                <div class="container-small light px-lg-7 px-xxl-3">
                    <div class="position-relative">
                        <div class="row mb-6">
                            <div class="col-xl-6 text-center text-md-start">
                                <h2 class="text-white mb-2">Usado por milhões de usuários</h2>
                                <h1 class="fs-md-5 fs-xl-6 fw-black text-gradient-info text-uppercase mb-4 mb-md-0">
                                    EM TODO O MUNDO</h1>
                            </div>
                            <div class="col-xl-6 text-center text-md-start">
                                <p class="text-white">Você pode obter todos os relatórios, análises de dados e mapas de crescimento de que precisa com a ajuda do poder do Matomall, e você pode revisá-los e modificá-los sempre que quiser. Esses recursos tornam este painel excepcional.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 text-center text-md-start mb-6 mb-xl-0">
                                <div class="d-md-flex justify-content-md-between">
                                    <div class="mb-6 mb-md-0 me-4">
                                        <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":125,"duration":10,"suffix":"+"}'>0 <span>+</span></h1>
                                        <p class="text-white">A cada mês, há mais de<br class="d-md-none d-lg-block" />125+ vendas.</p>
                                    </div>
                                    <div class="mb-6 mb-md-0 me-4">
                                        <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":308,"duration":10,"suffix":"k"}'>0</h1>
                                        <p class="text-white">Temos mais de 308 assinantes<br class="d-md-none d-lg-block" />pagos ativos.</p>
                                    </div>
                                    <div class="mb-6 mb-md-0 me-4">
                                        <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":12,"duration":0.5}'>0</h1>
                                        <p class="text-white">Já ganhamos 12 prêmios<br class="d-md-none d-lg-block" />com grande sucesso.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 text-center text-md-start"><img class="img-fluid" src="assets/img/generic/capterra.png" alt="" /></div>
                        </div>
                    </div>
                </div>
            </section>
            <svg class="text-white w-100 position-relative" viewBox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 368L1920 0.730011L1920 368L0 368Z" fill="currentColor"></path>
            </svg
        </div>

        <section class="bg-white">
            <div class="bg-holder d-none d-md-block"
                style="background-image:url(assets/img/bg/bg-left-15.png);background-position:left;background-size:auto;">
            </div>

            <div class="bg-holder d-none d-md-block"
                style="background-image:url(assets/img/bg/bg-right-15.png);background-position:right;background-size:auto;">
            </div>

            <div class="container-small position-relative px-lg-7 px-xxl-3">
                <div class="row">
                    <div class="col-12 mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Preços e </h4>
                        <h2>Escolha a melhor opção para o seu negócio</h2>
                    </div>
                    <div class="col-md-6 text-center text-sm-start">
                        <p>Atrai os compradores com a plataforma de administração do nosso marketplace. Apresente as
                            melhores ofertas nesta seção para ajudar os clientes a escolher entre as opções disponíveis.
                            Centralize todas as opções em um único lugar, tornando o processo de compra mais eficiente.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-sm-start">
                        <p>Ofereça diferentes aos vendedores, permitindo que eles comparem e encontrem a opção que
                            melhor se adequa às suas necessidades. Mostre os detalhes dos aqui e incentive-os a começar
                            a vender em nosso marketplace.</p>
                    </div>
                </div>
                <div class="row pt-9 g-3 g-xl-0">
                    <div class="col-md-6 col-xl-3">
                        <div class="card h-100 rounded-xl-end-0 rounded-start">
                            <form action="{{ route('payment.subscription') }}" method="POST">
                                @csrf
                                <div class="card-body px-6">
                                    <div class="px-5"  id="planos">
                                        <div class="text-center pt-5"><img
                                                src="{{ asset('assets/img/icons/illustrations/pie.png') }}"
                                                width="48" height="48" alt="" />
                                            <h3 class="fw-semi-bold my-4">Básico</h3>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="fw-semi-bold text-primary"><span
                                                    class="fw-bolder">29,99</span><span
                                                    class="text-black fs-1 ms-1 fw-bolder">R$</span></h1>
                                            <h5 class="mb-4 text-900">Comece a vender seus produtos</h5>
                                            <button type="submit" class="btn btn-lg mb-6 w-100 btn-outline-primary">Assinar</button>
                                        </div>
                                    </div>
                                    <ul class="fa-ul pricing-list">
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-800" style="--phoenix-text-opacity:1;">Perfil de
                                                Vendedor</span></li>
                                        <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                    class="fas fa-check text-primary"></span></span><span
                                                class="text-800" style="--phoenix-text-opacity:1;">Listagem de
                                                Produtos</span></li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                                style="--phoenix-text-opacity:.5;">Suporte Básico</span></li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                                style="--phoenix-text-opacity:.5;">Comissão de Vendas: 5%</span></li>
                                        <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                                style="--phoenix-text-opacity:.5;">Métricas de Desempenho</span><span
                                                class="badge badge-phoenix badge-phoenix-warning ms-2 fs--2 opacity-50">Novo</span>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card h-100 rounded-xl-end-0 rounded-start">
                            <div class="card-body px-6">
                                <div class="px-5">
                                    <div class="text-center pt-5"><img
                                            src="{{ asset('assets/img/icons/illustrations/bolt.png') }}"
                                            width="48" height="48" alt="" />
                                        <h3 class="fw-semi-bold my-4">Premium</h3>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="fw-semi-bold text-primary"><span class="fw-bolder">99,99</span><span
                                                class="text-black fs-1 ms-1 fw-bolder">R$</span></h1>
                                        <h5 class="mb-4 text-900">Destaque seus produtos e alcance mais clientes</h5>
                                        <button class="btn btn-lg mb-6 w-100 btn-outline-primary">Assinar</button>
                                    </div>
                                </div>
                                <ul class="fa-ul pricing-list">
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Perfil de Vendedor</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Listagem de Produtos</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Suporte Prioritário</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Comissão de Vendas: 3%</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Publicidade Destacada</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card h-100 rounded-xl-end-0 rounded-start">
                            <div class="card-body px-6">
                                <div class="px-5">
                                    <div class="text-center pt-5"><img
                                            src="{{ asset('assets/img/icons/illustrations/edit.png') }}"
                                            width="48" height="48" alt="" />
                                        <h3 class="fw-semi-bold my-4">Pro</h3>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="fw-semi-bold text-primary"><span class="fw-bolder">299,99</span><span
                                                class="text-black fs-1 ms-1 fw-bolder">R$</span></h1>
                                        <h5 class="mb-4 text-900">Desbloqueie recursos avançados para expandir seus
                                            negócios</h5><button
                                            class="btn btn-lg mb-6 w-100 btn-outline-primary">Assinar</button>
                                    </div>
                                </div>
                                <ul class="fa-ul pricing-list">
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Perfil de Vendedor</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Listagem de Produtos</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Suporte VIP</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="fa-li"><span
                                                class="fas fa-check text-primary"></span></span><span class="text-800"
                                            style="--phoenix-text-opacity:1;">Publicidade Avançada</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Comissão de Vendas: 1%</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Análise de Dados</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card h-100 rounded-xl-end-0 rounded-start">
                            <div class="card-body px-6">
                                <div class="px-5">
                                    <div class="text-center pt-5"><img
                                            src="{{ asset('assets/img/icons/illustrations/shield.png') }}"
                                            width="48" height="48" alt="" />
                                        <h3 class="fw-semi-bold my-4">Personalizado</h3>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="fw-semi-bold text-primary"><span class="fw-bolder">350,99</span><span
                                                class="text-black fs-1 ms-1 fw-bolder">R$</span></h1>
                                        <h5 class="mb-4 text-900">Precisa de uma solução personalizada? Nós temos a
                                            resposta.</h5><button
                                            class="btn btn-lg mb-6 w-100 btn-outline-primary">Assinar</button>
                                    </div>
                                </div>
                                <ul class="fa-ul pricing-list">
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Todas as funcionalidades dos outros
                                        </span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Suporte Personalizado</span></li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Comissão de Vendas Personalizada</span>
                                    </li>
                                    <li class="mb-4 d-flex align-items-center"><span class="text-800"
                                            style="--phoenix-text-opacity:.5;">Recursos Exclusivos</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white" id="blog">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row">
                    <div class="col-12 mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Blog</h4>
                        <h2>Latest articles</h2>
                    </div>
                    <div class="col-lg-6 text-center text-sm-start">
                        <p>See the latest articles we published with this dashboard. Your customers will be happy to
                            find all the latest posts in one place. This menu efficiently shows all related topics from
                            search filters and provides the customers with what</p>
                    </div>
                    <div class="col-lg-6 text-center text-sm-start">
                        <p>they need. Also you can just educate your customers about everything they need to know and
                            follow to avail a service with you. This menu is the one to show them that.</p>
                    </div>
                </div>
                <div class="row h-100 g-3 justify-content-center">
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover"
                                src="assets/img/blog/blog-1.png" alt="..." />
                            <div class="card-body rounded-top">
                                <div class="d-flex align-items-cente mb-3">
                                    <div class="d-flex align-items-center me-3"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span class="fa-solid fa-eye text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">2563</span></a></div>
                                    <div class="d-flex align-items-center me-3"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span class="fa-solid fa-heart text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">125</span></a></div>
                                    <div class="d-flex align-items-center"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span
                                                class="fa-solid fa-comment text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">125</span></a></div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">SEO</span>
                                <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Top 10 ways to Ace SEO for your business
                                </h4><a class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                    role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover"
                                src="assets/img/blog/blog-2.png" alt="..." />
                            <div class="card-body rounded-top">
                                <div class="d-flex align-items-cente mb-3">
                                    <div class="d-flex align-items-center me-3"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span class="fa-solid fa-eye text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">1256</span></a></div>
                                    <div class="d-flex align-items-center me-3"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span class="fa-solid fa-heart text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">325</span></a></div>
                                    <div class="d-flex align-items-center"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span
                                                class="fa-solid fa-comment text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">32</span></a></div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">Marketing</span>
                                <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Top 12 Marketing strategies you can take
                                </h4><a class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                    role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover"
                                src="assets/img/blog/blog-3.png" alt="..." />
                            <div class="card-body rounded-top">
                                <div class="d-flex align-items-cente mb-3">
                                    <div class="d-flex align-items-center me-3"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span class="fa-solid fa-eye text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">142</span></a></div>
                                    <div class="d-flex align-items-center me-3"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span class="fa-solid fa-heart text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">123</span></a></div>
                                    <div class="d-flex align-items-center"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span
                                                class="fa-solid fa-comment text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">22</span></a></div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">Marketing</span>
                                <h4 class="fw-bold mb-3 lh-sm line-clamp-2">The top 7 methods to improve as a marketer
                                </h4><a class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                    role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3 mb-md-0">
                        <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover"
                                src="assets/img/blog/blog-4.png" alt="..." />
                            <div class="card-body rounded-top">
                                <div class="d-flex align-items-cente mb-3">
                                    <div class="d-flex align-items-center me-3"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span class="fa-solid fa-eye text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">2563</span></a></div>
                                    <div class="d-flex align-items-center me-3"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span class="fa-solid fa-heart text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">325</span></a></div>
                                    <div class="d-flex align-items-center"><a
                                            class="btn-link text-decoration-none d-flex align-items-center"
                                            href="#!"><span
                                                class="fa-solid fa-comment text-500 me-1"></span><span
                                                class="text-900 fs--2 lh-1">112</span></a></div>
                                </div><span class="badge badge-phoenix badge-phoenix-primary mb-2">Tech</span>
                                <h4 class="fw-bold mb-3 lh-sm line-clamp-2">Best places for a tech job in U.S</h4><a
                                    class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="#!"
                                    role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-6"><a class="btn btn-outline-primary" href="#!">View All<span
                            class="fa-solid fa-angle-right ms-2"></span></a></div>
            </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->



        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-white">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row mb-3 text-center text-sm-start">
                    <div class="col-12 mb-4">
                        <h4 class="text-primary fw-bolder mb-3">Address</h4>
                        <h2>If you need to find us:</h2>
                    </div>
                    <div class="col-md-6">
                        <p>Do not lose your potential customers to others. Tell them exactly where you are with
                            Geolocation enabled Phoenix admin dashboard, No need to take the burden of communicating
                            directly.</p>
                    </div>
                    <div class="col-md-6">
                        <p>You can easily tell your customers where to find you with precise location map. Getting
                            closer was never easier!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-15">
                        <div class="googlemap" data-googlemap="data-googlemap" data-gmap="data-gmap"
                            data-latlng="40.7228022,-74.0020158" data-scrollwheel="false" data-zoom="15"
                            style="height: 381px; border-radius:1.5rem;">
                            <div class="marker-content py-3">
                                <h5>Google map</h5>
                                <p>A nice template for your site.<br />Customize it as you want.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-lg-5">
                    <div class="col-md-6 mb-5 mb-md-0 text-center text-md-start">
                      <h3 class="mb-3">Mantenha-se conectado</h3>
                      <p class="mb-5">Mantenha-se conectado com o Centro de Ajuda do Matomall; o Matomall está disponível para suas necessidades o tempo todo.</p>
                      <div class="d-flex flex-column align-items-center align-items-md-start gap-3 gap-md-0">
                        <div class="d-md-flex align-items-center">
                          <div class="icon-wrapper shadow-info"><span class="uil uil-phone text-primary light fs-4 z-index-1 ms-2"></span></div>
                          <div class="flex-1 ms-3"><a class="link-900" href="tel:+244932932532">(+244) 932 932 532</a></div>
                        </div>
                        <div class="d-md-flex align-items-center">
                          <div class="icon-wrapper shadow-info"><span class="uil uil-envelope text-primary light fs-4 z-index-1 ms-2"></span></div>
                          <div class="flex-1 ms-3"><a class="fw-semi-bold text-900" href="mailto:matomall@suporte.com">matomall@suporte.com</a></div>
                        </div>
                        <div class="mb-6 d-md-flex align-items-center">
                          <div class="icon-wrapper shadow-info"><span class="uil uil-map-marker text-primary light fs-4 z-index-1 ms-2"></span></div>
                          <div class="flex-1 ms-3"><a class="fw-semi-bold text-900" href="#!">Av. Talatona, Lote 45, Loja 302 Luanda, Angola</a></div>
                        </div>
                        <div class="d-flex">
                          <a href="#!"><span class="fa-brands fa-facebook fs-2 text-primary me-3"></span></a>
                          <a href="#!"><span class="fa-brands fa-twitter fs-2 text-primary me-3"></span></a>
                          <a href="#!"><span class="fa-brands fa-linkedin-in fs-2 text-primary"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                      <h3 class="mb-3">Deixe-nos uma mensagem</h3>
                      <p class="mb-7">Se você tiver alguma dúvida ou sugestão, estamos abertos a aprender com você. Vamos conversar, entre em contato a qualquer momento.</p>
                      <form class="row g-4">
                        <div class="col-12">
                          <input class="form-control bg-white" type="text" name="name" placeholder="Nome" required="required" />
                        </div>
                        <div class="col-12">
                          <input class="form-control bg-white" type="email" name="email" placeholder="Email" required="required" />
                        </div>
                        <div class="col-12">
                          <textarea class="form-control bg-white" rows="6" name="message" placeholder="Mensagem" required="required"></textarea>
                        </div>
                        <div class="col-12 d-grid">
                          <button class="btn btn-outline-primary" type="submit">Enviar</button>
                        </div>
                        <div class="feedback"></div>
                      </form>
                    </div>
                  </div>
            </div>
        </section>

        <section id="team">
            <div class="bg-holder z-index-2"
                style="background-image:url(assets/img/bg/bg-left-17.png);background-size:auto;background-position:left center;">
            </div>

            <div class="bg-holder z-index-2"
                style="background-image:url(assets/img/bg/bg-right-17.png);background-size:auto;background-position:right center;">
            </div>

            <div class="position-absolute top-0 end-0 start-0"><svg class="w-100 text-white"
                    preserveAspectRatio="none" viewBox="0 0 1920 368" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg></div>
            <div class="position-absolute bottom-0 end-0 start-0"><svg class="text-white w-100"
                    viewBox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 368L1920 0.730011L1920 368L0 368Z" fill="currentColor"></path>
                </svg></div>
            <div class="container-small position-relative py-1 px-lg-7 px-xxl-3" style="z-index:10">
                <div class="row">
                    <div class="col-12 mb-4 text-center text-sm-start">
                        <h4 class="text-primary fw-bolder mb-3">Team</h4>
                        <h2>Our small team behind our success</h2>
                    </div>
                    <div class="col-md-6 text-center text-sm-start">
                        <p>We have a small but strong development team to follow up on the development process. Reach
                            out to us for further information.</p>
                    </div>
                    <div class="col-md-6 text-center text-sm-start">
                        <p>The team is ready to answer all your questions within minutes. The efficient team is always
                            at your beck and call.</p>
                    </div>
                </div>
                <div class="row align-items-center ps-lg-11 pe-lg-9">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>

                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/62.webp"
                                    alt="..." />
                            </div>
                            <h4>John Smith</h4>
                            <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>

                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/63.webp"
                                    alt="..." />
                            </div>
                            <h4>Marc Chiasson</h4>
                            <h6 class="mb-3 fw-semi-bold">Vice President</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>

                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/64.webp"
                                    alt="..." />
                            </div>
                            <h4>Lilah Lola</h4>
                            <h6 class="mb-3 fw-semi-bold">Marketing Manager</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>

                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/65.webp"
                                    alt="..." />
                            </div>
                            <h4>Thomas Doe</h4>
                            <h6 class="mb-3 fw-semi-bold">UX Designer</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>

                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/66.webp"
                                    alt="..." />
                            </div>
                            <h4>Alan Casey</h4>
                            <h6 class="mb-3 fw-semi-bold">Front End Developer</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>

                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/67.webp"
                                    alt="..." />
                            </div>
                            <h4>Narokin Hijita</h4>
                            <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>

                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/68.webp"
                                    alt="..." />
                            </div>
                            <h4>Narokin Hijita</h4>
                            <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="text-center mt-5 position-relative">
                            <div class="team-avatar-container d-inline-block position-relative">
                                <div class="bg-holder"
                                    style="background-image:url(assets/img/bg/bg-21.png);background-size:contain;">
                                </div>

                                <img class="img-fluid rounded mb-3 position-relative" src="assets/img/team/69.webp"
                                    alt="..." />
                            </div>
                            <h4>Narokin Hijita</h4>
                            <h6 class="mb-3 fw-semi-bold">CEO, Global Cheat</h6><a href="#!"><span
                                    class="fa-brands fa-facebook text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-twitter text-primary me-3"></span></a><a href="#!"><span
                                    class="fa-brands fa-linkedin-in text-primary"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white pb-0">
            <div class="container-small px-lg-7 px-xxl-3">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="card py-md-9 px-md-13 border-0 z-index-1 shadow-lg cta-card">
                            <div class="bg-holder"
                                style="background-image:url({{ asset('public/img/bg/bg-18.png') }});background-position:right;background-size:auto;">
                            </div>

                            <div class="card-body position-relative">
                                <img class="img-fluid mb-5 d-dark-none"
                                    src="{{ asset('assets/img/spot-illustrations/27.png') }}" width="210"
                                    alt="..." />
                                <img class="img-fluid mb-5 d-light-none"
                                    src="{{ asset('assets/img/spot-illustrations/dark_27.png') }}" width="210"
                                    alt="..." />
                                <h1 class="fs-2 fs-sm-4 fs-lg-6 fw-bolder lh-sm mb-3">Junte-se ao<span
                                        class="gradient-text-primary mx-2">Matomall</span><span>hoje</span></h1>
                                <form class="d-flex justify-content-center mb-3 px-xxl-12">
                                    <div class="d-grid d-sm-block"></div>
                                    <input class="form-control me-3" id="ctaEmail1" type="email"
                                        placeholder="Email" aria-describedby="ctaEmail1" />
                                    <button class="btn btn-primary" type="submit">Inscrever-se</button>
                                </form>
                                <p>O melhor suporte do mundo, somente o Matomall pode garantir.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="position-relative">
            <div class="bg-holder footer-bg"
                style="background-image:url(assets/img/bg/bg-19.png);background-size:auto;"></div>

            <div class="bg-holder"
                style="background-image:url(assets/img/bg/bg-right-20.png);background-position:right;background-size:auto;">
            </div>

            <div class="bg-holder"
                style="background-image:url(assets/img/bg/bg-left-20.png);background-position:left;background-size:auto;">
            </div>

            <div class="position-relative"><svg class="w-100 text-white" preserveAspectRatio="none"
                    viewBox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
                </svg>

                <section style="padding-top:250px;">
                    <div class="container-small px-lg-7 px-xxl-3">
                        <div class="row position-relative">
                            <div class="col-12 col-sm-12 col-lg-5 mb-4 order-0 order-sm-0"><a href="#"><img
                                        class="mb-3" src="assets/img/icons/logo-white.png" height="48"
                                        alt="" /></a>
                                <h3 class="text-white light">Matomall</h3>
                                <p class="text-white opacity-50 light">Em todo o mundo. Alice no <br />país das
                                    maravilhas e outros lugares.</p>
                            </div>
                            <div class="col-lg-7">
                                <div class="row justify-content-between">
                                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
                                        <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="fw-bolder mb-2 text-light light">Ajuda</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Sobre</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Contato</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Desenvolvedores</a></li>
                                            </ul>
                                        </div>
                                        <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="lh-lg fw-bolder mb-2 text-light light">Siga-nos</h5>
                                            <ul class="list-unstyled mb-2">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Facebook</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Twitter</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Linkedin</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                                        <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="lh-lg fw-bold text-light mb-2 light">Suporte</h5>
                                            <ul class="list-unstyled mb-md-2">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Privacidade</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Comunidade</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Contato</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Blog</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">FAQ</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Projeto</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Equipe</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                                        <div class="border-dashed border-start border-primary-300 ps-3"
                                            style="--phoenix-border-opacity: .2;">
                                            <h5 class="lh-lg fw-bold text-light mb-2 light">Informações</h5>
                                            <ul class="list-unstyled mb-md-2">
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Pessoal</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Sistema NFT</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Agência</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Contato</a></li>
                                                <li class="mb-1"><a
                                                        class="text-500 hover-text-100 light text-decoration-none"
                                                        href="#!">Sobre</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </main>

    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/phoenix.js') }}"></script>
    <script src="{{ asset('vendors/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/isotope-packery/packery-mode.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/bigpicture/BigPicture.js') }}"></script>
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</body>

</html>
