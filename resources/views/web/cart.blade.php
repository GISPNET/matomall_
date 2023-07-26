@extends('web.layouts.app')
@section('titulo', 'Carrinho')
@section('body')
    <main class="main" id="top">

        @component('web.components.top')
        @endcomponent

        @component('web.components.nav')
        @endcomponent

        <section class="pt-5 pb-9">
            <div class="container-small cart">
                <h2 class="mb-6">Carrinho</h2>
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                        <div id="cartTable"
                            data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                            <div class="table-responsive scrollbar mx-n1 px-1">
                                <table class="table fs--1 mb-0 border-top border-200">
                                    <thead>
                                        <tr>
                                            <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                                            <th class="sort white-space-nowrap align-middle" scope="col"
                                                style="min-width:250px;">PRODUTOS</th>
                                            <th class="sort align-middle text-end" scope="col" style="width:300px;">PREÇO
                                            </th>
                                            <th class="sort align-middle ps-5" scope="col" style="width:200px;">
                                                QUANTIDADE
                                            </th>
                                            <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL
                                            </th>
                                            <th class="sort text-end align-middle pe-0" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="cart-table-body">
                                        @php
                                            $subtotal = 0;
                                        @endphp
                                        @if (count($carts) > 0)
                                            @foreach ($carts as $cart)
                                                @php
                                                    $subtotal = $subtotal + $cart['amount'] * $cart['price'];
                                                @endphp
                                                <tr class="cart-table-row btn-reveal-trigger">
                                                    <td class="align-middle white-space-nowrap py-0">
                                                        <div class="border rounded-2">
                                                            @if ($cart['image'])
                                                                <img src="{{ asset('storage/' . $cart['image']) }}"
                                                                    alt="" width="53" />
                                                        </div>
                                                    @else
                                                        <img src="{{ asset('assets/img/matomall-placeholder.png') }}"
                                                            alt="" width="53" />
                                            @endif

                                            </td>
                                            <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2"
                                                    href="{{ route('product.details', $cart['slug']) }}">{{ $cart['name'] }}</a>
                                            </td>
                                            </td>
                                            <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">
                                                {{ \App\Helpers\ptBRHelper::real($cart['price']) }}</td>
                                            <td class="quantity align-middle fs-0 ps-5">
                                                <div class="input-group input-group-sm flex-nowrap center"
                                                    data-quantity="data-quantity"><input
                                                        class="form-control text-center input-spin-none bg-transparent border-0 px-0"
                                                        type="number" min="1" value="{{ $cart['amount'] }}"
                                                        aria-label="Amount (to the nearest dollar)" /></div>
                                            </td>
                                            <td class="total align-middle fw-bold text-1000 text-end">
                                                {{ \App\Helpers\ptBRHelper::real($cart['amount'] * $cart['price']) }}
                                            </td>
                                            <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                                                <a href="{{ route('cart.remove', $cart['slug']) }}"
                                                    class="btn btn-sm text-500 hover-text-600 me-2"><span
                                                        class="fas fa-trash"></span></a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <td colspan="5" align="center"> Carrinho vazio</td>
                                        @endif
                                        <tr class="cart-table-row btn-reveal-trigger">
                                            <td class="text-1100 fw-semi-bold ps-0 fs-0" colspan="4">Subtotal de itens: :
                                            </td>
                                            <td class="text-1100 fw-bold text-end fs-0">
                                                {{ \App\Helpers\ptBRHelper::real($subtotal) }}</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-between-center mb-3">
                                    <h3 class="card-title mb-0">Resumo</h3><a class="btn btn-link p-0"
                                        href="">Continuar a compra </a>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Subtotal de itens:</p>
                                        <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real($subtotal) }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Desconto :</p>
                                        <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Taxa :</p>
                                        <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</p>
                                    </div>W
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Frete :</p>
                                        <p class="text-1100 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</p>
                                    </div>
                                </div>
                                <div class="input-group mb-3"><input class="form-control" type="text"
                                        placeholder="Comprovante" /><button
                                        class="btn btn-phoenix-primary px-5">Aplicar</button></div>
                                <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                                    <h4 class="mb-0">Total :</h4>
                                    <h4 class="mb-">{{ \App\Helpers\ptBRHelper::real($subtotal) }}</h4>
                                </div><a href="{{ route('checkout.index') }}" class="btn btn-primary w-100">Fazer o
                                    check-out <span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
