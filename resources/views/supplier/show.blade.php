<title>Melihat Data Supplier</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Supplier</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input class="form-control" type="text" name="nm_supplier" value="{{ $supplier->nm_supplier }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Kota Supplier</label>
                        <input class="form-control" type="text" name="kota_supplier" value="{{ $supplier->kota_supplier }}" disabled>
                    </div> 
                    <div class="form-group">
                        <label for="">Alamat Supplier</label>
                        <input class="form-control" type="text" name="alamat_supplier" value="{{ $supplier->alamat_supplier }}" disabled>
                    </div> 
                    <div class="form-group">
                        <label for="">No Telepon Supplier</label>
                        <input class="form-control" type="text" name="no_tlp_supplier" value="{{ $supplier->no_tlp_supplier }}" disabled>
                    </div> 
                    <div class="form-group">
                        <a href="{{ url('supplier') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection