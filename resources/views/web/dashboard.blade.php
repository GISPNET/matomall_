@extends('web.layouts.app')
@section('titulo', 'Dashboard')
@section('body')
    <main class="main" id="top">
        @component('web.components.top')
        @endcomponent
        @component('web.components.nav')
        @endcomponent
        <section class="pt-5 pb-9">
            <div class="container-small">
                <div class="row align-items-center justify-content-between g-3 mb-4">
                    <div class="col-auto">
                        <h2 class="mb-0">Perfil</h2>
                    </div>
                    <div class="col-auto">
                        <div class="row g-2 g-sm-3">
                            <div class="col-auto"><button class="btn btn-phoenix-danger"><svg
                                        class="svg-inline--fa fa-trash-can me-2" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="trash-can" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-trash-alt me-2"></span> Font Awesome fontawesome.com -->Excluir
                                    cliente </button></div>
                            <div class="col-auto"><button class="btn btn-phoenix-secondary"><svg
                                        class="svg-inline--fa fa-key me-2" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="key" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M282.3 343.7L248.1 376.1C244.5 381.5 238.4 384 232 384H192V424C192 437.3 181.3 448 168 448H128V488C128 501.3 117.3 512 104 512H24C10.75 512 0 501.3 0 488V408C0 401.6 2.529 395.5 7.029 391L168.3 229.7C162.9 212.8 160 194.7 160 176C160 78.8 238.8 0 336 0C433.2 0 512 78.8 512 176C512 273.2 433.2 352 336 352C317.3 352 299.2 349.1 282.3 343.7zM376 176C398.1 176 416 158.1 416 136C416 113.9 398.1 96 376 96C353.9 96 336 113.9 336 136C336 158.1 353.9 176 376 176z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-key me-2"></span> Font Awesome fontawesome.com -->Redefinir
                                    senha
                                </button></div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-6">
                    <div class="col-12 col-lg-8">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-dashed border-300 pb-4">
                                    <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                                        <div class="col-12 col-sm-auto"><input class="d-none" id="avatarFile"
                                                type="file"><label class="cursor-pointer avatar avatar-5xl"
                                                <label for="avatarFile">
                                                    <img class="rounded-circle" src="{{ $user->profile_picture ? asset('storage/'.$user->profile_picture) : asset('assets/images/users/avatar.png') }}" alt="">
                                                </label>
                                                </label>
                                        </div>
                                        <div class="col-12 col-sm-auto flex-1">
                                            <h3>{{ $user->name }}</h3>
                                            @php
                                                $diffInMonths = $user->created_at->diffInMonths(now());
                                                $joinMessage = $diffInMonths > 0 ? "Entrou há {$diffInMonths} meses" : 'Entrou neste mês';
                                            @endphp

                                            <p class="text-800">{{ $joinMessage }}</p>
                                            <div><a class="me-2" target="_blank" href="{{ 'https://www.facebook.com/' . $user->linkedin }}"><svg
                                                        class="svg-inline--fa fa-linkedin-in text-400 hover-primary"
                                                        aria-hidden="true" focusable="false" data-prefix="fab"
                                                        data-icon="linkedin-in" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M100.3 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.6 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.3 61.9 111.3 142.3V448z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fab fa-linkedin-in text-400 hover-primary"></span> Font Awesome fontawesome.com --></a><a
                                                    class="me-2" target="_blank" href="{{ 'https://www.facebook.com/' . $user->facebook }}"><svg
                                                        class="svg-inline--fa fa-facebook text-400 hover-primary"
                                                        aria-hidden="true" focusable="false" data-prefix="fab"
                                                        data-icon="facebook" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.8 90.69 226.4 209.3 245V327.7h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.3 482.4 504 379.8 504 256z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fab fa-facebook text-400 hover-primary"></span> Font Awesome fontawesome.com --></a><a
                                                    target="_blank" href="{{ 'https://www.facebook.com/' . $user->twitter }}"><svg
                                                        class="svg-inline--fa fa-twitter text-400 hover-primary"
                                                        aria-hidden="true" focusable="false" data-prefix="fab"
                                                        data-icon="twitter" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M459.4 151.7c.325 4.548 .325 9.097 .325 13.65 0 138.7-105.6 298.6-298.6 298.6-59.45 0-114.7-17.22-161.1-47.11 8.447 .974 16.57 1.299 25.34 1.299 49.06 0 94.21-16.57 130.3-44.83-46.13-.975-84.79-31.19-98.11-72.77 6.498 .974 12.99 1.624 19.82 1.624 9.421 0 18.84-1.3 27.61-3.573-48.08-9.747-84.14-51.98-84.14-102.1v-1.299c13.97 7.797 30.21 12.67 47.43 13.32-28.26-18.84-46.78-51.01-46.78-87.39 0-19.49 5.197-37.36 14.29-52.95 51.65 63.67 129.3 105.3 216.4 109.8-1.624-7.797-2.599-15.92-2.599-24.04 0-57.83 46.78-104.9 104.9-104.9 30.21 0 57.5 12.67 76.67 33.14 23.72-4.548 46.46-13.32 66.6-25.34-7.798 24.37-24.37 44.83-46.13 57.83 21.12-2.273 41.58-8.122 60.43-16.24-14.29 20.79-32.16 39.31-52.63 54.25z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fab fa-twitter text-400 hover-primary"></span> Font Awesome fontawesome.com --></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center pt-4">
                                    <div>

                                        @php
                                            $total = 0;
                                        @endphp

                                        @foreach ($user->orders as $order)
                                            @foreach (json_decode($order->items) as $key => $item)
                                                @php
                                                    $total += $item->total;
                                                @endphp
                                            @endforeach
                                        @endforeach

                                        <h6 class="mb-2 text-800">Total Gasto</h6>
                                        <h4 class="fs-1 text-1000 mb-0">{{ \App\Helpers\ptBRHelper::real($total) }}</h4>
                                    </div>
                                    <div class="text-end">
                                        @if ($lastOrder = auth()->user()->orders()->latest()->first())
                                            <h6 class="mb-2 text-800">Último Pedido</h6>
                                            <h4 class="fs-1 text-1000 mb-0">{{ $lastOrder->created_at->diffForHumans() }}
                                            </h4>
                                        @endif

                                    </div>
                                    <div class="text-end">
                                        <h6 class="mb-2 text-800">Número de Pedidos</h6>
                                        <h4 class="fs-1 text-1000 mb-0">{{ count(auth()->user()->orders()->get()) }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-dashed border-300">
                                    <h4 class="mb-3 lh-sm lh-xl-1">Endereço<button class="btn btn-link p-0"
                                            type="button"> <svg
                                                class="svg-inline--fa fa-pen-to-square fs--1 ms-3 text-500"
                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="pen-to-square" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fas fa-edit fs--1 ms-3 text-500"></span> Font Awesome fontawesome.com --></button>
                                    </h4>
                                </div>
                                <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <h5 class="text-1000">Endereço de Entrega</h5>
                                        </div>
                                        <div class="col-auto">
                                            <p class="text-800">
                                                @if ($user->shipping_address)
                                                    {{ $user->shipping_address }}
                                                @else
                                                    Sem endereço de entrega associado
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <h5 class="text-1000">Endereço de Cobrança</h5>
                                        </div>
                                        <div class="col-auto">
                                            <p class="text-800">
                                                @if ($user->billing_address)
                                                    {{ $user->billing_address }}
                                                @else
                                                    Sem endereço de cobrança associado
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top border-dashed border-300 pt-4">
                                    <div class="row flex-between-center mb-2">
                                        <div class="col-auto">
                                            <h5 class="text-1000 mb-0">Email</h5>
                                        </div>
                                        <div class="col-auto"><a class="lh-1"
                                                href="mailto:shatinon@jeemail.com">{{ $user->email }}</a></div>
                                    </div>
                                    @if ($user->phone)
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <h5 class="text-1000 mb-0">Telefone</h5>
                                            </div>
                                            <div class="col-auto"><a class="text-800"
                                                    href="tel:+$user->phone">{{$user->phone}}</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="scrollbar">
                        <ul class="nav nav-underline flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                            <li class="nav-item me-3" role="presentation"><a class="nav-link text-nowrap active"
                                    id="orders-tab" data-bs-toggle="tab" href="#tab-orders" role="tab"
                                    aria-controls="tab-orders" aria-selected="true"><svg
                                        class="svg-inline--fa fa-cart-shopping me-2" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="cart-shopping" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">stat
                                        <path fill="currentColor"
                                            d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-shopping-cart me-2"></span> Font Awesome fontawesome.com -->Pedidos
                                    <span class="text-700 fw-normal">
                                        ({{ count(auth()->user()->orders()->get()) }})</span></a></li>
                            <li class="nav-item me-3" role="presentation"><a class="nav-link text-nowrap"
                                    id="wishlist-tab" data-bs-toggle="tab" href="#tab-wishlist" role="tab"
                                    aria-controls="tab-orders" aria-selected="false" tabindex="-1"><svg
                                        class="svg-inline--fa fa-heart me-2" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="heart" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84.02L256 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 .0003 232.4 .0003 190.9L0 190.9z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-heart me-2"></span> Font Awesome fontawesome.com -->Lista de Desejos
                                </a>
                            </li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-nowrap"
                                    id="personal-info-tab" data-bs-toggle="tab" href="#tab-personal-info" role="tab"
                                    aria-controls="tab-personal-info" aria-selected="false" tabindex="-1"><svg
                                        class="svg-inline--fa fa-user me-2" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="user" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                        </path>
                                    </svg>
                                    <!-- <span class="fas fa-user me-2"></span> Font Awesome fontawesome.com -->Informações pessoais</a></li>
                        </ul>
                    </div>
                    <div class="tab-content" id="profileTabContent">
                        <div class="tab-pane fade show active" id="tab-orders" role="tabpanel"
                            aria-labelledby="orders-tab">
                            <div class="border-top border-bottom border-200" id="profileOrdersTable"
                                data-list="{&quot;valueNames&quot;:[&quot;order&quot;,&quot;status&quot;,&quot;delivery&quot;,&quot;date&quot;,&quot;total&quot;],&quot;page&quot;:6,&quot;pagination&quot;:true}">
                                <div class="table-responsive scrollbar">
                                    <table class="table fs--1 mb-0">
                                        <thead>
                                            <tr>
                                                <th class="sort white-space-nowrap align-middle pe-3 ps-0" scope="col"
                                                    data-sort="order" style="width:15%; min-width:140px" colspan="3">
                                                    PEDIDO</th>
                                                    <th class="sort align-middle pe-3" scope="col" data-sort="payment_status"
                                                    style="width:10%;">STATUS DO PAGAMENTO</th>
                                                <th class="sort align-middle pe-3" scope="col" data-sort="payment_status"
                                                    style="width:10%;">STATUS DO CUMPRIMENTO</th>
                                                <th class="sort align-middle pe-0 text-end" scope="col"
                                                    data-sort="date" style="width:15%; min-width:160px">DATA</th>
                                                <th class="sort align-middle text-end" scope="col" data-sort="total"
                                                    style="width:15%; min-width:160px">TOTAL</th>
                                                <th class="sort align-middle text-end" scope="col" data-sort="total"
                                                    style="width:15%; min-width:160px">AÇÕES</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list" id="profile-order-table-body">

                                            @foreach ($orders as $key => $order)
                                                @php
                                                    $total = 0;
                                                @endphp
                                                @foreach (json_decode($order->items) as $key => $item)
                                                    @php
                                                        $total = $total + $item->total;
                                                    @endphp
                                                @endforeach
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0"
                                                        colspan="3"><a class="fw-semi-bold text-primary"
                                                            href="#!">#0{{ $key + 1 }}</a></td>
                                                    <td @if ($order->state == 'completed') class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2">
                                                    <span class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                            class="badge-label">Concluído</span><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16px"
                                                            height="16px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-check ms-1"
                                                            style="height:12.8px;width:12.8px;">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg></span> @endif
                                                        @if ($order->state == 'created') <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Criado</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info ms-1" style="height:12.8px;width:12.8px;"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span></td> @endif
                                                        @if ($order->state == 'failed') <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Falhou</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td> @endif
                                                        @if ($order->state != 'failed' && $order->state != 'created' && $order->state != 'completed') <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">{{ $order->state }}</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td> @endif
                                                        </td>
                                                        @if ($order->order_status == 1)
                                                        <td
                                                            class="payment_status align-middle white-space-nowrap text-start fw-bold text-700">
                                                            <span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                                    class="badge-label">Processando</span><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-clock ms-1"
                                                                    style="height:12.8px;width:12.8px;">
                                                                    <circle cx="12" cy="12" r="10">
                                                                    </circle>
                                                                    <polyline points="12 6 12 12 16 14"></polyline>
                                                                </svg></span>
                                                        </td>
                                                    @elseif($order->order_status == 2)
                                                        <td
                                                            class="payment_status align-middle white-space-nowrap text-start fw-bold text-700">
                                                            <span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span
                                                                    class="badge-label">Cancelado</span><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x ms-1"
                                                                    style="height:12.8px;width:12.8px;">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg></span>
                                                        </td>
                                                    @elseif($order->order_status == 3)
                                                        <td
                                                            class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700">
                                                            <span class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                                    class="badge-label">Concluído</span><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-check ms-1"
                                                                    style="height:12.8px;width:12.8px;">
                                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                                </svg></span>
                                                        </td>
                                                    @else
                                                        <td
                                                            class="payment_status align-middle white-space-nowrap text-start fw-bold text-700">
                                                            <span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span
                                                                    class="badge-label">Desconhecido</span><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x ms-1"
                                                                    style="height:12.8px;width:12.8px;">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg></span>
                                                        </td>
                                                @endif
                                                    <td class="total align-middle text-700 text-end py-2">
                                                        {{ $order->created_at->format('d/m/Y H:i') }}</td>

                                                    <td class="date align-middle fw-semi-bold text-end py-2 text-1000">
                                                        {{ \App\Helpers\ptBRHelper::real($total) }}
                                                    </td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><svg
                                                                    class="svg-inline--fa fa-ellipsis fs--2"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="ellipsis" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z">
                                                                    </path>
                                                                </svg>
                                                                <!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item"
                                                                    href="{{ route('customer.invoice.index', $order->reference) }}">Ver</a>
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
                                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" <p
                                            data-list-info="data-list-info">1 a 6 <span class="text-600">Itens de</span> 9
                                        </p>
                                        <a class="fw-semi-bold" href="#!" data-list-view="*">Ver todos
                                            <svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1"
                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 512" data-fa-i2svg=""
                                                style="transform-origin: 0.25em 0.5625em;">
                                                <g transform="translate(128 256)">
                                                    <g transform="translate(0, 32) scale(1, 1) rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                                                            transform="translate(-128 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>

                                        <!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a
                                            class="fw-semi-bold d-none" href="#!" data-list-view="less">View
                                            Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1"
                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 512" data-fa-i2svg=""
                                                style="transform-origin: 0.25em 0.5625em;">
                                                <g transform="translate(128 256)">
                                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                                                            transform="translate(-128 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                                    </div>
                                    <div class="col-auto d-flex">
                                        {{ $orders->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                            <div class="border-y" id="productWishlistTable"
                                data-list="{&quot;valueNames&quot;:[&quot;products&quot;,&quot;color&quot;,&quot;size&quot;,&quot;price&quot;,&quot;quantity&quot;,&quot;total&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                                <div class="table-responsive scrollbar">
                                    <table class="table fs--1 mb-0">
                                        <thead>
                                            <tr>
                                                <th class="sort white-space-nowrap align-middle fs--2" scope="col"
                                                    style="width:7%;"></th>
                                                <th class="sort white-space-nowrap align-middle" scope="col"
                                                    style="width:30%; min-width:250px;" data-sort="products">PRODUCTS</th>
                                                <th class="sort align-middle" scope="col" data-sort="color"
                                                    style="width:16%;">COLOR</th>
                                                <th class="sort align-middle" scope="col" data-sort="size"
                                                    style="width:10%;">SIZE</th>
                                                <th class="sort align-middle text-end" scope="col" data-sort="price"
                                                    style="width:10%;">PRICE</th>
                                                <th class="sort align-middle text-end pe-0" scope="col"
                                                    style="width:35%;"> </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list" id="profile-wishlist-table-body">
                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                    <div class="border rounded-2 d-inline-block"><img
                                                            src="../../../assets/img//products/1.png" alt=""
                                                            width="53"></div>
                                                </td>
                                                <td class="products align-middle pe-11"><a
                                                        class="fw-semi-bold mb-0 line-clamp-1" href="#!">Fitbit Sense
                                                        Advanced Smartwatch with Tools for Heart Health, Stress Management
                                                        &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L
                                                        Bands)</a></td>
                                                <td class="color align-middle white-space-nowrap fs--1 text-900">Pure matte
                                                    black</td>
                                                <td
                                                    class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                                    42</td>
                                                <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$57
                                                </td>
                                                <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                                    <button class="btn btn-sm text-500 hover-text-600 me-2"><svg
                                                            class="svg-inline--fa fa-trash" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="trash"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button><button
                                                        class="btn btn-primary fs--2"><svg
                                                            class="svg-inline--fa fa-cart-shopping me-1 fs--2"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="cart-shopping" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-shopping-cart me-1 fs--2"></span> Font Awesome fontawesome.com -->Add
                                                        to cart</button>
                                                </td>
                                            </tr>
                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                    <div class="border rounded-2 d-inline-block"><img
                                                            src="../../../assets/img//products/7.png" alt=""
                                                            width="53"></div>
                                                </td>
                                                <td class="products align-middle pe-11"><a
                                                        class="fw-semi-bold mb-0 line-clamp-1" href="#!">2021 Apple
                                                        12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                                                <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                                                <td
                                                    class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                                    Pro</td>
                                                <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,499
                                                </td>
                                                <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                                    <button class="btn btn-sm text-500 hover-text-600 me-2"><svg
                                                            class="svg-inline--fa fa-trash" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="trash"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button><button
                                                        class="btn btn-primary fs--2"><svg
                                                            class="svg-inline--fa fa-cart-shopping me-1 fs--2"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="cart-shopping" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-shopping-cart me-1 fs--2"></span> Font Awesome fontawesome.com -->Add
                                                        to cart</button>
                                                </td>
                                            </tr>
                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                    <div class="border rounded-2 d-inline-block"><img
                                                            src="../../../assets/img//products/6.png" alt=""
                                                            width="53"></div>
                                                </td>
                                                <td class="products align-middle pe-11"><a
                                                        class="fw-semi-bold mb-0 line-clamp-1" href="#!">PlayStation
                                                        5 DualSense Wireless Controller</a></td>
                                                <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                                                <td
                                                    class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                                    Regular</td>
                                                <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$299
                                                </td>
                                                <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                                    <button class="btn btn-sm text-500 hover-text-600 me-2"><svg
                                                            class="svg-inline--fa fa-trash" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="trash"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button><button
                                                        class="btn btn-primary fs--2"><svg
                                                            class="svg-inline--fa fa-cart-shopping me-1 fs--2"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="cart-shopping" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-shopping-cart me-1 fs--2"></span> Font Awesome fontawesome.com -->Add
                                                        to cart</button>
                                                </td>
                                            </tr>
                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                    <div class="border rounded-2 d-inline-block"><img
                                                            src="../../../assets/img//products/3.png" alt=""
                                                            width="53"></div>
                                                </td>
                                                <td class="products align-middle pe-11"><a
                                                        class="fw-semi-bold mb-0 line-clamp-1" href="#!">Apple
                                                        MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                                                <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray
                                                </td>
                                                <td
                                                    class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                                    Pro</td>
                                                <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,699
                                                </td>
                                                <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                                    <button class="btn btn-sm text-500 hover-text-600 me-2"><svg
                                                            class="svg-inline--fa fa-trash" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="trash"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button><button
                                                        class="btn btn-primary fs--2"><svg
                                                            class="svg-inline--fa fa-cart-shopping me-1 fs--2"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="cart-shopping" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-shopping-cart me-1 fs--2"></span> Font Awesome fontawesome.com -->Add
                                                        to cart</button>
                                                </td>
                                            </tr>
                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                <td class="align-middle white-space-nowrap ps-0 py-0">
                                                    <div class="border rounded-2 d-inline-block"><img
                                                            src="../../../assets/img//products/4.png" alt=""
                                                            width="53"></div>
                                                </td>
                                                <td class="products align-middle pe-11"><a
                                                        class="fw-semi-bold mb-0 line-clamp-1" href="#!">Apple iMac
                                                        24" 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green
                                                        (MJV83ZP/A) 2021</a></td>
                                                <td class="color align-middle white-space-nowrap fs--1 text-900">Ocean Blue
                                                </td>
                                                <td
                                                    class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                                    21"</td>
                                                <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$65
                                                </td>
                                                <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                                    <button class="btn btn-sm text-500 hover-text-600 me-2"><svg
                                                            class="svg-inline--fa fa-trash" aria-hidden="true"
                                                            focusable="false" data-prefix="fas" data-icon="trash"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 448 512" data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-trash"></span> Font Awesome fontawesome.com --></button><button
                                                        class="btn btn-primary fs--2"><svg
                                                            class="svg-inline--fa fa-cart-shopping me-1 fs--2"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="cart-shopping" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                                            </path>
                                                        </svg>
                                                        <!-- <span class="fas fa-shopping-cart me-1 fs--2"></span> Font Awesome fontawesome.com -->Add
                                                        to cart</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                                    <div class="col-auto d-flex">
                                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                            data-list-info="data-list-info">1 to 5 <span class="text-600"> Items of
                                            </span>9</p><a class="fw-semi-bold" href="#!" data-list-view="*">View
                                            all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1"
                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 512" data-fa-i2svg=""
                                                style="transform-origin: 0.25em 0.5625em;">
                                                <g transform="translate(128 256)">
                                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                                                            transform="translate(-128 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a
                                            class="fw-semi-bold d-none" href="#!" data-list-view="less">View
                                            Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1"
                                                aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 512" data-fa-i2svg=""
                                                style="transform-origin: 0.25em 0.5625em;">
                                                <g transform="translate(128 256)">
                                                    <g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)">
                                                        <path fill="currentColor"
                                                            d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
                                                            transform="translate(-128 -256)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
                                    </div>
                                    <div class="col-auto d-flex"><button class="page-link disabled"
                                            data-list-pagination="prev" disabled=""><svg
                                                class="svg-inline--fa fa-chevron-left" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="chevron-left"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                                        <ul class="mb-0 pagination">
                                            <li class="active"><button class="page" type="button" data-i="1"
                                                    data-page="5">1</button></li>
                                            <li><button class="page" type="button" data-i="2"
                                                    data-page="5">2</button></li>
                                        </ul><button class="page-link pe-0" data-list-pagination="next"><svg
                                                class="svg-inline--fa fa-chevron-right" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="chevron-right"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-personal-info" role="tabpanel"
                            aria-labelledby="personal-info-tab">
                            <form action="{{ route('customer.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3 mb-5">
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                            for="name">Nome completo</label>
                                        <input class="form-control" id="name" name="name" type="text"
                                            placeholder="Nome completo" value="{{ $user->name  }}">

                                            @error('name')
                                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                            @enderror
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                            for="gender">Gênero</label>
                                            <select class="form-select" id="gender" name="gender">
                                                <option value="male" {{ $user->gender === 'male' ? 'selected' : '' }}>Masculino</option>
                                                <option value="female" {{ $user->gender === 'female' ? 'selected' : '' }}>Feminino</option>
                                                <option value="non-binary" {{ $user->gender === 'non-binary' ? 'selected' : '' }}>Não binário</option>
                                                <option value="not-to-say" {{ $user->gender === 'not-to-say' ? 'selected' : '' }}>Prefiro não informar</option>
                                            </select>

                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                            for="email">Email</label>
                                        <input class="form-control" id="email" type="text" name="email"
                                            placeholder="Email" value="{{ $user->email  }}">

                                            @error('email')
                                            <span class="text-danger" style="font-size: 13px;">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                            for="date_of_birth">Data de Nascimento</label>
                                            <input class="form-control" id="date_of_birth" type="date" name="date_of_birth" value="{{ $user->date_of_birth }}">

                                    </div>

                                    <div class="col-12 col-lg-6"><label
                                            class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                            for="phone">Telefone</label><input class="form-control" id="phone"
                                            type="text" name="phone" placeholder="+1234567890" value="{{ $user->phone  }}"></div>
                                    <div class="col-12 col-lg-6"><label
                                            class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                            for="alternative_phone">Telefone Alternativo</label><input
                                            class="form-control" id="alternative_phone" type="text"
                                            name="alternative_phone" placeholder="+1234567890" value="{{ $user->alternative_phone  }}"></div>

                                            <div class="col-12 col-lg-6"><label
                                                class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                                for="shipping_address">Endereço de Entrega</label><input class="form-control" id="shipping_address"
                                                type="text" name="shipping_address" placeholder="Endereço de Entrega" value="{{ $user->shipping_address  }}"></div>
                                        <div class="col-12 col-lg-6"><label
                                                class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                                for="billing_address">Endereço de Cobrança</label><input
                                                class="form-control" id="billing_address" type="text"
                                                name="billing_address" placeholder="Endereço De Cobrança" value="{{ $user->billing_address  }}"></div>

                                    <div class="col-12 col-lg-4"><label
                                            class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                            for="facebook">Facebook</label><input class="form-control" id="facebook"
                                            type="text" name="facebook" placeholder="Facebook" value="{{ $user->facebook  }}"></div>

                                    <div class="col-12 col-lg-4"><label
                                            class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                            for="twitter">Twitter</label><input class="form-control" id="twitter"
                                            type="text" name="twitter" placeholder="Twitter" value="{{ $user->twitter  }}"></div>

                                            <div class="col-12 col-lg-4"><label
                                                class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                                for="instagram">Avatar</label>
                                                <input class="form-control" id="instagram"
                                                type="file" name="file"  value=""></div>
                                </div>

                                <div class="text-end"><button type="submit" class="btn btn-primary px-7">Save changes</button></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('js')
    @if (Session::has('success'))
        <script>
            setTimeout(function() {
                toastr.options.progressBar = true;
                toastr.success("{{ Session::get('success') }}");
            }, 100);
        </script>
    @endif
@endsection
