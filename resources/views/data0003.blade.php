@extends('layout/main0003')

@section('title', 'Data siswa')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Data siswa</h1>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama siswa/th>
      <th scope="col">Guru</th>
      <th scope="col">Alamat</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($kelas as $kls)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$kls->nama_siswa}}</td>
      <td>{{$kls->nama_guru}}</td>
      <td>{{$kls->alamat}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    </div>
@endsection
   