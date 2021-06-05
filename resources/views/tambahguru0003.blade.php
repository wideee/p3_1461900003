@extends('layout/main0003')

@section('title', 'Form Data Guru')

@section('container')
<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="mt-3">Form Data Guru </h1>
    <form method="post" action="/guru0226">
    @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
    @error('nama')
    <div  class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="form-group">
    <label for="nbi">JMengajar</label>
    <input type="text" class="form-control @error('mengajar') is-invalid @enderror" id="mengajar" placeholder="Masukkan mengajar" name="mengajar">
    @error('mengajar')
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