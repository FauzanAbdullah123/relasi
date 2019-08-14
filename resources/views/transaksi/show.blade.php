<title>Melihat Data Transaksi</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Melihat Data Transaksi</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Customer</label>
                        <input class="form-control" type="text" value="{{ $transaksi->customer->nm_customer }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Minuman</label>
                        <input class="form-control" type="text" value="{{ $transaksi->minuman->nm_minuman }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Makanan</label>
                        <input class="form-control" type="text" value="{{ $transaksi->makanan->nm_makanan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Makanan</label>
                        <input class="form-control" type="text" value="{{ $transaksi->jmlh_makanan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Minuman</label>
                        <input class="form-control" type="text" value="{{ $transaksi->jmlh_minuman }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Total Harga</label>
                        <input class="form-control" type="text" value="{{ $transaksi->ttl_harga }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pesan</label>
                        <input class="form-control" type="date" value="{{ $transaksi->tgl_pesan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kirim</label>
                        <input class="form-control" type="date" value="{{ $transaksi->tgl_kirim }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Tujuan</label>
                        <input class="form-control" type="text" value="{{ $transaksi->alamat_tujuan }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Kota Tujuan</label>
                        <input class="form-control" type="date" value="{{ $transaksi->kota_tujuan }}" disabled>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('transaksi') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection