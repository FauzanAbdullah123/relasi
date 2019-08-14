<title>Data Supplier</title>
<style>
.card-header{
    color: aliceblue;
}
</style>
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark">Data Supplier</div>
                <div class="card-body">
                <center>
                    <a href="{{route('supplier.create')}}"
                    class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama Supplier</center></th>
                            <th><center>Kota Supplier</center></th>
                            <th><center>Alamat Supplier</center></th>
                            <th><center>No Telepon Supplier</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($supplier as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->nm_supplier }}</center></td>
                            <td><center>{{ $data->kota_supplier }}</center></td>
                            <td><center>{{ $data->alamat_supplier }}</center></td>
                            <td><center>{{ $data->no_tlp_supplier }}</center></td>
                            <td><center><a href="{{route('supplier.edit',$data->id)}}"
                                        class="btn btn-sm btn-success">Edit Data
                                        </a>
                                </center>
                            </td>
                            <td><center><a href="{{route('supplier.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Detail Data
                                        </a>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('supplier.destroy',$data->id) }}" method="post">
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