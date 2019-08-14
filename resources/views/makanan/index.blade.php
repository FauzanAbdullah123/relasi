<title>Data Makanan</title>
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
                <div class="card-header bg-dark">Data Makanan</div>
                <div class="card-body">
                <center>
                    <a href="{{route('makanan.create')}}"
                    class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama Supplier</center></th>
                            <th><center>Nama Makanan</center></th>
                            <th><center>Harga Makanan</center></th>
                            <th><center>Stok Makanan</center></th>                   
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($makanan as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->supplier->nm_supplier }}</center></td>
                            <td><center>{{ $data->nm_makanan }}</center></td>
                            <td><center>{{ $data->harga_makanan }}</center></td>
                            <td><center>{{ $data->stok_makanan }}</center></td>                 
                            <td><center><a href="{{route('makanan.edit',$data->id)}}"
                                        class="btn btn-success">Edit Data
                                        </a>
                                </center>
                            </td>
                            <td><center><a href="{{route('makanan.show',$data->id)}}"
                                        class="btn btn-warning">Detail Data
                                        </a>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('makanan.destroy',$data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit">
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
    </div>
</div>
@endsection