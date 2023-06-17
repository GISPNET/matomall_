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
                                <th>Produtos</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            @if ($store)
                                    <tr>
                                        <td>{{ $store->name }}</td>
                                        <td>{{ $store->phone }}</td>
                                        <td>{{ $store->mobile_phone }}</td>
                                        <td>{{ $store->products->count() }}</td>
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
                            @else
                                <tr>
                                    <td colspan="5">Você não possui nenhuma loja cadastrada.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
