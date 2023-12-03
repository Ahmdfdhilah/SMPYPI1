@extends('layouts.admin.app')

@section('title', 'Data Kepsek')

@section('content')

<div class="container">
  <a href="{{ route('kepsek.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

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
          <th>Tanggal Jabatan</th>
          <th>Sambutan</th>
          <th>Riwayat</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1
        @endphp
        @foreach ($kepseks as $data)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$data->kepsek_name}}</td>
            <td>{{$data->kepsek_date}}</td>
            <td>{{$data->kepsek_welcome}}</td>
            <td>{{$data->kepsek_history}}</td>
            <td>
              <img src="{{ asset($data->kepsek_img) }}" class="img-fluid" alt="" width="90">
            </td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('kepsek.edit', $data->id) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('kepsek.destroy', $data->id) }}" method="POST" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger bg-red-600 ml-3">Hapus</button>
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
