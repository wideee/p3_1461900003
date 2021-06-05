@extends('layout/main0003')

@section('title', 'Form Data Kelas')

@section('container')
<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="mt-3">Form Data Kelas </h1>
    <form method="post" action="/kelas0226">
    @csrf
  <div class="form-group">
    <label for="id_siswa">id_siswa</label>
    <input type="text" class="form-control @error('id_siswa') is-invalid @enderror" id="id_siswa" placeholder="Masukkan ID siswa" name="id_siswa">
    @error('id_pasien')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="id_guru">id_guru</label>
    <input type="text" class="form-control @error('id_guru') is-invalid @enderror" id="id_guru" placeholder="Masukkan ID guru" name="id_guru">
    @error('id_guru')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary my-2">Tambah</button>
  
</form>
   
    </div>
    </div>
    </div>
@endsection   