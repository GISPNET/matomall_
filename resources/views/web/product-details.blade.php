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
                                        <img src="{{ asset('assets/images/matomall-placeholder.png') }}"
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
                                    <input type="hidden" name="product[price]" value="{{ $product->sale_price ? $product->sale_price : $product->regular_price }}">
                                    <input type="hidden" name="product[slug]"  value="{{ $product->slug }}">
                                    <input type="hidden" name="product[image]"  value="{{ asset('assets/images/matomall-placeholder.png') }}">
                                    <button class="btn btn-lg btn-warning rounded-pill flex-fill fs--1 fs-sm-0">
                                        <span class="fas fa-shopping-cart me-2"></span> Adicionar ao carrinho
                                    </button>

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
                                        @if($product->sale_price)
                                        <h1 class="me-3">{{ \App\Helpers\ptBRHelper::real($product->sale_price) }}</h1>
                                        <p class="text-500 text-decoration-line-through fs-2 mb-0 me-3">{{ \App\Helpers\ptBRHelper::real($product->regular_price) }}</p>
                                        @php
                                        $discount = ($product->regular_price - $product->sale_price) / $product->regular_price * 100;
                                    @endphp
                                        <p class="text-warning-500 fw-bolder fs-2 mb-0">
                                            {{ intval($discount) }}% de desconto
                                        </p>                                        
                                        @else
                                        @endif
                                    </div>
                                    <p class="text-success fw-semi-bold fs-1 mb-2">Em estoque</p>
                                    <p class="mb-2 text-800"> {!! $product->body !!}</p>
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
                                                    <a class="btn btn-phoenix-primary px-3"
                                                        data-type="minus"><span
                                                            class="fas fa-minus"></span></a><input name="product[amount]"
                                                        class="form-control text-center input-spin-none bg-transparent border-0 outline-none"
                                                        style="width:50px;" type="number" min="1"
                                                        value="1" /><a class="btn btn-phoenix-primary px-3"
                                                        data-type="plus"><span class="fas fa-plus"></span></a>
                                                </div><button class="btn btn-phoenix-primary px-3 border-0"><span
                                                        class="fas fa-share-alt fs-1"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-0">
                <div class="container-small">
                  <ul class="nav nav-underline mb-4" id="productTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Descrição</a></li>
