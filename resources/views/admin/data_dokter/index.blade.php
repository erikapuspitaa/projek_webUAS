@extends('sb-admin/app')
@section('title', 'Data Dokter')

@section('content')
  {{-- flashdata --}}
  {!! session('success') !!}
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Dokter</h1>

  <a href="/data_dokter/create" class = "btn btn-primary btn-sm">+ Tambah Dokter</a>

 @if($data_dokter[0])
 {{-- table --}}

<table class="table mt-4 table-hover table-bordered">
<thead>
  <tr>
    <th scope="col">No</th>
    <th scope="col"><center>Nama Dokter</center></th>
    <th scope="col"><center>Jenis Kelamin</center></th>
    <th scope="col"><center>Email</center></th>
    <th scope="col"><center>Layanan</center></th>
    <th scope="col"><center>No.Telepon</center></th>
    <th scope="col"><center>Aksi</center></th>
  </tr>
</thead>
<tbody>
  @foreach($data_dokter as $row)
  <tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td width = "12.5%">{{$row->Dokter_Name}}</td>
    <td>{{$row->Gender}}</td>
    <td>{{$row->Email_Address}}</td>
    <td>{{$row->Service}}</td>
    <td width = "12%">{{$row->Phone_Number}}</td>
    <td width="20%">
          <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="/data_dokter/{{$row->id}}" class="btn btn-info btn-sm mr-1"><i class="fas fa-eye"></i> Detail</a>
                      <a href="/data_dokter/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                      <a href="/data_dokter/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
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

{{$data_dokter->links()}}
 
 @else
 <div class="alert alert-info mt-4" role="alert">
  Anda belum mempunyai data
 </div>
 @endif
 @endsection