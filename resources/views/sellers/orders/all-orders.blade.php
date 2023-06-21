@extends('sellers.layouts.app')
@section('titulo')
@section('content')
    <div class="content">
        <div class="mb-9">
            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Pedidos</h2>
                </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Todos <span
                            class="text-700 fw-semi-bold">(68817)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pagamento Pendente <span
                            class="text-700 fw-semi-bold">(6)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Não Cumpridos <span
                            class="text-700 fw-semi-bold">(17)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Concluídos<span
                            class="text-700 fw-semi-bold">(6,810)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Reembolsados<span
                            class="text-700 fw-semi-bold">(8)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#">Falhou<span
                            class="text-700 fw-semi-bold">(2)</span></a></li>
            </ul>
            <div id="orderTable"
                data-list="{&quot;valueNames&quot;:[&quot;order&quot;,&quot;total&quot;,&quot;customer&quot;,&quot;payment_status&quot;,&quot;fulfilment_status&quot;,&quot;delivery_type&quot;,&quot;date&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
                <div class="mb-4">
                    <div class="row g-3">
                        <div class="col-auto">
                            <div class="search-box">
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                    <input class="form-control search-input search" type="search"
                                        placeholder="Pesquisar pedidos" aria-label="Pesquisar">
                                    <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                                        </path>
                                    </svg>
                                </form>
                            </div>
                        </div>
                        <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                            <div class="btn-group position-static" role="group">
                                <div class="btn-group position-static text-nowrap" role="group"><button
                                        class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent"> Status de pagamento<svg
                                            class="svg-inline--fa fa-angle-down ms-2" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="angle-down" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-angle-down ms-2"></span> Font Awesome fontawesome.com --></button>
                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                        <li><a class="dropdown-item" href="#">Ação</a></li>
                                        <li><a class="dropdown-item" href="#">Outra ação</a></li>
                                        <li><a class="dropdown-item" href="#">Algo mais aqui</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Link separado</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group position-static text-nowrap" role="group"><button
                                        class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent"> Status de cumprimento<svg
                                            class="svg-inline--fa fa-angle-down ms-2" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="angle-down" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z">
                                            </path>
                                        </svg>
                                        <!-- <span class="fas fa-angle-down ms-2"></span> Font Awesome fontawesome.com --></button>
                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                        <li><a class="dropdown-item" href="#">Ação</a></li>
                                        <li><a class="dropdown-item" href="#">Outra ação</a></li>
                                        <li><a class="dropdown-item" href="#">Algo mais aqui</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Link separado</a></li>
                                    </ul>
                                </div><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">Mais filtros
                                </button>
                            </div>
                        </div>
                        <div class="col-auto"><button class="btn btn-link text-900 me-4 px-0"><svg
                                    class="svg-inline--fa fa-file-export fs--1 me-2" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="file-export" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M192 312C192 298.8 202.8 288 216 288H384V160H256c-17.67 0-32-14.33-32-32L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48v-128H216C202.8 336 192 325.3 192 312zM256 0v128h128L256 0zM568.1 295l-80-80c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94L494.1 288H384v48h110.1l-39.03 39.03C450.3 379.7 448 385.8 448 392s2.344 12.28 7.031 16.97c9.375 9.375 24.56 9.375 33.94 0l80-80C578.3 319.6 578.3 304.4 568.1 295z">
                                    </path>
                                </svg>
                                <!-- <span class="fa-solid fa-file-export fs--1 me-2"></span> Font Awesome fontawesome.com -->Exportar</button>
                            <path fill="currentColor"
                                d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z">
                            </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <table class="table table-sm fs--1 mb-0">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap fs--1 align-middle ps-0" style="width:26px;">
                                        <div class="form-check mb-0 fs-0"><input class="form-check-input"
                                                id="checkbox-bulk-order-select" type="checkbox"
                                                data-bulk-select="{&quot;body&quot;:&quot;order-table-body&quot;}"></div>
                                    </th>
                                    <th class="sort white-space-nowrap align-middle pe-3" scope="col"
                                        data-sort="order" style="width:5%;">PEDIDO</th>
                                    <th class="sort align-middle text-end" scope="col" data-sort="total"
                                        style="width:16%;">TOTAL</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer"
                                        style="width:40%; min-width: 300px;">CLIENTE</th>
                                    <th class="sort align-middle pe-3" scope="col" data-sort="payment_status"
                                        style="width:10%;">STATUS DO PAGAMENTO</th>
                                    <th class="sort align-middle pe-3" scope="col" data-sort="payment_status"
                                        style="width:10%;">STATUS DO CUMPRIMENTO</th>
                                    <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATA</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="order-table-body">
                                @if ($orders)
                                    @foreach ($orders as $key => $order)
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach (json_decode($order->items) as $item)
                                            @php
                                                $total = $total + $item->total;
                                            @endphp
                                        @endforeach
                                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                            <td class="fs--1 align-middle px-0 py-3">
                                                <div class="form-check mb-0 fs-0"><input class="form-check-input"
                                                        type="checkbox"
                                                        data-bulk-select-row="{&quot;order&quot;:2453,&quot;total&quot;:87,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/32.webp&quot;,&quot;name&quot;:&quot;Carry Anna&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Complete&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Cancelled&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;delivery_type&quot;:&quot;Cash on delivery&quot;,&quot;date&quot;:&quot;Dec 12, 12:56 PM&quot;}">
                                                </div>
                                            </td>
                                            <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold"
                                                    href="{{ route('seller.orders.show', $order->id) }}">#0{{ $key + 1 }}</a>
                                            </td>
                                            <td class="total align-middle text-end fw-semi-bold text-1000">
                                                {{ \App\Helpers\ptBRHelper::real($total) }}</td>
                                            <td class="customer align-middle white-space-nowrap ps-8"><a
                                                    class="d-flex align-items-center" href="#!">
                                                    <div class="avatar avatar-m"><img class="rounded-circle"
                                                            src="{{ $order->user->profile_picture ? asset('storage/' . $order->user->profile_picture) : asset('assets/images/users/avatar.png') }}"
                                                            alt="{{ $order->user->name }}"></div>
                                                    <h6 class="mb-0 ms-3 text-900">{{ $order->user->name }}</h6>
                                                </a>
                                            </td>
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

                                    <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">
                                        {{ $order->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                        <div class="col-auto d-flex">

                        </div>
                        <div class="col-auto d-flex">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @component('sellers.components.footer')
        @endcomponent
    </div>
@endsection
