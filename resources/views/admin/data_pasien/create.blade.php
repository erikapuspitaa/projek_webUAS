@extends('sb-admin/app')
@section('title', 'Data Pasien')

@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

  <form action = "/data_pasien" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1">Nama Pasien</label>
              <input type="text" class="form-control" id="Patient_Name" name="Patient_Name">
              @error('Patient_Name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1">Jenis Kelamin</label>
              <select class="form-control" id="Gender" name="Gender">
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              @error('Gender')
                    <small class="text-danger">{{ $message }}</small>
                     @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="Email_Address" name="Email_Address" placeholder="name@example.com">
              @error('Email_Address')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1">Layanan</label>
              <select class="form-control" id="Service" name="Service">
                <option selected disabled>Pilih Layanan</option>
                <option>Gum-Lifting</option>
                <option>Bleaching (Teeth Whitening)</option>
                <option>Operasi Gigi Bungsu</option>
                <option>Implan dan Penambalan Gigi</option>
                <option>Perawatan Kawat Gigi</option>
                <option>Scalling</option>
              </select>
              @error('Service')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1">Dokter</label>
              <select class="form-control" id="Doctor" name="Doctor">
                <option selected disabled>Pilih Dokter</option>
                <option>drg. Rendi Firmono, MARS, Sp.Perio</option>
                <option>drg. Ken Ayu Miranthy, Sp.BMo</option>
                <option>drg. Inge Paramitha, Sp.Pros</option>
                <option>drg. Rani Isfandira, Sp.KG</option>
              </select>
              @error('Doctor')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1">Nomor Telepon</label>
              <input type="number" class="form-control" id="Phone_Number" name="Phone_Number" placeholder="628xxxxx">
              @error('Phone_Number')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
            <a href="/data_pasien" class="btn btn-secondary btn-sm">Kembali</a>
            </form>
            @endsection
            <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pasien</label>
                    <input type="text" name="Patient_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('Patient_Name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="Gender" aria-label="Default select example">
                      <option selected disabled>Select Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name= "Email_Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Layanan</label>
                    <select class="form-select" name="Service" id="Service" aria-label="Default select example">
                      <option selected>Pilih Layanan</option>
                      <option value="Gum-Lifting">Gum-Lifting</option>
                      <option value="Bleaching (Teeth Whitening)">Bleaching (Teeth Whitening)</option>
                      <option value="Operasi Gigi Bungsu">Operasi Gigi Bungsu</option>
                      <option value="Implan dan Penambalan Gigi">Implan dan Penambalan Gigi</option>
                      <option value="Perawatan Kawat Gigi">Perawatan Kawat Gigi</option>
                      <option value="Scalling">Scalling</option>
                    </select>
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Dokter</label>
                    <select class="form-select" name="Doctor" aria-label="Default select example">
                      <option selected>Pilih Dokter</option>
                      <option value="drg. Rendi Firmono, MARS, Sp.Perio">drg. Rendi Firmono, MARS, Sp.Perio</option>
                      <option value="drg. Ken Ayu Miranthy, Sp.BMo">drg. Ken Ayu Miranthy, Sp.BMo</option>
                      <option value="drg. Inge Paramitha, Sp.Pros">drg. Inge Paramitha, Sp.Pros</option>
                      <option value="drg. Rani Isfandira, Sp.KG">drg. Rani Isfandira, Sp.KG</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                    <input type="number" name="Phone_Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div> -->
            <!-- <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
            <a href="/data_pasien" class="btn btn-secondary btn-sm">Kembali</a> -->
