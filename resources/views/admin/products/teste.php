@extends('admin.layouts.app')
@section('titulo' . 'Lojas')
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
                               <li class="breadcrumb-item"><a href="{{ route('admin.painel') }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Lojas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Listagem de Produtos</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="chk-option">
                                                    <label
                                                        class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>Cód
                                            </th>
                                            <th>Produto</th>
                                            <th>Descrição</th>
                                            <th>Preço</th>
                                            <th>Loja</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($products) > 0)
                                            @foreach ($products as $key => $product)
                                                <tr>
                                                    <td>
                                                        <div class="chk-option">
                                                            <label
                                                                class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                                <input type="checkbox" class="custom-control-input">
                                                                <span class="custom-control-label"></span>
                                                            </label>
                                                        </div>000{{ $key + 1 }}
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->description }}</td>
                                                    <td>{{ \App\Helpers\ptBRHelper::real($product->price) }}</td>
                                                    <td>{{ $product->store->name }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.product.edit', $product->id) }}"
                                                            class="btn btn-primary btn-sm">Editar</a>
                                                        <form action="{{ route('admin.product.destroy', $product->id) }}"
                                                            method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm">Excluir</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>

                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection

@section('js')
    @if (Session::has('message'))
        <script>
            setTimeout(function() {
                toastr.options.progressBar = true;
                toastr.error("{{ Session::get('message') }}");
            }, 100);
        </script>
    @endif
@endsection
