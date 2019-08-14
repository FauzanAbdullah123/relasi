<title>Data Biodata</title>
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
                <div class="card-header bg-dark">Data Biodata</div>
                <div class="card-body">
                <center>
                    <a href="{{route('biodata.create')}}"
                    class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Alamat</center></th>
                            <th><center>Tanggal Lahir</center></th>
                            <th><center>Foto</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($bio as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->nama }}</center></td>
                            <td><center>{{ $data->alamat }}</center></td>
                            <td><center>{{ $data->tgl_lahir }}</center></td>
                            <td>
                                <center>
                                <img width="100px" height="100px"
                                src="{{ asset('assets/img/biodata/'. 
                                $data->foto.'') }}" alt="Foto" style="border-radius: 6%">
                                </center>
                            </td>
                            <td><center><a href="{{route('biodata.edit',$data->id)}}"
                                        class="btn btn-sm btn-success">Edit Data
                                        </a>
                                </center>
                            </td>
                            <td><center><a href="{{route('biodata.show',$data->id)}}"
                                        class="btn btn-sm btn-warning">Detail Data
                                        </a>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('biodata.destroy',$data->id) }}" method="post">
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