@extends('layouts.admin.app')

@section('title', 'Data Prestasi')

@section('content')

<div class="container">
  <a href="/admin/achievements/create" class="btn btn-primary mb-3">Tambah Data</a>

  @if ($message = Session::get('message'))
  <div class="alert alert-success">
    <strong>Berhasil</strong>
    <p>{{$message}}</p>
  </div>
  @endif

  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Deskripsi</th>
          <th>Gambar</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1
        @endphp
        @foreach ( $achievements as $data)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$data->achievement_name}}</td>
            <td>{{$data->achievement_desc}}</td>
            <td>
              <img src="/image/{{$data->achievement_img}}" class="img-fluid" alt="" width="90">
            </td>
            <td>{{$data->achievement_date}}</td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('achievements.edit', $data->id )}}" class="btn btn-warning">Edit</a>

                <form action="{{route('achievements.destroy', $data->id )}}" method="POST" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection