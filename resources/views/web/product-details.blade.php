<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../../../vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../../../vendors/glightbox/glightbox.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
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

        @component('web.components.top')
        @endcomponent

        @component('web.components.nav')
        @endcomponent

        <div class="pt-5 pb-9">
            <section class="py-0">
                <div class="container-small">
                    <nav class="mb-3" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Fashion</a></li>
                            <li class="breadcrumb-item"><a href="#">Womens fashion</a></li>
                            <li class="breadcrumb-item"><a href="#">Footwear</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hills</li>
                        </ol>
                    </nav>
                    <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
                        <div class="col-12 col-lg-6">
                            <div class="row g-3 mb-3">
                                <div class="col-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: 120px">
                                    <div class="d-flex align-items-center border rounded-3 text-center p-5 h-100"
                                        style="margin-top: -100px">
                                        <img src="{{ asset('storage/' . $product->photos->first()->image) }}"
                                            alt="" srcset="" class="img-fluid mw-100">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button class="btn btn-lg btn-outline-warning rounded-pill flex-fill me-3 px-2 px-sm-4 fs--1 fs-sm-0">
                                    <span class="me-2 far fa-heart"></span>Adicionar a lista de desejos
                                </button>
                                <form action="" method="post">
                                    <input class="form-control" type="number" name="quantidade" id="quantidade" value="1">
                                    <button class="btn btn-lg btn-warning rounded-pill flex-fill fs--1 fs-sm-0">
                                        <span class="fas fa-shopping-cart me-2"></span> Adicionar ao carrinho
                                    </button>
                                </form>
                            </div>

                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <div>
                                    <div class="d-flex flex-wrap">
                                        <div class="me-2"><span class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span><span
                                                class="fa fa-star text-warning"></span></div>
                                        <p class="text-primary fw-semi-bold mb-2">6548 Pessoas avaliadas e revisadas
                                        </p>
                                    </div>
                                    <h3 class="mb-3 lh-sm">{{ $product->name }}</h3>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h1 class="me-3">{{ \App\Helpers\ptBRHelper::real($product->price) }}</h1>
                                    </div>
                                    <p class="text-success fw-semi-bold fs-1 mb-2">Em estoque</p>
                                    <p class="mb-2 text-800">{{ $product->description }}</p>
                                </div>
                                <div>

                                    <div class="row g-3 g-sm-5 align-items-end">
                                        <div class="col-12 col-sm-auto">
                                            <p class="fw-semi-bold mb-2 text-900">Tamanho : </p>
                                            <div class="d-flex align-items-center"><select class="form-select w-auto">
                                                    <option value="44">44</option>
                                                    <option value="22">22</option>
                                                    <option value="18">18</option>
                                                </select><a class="ms-2 fs--1 fw-semi-bold" href="#!">Tabela de
                                                    tamanhos</a></div>
                                        </div>
                                        <div class="col-12 col-sm">
                                            <p class="fw-semi-bold mb-2 text-900">Quantidade : </p>
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="d-flex flex-between-center" data-quantity="data-quantity">
                                                    <button class="btn btn-phoenix-primary px-3"
                                                        data-type="minus"><span
                                                            class="fas fa-minus"></span></button><input
                                                        class="form-control text-center input-spin-none bg-transparent border-0 outline-none"
                                                        style="width:50px;" type="number" min="1"
                                                        value="2" /><button class="btn btn-phoenix-primary px-3"
                                                        data-type="plus"><span class="fas fa-plus"></span></button>
                                                </div><button class="btn btn-phoenix-primary px-3 border-0"><span
                                                        class="fas fa-share-alt fs-1"></span></button>
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

        <section class="py-0 mb-9">
            <div class="container">
                <div class="d-flex flex-between-center mb-3">
                    <div>
                        <h3>Produtos Similares</h3>
                        <p class="mb-0 text-700 fw-semi-bold">Essencial para uma vida melhor</p>
                    </div>
                </div>
                <div class="swiper-theme-container products-slider">
                    <div class="swiper swiper-container theme-slider"
                        data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":16},"992":{"slidesPerView":4,"spaceBetween":16},"1200":{"slidesPerView":5,"spaceBetween":16},"1540":{"slidesPerView":6,"spaceBetween":16}}}'>
                        <div class="swiper-wrapper">
                            @foreach ($similar_products as $product)
                                <div class="swiper-slide">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="border border-1 rounded-3 position-relative mb-3">
                                                    <button
                                                        class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Add to wishlist">
                                                        <span class="fas fa-heart d-block-hover"></span>
                                                        <span class="far fa-heart d-none-hover"></span>
                                                    </button>
                                                    <img class="img-fluid"
                                                        src="{{ asset('storage/' . $product->photos->first()->image) }}"
                                                        alt="" />
                                                </div>
                                                <a class="stretched-link text-decoration-none"
                                                    href="{{ route('product.details', $product->slug) }}">
                                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">
                                                        {{ $product->name }}</h6>
                                                </a>
                                                <p class="fs--1">
                                                    @for ($i = 0; $i < $product->rating; $i++)
                                                        <span class="fa fa-star text-warning"></span>
                                                    @endfor
                                                    <span
                                                        class="text-500 fw-semi-bold ms-1">({{ $product->ratingCount }}
                                                        people rated)</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h3 class="text-1100">
                                                    {{ \App\Helpers\ptBRHelper::real($product->price) }}</h3>
                                                <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">
                                                    {{ $product->colorCount }} colors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-nav">
                        <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                        <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                    </div>
                </div>
            </div>
        </section>
        @component('web.components.footer')
        @endcomponent


        <script src="../../../vendors/popper/popper.min.js"></script>
        <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
        <script src="../../../vendors/anchorjs/anchor.min.js"></script>
        <script src="../../../vendors/is/is.min.js"></script>
        <script src="../../../vendors/fontawesome/all.min.js"></script>
        <script src="../../../vendors/lodash/lodash.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="../../../vendors/list.js/list.min.js"></script>
        <script src="../../../vendors/feather-icons/feather.min.js"></script>
        <script src="../../../vendors/dayjs/dayjs.min.js"></script>
        <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
        <script src="../../../vendors/dropzone/dropzone.min.js"></script>
        <script src="../../../vendors/rater-js/index.js"></script>
        <script src="../../../vendors/glightbox/glightbox.min.js"></script>
        <script src="../../../assets/js/phoenix.js"></script>
</body>

</html>
