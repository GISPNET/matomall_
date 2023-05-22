@extends('admin.layouts.app')
@section('titulo', 'Registrar Novo Produto')
@section('page-title', 'Produtos')
@section('breadcrumb-item', 'Painel')
@section('breadcrumb-item-active', 'Produtos')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="card col-md-12">

                    <h4 class="card-title">Dados do produto</h4>
                    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-3 m-t-15">Nome</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Digite o nome aqui">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-3 m-t-15">Descrição</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="description" name="description" rows="2" placeholder="Digite a descrição aqui">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-3 m-t-15">Descrição detalhada</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="body" name="body" rows="3" placeholder="Digite a descrição detalhada aqui">{{ old('body') }}</textarea>
                                @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-3 m-t-15">Preço</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" placeholder="Digite o preço aqui" onchange="formatPrice(this)">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categories" class="col-md-3 m-t-15">Categorias</label>
                            <div class="col-md-9">
                                <select class="select2 form-control custom-select select2-accessible js-example-basic-multiple" style="width: 100%; height:36px;" id="categories" name="categories[]" multiple="multiple">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <style>
                            .select2-container .select2-selection--multiple .select2-selection__choice {
                                background-color: #2255a4;
                                color: #ffffff;
                            }
                        </style>
                        <div class="form-group row">
                            <label for="image" class="col-md-3 m-t-15">Imagens</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                    </form>
            </div>

        </div>
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
    @if (Session::has('message'))
        <script>
            setTimeout(function() {
                toastr.options.progressBar = true;
                toastr.success("{{ Session::get('message') }}");
            }, 100);

            function formatPrice(input) {
                var price = input.value;
                var formattedPrice = new Intl.NumberFormat('pt-BR', {
                    style: 'currency',
                    currency: 'BRL'
                }).format(price);
                input.value = formattedPrice;
            }
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
