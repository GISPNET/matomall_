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
                                <h5 class="m-b-10">Produtos</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.painel') }}"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Produtos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Informações da Loja</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.product.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="floating-label" for="name">Nome</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="floating-label" for="price">Preço</label>
                                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="description">Descrição Curta</label>
                                            <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="floating-label" for="body">Descrição Longa</label>
                                            <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                                            @error('body')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="floating-label" for="slug">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
                                            @error('slug')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="floating-label" for="store_id">Loja</label>
                                            <select class="form-control" name="store_id" id="store_id">
                                                <option value="">Selecione uma loja </option>
                                                @foreach ($stores as $store)
                                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('store_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <button type="submit" class="btn  btn-primary">Salvar</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
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
