@extends('sellers.layouts.app')
@section('titulo')
@section('content')
    <div class="content">
        <div class="mb-9">
            <h2 class="mb-0">Pedido <span>#0{{$order->id}}</span></h2>
<div class="d-flex flex-wrap flex-between-center mb-1">
    <p class="text-800 lh-sm mb-0">ID do Cliente: <a class="fw-bold" href="#!">0{{$order->user->id}}</a></p>
                <div class="d-flex"><button class="btn pe-3 ps-0 text-900"><svg class="svg-inline--fa fa-print me-2"
                            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z">
                            </path>
                        </svg>
                        <!-- <span class="fas fa-print me-2"></span> Font Awesome fontawesome.com -->Imprimir</button>
                    <div class="dropdown">
                    </div>
                </div>
            </div>
            <div class="row g-5 gy-7">
                <div class="col-12 col-xl-8 col-xxl-9">
                    <div id="orderTable"
                        data-list="{&quot;valueNames&quot;:[&quot;products&quot;,&quot;color&quot;,&quot;size&quot;,&quot;price&quot;,&quot;quantity&quot;,&quot;total&quot;],&quot;page&quot;:10}">
                        <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0 border-top border-200">
                                <thead>
                                    <tr>
                                        <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                                        <th class="sort white-space-nowrap align-middle" scope="col"
                                            style="min-width:400px;" data-sort="products" colspan="2">PRODUCTS</th>
                                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="price"
                                            style="width:150px;">PRICE</th>
                                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="quantity"
                                            style="width:200px;">QUANTITY</th>
                                        <th class="sort align-middle text-end ps-4" scope="col" data-sort="total"
                                            style="width:250px;">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="order-table-body">
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach (json_decode($order->items) as $key=>$item)
                                    @php
                                    $total=$total+$item->total;
                                @endphp
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="align-middle white-space-nowrap py-2">
                                            <div class="border rounded-2"><img src="{{asset('assets/img//products/6.png') }}"
                                                    alt="" width="53"></div>
                                        </td>
                                        <td class="products align-middle py-0" colspan="2"><a
                                                class="fw-semi-bold line-clamp-2 mb-0" href="{{ route('product.details',$item->slug) }}">{{ $item->name }}</a></td>
                                        <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">{{ \App\Helpers\ptBRHelper::real($item->price) }}</td>
                                        <td class="quantity align-middle text-end py-0 ps-4 text-700">{{ $item->quantity }}</td>
                                        <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">{{ \App\Helpers\ptBRHelper::real($item->total) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex flex-between-center py-3 border-bottom mb-7">
                        <p class="text-1100 fw-semi-bold lh-sm mb-0">Subtotal dos itens :</p>
                        <p class="text-1100 fw-bold lh-sm mb-0">{{ \App\Helpers\ptBRHelper::real($total) }}</p>
                    </div>
                    <div class="row gx-4 gy-6 g-xl-7 justify-content-sm-center justify-content-xl-start">
                        <div class="col-12 col-sm-auto">
                            <h4 class="mb-5">Detalhes de Cobrança</h4>
                            <div class="row g-4 flex-sm-column">
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-user me-2"
                                            style="stroke-width:2.5;">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <h6 class="mb-0">Cliente</h6>
                                    </div><a class="fs--1 ms-4" href="#!">{{ $order->user->name }}</a>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-mail me-2"
                                            style="stroke-width:2.5;">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Email</h6>
                                    </div><a class="fs--1 ms-4"
                                        href="mailto:{{$order->user->email}}">{{$order->user->email}}</a>
                                </div>
                                <div class="col-6 col-sm-12 order-sm-1">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-home me-2"
                                            style="stroke-width:2.5;">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Endereço</h6>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-800 mb-0 fs--1">{{$order->user->billing_address}}</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-phone me-2"
                                            style="stroke-width:2.5;">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <h6 class="mb-0">Telefone</h6>
                                    </div><a class="fs--1 ms-4" href="tel:{{$order->user->phone}}">{{$order->user->phone}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-auto">
                            <h4 class="mb-5">Detalhes de Envio</h4>
                            <div class="row g-4 flex-sm-column">
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-mail me-2"
                                            style="stroke-width:2.5;">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Email</h6>
                                    </div><a class="fs--1 ms-4"
                                        href="mailto:{{$order->user->email}}:">{{$order->user->email}}</a>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-phone me-2"
                                            style="stroke-width:2.5;">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
                                        <h6 class="mb-0">Telefone</h6>
                                    </div><a class="fs--1 ms-4" href="tel:{{$order->user->phone}}">{{$order->user->phone}}</a>
                                </div>
                                <div class="col-6 col-sm-12 order-sm-1">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-home me-2"
                                            style="stroke-width:2.5;">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                        <h6 class="mb-0">Endereço</h6>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-800 mb-0 fs--1">{{$order->user->billing_address}}</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-12">
                                    <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-calendar me-2"
                                            style="stroke-width:2.5;">
                                            <rect x="3" y="4" width="18" height="18"
                                                rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        <h6 class="mb-0">Data de Envio</h6>
                                        </div>
                                        <p class="mb-0 text-800 fs--1 ms-4">{{ $order->created_at->addWeeks(2)->format('d M, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-xxl-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h3 class="card-title mb-4">Resumo</h3>
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-900 fw-semi-bold">Subtotal dos itens :</p>
                                            <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real($total) }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-900 fw-semi-bold">Desconto :</p>
                                            <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-900 fw-semi-bold">Imposto :</p>
                                            <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-900 fw-semi-bold">Subtotal :</p>
                                            <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="text-900 fw-semi-bold">Custo de Envio :</p>
                                            <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between border-top border-dashed pt-4">
                                        <h4 class="mb-0">Total :</h4>
                                        <h4 class="mb-0">{{ \App\Helpers\ptBRHelper::real($total) }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title mb-4">Status do Pedido</h3>
                                    <h6 class="mb-2">Status do Pagamento</h6>
                                    <select class="form-select mb-4" aria-label="tipo de entrega">
                                        <option value="cod">Processando</option>
                                        <option value="card">Cancelado</option>
                                        <option value="paypal">Concluído</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
        </div>
        @component('sellers.components.footer')
        @endcomponent
    </div>
@endsection
