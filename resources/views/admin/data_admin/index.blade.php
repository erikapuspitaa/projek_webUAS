@extends('sb-admin/app')
@section('title', 'Data Admin')

@section('content')
  {{-- flashdata --}}
  {!! session('success') !!}
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Admin</h1>

  <a href="/data_admin/create" class = "btn btn-primary btn-sm">+ Tambah Admin</a>

 @if($data_admin[0])
 {{-- table --}}

<table class="table mt-4 table-hover table-bordered">
<thead>
  <tr>
    <th scope="col">No</th>
    <th scope="col"><center>Nama Admin</center></th>
    <th scope="col"><center>Jenis Kelamin</center></th>
    <th scope="col"><center>Email</center></th>
    <th scope="col"><center>No.Telepon</center></th>
    <th scope="col"><center>Aksi</center></th>
  </tr>
</thead>
<tbody>
  @foreach($data_admin as $row)
  <tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td width = "18%">{{$row->Admin_Name}}</td>
    <td width = "15%">{{$row->Gender}}</td>
    <td>{{$row->Email_Address}}</td>
    <td width = "18%">{{$row->Phone_Number}}</td>
    <td width="20%">
          <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="/data_admin/{{$row->id}}" class="btn btn-info btn-sm mr-1"><i class="fas fa-eye"></i> Detail</a>
                      <a href="/data_admin/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                      <a href="/data_admin/{{$row->id}}/konfirmasi" class="btn btn-danger btn-sm mr-1"><i class="fas fa-trash"></i> Hapus</a>
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

{{$data_admin->links()}}
 
 @else
 <div class="alert alert-info mt-4" role="alert">
  Anda belum mempunyai data
 </div>
 @endif
 @endsection