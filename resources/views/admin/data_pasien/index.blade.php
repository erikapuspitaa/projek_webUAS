@extends('sb-admin/app')
@section('title', 'Data Pasien')

@section('content')
  {{-- flashdata --}}
  {!! session('success') !!}
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

  <a href="/data_pasien/create" class = "btn btn-primary btn-sm">+ Tambah Pasien</a>

  {{-- table --}}

  <table class="table mt-4 table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col"><center>Nama Pasien</center></th>
      <th scope="col"><center>Jenis Kelamin</center></th>
      <th scope="col"><center>Email</center></th>
      <th scope="col"><center>Layanan</center></th>
      <th scope="col"><center>Dokter</center></th>
      <th scope="col"><center>No.Telepon</center></th>
      <th scope="col"><center>Aksi</center></th>
    </tr>
  </thead>
  <tbody>
    @foreach($data_pasien as $row)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td width = "12.5%">{{$row->Patient_Name}}</td>
      <td>{{$row->Gender}}</td>
      <td>{{$row->Email_Address}}</td>
      <td>{{$row->Service}}</td>
      <td>{{$row->Doctor}}</td>
      <td width = "12%">{{$row->Phone_Number}}</td>
      <td width="15%">
            <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/data_pasien/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                        <a href="/data_pasien/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
                        <!-- <form action="/data_pasien/{{$row->id}}" method="post">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                        </form> -->
            </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$data_pasien->links()}}

@endsection