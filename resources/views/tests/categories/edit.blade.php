@extends('admin.layouts.app')
@section('titulo','Editando Categoria', $category->name)
@section('page-title','Categorias')
@section('breadcrumb-item','Painel')
@section('breadcrumb-item-active','Categorias')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" data-select2-id="15">
                <div class="card">

                    <form action="{{ route('admin.category.update',$category->id) }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Dados da categoria</h4>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-left control-label col-form-label">Nome</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" placeholder="Digite o nome aqui">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form-control" class="col-sm-3 text-left control-label col-form-label">Descrição</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Digite a descrição  aqui">{{ $category->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                             </div>
                        </div>
                    </form>
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
@endsection
