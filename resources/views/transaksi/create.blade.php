<title>Tambah Data Transaksi</title>
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Transaksi</div>

                <div class="card-body">
                    <form action="{{ route('transaksi.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Customer</label>
                            <select name="id_customer" class="form-control">
                                @foreach($customer as $data)
                                    <option value="{{ $data->id }}">{{ $data->nm_customer }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Minuman</label>
                            <select name="id_minuman" class="form-control">
                                @foreach($minuman as $data)
                                    <option value="{{ $data->id }}">{{ $data->nm_minuman }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Makanan</label>
                            <select name="id_makanan" class="form-control">
                                @foreach($makanan as $data)
                                    <option value="{{ $data->id }}">{{ $data->nm_makanan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Makanan</label>
                            <input class="form-control" type="text" name="jmlh_makanan">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Minuman</label>
                            <input class="form-control" type="text" name="jmlh_minuman">
                        </div>
                        <div class="form-group">
                            <label for="">Total Harga</label>
                            <input class="form-control" type="text" name="ttl_harga">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pesan</label>
                            <input class="form-control" type="date" name="tgl_pesan">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kirim</label>
                            <input class="form-control" type="date" name="tgl_kirim">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Tujuan</label>
                            <input class="form-control" type="text" name="alamat_tujuan">
                        </div>
                        <div class="form-group">
                            <label for="">Kota Tujuan</label>
                            <input class="form-control" type="text" name="kota_tujuan">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                            </button>&nbsp; &nbsp;
                            <a href="{{ url('transaksi') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection