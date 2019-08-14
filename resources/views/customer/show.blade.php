<title>Melihat Data Customer</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Customer</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Customer</label>
                        <input class="form-control" type="text" name="nm_customer" value="{{ $customer->nm_customer }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Customer</label>
                        <input class="form-control" type="text" name="alamat_customer" value="{{ $customer->alamat_customer }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Kota Customer</label>
                        <input class="form-control" type="text" name="kota" value="{{ $customer->kota }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon Customer</label>
                        <input class="form-control" type="text" name="no_tlp" value="{{ $customer->no_tlp }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Email Customer</label>
                        <input class="form-control" type="text" name="email" value="{{ $customer->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('customer') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection