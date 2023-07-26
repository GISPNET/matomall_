@extends('web.layouts.app')
@section('titulo', 'Produtos')
@section('body')
    <main class="main" id="top">
        @component('web.components.top')
        @endcomponent
        @component('web.components.nav')
        @endcomponent
        <section class="pt-5 pb-9">
            <div class="container"><button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none"
                    data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span
                        class="fa-solid fa-filter me-2"></span>Filter</button>
                <div class="row">
                    @component('web.components.filters')
                    @endcomponent
                    <div class="col-lg-9 col-xxl-10">
                        <div class="row gx-3 gy-6 mb-8">

                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                                    <div class="product-card-container h-100">
                                        <div class="position-relative text-decoration-none product-card h-100">
                                            <div class="d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <div class="border border-1 rounded-3 position-relative mb-3"><button
                                                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Add to wishlist"><span
                                                                class="fas fa-heart d-block-hover"></span><span
                                                                class="far fa-heart d-none-hover"></span></button>
                                                        @if ($product->photos->count())
                                                            <img class="img-fluid"
                                                                src="{{ Storage::url($product->photos->first()->image) }}"
                                                                alt="" />
                                                        @else
                                                            <img class="img-fluid"
                                                                src="{{ asset('assets/img/matomall-placeholder.png') }}"
                                                                alt="" />
                                                        @endif

                                                    </div><a class="stretched-link text-decoration-none"
                                                        href="{{ route('product.details', $product->slug) }}">
                                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">
                                                            {{ $product->name }}</h6>
                                                    </a>
                                                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="text-500 fw-semi-bold ms-1">(67 pessoas avaliadas)</span>
                                                    </p>
                                                </div>
                                                <div>
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
                                                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">
                                                        {{ $product->store->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="d-flex justify-content-end">
                            <nav aria-label="Page navigation example">
                                {{ $products->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
