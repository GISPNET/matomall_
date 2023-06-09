@extends('web.layouts.app')
@section('titulo', 'Checkout')
@section('body')
    <main class="main" id="top">
        @component('web.components.top')
        @endcomponent

        @component('web.components.nav')
        @endcomponent

        <section class="pt-5 pb-9">
            <div class="container-small cart">
                <h2 class="mb-5">Check out</h2>
                <div class="row justify-content-between">
                    <div class="col-lg-7 col-xl-7">
                        <form method="POST" action="{{ route('addmoney.paypal') }}">
                             {{ csrf_field() }}
                            <div class="d-flex align-items-end">
                                <h3 class="mb-0 me-3">Detalhes de entrega</h3><button class="btn btn-link p-0"
                                    type="button">Editar</button>
                            </div>
                            <table class="table table-borderless mt-4">
                                <tbody>
                                    <tr>
                                        <td class="py-2 ps-0">
                                            <div class="d-flex">
                                                <span class="fs-5 me-2" data-feather="user"
                                                    style="height:16px; width:16px;"></span>
                                                <h5 class="lh-sm me-4">Nome</h5>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">:</td>
                                        <td class="py-2 px-3">
                                            <h5 class="lh-sm fw-normal text-800">{{ auth()->user()->name }}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 ps-0">
                                            <div class="d-flex">
                                                <span class="fs-5 me-2" data-feather="home"
                                                    style="height:16px; width:16px;"></span>
                                                <h5 class="lh-sm me-4">Endereço</h5>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">:</td>
                                        <td class="py-2 px-3">
                                            <h5 class="lh-lg fw-normal text-800">Apt: 6/B, 192 Edsel Road, Van Nuys <br>
                                                California, EUA 96580</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 ps-0">
                                            <div class="d-flex">
                                                <span class="fs-5 me-2" data-feather="phone"
                                                    style="height:16px; width:16px;"></span>
                                                <h5 class="lh-sm me-4">Telefone</h5>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">:</td>
                                        <td class="py-2 px-3">
                                            <h5 class="lh-sm fw-normal text-800">818-414-4092</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr class="my-6">
                            <h3>Detalhes de Cobrança</h3>
                            <div class="form-check">
                                <input class="form-check-input" id="sameAsShipping" type="checkbox" checked="checked" />
                                <label class="form-check-label fs-0 fw-normal" for="sameAsShipping">Mesmo endereço de
                                    entrega</label>
                            </div>
                            <table class="table table-borderless mt-4">
                                <tbody>
                                    <tr>
                                        <td class="py-2 ps-0">
                                            <div class="d-flex">
                                                <span class="fs-5 me-2" data-feather="user"
                                                    style="height:16px; width:16px;"> </span>
                                                <h5 class="lh-sm me-4">Nome</h5>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">:</td>
                                        <td class="py-2 px-3">
                                            <h5 class="lh-sm fw-normal text-800">{{ auth()->user()->name }}</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 ps-0">
                                            <div class="d-flex">
                                                <span class="fs-5 me-2" data-feather="home"
                                                    style="height:16px; width:16px;"> </span>
                                                <h5 class="lh-sm me-4">Endereço</h5>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">:</td>
                                        <td class="py-2 px-3">
                                            <h5 class="lh-lg fw-normal text-800">Apt: 6/B, 192 Edsel Road, Van Nuys <br>
                                                California, EUA 96580</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 ps-0">
                                            <div class="d-flex">
                                                <span class="fs-5 me-2" data-feather="phone"
                                                    style="height:16px; width:16px;"> </span>
                                                <h5 class="lh-sm me-4">Telefone</h5>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">: </td>
                                        <td class="py-2 px-3">
                                            <h5 class="lh-sm fw-normal text-800">818-414-4092</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <hr class="my-6">

                            <div class="row g-2 mb-5 mb-lg-0">
                                <div class="col-md-12 col-lg-12 d-grid"><button class="btn btn-primary"
                                        type="submit">Pagar Com PayPal</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="card mt-3 mt-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="mb-0">Resumo</h3><button class="btn btn-link pe-0"
                                        type="button">Continuar a compra</button>
                                </div>
                                <div class="border-dashed border-bottom mt-4">
                                    <div class="mx-n2">
                                        @php
                                            $subtotal = 0;
                                        @endphp
                                        @foreach ($carts as $cart)
                                            @php
                                                $subtotal += $cart['price'] * $cart['amount'];
                                            @endphp
                                            <div class="row align-items-center mb-2 g-3">
                                                <div class="col-8 col-md-7 col-lg-8">
                                                    <div class="d-flex align-items-center"><img class="me-2 ms-1"
                                                            src="{{ asset('storage/' . $cart['image']) }}" width="40"
                                                            alt="" />
                                                        <h6 class="fw-semi-bold text-1000 lh-base">{{ $cart['name'] }}</h6>
                                                    </div>
                                                </div>
                                                <div class="col-2 col-md-3 col-lg-2">
                                                    <h6 class="fs--2 mb-0">x{{ $cart['amount'] }}</h6>
                                                </div>
                                                <div class="col-2 ps-0">
                                                    <h5 class="mb-0 fw-semi-bold text-end text-lg-start">
                                                        {{ \App\Helpers\ptBRHelper::real($cart['price']) }}</h5>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="border-dashed border-bottom mt-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-900 fw-semi-bold">Subtotal de itens: </h5>
                                        <h5 class="text-900 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real($subtotal) }}
                                        </h5>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-900 fw-semi-bold">Desconto: </h5>
                                        <h5 class="text-danger fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</h5>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-900 fw-semi-bold">Taxa: </h5>
                                        <h5 class="text-900 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</h5>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="text-900 fw-semi-bold">Subtotal </h5>
                                        <h5 class="text-900 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }}</h5>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="text-900 fw-semi-bold">Frete </h5>
                                        <h5 class="text-900 fw-semi-bold">{{ \App\Helpers\ptBRHelper::real(0) }} </h5>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-dashed-y pt-3">
                                    <h4 class="mb-0">Total :</h4>
                                    <h4 class="mb-0">{{ \App\Helpers\ptBRHelper::real($subtotal) }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endsection
