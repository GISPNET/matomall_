<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>
    <script src="https://cdn.tiny.cloud/1/trfv2fus0c841r77ur20nkjtxl1j9aqfmc23t26kf3axvnwu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="../../../vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../../../vendors/choices/choices.min.css" rel="stylesheet">
    <link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            @component('sellers.components.navbar.navbar-vertical-navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-fixed-top')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-navbar-slim-fixed-top')
            @endcomponent
            @component('sellers.components.navbar.navbar-top fixed-top-navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-navbar-slim-justify-content-between')
            @endcomponent
            @component('sellers.components.navbar.navbar-top fixed-top navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-fixed-top-navbar-slim-justify-content-between navbar-expand-lg')
            @endcomponent
            <script>
                var navbarTopShape = window.config.config.phoenixNavbarTopShape;
                var navbarPosition = window.config.config.phoenixNavbarPosition;
                var body = document.querySelector('body');
                var navbarDefault = document.querySelector('#navbarDefault');
                var navbarTop = document.querySelector('#navbarTop');
                var topNavSlim = document.querySelector('#topNavSlim');
                var navbarTopSlim = document.querySelector('#navbarTopSlim');
                var navbarCombo = document.querySelector('#navbarCombo');
                var navbarComboSlim = document.querySelector('#navbarComboSlim');

                var documentElement = document.documentElement;
                var navbarVertical = document.querySelector('.navbar-vertical');

                if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                    navbarDefault.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    topNavSlim.style.display = 'block';
                    navbarVertical.style.display = 'inline-block';
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                    navbarDefault.remove();
                    navbarVertical.remove();
                    navbarTop.remove();
                    topNavSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarTopSlim.removeAttribute('style');
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                    navbarDefault.remove();
                    //- navbarVertical.remove();
                    navbarTop.remove();
                    topNavSlim.remove();
                    navbarCombo.remove();
                    navbarTopSlim.remove();
                    navbarComboSlim.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                    navbarDefault.remove();
                    topNavSlim.remove();
                    navbarVertical.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarTop.removeAttribute('style');
                    documentElement.classList.add('navbar-horizontal');
                } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                    topNavSlim.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarDefault.remove();
                    navbarComboSlim.remove();
                    navbarCombo.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                    documentElement.classList.add('navbar-combo')

                } else {
                    topNavSlim.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarDefault.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                }

                var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                var navbarTop = document.querySelector('.navbar-top');
                if (navbarTopStyle === 'darker') {
                    navbarTop.classList.add('navbar-darker');
                }

                var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                var navbarVertical = document.querySelector('.navbar-vertical');
                if (navbarVerticalStyle === 'darker') {
                    navbarVertical.classList.add('navbar-darker');
                }
            </script>
            <div class="content">
                <form class="mb-9" method="POST" action="{{ route('seller.product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 flex-between-end mb-5">
                        <div class="col-auto">
                            <h2 class="mb-2">Adicionar um produto</h2>
                            <h5 class="text-700 fw-semi-bold">Pedidos realizados em sua loja</h5>
                        </div>
                        <div class="col-auto"><button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0"
                                type="button">Discard</button><button
                                class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0" type="button">Save
                                draft</button><button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publish
                                product</button></div>
                    </div>
                    <h4 class="mb-3">Título do Produto</h4>
                    <div class="row g-5">
                        <div class="col-12 col-xl-8">
                            <input class="form-control mb-5" name="name" type="text" placeholder="Escreva o título aqui..." />                            <div class="mb-6">
                                <h4 class="mb-3">Descrição do Produto</h4>
                                <textarea name="description"></textarea>
                            </div>
                            <h4 class="mb-3">Exibir imagens</h4>
                            <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                                <div class="fallback">
                                    <input name="files" type="file" multiple="multiple" />
                                </div>
                                <div class="dz-preview d-flex flex-wrap">
                                    <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2"
                                        style="height:80px;width:80px;">
                                        <img class="dz-image" src="../../../assets/img/products/23.png" alt="..."
                                            data-dz-thumbnail="data-dz-thumbnail" />
                                        <a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove">
                                            <span data-feather="x"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="dz-message text-600" data-dz-message="data-dz-message">
                                    Arraste sua foto aqui<span class="text-800">&nbsp;ou</span>
                                    <button class="btn btn-link p-0" type="button">&nbsp;Navegar pelo dispositivo</button>
                                    <br />
                                    <img class="mt-3 me-2" src="{{ asset('assets/img/icons/image-icon.png') }}" width="40" alt="" />
                                </div>
                            </div>
                            <h4 class="mb-3">Inventory</h4>
                            <div class="row g-0 border-top border-bottom border-300">
                                <div class="col-sm-4">
                                    <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm border-300 fs--1 vertical-tab h-100 justify-content-between"
                                        role="tablist" aria-orientation="vertical"><a
                                            class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active"
                                            id="pricingTab" data-bs-toggle="tab"
                                            data-bs-target="#pricingTabContent" role="tab"
                                            aria-controls="pricingTabContent" aria-selected="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-tag me-sm-2 fs-4 nav-icons">
                                                <path
                                                    d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                </path>
                                                <line x1="7" y1="7" x2="7.01"
                                                    y2="7">
                                                </line>
                                            </svg><span class="d-none d-sm-inline">Preços</span></a><a
                                            class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                            id="restockTab" data-bs-toggle="tab"
                                            data-bs-target="#restockTabContent" role="tab"
                                            aria-controls="restockTabContent" aria-selected="false"
                                            tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                                height="16px" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-package me-sm-2 fs-4 nav-icons">
                                                <line x1="16.5" y1="9.4" x2="7.5"
                                                    y2="4.21">
                                                </line>
                                                <path
                                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                                </path>
                                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                <line x1="12" y1="22.08" x2="12"
                                                    y2="12">
                                                </line>
                                            </svg><span class="d-none d-sm-inline">Reabastecer</span></a><a
                                            class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                            id="shippingTab" data-bs-toggle="tab"
                                            data-bs-target="#shippingTabContent" role="tab"
                                            aria-controls="shippingTabContent" aria-selected="false"
                                            tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                                height="16px" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-truck me-sm-2 fs-4 nav-icons">
                                                <rect x="1" y="3" width="15"
                                                    height="13">
                                                </rect>
                                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                                <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                            </svg><span class="d-none d-sm-inline">Envio</span></a><a
                                            class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                            id="productsTab" data-bs-toggle="tab"
                                            data-bs-target="#productsTabContent" role="tab"
                                            aria-controls="productsTabContent" aria-selected="false"
                                            tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                                height="16px" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-globe me-sm-2 fs-4 nav-icons">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="2" y1="12" x2="22"
                                                    y2="12">
                                                </line>
                                                <path
                                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                                </path>
                                            </svg><span class="d-none d-sm-inline">Entrega Global</span></a><a
                                            class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                            id="attributesTab" data-bs-toggle="tab"
                                            data-bs-target="#attributesTabContent" role="tab"
                                            aria-controls="attributesTabContent" aria-selected="false"
                                            tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-sliders me-sm-2 fs-4 nav-icons">
                                                <line x1="4" y1="21" x2="4"
                                                    y2="14">
                                                </line>
                                                <line x1="4" y1="10" x2="4"
                                                    y2="3">
                                                </line>
                                                <line x1="12" y1="21" x2="12"
                                                    y2="12">
                                                </line>
                                                <line x1="12" y1="8" x2="12"
                                                    y2="3">
                                                </line>
                                                <line x1="20" y1="21" x2="20"
                                                    y2="16">
                                                </line>
                                                <line x1="20" y1="12" x2="20"
                                                    y2="3">
                                                </line>
                                                <line x1="1" y1="14" x2="7"
                                                    y2="14">
                                                </line>
                                                <line x1="9" y1="8" x2="15"
                                                    y2="8">
                                                </line>
                                                <line x1="17" y1="16" x2="23"
                                                    y2="16">
                                                </line>
                                            </svg><span class="d-none d-sm-inline">Atributos</span></a><a
                                            class="nav-link text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                                            id="advancedTab" data-bs-toggle="tab"
                                            data-bs-target="#advancedTabContent" role="tab"
                                            aria-controls="advancedTabContent" aria-selected="false"
                                            tabindex="-1"> <svg xmlns="http://www.w3.org/2000/svg" width="16px"
                                                height="16px" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-lock me-sm-2 fs-4 nav-icons">
                                                <rect x="3" y="11" width="18"
                                                    height="11" rx="2" ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg><span class="d-none d-sm-inline">Avançado</span></a></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="tab-content py-3 ps-sm-4 h-100">
                                        <div class="tab-pane fade show active" id="pricingTabContent"
                                            role="tabpanel" aria-labelledby="#pricingTab">
                                            <h4 class="mb-3 d-sm-none">Preços</h4>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-6">
                                                    <h5 class="mb-2 text-1000">Preço regular</h5>
                                                    <input class="form-control" type="text" placeholder="R$"
                                                        name="regular_price">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <h5 class="mb-2 text-1000">Preço de venda</h5>
                                                    <input class="form-control" type="text" placeholder="R$"
                                                        name="sale_price">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel"
                                            aria-labelledby="restockTab">
                                            <div class="d-flex flex-column h-100">
                                                <h5 class="mb-3 text-1000">Adicionar ao Estoque</h5>
                                                <div class="row g-3 flex-1 mb-4">
                                                    <div class="col-sm-7"><input class="form-control"
                                                            type="number" placeholder="Quantidade"></div>
                                                    <div class="col-sm"><button class="btn btn-primary"
                                                            type="button"><svg
                                                                class="svg-inline--fa fa-check me-1 fs--2"
                                                                aria-hidden="true" focusable="false"
                                                                data-prefix="fas" data-icon="check" role="img"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 448 512" data-fa-i2svg="">
                                                                <path fill="currentColor"
                                                                    d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z">
                                                                </path>
                                                            </svg>
                                                            <!-- <span class="fa-solid fa-check me-1 fs--2"></span> Font Awesome fontawesome.com -->Confirmar</button>
                                                    </div>
                                                </div>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 200px;"></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-1000 fw-bold py-1">Produto em estoque
                                                                agora:
                                                            </td>
                                                            <td class="text-700 fw-semi-bold py-1">$1,090<button
                                                                    class="btn p-0" type="button"><svg
                                                                        class="svg-inline--fa fa-rotate text-900 ms-1"
                                                                        style="--phoenix-text-opacity: .6;"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="rotate"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M449.9 39.96l-48.5 48.53C362.5 53.19 311.4 32 256 32C161.5 32 78.59 92.34 49.58 182.2c-5.438 16.81 3.797 34.88 20.61 40.28c16.97 5.5 34.86-3.812 40.3-20.59C130.9 138.5 189.4 96 256 96c37.96 0 73 14.18 100.2 37.8L311.1 178C295.1 194.8 306.8 223.4 330.4 224h146.9C487.7 223.7 496 215.3 496 204.9V59.04C496 34.99 466.9 22.95 449.9 39.96zM441.8 289.6c-16.94-5.438-34.88 3.812-40.3 20.59C381.1 373.5 322.6 416 256 416c-37.96 0-73-14.18-100.2-37.8L200 334C216.9 317.2 205.2 288.6 181.6 288H34.66C24.32 288.3 16 296.7 16 307.1v145.9c0 24.04 29.07 36.08 46.07 19.07l48.5-48.53C149.5 458.8 200.6 480 255.1 480c94.45 0 177.4-60.34 206.4-150.2C467.9 313 458.6 294.1 441.8 289.6z">
                                                                        </path>
                                                                    </svg>
                                                                    <!-- <span class="fa-solid fa-rotate text-900 ms-1" style="--phoenix-text-opacity: .6;"></span> Font Awesome fontawesome.com --></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-1000 fw-bold py-1">Produto em trânsito:
                                                            </td>
                                                            <td class="text-700 fw-semi-bold py-1">5000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-1000 fw-bold py-1">Última vez que foi
                                                                reabastecido:</td>
                                                            <td class="text-700 fw-semi-bold py-1">30 de junho de 2021
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-1000 fw-bold py-1">Estoque total ao longo
                                                                da
                                                                vida:</td>
                                                            <td class="text-700 fw-semi-bold py-1">20.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade h-100" id="shippingTabContent" role="tabpanel"
                                            aria-labelledby="shippingTab">
                                            <div class="d-flex flex-column h-100">
                                                <h5 class="mb-3 text-1000">Tipo de Envio</h5>
                                                <div class="flex-1">
                                                    <div class="mb-4">
                                                        <div class="form-check mb-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="shipping_type" value="0"
                                                                id="fullfilledBySeller">
                                                            <label class="form-check-label fs-0 text-900"
                                                                for="fullfilledBySeller">Atendido pelo
                                                                Vendedor</label>
                                                        </div>
                                                        <div class="ps-4">
                                                            <p class="text-800 fs--1 mb-0">Você será responsável pela
                                                                entrega do produto.<br>Qualquer dano ou atraso durante o
                                                                envio pode implicar em uma taxa de Danos.</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <div class="form-check mb-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="shipping_type" id="fullfilledByPhoenix"
                                                                checked="checked" value="1">
                                                            <label
                                                                class="form-check-label fs-0 text-900 d-flex align-items-center"
                                                                for="fullfilledByPhoenix">Atendido pela Matomall <span
                                                                    class="badge badge-phoenix badge-phoenix-warning fs--2 ms-2">Recomendado</span></label>
                                                        </div>
                                                        <div class="ps-4">
                                                            <p class="text-800 fs--1 mb-0">Seu produto, nossa
                                                                responsabilidade.<br>Por uma taxa mínima, nós cuidaremos
                                                                do
                                                                processo de entrega para você.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="fs--1 fw-semi-bold mb-0">Consulte nossos <a
                                                        class="fw-bold" href="#!">termos e condições de
                                                        entrega</a> para mais
                                                    detalhes.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="productsTabContent" role="tabpanel"
                                            aria-labelledby="productsTab">
                                            <h5 class="mb-3 text-1000">Entrega Global</h5>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="deliveryRadio" id="worldwideDelivery">
                                                    <label class="form-check-label fs-0 text-900"
                                                        for="worldwideDelivery">Entrega mundial</label>
                                                </div>
                                                <div class="ps-4">
                                                    <p class="fs--1 mb-0 text-800">Disponível apenas com o método de
                                                        envio: <a href="#!">Atendido pela Matomall</a></p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="deliveryRadio" checked="checked"
                                                        id="selectedCountry">
                                                    <label class="form-check-label fs-0 text-900"
                                                        for="selectedCountry">Países selecionados</label>
                                                </div>
                                                <div class="ps-4" style="max-width: 350px;">
                                                    <div class="choices" data-type="select-multiple"
                                                        role="combobox" aria-autocomplete="list"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <div class="choices__inner">
                                                            <select class="form-select ps-4 choices__input"
                                                                id="organizerMultiple" data-choices="data-choices"
                                                                multiple="multiple"
                                                                data-options="{&quot;removeItemButton&quot;:true,&quot;placeholder&quot;:true}"
                                                                hidden="" tabindex="-1"
                                                                data-choice="active"></select>
                                                            <div class="choices__list choices__list--multiple"></div>
                                                            <input type="text"
                                                                class="choices__input choices__input--cloned"
                                                                autocomplete="off" autocapitalize="off"
                                                                spellcheck="false" role="textbox"
                                                                aria-autocomplete="list"
                                                                aria-label="Digite o nome do país"
                                                                placeholder="Digite o nome do país"
                                                                style="min-width: 18ch; width: 1ch;">
                                                        </div>
                                                        <div class="choices__list choices__list--dropdown"
                                                            aria-expanded="false">
                                                            <div class="choices__list" aria-multiselectable="true"
                                                                role="listbox">
                                                                <div id="choices--organizerMultiple-item-choice-1"
                                                                    class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                                                    role="option" data-choice="" data-id="1"
                                                                    data-value="Canadá" data-select-text=""
                                                                    data-choice-selectable="" aria-selected="true">
                                                                    Canadá</div>
                                                                <div id="choices--organizerMultiple-item-choice-2"
                                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                                    role="option" data-choice="" data-id="2"
                                                                    data-value="México" data-select-text=""
                                                                    data-choice-selectable="">México</div>
                                                                <div id="choices--organizerMultiple-item-choice-4"
                                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                                    role="option" data-choice="" data-id="4"
                                                                    data-value="Reino Unido" data-select-text=""
                                                                    data-choice-selectable="">Reino Unido</div>
                                                                <div id="choices--organizerMultiple-item-choice-5"
                                                                    class="choices__item choices__item--choice choices__item--selectable"
                                                                    role="option" data-choice="" data-id="5"
                                                                    data-value="Estados Unidos da América"
                                                                    data-select-text="" data-choice-selectable="">
                                                                    Estados Unidos da América</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="deliveryRadio" id="localDelivery">
                                                    <label class="form-check-label fs-0 text-900"
                                                        for="localDelivery">Entrega local</label>
                                                </div>
                                                <p class="fs--1 ms-4 mb-0 text-800">Entrega para o seu país de
                                                    residência
                                                    <a href="#!">Alterar endereço do perfil</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="attributesTabContent" role="tabpanel"
                                            aria-labelledby="attributesTab">
                                            <h5 class="mb-3 text-1000">Atributos</h5>
                                            <div class="form-check">
                                                <input class="form-check-input" id="fragileCheck" type="checkbox">
                                                <label class="form-check-label text-900 fs-0"
                                                    for="fragileCheck">Produto
                                                    frágil</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="biodegradableCheck"
                                                    type="checkbox">
                                                <label class="form-check-label text-900 fs-0"
                                                    for="biodegradableCheck">Biodegradável</label>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="frozenCheck"
                                                        type="checkbox" checked="checked">
                                                    <label class="form-check-label text-900 fs-0"
                                                        for="frozenCheck">Produto congelado</label>
                                                    <input class="form-control" type="text"
                                                        placeholder="Temperatura máxima permitida"
                                                        style="max-width: 350px;">
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="productCheck" type="checkbox"
                                                    checked="checked">
                                                <label class="form-check-label text-900 fs-0"
                                                    for="productCheck">Data de
                                                    validade do produto</label>
                                                <input
                                                    class="form-control inventory-attributes datetimepicker flatpickr-input"
                                                    id="inventory" type="text" style="max-width: 350px;"
                                                    placeholder="d/m/a"
                                                    data-options="{&quot;disableMobile&quot;:true}"
                                                    readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="advancedTabContent" role="tabpanel"
                                            aria-labelledby="advancedTab">
                                            <h5 class="mb-3 text-1000">Avançado</h5>
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-6">
                                                    <h5 class="mb-2 text-1000">Tipo de ID do produto</h5>
                                                    <select name="product_id_type" class="form-select"
                                                        aria-label="form-select-lg example">
                                                        <option selected="selected" value="ISBN">ISBN</option>
                                                        <option value="UPC">UPC</option>
                                                        <option value="EAN">EAN</option>
                                                        <option value="JAN">JAN</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <h5 class="mb-2 text-1000">ID do produto</h5>
                                                    <input name="product_id" class="form-control" type="text"
                                                        placeholder="Número ISBN">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top:30px;">
                                <h4 class="mb-3">Descrição resumida</h4>
                                <textarea name="body" id="textarea2"></textarea>
                                <script>
                                  tinymce.init({
                                    selector: '#textarea2',
                                    height: 230,
                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                    menubar: false,
                                    branding: false,
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    language_url: '/js/tinymce/langs/pt_BR.js',
                                    language: 'pt_BR',
                                    mergetags_list: [
                                      { value: 'First.Name', title: 'First Name' },
                                      { value: 'Email', title: 'Email' },
                                    ],
                                  });
                                </script>
                              </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="row g-2">
                                <div class="col-12 col-xl-12">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Organizar</h4>
                                            <div class="row g-3">
                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="mb-4">
                                                        <div class="d-flex flex-wrap mb-2">
                                                            <h5 class="mb-0 text-1000 me-2">Categoria</h5>
                                                            <a class="fw-bold fs--1" href="#!">Adicionar nova categoria</a>
                                                        </div>
                                                        <select class="form-select mb-3" aria-label="category">
                                                            <option value="men-cloth">Roupas Masculinas</option>
                                                            <option value="women-cloth">Roupas Femininas</option>
                                                            <option value="kid-cloth">Roupas Infantis</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="mb-4">
                                                        <div class="d-flex flex-wrap mb-2">
                                                            <h5 class="mb-0 text-1000 me-2">Fornecedor</h5>
                                                            <a class="fw-bold fs--1" href="#!">Adicionar novo fornecedor</a>
                                                        </div>
                                                        <select class="form-select mb-3" aria-label="category">
                                                            <option value="men-cloth">Roupas Masculinas</option>
                                                            <option value="women-cloth">Roupas Femininas</option>
                                                            <option value="kid-cloth">Roupas Infantis</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="mb-xl-4">
                                                        <h5 class="mb-2 text-1000">Coleção</h5>
                                                        <input class="form-control mb-xl-3" type="text" placeholder="Coleção" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="d-flex flex-wrap mb-2">
                                                        <h5 class="mb-0 text-1000 me-2">Tags</h5>
                                                        <a class="fw-bold fs--1 lh-sm" href="#!">Ver todas as tags</a>
                                                    </div>
                                                    <select class="form-select" aria-label="category">
                                                        <option value="men-cloth">Roupas Masculinas</option>
                                                        <option value="women-cloth">Roupas Femininas</option>
                                                        <option value="kid-cloth">Roupas Infantis</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Variantes</h4>
                                            <div class="row g-3">
                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="border-bottom border-dashed border-sm-0 border-bottom-xl pb-4">
                                                        <div class="d-flex flex-wrap mb-2">
                                                            <h5 class="text-1000 me-2">Opção 1</h5>
                                                            <a class="fw-bold fs--1" href="#!">Remover</a>
                                                        </div>
                                                        <select class="form-select mb-3">
                                                            <option value="size">Tamanho</option>
                                                            <option value="color">Cor</option>
                                                            <option value="weight">Peso</option>
                                                            <option value="smell">Cheiro</option>
                                                        </select>
                                                        <div class="product-variant-select-menu">
                                                            <select class="form-select mb-3" data-choices="data-choices" multiple="multiple"
                                                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                                                <option value="size">4x6 in</option>
                                                                <option value="color">9x6 in</option>
                                                                <option value="weight">11x8 in</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-xl-12">
                                                    <div class="d-flex flex-wrap mb-2">
                                                        <h5 class="text-1000 me-2">Opção 2</h5>
                                                        <a class="fw-bold fs--1" href="#!">Remover</a>
                                                    </div>
                                                    <select class="form-select mb-3">
                                                        <option value="size">Tamanho</option>
                                                        <option value="color">Cor</option>
                                                        <option value="weight">Peso</option>
                                                        <option value="smell">Cheiro</option>
                                                    </select>
                                                    <div class="product-variant-select-menu mb-3">
                                                        <select class="form-select mb-3" data-choices="data-choices" multiple="multiple"
                                                            data-options='{"removeItemButton":true,"placeholder":true}'>
                                                            <option value="size">4x6 in</option>
                                                            <option value="color">9x6 in</option>
                                                            <option value="weight">11x8 in</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-phoenix-primary w-100" type="button">Adicionar outra opção</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @component('sellers.components.footer')

                @endcomponent
            </div>
        </div>

    </main>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          menubar: false,
          branding: false,
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          language_url: '/js/tinymce/langs/pt_BR.js', // Caminho para o arquivo de idioma em Português
          language: 'pt_BR', // Defina o idioma para Português
          mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
          ],
        });
    </script>
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../vendors/dropzone/dropzone.min.js"></script>
    <script src="../../../vendors/choices/choices.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
</body>
</html>
