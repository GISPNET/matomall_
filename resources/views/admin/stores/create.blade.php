@extends('admin.layouts.app')

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
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Lojas</a></li>
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
                            <form action="{{ route('admin.store.store') }}" method="POST">
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
                                            <label class="floating-label" for="description">Descrição</label>
                                            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="floating-label" for="phone">Telefone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="floating-label" for="mobile_phone">Celular</label>
                                            <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" value="{{ old('mobile_phone') }}">
                                            @error('mobile_phone')
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
                                            <label class="floating-label" for="user_id">Vendedor</label>
                                            <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('slug') }}">
                                            @error('slug')
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
