@extends('admin.layouts.app')
@section('page-title','Lojas')
@section('breadcrumb-item','Painel')
@section('breadcrumb-item-active','Produtos')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" data-select2-id="15">
                <div class="card">

                    <form action="{{ route('admin.product.store') }}" method="POST">
    @csrf
    <div class="card-body">
        <h4 class="card-title">Dados do produto</h4>
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
                <textarea class="form-control" id="description" name="description" rows="2" placeholder="Digite a descrição aqui">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="body" class="col-sm-3 text-right control-label col-form-label">Descrição detalhada</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="body" name="body" rows="3" placeholder="Digite a descrição detalhada aqui">{{ old('body') }}</textarea>
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-3 text-right control-label col-form-label">Preço</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" placeholder="Digite o preço aqui" onchange="formatPrice(this)">
                @error('price')
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
            <label for="store_id" class="col-sm-3 text-right control-label col-form-label">Loja</label>
            <div class="col-sm-9">
                <select class="form-control" id="store_id" name="store_id">
                    @foreach($stores as $store)
                        <option value="{{ $store->id }}">{{ $store->name }}</option>
                    @endforeach
                </select>
                @error('store_id')
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

            function formatPrice(input) {
                var price = input.value;
                var formattedPrice = new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(price);
                input.value = formattedPrice;
            }
        </script>
    @endif
@endsection
