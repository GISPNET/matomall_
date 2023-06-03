@extends('web.layouts.app')
@section('titulo', 'Checkout')
@section('body')
    <main class="main" id="top">
        @component('web.components.top')
        @endcomponent

        @component('web.components.nav')
        @endcomponent

        <section class="pt-5 pb-9">
            <div class="container-small">
              <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                  <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
              <h2 class="mb-1">My Favorites Stores</h2>
              <p class="mb-5 text-700 fw-semi-bold">Essential for a better life</p>
              <div class="row gx-3 gy-5">
                @foreach ($stores as $store)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="{{ asset('storage/'.$store->logo) }}" alt="Dell Technologies" /></div>
                    <h5 class="mb-2">{{ $store->name }}</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <a class="btn btn-link p-0" href="{{ route('store.details',$store->slug) }}">Visitar Loja<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2">
                            <a class="dropdown-item" href="{{ route('store.details',$store->slug) }}">Visitar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </section>
    @endsection
