<title>Data Transaksi</title>
<style>
.card-header{
    color: aliceblue;
}
</style>
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header bg-dark">Data Transaksi</div>
                <div class="card-body">
                <center>
                    <a href="{{route('transaksi.create')}}"
                    class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama Customer</center></th>
                            <th><center>Nama Minuman</center></th>
                            <th><center>Nama Makanan</center></th>
                            <th><center>Jumlah Makanan</center></th>
                            <th><center>Jumlah Minuman</center></th>
                            <th><center>Total Harga</center></th>
                            <th><center>Tanggal Pesan</center></th>
                            <th><center>Tanggal Kirim</center></th>
                            <th><center>Alamat Tujuan</center></th>
                            <th><center>Kota Tujuan</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($transaksi as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->customer->nm_customer }}</center></td>
                            <td><center>{{ $data->minuman->nm_minuman }}</center></td>
                            <td><center>{{ $data->makanan->nm_makanan }}</center></td>
                            <td><center>{{ $data->jmlh_makanan }}</center></td>
                            <td><center>{{ $data->jmlh_minuman }}</center></td>
                            <td><center>{{ $data->ttl_harga }}</center></td>
                            <td><center>{{ $data->tgl_pesan }}</center></td>
                            <td><center>{{ $data->tgl_kirim }}</center></td>
                            <td><center>{{ $data->alamat_tujuan }}</center></td>
                            <td><center>{{ $data->kota_tujuan }}</center></td>
                            <td><center><a href="{{route('transaksi.edit',$data->id)}}"
                                        class="btn btn-sm btn-success">Edit Data
                                        </a>
                                </center>
                            </td>
                            <td><center><a href="{{route('transaksi.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Detail Data
                                        </a>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('transaksi.destroy',$data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm btn-danger" type="submit">
                                        Hapus Data
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection