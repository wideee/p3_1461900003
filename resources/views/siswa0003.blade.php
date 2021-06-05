@extends('layout/main0003')

@section('title', 'Data Siswa')

@section('container')
<div class="container">
<div class="row">
<div class="col-15">
    <h1 class="mt-2">Data Siswa</h1>
    <a class="btn btn-primary" href="/tambahsiswa0003" role="button">Tambah Data</a>
    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>

     
    </tr>
  </thead>
  <tbody>
    @foreach($siswa as $sws)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$sws->nama}}</td>
      <td>{{$sws->alamat}}</td>
      <td>
      <a class="btn btn-primary" href="{{url('siswa/' . $psn->id) . '/edit' }}" role="button">Edit</a>
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