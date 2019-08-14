<title>Tambah Data Supplier</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Supplier</div>

                <div class="card-body">
                    <form action="{{ route('supplier.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Supplier</label>
                            <input class="form-control" type="text" name="nm_supplier">
                        </div>
                        <div class="form-group">
                            <label for="">Kota Supplier</label>
                            <input class="form-control" type="text" name="kota_supplier">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Supplier</label>
                            <input class="form-control" type="text" name="alamat_supplier">
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon Supplier</label>
                            <input class="form-control" type="text" name="no_tlp_supplier">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
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