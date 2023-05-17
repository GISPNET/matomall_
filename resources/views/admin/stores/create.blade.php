@extends('admin.layouts.app')
@section('page-title','Lojas')
@section('breadcrumb-item','Painel')
@section('breadcrumb-item-active','Lojas')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" data-select2-id="15">
                <div class="card">

                    <form action="{{ route('admin.store.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Dados da loja</h4>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-right control-label col-form-label">Nome</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Digite o nome aqui">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-sm-3 text-right control-label col-form-label">Descrição</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Digite a descrição  aqui">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 text-right control-label col-form-label">Telefone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Digite o telefone aqui">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile_phone" class="col-sm-3 text-right control-label col-form-label">Celular</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" value="{{ old('mobile_phone') }}" placeholder="Digite o celular aqui">
                                    @error('mobile_phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Digite o slug aqui">
                                    @error('slug')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user_id" class="col-sm-3 text-right control-label col-form-label">Vendedor</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}" placeholder="Digite o ID do vendedor aqui">
                                    @error('user_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                 </div>
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
