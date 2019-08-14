<title>Tambah Data Customer</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Customer</div>

                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Masukkan Nama Customer</label>
                            <input class="form-control" type="text" name="nm_customer">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Alamat Customer</label>
                            <input class="form-control" type="text" name="alamat_customer">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Kota Customer</label>
                            <input class="form-control" type="text" name="kota">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan No Telepon Customer</label>
                            <input class="form-control" type="text" name="no_tlp">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Email Customer</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('customer') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection