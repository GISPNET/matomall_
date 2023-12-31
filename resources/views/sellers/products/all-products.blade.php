@extends('sellers.layouts.app')
@section('titulo')
@section('content')
    <div class="content">
        <div class="mb-9">
            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Produtos</h2>
                </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Todos <span
                            class="text-700 fw-semi-bold">(68817)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Publicados <span
                            class="text-700 fw-semi-bold">(70348)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rascunhos <span
                            class="text-700 fw-semi-bold">(17)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Com desconto <span
                            class="text-700 fw-semi-bold">(810)</span></a></li>
            </ul>
            <div id="products"
                data-list="{&quot;valueNames&quot;:[&quot;product&quot;,&quot;price&quot;,&quot;category&quot;,&quot;tags&quot;,&quot;vendor&quot;,&quot;time&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
                <div class="mb-4">
                    <div class="row g-3">
                        <div class="col-auto">
                            <div class="search-box">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                        class="form-control search-input search" type="search"
                                        placeholder="Search products" aria-label="Search">
                                    <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                                </form>
                            </div>
                        </div>
                        <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                            <div class="btn-group position-static" role="group">
                                <div class="btn-group position-static text-nowrap">
                                    <button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent"> Categoria<svg
                                            class="svg-inline--fa fa-angle-down ms-2" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="angle-down" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Ação</a></li>
                                        <li><a class="dropdown-item" href="#">Outra ação</a></li>
                                        <li><a class="dropdown-item" href="#">Algo mais aqui</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Link separado</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group position-static text-nowrap">
                                    <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent"> Fornecedor<svg
                                            class="svg-inline--fa fa-angle-down ms-2" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="angle-down" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z">
                                            </path>
                                        </svg></button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Ação</a></li>
                                        <li><a class="dropdown-item" href="#">Outra ação</a></li>
                                        <li><a class="dropdown-item" href="#">Algo mais aqui</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Link separado</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">Mais filtros</button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-link text-900 me-4 px-0">
                                <svg class="svg-inline--fa fa-file-export fs--1 me-2" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="file-export" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M192 312C192 298.8 202.8 288 216 288H384V160H256c-17.67 0-32-14.33-32-32L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48v-128H216C202.8 336 192 325.3 192 312zM256 0v128h128L256 0zM568.1 295l-80-80c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94L494.1 288H384v48h110.1l-39.03 39.03C450.3 379.7 448 385.8 448 392s2.344 12.28 7.031 16.97c9.375 9.375 24.56 9.375 33.94 0l80-80C578.3 319.6 578.3 304.4 568.1 295z">
                                    </path>
                                </svg>
                                <!-- <span class="fa-solid fa-file-export fs--1 me-2"></span> Font Awesome fontawesome.com -->Exportar</button>
                            <a class="btn btn-primary" id="addBtn" href="{{ route('seller.product.add') }}">
                                <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z">
                                    </path>
                                </svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Adicionar
                                produto</a>
                        </div>
                    </div>
                </div>
                <div
                    class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <table class="table fs--1 mb-0">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap fs--1 align-middle ps-0"
                                        style="max-width:20px; width:18px;">
                                        <div class="form-check mb-0 fs-0"><input class="form-check-input"
                                                id="checkbox-bulk-products-select" type="checkbox"
                                                data-bulk-select="{&quot;body&quot;:&quot;products-table-body&quot;}">
                                        </div>
                                    </th>
                                    <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;"></th>
                                    <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;" data-sort="product">NOME DO PRODUTO</th>
                                    <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">PREÇO</th>
                                    <th class="sort align-middle ps-4" scope="col" data-sort="category" style="width:150px;">CATEGORIA</th>
                                    <th class="sort align-middle ps-3" scope="col" data-sort="tags" style="width:250px;">TAG</th>
                                    <th class="sort align-middle fs-0 text-center ps-4" scope="col" style="width:125px;"></th>
                                    <th class="sort align-middle ps-4" scope="col" data-sort="vendor" style="width:200px;">FORNECEDOR</th>
                                    <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">PUBLICADO EM</th>
                                    <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list" id="products-table-body">
                                @foreach ($products as $product)
                                <tr class="position-static">
                                    <td class="fs--1 align-middle">
                                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"
                                                data-bulk-select-row="{&quot;product&quot;:&quot;Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands...&quot;,&quot;productImage&quot;:&quot;/products/1.png&quot;,&quot;price&quot;:&quot;$39&quot;,&quot;category&quot;:&quot;Plants&quot;,&quot;tags&quot;:[&quot;Health&quot;,&quot;Exercise&quot;,&quot;Discipline&quot;,&quot;Lifestyle&quot;,&quot;Fitness&quot;],&quot;star&quot;:false,&quot;vendor&quot;:&quot;Blue Olive Plant sellers. Inc&quot;,&quot;publishedOn&quot;:&quot;Nov 12, 10:45 PM&quot;}">
                                        </div>
                                    </td>
                                    <td class="align-middle white-space-nowrap py-0">
                                        <div class="border rounded-2">

                                            @if ($product->photos->count())
                                            <img src="{{ Storage::url($product->photos->first()->image) }}"
                                            alt="" width="53">
                                            @else
                                            <img src="{{ asset('assets/img/matomall-placeholder.png') }}"
                                            alt="" width="53">
                                            @endif
                                        </div>
                                    </td>
                                    <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0"
                                            href="{{ route('product.details',$product->slug) }}">{{ $product->name }}</a></td>
                                            <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">
                                                @if ($product->sale_price)
                                                    {{ \App\Helpers\ptBRHelper::real($product->sale_price) }}
                                                @else
                                                    {{ \App\Helpers\ptBRHelper::real($product->regular_price) }}
                                                @endif
                                            </td>

                                    <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">{{ $product->category->name }}</td>
                                    <td class="tags align-middle review pb-2 ps-3" style="min-width:225px;"><a
                                            class="text-decoration-none" href="#!"><span
                                                class="badge badge-tag me-2 mb-2">{{ $product->tag->name  }}</span></a></td>
                                    <td class="align-middle review fs-0 text-center ps-4">
                                        <div class="d-toggle-container">
                                            <div class="d-block-hover"><svg class="svg-inline--fa fa-star text-warning"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 576 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="fas fa-star text-warning"></span> Font Awesome fontawesome.com -->
                                            </div>
                                            <div class="d-none-hover"><svg class="svg-inline--fa fa-star text-warning"
                                                    aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 576 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="far fa-star text-warning"></span> Font Awesome fontawesome.com -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="vendor align-middle text-start fw-semi-bold ps-4"><a href="#!">{{ $product->store->seller->name }}</a></td>
                                    <td class="time align-middle white-space-nowrap text-600 ps-4">{{ \App\Helpers\ptBRHelper::data_sem_hora($product->created_at) }}</td>
                                    <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                        <div class="font-sans-serif btn-reveal-trigger position-static"><button
                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs--2"
                                                    aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="ellipsis" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item" href="{{ route('product.details',$product->slug) }}">Visualizar</a>
                                                    <a class="dropdown-item" href="#!">Exportar</a>
                                                    <div class="dropdown-divider"></div>
                                                    <form action="{{ route('seller.product.destroy', $product->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item text-danger">Remover</button>
                                                    </form>

                                                  </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                        <div class="col-auto d-flex">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info">1 a 10 <span class="text-600">Itens de </span>16</p>
                            <a class="fw-semi-bold" href="#!" data-list-view="*">Ver todos<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;">
                                <g transform="translate(128 256)">
                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path>
                                    </g>
                                </g>
                            </svg>
                            <!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                            <a class="fw-semi-bold d-none" href="#!" data-list-view="less">Ver menos<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;">
                                <g transform="translate(128 256)">
                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                        <path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path>
                                    </g>
                                </g>
                            </svg>
                            <!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                        </div>
                        <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev"
                                disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="chevron-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                            <ul class="mb-0 pagination">
                                <li class="active"><button class="page" type="button" data-i="1"
                                        data-page="10">1</button></li>
                                <li><button class="page" type="button" data-i="2" data-page="10">2</button>
                                </li>
                            </ul><button class="page-link pe-0" data-list-pagination="next"><svg
                                    class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="chevron-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                    </path>
                                </svg>
                                <!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('sellers.components.footer')
        @endcomponent

    </div>
@endsection
