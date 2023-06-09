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
                        <form method="POST" action="{{ route('paypal.retorno') }}">
                            @csrf
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
                            <h3 class="mb-5">Tipo de Entrega</h3>
                            <div class="row gy-6">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex flex-wrap align-items-center mb-3">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="shippingRadio"
                                                id="free_shipping" />
                                            <label class="form-check-label fs-0 text-900" for="free_shipping">Frete
                                                Grátis</label>
                                        </div>
                                        <span class="d-inline-block text-1100 fw-bold ms-2">{{ \App\Helpers\ptBRHelper::real(0) }}</span>
                                    </div>
                                    <div class="ps-4">
                                        <h6 class="text-700 mb-2">Est. entrega: 21 de Junho - 20 de Julho</h6>
                                        <h6 class="text-info lh-base mb-0">Receba produtos enviados gratuitamente a tempo!
                                        </h6>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="d-flex flex-wrap align-items-center mb-3">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="shippingRadio"
                                                id="two_days_shipping" />
                                            <label class="form-check-label fs-0 text-900" for="two_days_shipping">Entrega em
                                                dois dias</label>
                                        </div>
                                        <span class="d-inline-block text-1100 fw-bold ms-2">{{ \App\Helpers\ptBRHelper::real(20) }}</span>
                                    </div>
                                    <div class="ps-4">
                                        <h6 class="text-700 mb-2">Est. entrega: 21 de Junho - 20 de Julho</h6>
                                        <h6 class="text-info lh-base mb-0">Tudo mais rápido com taxa mínima de envio.</h6>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="d-flex flex-wrap align-items-center mb-3">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="shippingRadio"
                                                id="standard_shipping" />
                                            <label class="form-check-label fs-0 text-900" for="standard_shipping">Envio
                                                Padrão</label>
                                        </div>
                                        <span class="d-inline-block text-1100 fw-bold ms-2">{{ \App\Helpers\ptBRHelper::real(10) }}</span>
                                    </div>
                                    <div class="ps-4">
                                        <h6 class="text-700 mb-2">Est. entrega: 21 de Junho - 20 de Julho</h6>
                                        <h6 class="text-info lh-base mb-0">Receba sua entrega pontualmente com envio
                                            econômico.</h6>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="d-flex flex-wrap align-items-center mb-3">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="shippingRadio"
                                                checked="checked" id="one_day_shipping" />
                                            <label class="form-check-label fs-0 text-900" for="one_day_shipping">Envio em
                                                um dia</label>
                                        </div>
                                        <span class="d-inline-block text-1100 fw-bold ms-2">$30.00</span>
                                        <span
                                            class="badge badge-phoenix badge-phoenix-warning ms-2 ms-lg-4 ms-xl-2">Popular</span>
                                    </div>
                                    <div class="ps-4">
                                        <h6 class="text-700 mb-2">Est. entrega: 21 de Junho - 20 de Julho</h6>
                                        <h6 class="text-info lh-base mb-0">Envio com prioridade máxima com o custo mais
                                            baixo.</h6>
                                    </div>
                                </div>

                            </div>
                            <hr class="my-6">
                            <h3 class="mb-5">Payment Method</h3>
                            <div class="row g-4 mb-7">
                                <div class="col-12">
                                    <div class="row gx-lg-11">
                                        <div class="col-12 col-md-auto">
                                            <div class="d-flex">
                                                <div class="form-check"><input class="form-check-input" id="creditCard"
                                                        type="radio" name="paymentMethod" checked="checked" /><label
                                                        class="form-check-label fs-0 text-900 me-3"
                                                        for="creditCard">Cartão de crédito</label></div><img
                                                    class="h-100 me-2 ms-4 ms-md-0"
                                                    src="../../../assets/img/logos/visa.png" alt="" />
                                                    <img class="h-100 me-2"
                                                    src="../../../assets/img/logos/mastercard.png" alt="" /><img
                                                    class="h-100" src="../../../assets/img/logos/american_express.png"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" id="paypal" type="radio"
                                                    name="paymentMethod" />
                                                <label class="form-check-label fs-0 text-900"
                                                    for="paypal">Paypal</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fs-0 text-1000 ps-0 text-none" for="selectCard">Selecione o
                                        cartão</label>
                                    <select class="form-select text-black" id="selectCard">
                                        <option selected="selected">Selecione um cartão</option>
                                        <option selected value="pagseguro">PagSeguro</option>
                                        <option value="visa">Visa</option>
                                        <option value="mastercard">Mastercard</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fs-0 text-1000 ps-0 text-none" for="card_number">Número
                                        do cartão</label>
                                    <input class="form-control" id="card_number" name="card_number" type="number"
                                        placeholder="Digite o número do cartão" aria-label="Número do cartão" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fs-0 text-1000 ps-0 text-none">Vencimento</label>
                                    <div class="d-flex">
                                        <input class="form-control" id="card_month" name="card_month" placeholder="Mês" style="margin-right: 10px;" />
                                        <input class="form-control" id="card_year" name="card_year" placeholder="Ano" style="margin-left: 10px;" />
                                    </div>
                                </div>
                                <div class="col-md-6"><label class="form-label fs-0 text-1000 ps-0 text-none"
                                        for="inputCardCVC">CVC</label>
                                        <input class="form-control" id="card_cvc" name="card_cvc"
                                        type="number" placeholder="Insira um CVC válido" aria-label="CVC" /></div>
                                <div class="col-12">
                                    <div class="form-check"><input class="form-check-input" id="gridCheck"
                                            type="checkbox" /><label class="form-check-label text-black fs-0"
                                            for="gridCheck">Salvar Detalhes do Cartão</label></div>
                                </div>
                            </div>
                            <div class="row g-2 mb-5 mb-lg-0">
                                @php
                                    $subtotal = 0;
                                @endphp
                                @foreach ($carts as $cart)
                                    @php
                                        $subtotal += $cart['price'] * $cart['amount'];
                                    @endphp
                                @endforeach
                                <div class="col-md-8 col-lg-9 d-grid"><button class="btn btn-primary"
                                        type="submit">Pagar {{ \App\Helpers\ptBRHelper::real($subtotal) }}</button></div>
                                <div class="col-md-4 col-lg-3 d-grid"><button
                                        class="btn btn-phoenix-secondary text-nowrap">Salvar Pedido e
                                        Sair</button></div>

                                <div id="paypal-button-container"></div>

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
