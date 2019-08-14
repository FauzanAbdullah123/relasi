<title>Edit Data Customer</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Customer</div>

                <div class="card-body">
                    <form action="{{ route('customer.update',$customer->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Masukkan Nama Customer</label>
                            <input class="form-control" type="text" name="nm_customer" value="{{ $customer->nm_customer }}">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Alamat Customer</label>
                            <input class="form-control" type="text" name="alamat_customer" value="{{ $customer->alamat_customer }}">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Kota Customer</label>
                            <input class="form-control" type="text" name="kota_customer" value="{{ $customer->kota }}">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan No Telepon Customer</label>
                            <input class="form-control" type="text" name="no_tlp" value="{{ $customer->no_tlp }}">
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Email Customer</label>
                            <input class="form-control" type="text" name="email" value="{{ $customer->email }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Edit Data
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