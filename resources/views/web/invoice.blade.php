@extends('web.layouts.app')
@section('titulo', 'Fatura')
@section('body')
    <main class="main" id="top">
        @component('web.components.top')
        @endcomponent

        @component('web.components.nav')
        @endcomponent

        <section class="pt-5 pb-9 bg-white dark__bg-1200 border-top border-300">
            <div class="container-small">
                <div class="d-flex justify-content-between align-items-end mb-4">
                    <h2 class="mb-0">Fatura</h2>
                    <div><button class="btn btn-phoenix-secondary me-2"><svg class="svg-inline--fa fa-download me-sm-2"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z">
                                </path>
                            </svg>
                            <!-- <span class="fa-solid fa-download me-sm-2"></span> Font Awesome fontawesome.com --><span
                                class="d-none d-sm-inline-block">Baixar Fatura
                            </span></button><button class="btn btn-phoenix-secondary"><svg
                                class="svg-inline--fa fa-Imprimir me-sm-2" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="Imprimir" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z">
                                </path>
                            </svg>
                            <!-- <span class="fa-solid fa-Imprimir me-sm-2"></span> Font Awesome fontawesome.com --><span
                                class="d-none d-sm-inline-block">Imprimir</span></button></div>
                </div>
                <div class="bg-soft dark__bg-1100 p-4 mb-4 rounded-2">
                    <div class="row g-4">
                        <div class="col-12 col-lg-3">
                            <div class="row g-4 g-lg-2">
                                <div class="col-12 col-sm-6 col-lg-12">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto col-lg-6 col-xl-5">
                                            <h6 class="mb-0 me-3">Nº Fatura :</h6>
                                        </div>
                                        <div class="col-auto col-lg-6 col-xl-7">
                                            <p class="fs--1 text-800 fw-semi-bold mb-0">{{ $order->id }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-12">
                                    <div class="row align-items-center g-0">
                                        <div class="col-auto col-lg-6 col-xl-5">
                                            <h6 class="me-3">Data da fatura :</h6>
                                        </div>
                                        <div class="col-auto col-lg-6 col-xl-7">
                                            <p class="fs--1 text-800 fw-semi-bold mb-0">
                                                {{ \App\Helpers\ptBRHelper::datam($order->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-5">
                            <div class="row g-4 gy-lg-5">
                                <div class="col-12 col-lg-8">
                                    <h6 class="mb-2 me-3">Vendido por :</h6>
                                    <p class="fs--1 text-800 fw-semi-bold mb-0">Matomall<br>Rua dos Mercados, Bairro
                                        Central, Luanda, Angola</p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <h6 class="mb-2"> Referência :</h6>
                                    <p class="fs--1 text-800 fw-semi-bold mb-0">{{ $order->reference }}</p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <h6 class="mb-2"> Modo de Pagamento :</h6>
                                    <p class="fs--1 text-800 fw-semi-bold mb-0">{{ $order->payment_mode }}</p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <h6 class="mb-2"> Status do Cumprimento :</h6>
                                    <p class="fs--1 text-800 fw-semi-bold mb-0">
                                        @if ($order->order_status == 1)
                                            Processando
                                        @elseif ($order->order_status == 2)
                                            Cancelado
                                        @elseif ($order->order_status == 3)
                                            Concluído
                                        @endif
                                    </p>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <h6 class="mb-2"> Data do Pedido:</h6>
                                    <p class="fs--1 text-800 fw-semi-bold mb-0">
                                        {{ \App\Helpers\ptBRHelper::datam($order->created_at) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="row g-4">
                                <div class="col-12 col-lg-6">
                                    <h6 class="mb-2">Endereço de cobrança:</h6>
                                    <div class="fs--1 text-800 fw-semi-bold mb-0">
                                        <p class="mb-2">{{ $order->user->name }}</p>
                                        <p class="mb-2">{{ $order->user->billing_address }}</p>
                                        <p class="mb-2">{{ $order->user->email }}</p>
                                        <p class="mb-0">{{ $order->user->phone }}</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <h6 class="mb-2">Endereço de envio:</h6>
                                    <div class="fs--1 text-800 fw-semi-bold mb-0">
                                        <p class="mb-2">{{ $order->user->name }}</p>
                                        <p class="mb-2">{{ $order->user->shipping_address }}</p>
                                        <p class="mb-2">{{ $order->user->email }}</p>
                                        <p class="mb-0">{{ $order->user->phone }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-0">
                    <div class="table-responsive scrollbar">
                        <table class="table fs--1 text-900 mb-0">
                            <thead class="bg-200">
                                <tr>
                                    <th scope="col" style="width: 24px;"></th>
                                    <th scope="col" style="min-width: 60px;">Nº.</th>
                                    <th scope="col" style="min-width: 360px;" colspan="3">Produtos</th>
                                    <th class="text-end" scope="col" style="width: 80px;">Quantidade</th>
                                    <th class="text-end" scope="col" style="width: 100px;" colspan="2">Preço</th>
                                    <th class="text-end" scope="col" style="min-width: 60px;" colspan="2">Total
                                    </th>
                                    <th scope="col" style="width: 24px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach (json_decode($order->items) as $key => $item)
                                    @php
                                        $total = $total + $item->total;
                                    @endphp
                                    <tr>
                                        <td class="border-0"></td>
                                        <td class="align-middle">{{ $key + 1 }}</td>
                                        <td class="align-middle" colspan="3">
                                            <p class="line-clamp-1 mb-0 fw-semi-bold">{{ $item->name }}</p>
                                        </td>
                                        <td class="align-middle text-end text-1000 fw-semi-bold">{{ $item->quantity }}
                                        </td>
                                        <td class="align-middle text-end fw-semi-bold" colspan="2">
                                            {{ \App\Helpers\ptBRHelper::real($item->price) }}
                                        </td>
                                        <td class="align-middle text-end fw-semi-bold" colspan="2">
                                            {{ \App\Helpers\ptBRHelper::real($item->total) }}
                                        </td>
                                        <td class="border-0"></td>
                                    </tr>
                                @endforeach
                                <tr class="bg-200">
                                    <td></td>
                                    <td class="align-middle fw-semi-bold" colspan="5">Subtotal</td>
                                    <td class="align-middle text-end fw-bold" colspan="4">
                                        {{ \App\Helpers\ptBRHelper::real($total) }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="border-0"></td>
                                    <td colspan="5"></td>
                                    <td class="align-middle fw-bold ps-15" colspan="2">Frete</td>
                                    <td class="align-middle text-end fw-semi-bold" colspan="2">
                                        {{ \App\Helpers\ptBRHelper::real(0) }}</td>
                                    <td class="border-0"></td>
                                </tr>
                                <tr class="bg-200">
                                    <td class="align-middle ps-4 fw-bold text-1000" colspan="3">Grand Total</td>
                                    <td class="align-middle fw-bold text-1000" colspan="4"></td>
                                    <td class="align-middle text-end fw-bold" colspan="3">
                                        {{ \App\Helpers\ptBRHelper::real($total) }}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div style="margin-top: 50px;" class="d-flex justify-content-between">
                    <a href="{{ route('product.index') }}" class="btn btn-primary"><svg
                            class="svg-inline--fa fa-bag-shopping me-2" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="bag-shopping" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z">
                            </path>
                        </svg>
                        <!-- <span class="fa-solid fa-bag-shopping me-2"></span>
                                     Font Awesome fontawesome.com -->Procurar mais itens
                    </a>

                    <div><button class="btn btn-phoenix-secondary me-2">
                            <svg class="svg-inline--fa fa-download me-sm-2" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z">
                                </path>
                            </svg><!-- <span class="fa-solid fa-download me-sm-2"></span> Font Awesome fontawesome.com -->
                            <span class="d-none d-sm-inline-block">Baixar Fatura
                            </span></button>

                        <button class="btn btn-phoenix-secondary"><svg class="svg-inline--fa fa-Imprimir me-sm-2"
                                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="Imprimir"
                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z">
                                </path>
                            </svg>
                            <!-- <span class="fa-solid fa-Imprimir me-sm-2"></span> Font Awesome fontawesome.com --><span
                                class="d-none d-sm-inline-block">Imprimir</span></button>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @section('js')
        @if (Session::has('payment-success'))
            <script>
                setTimeout(function() {
                    toastr.options.progressBar = true;
                    toastr.success("{{ Session::get('payment-success') }}");
                }, 100);
            </script>
        @endif
    @endsection
