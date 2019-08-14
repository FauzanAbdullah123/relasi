<title>Edit Data Supplier</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Supplier</div>

                <div class="card-body">
                    <form action="{{ route('supplier.update',$supplier->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Supplier</label>
                            <input class="form-control" type="text" name="nm_supplier" value="{{ $supplier->nm_supplier }}">
                        </div>
                        <div class="form-group">
                            <label for="">Kota Supplier</label>
                            <input class="form-control" type="text" name="kota_supplier" value="{{ $supplier->kota_supplier }}">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Supplier</label>
                            <input class="form-control" type="text" name="alamat_supplier" value="{{ $supplier->alamat_supplier }}">
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon Supplier</label>
                            <input class="form-control" type="text" name="no_tlp_supplier" value="{{ $supplier->no_tlp_supplier }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Edit Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('supplier') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection