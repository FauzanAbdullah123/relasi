<title>Data Mahasiswa</title>
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
                <div class="card-header bg-dark">Data Mahasiswa</div>
                <div class="card-body">
                <center>
                    <a href="{{route('mahasiswa.create')}}"
                    class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama Mahasiswa</center></th>
                            <th><center>NIM Mahasiswa</center></th>
                            <th><center>Nama Dosen</center></th>
                            <th><center>Daftar Hobi</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($mhs as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->nama }}</center></td>
                            <td><center>{{ $data->nim }}</center></td>
                            <td><center>{{ $data->dosen->nama }}</center></td>
                            <td>
                                <ol>
                                    @foreach($data->hobi as $a)
                                        <li>{{ $a->hobi }}</li>
                                    @endforeach
                                </ol>
                            </td>
                            <td><center><a href="{{route('mahasiswa.edit',$data->id)}}"
                                        class="btn btn-success">Edit Data
                                        </a>
                                </center>
                            </td>
                            <td><center><a href="{{route('mahasiswa.show',$data->id)}}"
                                        class="btn btn-warning">Detail Data
                                        </a>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('mahasiswa.destroy',$data->id) }}" method="post">
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