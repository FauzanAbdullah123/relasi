<title>Data Kategori</title>
<style>
.card-header{
    color: aliceblue;
}
</style>
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">Data Kategori</div>
                <div class="card-body">
                <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama Kategori</center></th>
                            <th><center>Slug</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($kategori as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->nama_kategori }}</center></td>
                            <td><center>{{ $data->slug }}</center></td>

                            <td><center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit" data-id="{{ $data->id }}" data-nama="{{ $data->nama_kategori }}">Edit</button>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('kategori.destroy',$data->id) }}" method="post">
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