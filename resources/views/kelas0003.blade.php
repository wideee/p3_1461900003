@extends('layout/main0003')

@section('title', 'Data Kelas')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Data Guru</h1>
    <a class="btn btn-primary" href="/tambahkelas0003" role="button">Tambah Data</a>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">id siswa</th>
      <th scope="col">id guru</th>
      <th scope="col">Aksi</th>

     
    </tr>
  </thead>
  <tbody>
  @foreach($kelas as $kls)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$kls->id_siswa}}</td>
      <td>{{$kmr->id_guru}}</td>
      <td>
      <a class="btn btn-primary" href="" role="button">Edit</a>
      <a class="btn btn-danger" href="#" role="button">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    </div>
    </div>
@endsection
   