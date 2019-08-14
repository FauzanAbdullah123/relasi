<title>Data Artikel</title>
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
                <div class="card-header bg-dark">Data Artikel</div>
                <div class="card-body">
                <center>
                    <a href="{{route('artikel.create')}}"
                    class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Judul</center></th>
                            <th><center>Slug</center></th>
                            <th><center>Kategori</center></th>
                            <th><center>Tag</center></th>
                            <th><center>Penulis</center></th>
                            <th><center>Foto</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($artikel as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->judul }}</center></td>
                            <td><center>{{ $data->slug }}</center></td>
                            <td><center>{{ $data->kategori->nama_kategori }}</center></td>
                            <td>
                                <ol>
                                    @foreach($data->tag as $a)
                                        <li>{{ $a->nama_tag }}</li>
                                    @endforeach
                                </ol>
                            </td>
                            <td><center>{{ $data->user->name }}</center></td>
                            <td>
                                <center>
                                <img width="200px" height="200px"
                                src="{{ asset('assets/img/artikel/'. 
                                $data->foto.'') }}" alt="Foto" style="border-radius: 6%">
                                </center>
                            </td>
                            <td><center><a href="{{route('artikel.edit',$data->id)}}"
                                        class="btn btn-sm btn-success">Edit Data
                                        </a>
                                </center>
                            </td>
                            <td><center><a href="{{route('artikel.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Detail Data
                                        </a>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('artikel.destroy',$data->id) }}" method="post">
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