@extends('admin.layouts.app')
@section('titulo','Lojas')
@section('page-title','Lojas')
@section('breadcrumb-item','Painel')
@section('breadcrumb-item-active','Lojas')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Lojas</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Loja</th>
                                    <th>Telefone</th>
                                    <th>Celular</th>
                                    <th>Vendedor</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody class="customtable">
                                @if (count($stores) > 0)
                                    @foreach ($stores as $key => $store)
                                        <tr>
                                            <td>{{ $store->name }}</td>
                                            <td>{{ $store->phone }}</td>
                                            <td>{{ $store->mobile_phone }}</td>
                                            <td>{{ $store->user->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.store.edit', $store->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                                <form action="{{ route('admin.store.destroy', $store->id) }}" method="POST"
                                                    style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Nenhuma loja encontrada.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        <div style="text-align: right;">
                            <div class="text-center">
                                {{ $stores->links() }}
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
