@extends('sb-admin/app')
@section('title', 'Data Dokter')

@section('content')
   <a href="/data_dokter/{{$data_dokter->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
   <a href="/data_dokter" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left "></i> Kembali</a>
   <div class="card mt-3" style="max-width: 600px;">
   <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/upload/data_dokter/{{$data_dokter->Photo}}" height="320px" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">Data Identitas Dokter</h3>
        <p class="card-text">Nama Dokter : {{$data_dokter->Dokter_Name}}</p>
        <p class="card-text">Jenis Kelamin : {{$data_dokter->Gender}}</p>
        <p class="card-text">Email Dokter : {{$data_dokter->Email_Address}}</p>
        <p class="card-text">Bidang Pelayanan Dokter : {{$data_dokter->Service}}</p>
        <p class="card-text">Nomor Telepon : {{$data_dokter->Phone_Number}}</p>
      </div>
    </div>
  </div>
</div>

@endsection