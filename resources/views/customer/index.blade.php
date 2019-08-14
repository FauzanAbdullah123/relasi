<title>Data Customer</title>
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
                <div class="card-header bg-dark">Data Customer</div>
                <div class="card-body">
                <center>
                    <a href="{{route('customer.create')}}"
                    class="btn btn-primary">Tambah</a>
                </center>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><center>No</center></th>
                            <th><center>Nama Customer</center></th>
                            <th><center>Alamat Customer</center></th>
                            <th><center>Kota Customer</center></th>
                            <th><center>No Telepon Customer</center></th>
                            <th><center>Email Customer</center></th>
                            <th colspan="3" style="text-align: center;">AKSI</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach($customer as $data)
                        <tr>
                            <td><center>{{ $no++ }}</center></td>
                            <td><center>{{ $data->nm_customer }}</center></td>
                            <td><center>{{ $data->alamat_customer }}</center></td>
                            <td><center>{{ $data->kota }}</center></td>
                            <td><center>{{ $data->no_tlp }}</center></td>
                            <td><center>{{ $data->email }}</center></td>
                            <td><center><a href="{{route('customer.edit',$data->id)}}"
                                        class="btn btn-success">Edit Data
                                        </a>
                                </center>
                            </td>
                            <td><center><a href="{{route('customer.show',$data->id)}}"
                                        class="btn btn-warning">Detail Data
                                        </a>
                                </center>
                            </td>
                            <td>
                                <form action="{{ route('customer.destroy',$data->id) }}" method="post">
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