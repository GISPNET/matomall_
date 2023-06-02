@extends('web.layouts.app')
@section('titulo', $product->name)
@section('body')
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
                                <form action="{{ route('cart.add') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product[name]" value="{{ $product->name }}">
                                    <input type="hidden" name="product[price]"  value="{{ $product->price }}">
                                    <input type="hidden" name="product[slug]"  value="{{ $product->slug }}">
                                    <input type="hidden" name="product[image]"  value="{{ $product->photos->first()->image }}">

                                    <input class="form-control" type="number" name="product[amount]"  value="1">
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
@endsection

@section('js')
    @if (Session::has('product-added'))
        <script>
            setTimeout(function() {
                toastr.options.progressBar = true;
                toastr.success("{{ Session::get('product-added') }}");
            }, 100);
        </script>
    @endif
@endsection