<li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#tab-reviews" role="tab" aria-controls="tab-reviews" aria-selected="false">Avaliações e comentários</a></li>
                  </ul>
                  <div class="row gx-3 gy-7">
                    <div class="col-12 col-lg-7 col-xl-8">
                      <div class="tab-content" id="productTabContent">
                        <div class="tab-pane pe-lg-6 pe-xl-12 fade show active text-1100" id="tab-description" role="tabpanel" aria-labelledby="description-tab">
                            {!! $product->description !!}
                        </div>
                        
                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                          <div class="bg-white rounded-3 p-4 border border-200">
                            <div class="row g-3 justify-content-between mb-4">
                              <div class="col-auto">
                                <div class="d-flex align-items-center flex-wrap">
                                  <h2 class="fw-bolder me-3">4.9<span class="fs-0 text-500 fw-bold">/5</span></h2>
                                  <div class="me-3"><span class="fa fa-star text-warning fs-2"></span><span class="fa fa-star text-warning fs-2"></span><span class="fa fa-star text-warning fs-2"></span><span class="fa fa-star text-warning fs-2"></span><span class="fa fa-star-half-alt star-icon text-warning fs-2"></span></div>
                                  <p class="text-900 mb-0 fw-semi-bold fs-1">6548 ratings and 567 reviews</p>
                                </div>
                              </div>
                              <div class="col-auto"><button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#reviewModal">Rate this product</button>
                                <div class="modal fade" id="reviewModal" tabindex="-1" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content p-4">
                                      <div class="d-flex flex-between-center mb-2">
                                        <h5 class="modal-title fs-0 mb-0">Your rating</h5><button class="btn p-0 fs--2">Clear</button>
                                      </div>
                                      <div class="mb-3" data-rater='{"starSize":32,"step":0.5}'></div>
                                      <div class="mb-3">
                                        <h5 class="text-1000 mb-3">Your review</h5><textarea class="form-control" id="reviewTextarea" rows="5" placeholder="Write your review"> </textarea>
                                      </div>
                                      <div class="dropzone dropzone-multiple p-0 mb-3" id="my-awesome-dropzone" data-dropzone>
                                        <div class="fallback"><input name="file" type="file" multiple></div>
                                        <div class="dz-preview d-flex flex-wrap">
                                          <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;"><img class="dz-image" src="../../../assets/img/products/23.png" alt="..." data-dz-thumbnail><a class="dz-remove text-400" href="#!" data-dz-remove><span data-feather="x"></span></a></div>
                                        </div>
                                        <div class="dz-message text-600 fw-bold fs--1 p-4" data-dz-message> Drag your photo here <span class="text-800">or </span><button class="btn btn-link p-0">Browse from device </button><br><img class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png" width="24" alt=""></div>
                                      </div>
                                      <div class="d-sm-flex flex-between-center">
                                        <div class="form-check flex-1"><input class="form-check-input" id="reviewAnonymously" type="checkbox" value="" checked=""><label class="form-check-label mb-0 text-1100 fw-semi-bold" for="reviewAnonymously">Review anonymously</label></div><button class="btn ps-0" data-bs-dismiss="modal">Close</button><button class="btn btn-primary rounded-pill">Submit</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                              <div class="d-flex justify-content-between">
                                <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-800 ms-1"> by</span> Zingko Kudobum</h5>
                                <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                  </div>
                                </div>
                              </div>
                              <p class="text-700 fs--1 mb-1">35 mins ago</p>
                              <p class="text-1000 mb-3">100% satisfied</p>
                              <div class="row g-2 mb-2">
                                <div class="col-auto"><a href="../../../assets/img/e-commerce/review-11.jpg" data-gallery="gallery-0"><img class="w-100" src="../../../assets/img/e-commerce/review-11.jpg" alt="" height="164" /></a></div>
                                <div class="col-auto"><a href="../../../assets/img/e-commerce/review-12.jpg" data-gallery="gallery-0"><img class="w-100" src="../../../assets/img/e-commerce/review-12.jpg" alt="" height="164" /></a></div>
                                <div class="col-auto"><a href="../../../assets/img/e-commerce/review-13.jpg" data-gallery="gallery-0"><img class="w-100" src="../../../assets/img/e-commerce/review-13.jpg" alt="" height="164" /></a></div>
                              </div>
                              <div class="d-flex"><span class="fas fa-reply fa-rotate-180 me-2"></span>
                                <div>
                                  <h5>Respond from store<span class="text-700 fs--1 ms-2">5 mins ago</span></h5>
                                  <p class="text-1000 mb-0">Thank you for your valuable feedback</p>
                                </div>
                              </div>
                              <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span class="fas fa-thumbs-up"></span></button><button class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button></div>
                            </div>
                            <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                              <div class="d-flex justify-content-between">
                                <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="text-800 ms-1"> by</span> Piere Auguste Renoir</h5>
                                <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                  </div>
                                </div>
                              </div>
                              <p class="text-700 fs--1 mb-1">23 Oct, 12:09 PM</p>
                              <p class="text-1000 mb-1">Since the spring loaded event, I've been wanting an iMac, and it's exceeded my expectations. The screen is clear, the colors are vibrant (I got the blue one! ), and the performance is more than adequate for my needs as a college student. That's how good it is.</p>
                              <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span class="fas fa-thumbs-up"></span></button><button class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button></div>
                            </div>
                            <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                              <div class="d-flex justify-content-between">
                                <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="text-800 ms-1"> by</span> Abel Kablmann </h5>
                                <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                  </div>
                                </div>
                              </div>
                              <p class="text-700 fs--1 mb-1">21 Oct, 12:00 PM</p>
                              <p class="text-1000 mb-1">Over the years, I've preferred Apple products. My job has allowed me to use Windows products on laptops and PCs. I've owned Windows laptops and desktops for home use in the past and will never use them again.</p>
                              <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span class="fas fa-thumbs-up"></span></button><button class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button></div>
                            </div>
                            <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                              <div class="d-flex justify-content-between">
                                <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-800 ms-1"> by</span> Pennywise Alfred</h5>
                                <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                                  <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                  </div>
                                </div>
                              </div>
                              <p class="text-700 fs--1 mb-1">35 mins ago</p>
                              <p class="text-1000 mb-3">Nice and beautiful product.</p>
                              <div class="row g-2 mb-2">
                                <div class="col-auto"><a href="../../../assets/img/e-commerce/review-14.jpg" data-gallery="gallery-3"><img class="w-100" src="../../../assets/img/e-commerce/review-14.jpg" alt="" height="164" /></a></div>
                                <div class="col-auto"><a href="../../../assets/img/e-commerce/review-15.jpg" data-gallery="gallery-3"><img class="w-100" src="../../../assets/img/e-commerce/review-15.jpg" alt="" height="164" /></a></div>
                                <div class="col-auto"><a href="../../../assets/img/e-commerce/review-16.jpg" data-gallery="gallery-3"><img class="w-100" src="../../../assets/img/e-commerce/review-16.jpg" alt="" height="164" /></a></div>
                              </div>
                              <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span class="fas fa-thumbs-up"></span></button><button class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button></div>
                            </div>
                            <div class="d-flex justify-content-center">
                              <nav>
                                <ul class="pagination mb-0">
                                  <li class="page-item"><a class="page-link" href="#!"><span class="fas fa-chevron-left"> </span></a></li>
                                  <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                  <li class="page-item active"><a class="page-link" href="#!">4</a></li>
                                  <li class="page-item"><a class="page-link" href="#!">5</a></li>
                                  <li class="page-item"><a class="page-link" href="#!"><span class="fas fa-chevron-right"></span></a></li>
                                </ul>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-5 col-xl-4">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="text-black">Usually Bought Together</h5>
                          <div class="w-75">
                            <p class="text-700 fs--1 fw-bold line-clamp-1">with 24" iMac® with Retina 4.5K display - Apple M1 8GB Memory - 256GB SSD - w/Touch ID (Latest Model) - Blue</p>
                          </div>
                          <div class="border-dashed border-y py-4">
                            <div class="d-flex align-items-center mb-5">
                              <div class="form-check mb-0"><input class="form-check-input" type="checkbox" checked="checked" /><label class="form-check-label"></label></div><img class="border rounded" src="../../../assets/img/products/2.png" width="53" alt="" />
                              <div class="ms-2"><a class="fs--1 fw-bold line-clamp-2 mb-2" href="../../../apps/e-commerce/landing/product-details.html"> iPhone 13 pro max-Pacific Blue- 128GB</a>
                                <h5>$899.99</h5>
                              </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                              <div class="form-check mb-0"><input class="form-check-input" type="checkbox" checked="checked" /><label class="form-check-label"></label></div><img class="border rounded" src="../../../assets/img/products/16.png" width="53" alt="" />
                              <div class="ms-2"><a class="fs--1 fw-bold line-clamp-2 mb-2" href="../../../apps/e-commerce/landing/product-details.html">Apple AirPods Pro</a>
                                <h5>$59.00</h5>
                              </div>
                            </div>
                            <div class="d-flex align-items-center mb-0">
                              <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /><label class="form-check-label"></label></div><img class="border rounded" src="../../../assets/img/products/10.png" width="53" alt="" />
                              <div class="ms-2"><a class="fs--1 fw-bold line-clamp-2 mb-2" href="../../../apps/e-commerce/landing/product-details.html">Apple Magic Mouse (Wireless, Rechargable) - Silver, Worst mouse ever</a>
                                <h5>$89.00</h5>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-end justify-content-between pt-3">
                            <div>
                              <h5 class="mb-2 text-600">Total</h5>
                              <h4 class="mb-0 text-1100">$958.99</h4>
                            </div>
                            <div class="btn btn-outline-warning">Add 3 items to cart<span class="fas fa-shopping-cart ms-2"></span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- end of .container-->
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
                                                        src="{{ asset('assets/images/matomall-placeholder.png') }}"
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
                                                @if($product->sale_price)
                                   <p class="me-2 text-900 text-decoration-line-through mb-0">{{  \App\Helpers\ptBRHelper::real($product->regular_price) }}</p>
                                   <h3 class="text-1100 mb-0">{{  \App\Helpers\ptBRHelper::real($product->sale_price) }}</h3>
                                @else
                                   <h3 class="text-1100 mb-0">{{  \App\Helpers\ptBRHelper::real($product->regular_price) }}</h3>
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
    <script>
        tinymce.init({
          selector: 'div',
          toolbar: false,
          menubar: false,
          plugins: '',
          branding: false,
          inline: true,
          readonly: true,
          content_css: false,
          setup: function(editor) {
            editor.on('init', function() {
              this.getContainer().style.visibility = 'visible';
            });
          }
        });
      </script>
@endsection
