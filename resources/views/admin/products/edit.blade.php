@extends('admin.layouts.app')
@section('titulo','Editando Produto '.$product->name)
@section('page-title', 'Lojas')
@section('breadcrumb-item', 'Painel')
@section('breadcrumb-item-active', 'Produtos')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" data-select2-id="15">
                <div class="card">

                    <form action="{{ route('admin.product.update',$product->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Dados do produto</h4>
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 text-left control-label col-form-label">Nome</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $product->name }}" placeholder="Digite o nome aqui">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body"
                                    class="col-sm-3 text-left control-label col-form-label">Descrição</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Digite a descrição aqui">{{ $product->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-sm-3 text-left control-label col-form-label">Descrição
                                    detalhada</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="body" name="body" rows="3"
                                        placeholder="Digite a descrição detalhada aqui">{{ $product->body }}</textarea>
                                    @error('body')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-sm-3 text-left control-label col-form-label">Preço</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="price" name="price"
                                        value="{{ $product->price }}" placeholder="Digite o preço aqui"
                                        onchange="formatPrice(this)">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="categories" class="col-sm-3 text-left control-label col-form-label">Categorias</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-multiple form-control" id="categories" name="categories[]" multiple="multiple">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->categories->contains($category->id) ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
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
                                    @error('photos.*')
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
        <div class="row">
            @foreach ($product->photos as $photo)
                 <div class="col-4">
                      <img src="{{asset('storage/'.$photo->image) }}" alt="{{ $photo->image }}" class="img-fluid">
                      <form action="{{ route('admin.photos.removePhoto',$photo->id) }}" method="post">
                        @csrf
                           <button type="submit" style="margin-top:5px" class="btn btn-sm btn-danger">Reomver</button>
                      </form>
                 </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
    <script>
        function formatPrice(input) {
            var price = input.value;
            var formattedPrice = new Intl.NumberFormat('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            }).format(price);
            input.value = formattedPrice;
        }
    </script>
    @if (Session::has('message'))
        <script>
            setTimeout(function() {
                toastr.options.progressBar = true;
                toastr.success("{{ Session::get('message') }}");
            }, 100);
        </script>
    @endif
    @if (Session::has('deleted'))
        <script>
            setTimeout(function() {
                toastr.options.progressBar = true;
                toastr.success("{{ Session::get('deleted') }}");
            }, 100);
        </script>
    @endif
@endsection
