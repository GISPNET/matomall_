@extends('admin.layouts.app')
@section('titulo'.'Lojas')
@section('main')
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Lojas</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Lojas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Listagem de Lojas</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>Cód</th>
                                            <th>Loja</th>
                                            <th>Telefone</th>
                                            <th>Celular</th>
                                            <th>Vendedor</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if (count($stores) > 0)
                                            @foreach ($stores as $key=>$store)
                                                <tr>
                                                    <td><div class="chk-option">
                                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                            <input type="checkbox" class="custom-control-input">
                                                            <span class="custom-control-label"></span>
                                                        </label>
                                                    </div>000{{ $key+1 }}</td>
                                                    <td>{{ $store->name }}</td>
                                                    <td>{{ $store->phone }}</td>
                                                    <td>{{ $store->mobile_phone }}</td>
                                                    <td>{{ $store->user->name }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                {{ $stores->links() }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
    </div>
@endsection
