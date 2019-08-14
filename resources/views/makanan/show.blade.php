<title>Melihat Data Makanan</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Makanan</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input class="form-control" type="text" value="{{ $makanan->supplier->nm_supplier }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Makanan</label>
                        <input class="form-control" type="text" value="{{ $makanan->nm_makanan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Harga Makanan</label>
                        <input class="form-control" type="text" value="{{ $makanan->harga_makanan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Stok Makanan</label>
                        <input class="form-control" type="text" value="{{ $makanan->stok_makanan }}" disabled>
                    </div>
                    
                    <div class="form-group">
                        <a href="{{ url('makanan') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection