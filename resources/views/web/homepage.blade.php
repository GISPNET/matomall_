@extends('web.layouts.app')
@section('titulo', 'Matomall')
@section('body')
    <main class="main" id="top">
        @component('web.components.top')
        @endcomponent

        @component('web.components.nav')
        @endcomponent

        <div class="ecommerce-homepage pt-5 mb-9">

            @component('web.components.category')
            @endcomponent

            <section class="py-0 px-xl-3">
                <div class="container px-xl-0 px-xxl-3">
                    <div class="row g-3 mb-9">
                        <div class="col-12">
                            <div class="whooping-banner w-100 rounded-3 overflow-hidden">
                                <div class="bg-holder z-index--1 product-bg"
                                    style="background-image:url(assets/img/e-commerce/whooping_banner_product.png);background-position: bottom right;">
                                </div>
                                <!--/.bg-holder-->
                                <div class="bg-holder z-index--1 shape-bg"
                                    style="background-image:url(assets/img/e-commerce/whooping_banner_shape_2.png);background-position: bottom left;">
                                </div>
                                <!--/.bg-holder-->
                                <div class="banner-text light">
                                    <h2 class="text-warning-300 fw-bolder fs-lg-5 fs-xxl-6">Gritando <span
                                            class="gradient-text">60% </span>de desconto</h2>
                                    <h3 class="fw-bolder fs-lg-3 fs-xxl-5 text-white light">em itens do dia a dia</h3>
                                </div><a class="btn btn-lg btn-primary rounded-pill banner-button" href="#!">Compre
                                    agora</a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="gift-items-banner w-100 rounded-3 overflow-hidden">
                                <div class="bg-holder z-index--1 banner-bg"
                                    style="background-image:url(assets/img/e-commerce/gift-items-banner-bg.png);"></div>
                                <!--/.bg-holder-->
                                <div class="banner-text text-md-center light">
                                    <h2 class="text-white fw-bolder fs-xl-4">Obtenha <span class="gradient-text">10% de
                                            desconto</span><br class="d-md-none"> em itens de presente</h2><a
                                        class="btn btn-lg btn-primary rounded-pill banner-button" href="#!">Comprar
                                        Agora</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div
                                class="best-in-market-banner d-flex h-100 px-4 px-sm-7 py-5 px-md-11 rounded-3 overflow-hidden">
                                <div class="bg-holder z-index--1 banner-bg"
                                    style="background-image:url(assets/img/e-commerce/best-in-market-bg.png);"></div>
                                <!--/.bg-holder-->
                                <div class="row align-items-center w-sm-100">
                                    <div class="col-8">
                                        <div class="banner-text light">
                                            <h2 class="text-white fw-bolder fs-sm-4 mb-5">MI 11 Pro<br><span
                                                    class="fs-1 fs-sm-2">O melhor do mercado</span></h2><a
                                                class="btn btn-lg btn-warning rounded-pill banner-button"
                                                href="#!">Comprar Agora</a>
                                        </div>
                                    </div>
                                    <div class="col-4"><img class="w-100 w-sm-75" src="assets/img/e-commerce/5.png"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 mb-6">
                        <div class="col-12 col-lg-9 col-xxl-10">
                            <div class="d-flex flex-between-center mb-3">
                                <div class="d-flex"><span class="fas fa-bolt text-warning fs-2"></span>
                                    <h3 class="mx-2">Principais ofertas hoje</h3><span
                                        class="fas fa-bolt text-warning fs-2"></span>
                                </div><a class="btn btn-link btn-lg p-0 d-none d-md-block" href="#!">Explore mais<span
                                        class="fas fa-chevron-right fs--1 ms-1"></span></a>
                            </div>
                            <div class="swiper-theme-container products-slider">
                                <div class="swiper swiper-container theme-slider"
                                    data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":20},"1200":{"slidesPerView":4,"spaceBetween":16},"1540":{"slidesPerView":5,"spaceBetween":16}}}'>
                                    <div class="swiper-wrapper">
                                        @foreach ($products as $product)
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
                                                                @if ($product->photos->count())
                                                                    <img class="img-fluid"
                                                                        src="{{ Storage::url($product->photos->first()->image) }}"
                                                                        alt="" />
                                                                @else
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('assets/img/matomall-placeholder.png') }}"
                                                                        alt="" />
                                                                @endif
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
                                                                <span class="text-500 fw-semi-bold ms-1">(67 pessoas
                                                                    avaliadas)</span>
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <p class="fs--1 text-1000 fw-bold mb-2">
                                                                {{ $product->availability }}</p>
                                                            <div class="d-flex align-items-center mb-1">
                                                                @if ($product->sale_price)
                                                                    <p
                                                                        class="me-2 text-900 text-decoration-line-through mb-0">
                                                                        {{ \App\Helpers\ptBRHelper::real($product->regular_price) }}
                                                                    </p>
                                                                    <h3 class="text-1100 mb-0">
                                                                        {{ \App\Helpers\ptBRHelper::real($product->sale_price) }}
                                                                    </h3>
                                                                @else
                                                                    <h3 class="text-1100 mb-0">
                                                                        {{ \App\Helpers\ptBRHelper::real($product->regular_price) }}
                                                                    </h3>
                                                                @endif
                                                            </div>
                                                            <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">
                                                                {{ $product->color_count }} {{ $product->store->name }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="swiper-nav swiper-product-nav">
                                    <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span>
                                    </div>
                                    <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                                </div>
                            </div><a class="fw-bold d-md-none px-0" href="#!">Explore mais<span
                                    class="fas fa-chevron-right fs--1 ms-1"></span></a>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block col-xxl-2">
                            <div class="h-100 position-relative rounded-3 overflow-hidden">
                                <div class="bg-holder" style="background-image:url(assets/img/e-commerce/4.png);"></div>
                                <!--/.bg-holder-->
                            </div>
                        </div>
                        <div class="col-12 d-lg-none"><a href="#!"><img class="w-100 rounded-3"
                                    src="assets/img/e-commerce/6.png" alt="" /></a></div>
                    </div>
                    <div class="mb-6">
                        <div class="d-flex flex-between-center mb-3">
                            <h3>Principais Eletrônicos</h3><a class="fw-bold d-none d-md-block" href="#!">Explore
                                mais<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
                        </div>
                        <div class="swiper-theme-container products-slider">
                            <div class="swiper swiper-container theme-slider"
                                data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                                <div class="swiper-wrapper">
                                    @foreach ($products as $product)
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
                                                            @if ($product->photos->count())
                                                                <img class="img-fluid"
                                                                    src="{{ Storage::url($product->photos->first()->image) }}"
                                                                    alt="" />
                                                            @else
                                                                <img class="img-fluid"
                                                                    src="{{ asset('assets/img/matomall-placeholder.png') }}"
                                                                    alt="" />
                                                            @endif
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
                                                            <span class="text-500 fw-semi-bold ms-1">(67 pessoas
                                                                avaliadas)</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-1">
                                                        @if ($product->sale_price)
                                                            <p class="me-2 text-900 text-decoration-line-through mb-0">
                                                                {{ \App\Helpers\ptBRHelper::real($product->regular_price) }}
                                                            </p>
                                                            <h3 class="text-1100 mb-0">
                                                                {{ \App\Helpers\ptBRHelper::real($product->sale_price) }}
                                                            </h3>
                                                        @else
                                                            <h3 class="text-1100 mb-0">
                                                                {{ \App\Helpers\ptBRHelper::real($product->regular_price) }}
                                                            </h3>
                                                        @endif
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
                        </div><a class="fw-bold d-md-none" href="#!">Explore mais<span
                                class="fas fa-chevron-right fs--1 ms-1"></span></a>
                    </div>
                    <div class="mb-6">
                        <div class="d-flex flex-between-center mb-3">
                            <h3>Melhores ofertas</h3><a class="fw-bold d-none d-md-block" href="#!">Explore mais<span
                                    class="fas fa-chevron-right fs--1 ms-1"></span></a>
                        </div>
                        <div class="swiper-theme-container products-slider">
                            <div class="swiper swiper-container theme-slider"
                                data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
                                <div class="swiper-wrapper">

                                    <?php
                  $products = App\Models\Product::all();
                  foreach ($products as $product) {
                    ?>
                                    @if ($product->sale_price)
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
                                                            @if ($product->photos->count())
                                                                <img class="img-fluid"
                                                                    src="{{ Storage::url($product->photos->first()->image) }}"
                                                                    alt="" />
                                                            @else
                                                                <img class="img-fluid"
                                                                    src="{{ asset('assets/img/matomall-placeholder.png') }}"
                                                                    alt="" />
                                                            @endif
                                                        </div>
                                                        <a class="stretched-link text-decoration-none"
                                                            href="{{ route('product.details', $product->slug) }}">
                                                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">
                                                                <?php echo $product->name; ?></h6>
                                                        </a>
                                                        <p class="fs--1">
                                                            <?php
                                                            for ($i = 0; $i < $product->rating; $i++) {
                                                                echo '<span class="fa fa-star text-warning"></span>';
                                                            }
                                                            ?>
                                                        </p>
                                                    </div>
                                                    <div>

                                                        @php
                                                            $discount = (($product->regular_price - $product->sale_price) / $product->regular_price) * 100;
                                                        @endphp
                                                        <h6 class="text-success lh-1 mb-0">{{ intval($discount) }}% de
                                                            desconto</h6>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <?php
                  }
                  ?>
                                </div>
                            </div>
                            <div class="swiper-nav">
                                <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
                                <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
                            </div>
                        </div>
                        <a class="fw-bold d-md-none" href="#!">Explore mais<span
                                class="fas fa-chevron-right fs--1 ms-1"></span></a>
                    </div>
                </div>
            </section>
        </div>
    @endsection
