@extends('admin.layouts.app')
@section('titulo','Categorias')
@section('page-title','Categorias')
@section('breadcrumb-item','Painel')
@section('breadcrumb-item-active','Categorias')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">Categorias</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Categoria</th>
                                    <th>Descrição</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody class="customtable">
                                @if (count($categories) > 0)
                                    @foreach ($categories as $key => $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td style="max-width: 300px; text-align: justify;">{{ $category->description }}</td>
                                            <td>
                                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST"
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
                                        <td colspan="3">Nenhuma categoria encontrada.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
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
                toastr.success("{{ Session::get('message') }}");
            }, 100);
        </script>
    @endif
    @if (Session::has('warning'))
    <script>
        setTimeout(function() {
            toastr.options.progressBar = true;
            toastr.warning("{{ Session::get('warning') }}");
        }, 100);
    </script>
    @endif
@endsection
