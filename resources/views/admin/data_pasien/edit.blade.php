@extends('sb-admin/app')
@section('title', 'Data Pasien')

@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Pasien Database</h1>

  <form action = "/data_pasien/{{$data_pasien->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
                    <input type="text" name="Patient_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_pasien->Patient_Name}}">
                    @error('Patient_Name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" name="Gender" value="{{$data_pasien->Gender}}">
                      <option selected disabled>Pilih Jenis Kelamin</option>
                      <option value="Male">Laki-Laki</option>
                      <option value="Female">Perempuan</option>
                    </select>
                    @error('Gender')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name= "Email_Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_pasien->Email_Address}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Layanan</label>
                    <select class="form-control" name="Service" value="{{$data_pasien->Service}}">
                      <option selected disabled>Pilih Layanan</option>
                      <option value="Gum-Lifting">Gum-Lifting</option>
                      <option value="Bleaching (Teeth Whitening)">Bleaching (Teeth Whitening)</option>
                      <option value="Operasi Gigi Bungsu">Operasi Gigi Bungsu</option>
                      <option value="Implan dan Penambalan Gigi">Implan dan Penambalan Gigi</option>
                      <option value="Perawatan Kawat Gigi">Perawatan Kawat Gigi</option>
                      <option value="Scalling">Scalling</option>
                    </select>
                    @error('Service')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Doctor</label>
                    <select class="form-control" name="Doctor" value="{{$data_pasien->Doctor}}">
                      <option selected disabled>Pilih Dokter</option>
                      <option value="drg. Rendi Firmono, MARS, Sp.Perio">drg. Rendi Firmono, MARS, Sp.Perio</option>
                      <option value="drg. Ken Ayu Miranthy, Sp.BMo">drg. Ken Ayu Miranthy, Sp.BMo</option>
                      <option value="drg. Inge Paramitha, Sp.Pros">drg. Inge Paramitha, Sp.Pros</option>
                      <option value="drg. Rani Isfandira, Sp.KG">drg. Rani Isfandira, Sp.KG</option>
                    </select>
                    @error('Doctor')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="number" name="Phone_Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_pasien->Phone_Number}}">
                  </div>
            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
            <a href="/data_pasien" class="btn btn-secondary btn-sm">Kembali</a>
 </form>
@endsection