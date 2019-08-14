<title>Melihat Data Minuman</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Minuman</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input class="form-control" type="text" value="{{ $minuman->supplier->nm_supplier }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Minuman</label>
                        <input class="form-control" type="text" value="{{ $minuman->nm_minuman }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Harga Minuman</label>
                        <input class="form-control" type="text" value="{{ $minuman->harga_minuman }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Stok Minuman</label>
                        <input class="form-control" type="text" value="{{ $minuman->stok_minuman }}" disabled>
                    </div>
                    
                    <div class="form-group">
                        <a href="{{ url('minuman') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection