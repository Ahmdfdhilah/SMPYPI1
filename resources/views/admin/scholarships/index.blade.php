@extends('layouts.admin.app')

@section('title', 'Data Publikasi')

@section('content')

<div class="container">
  <a href="/admin/scholarships/create" class="btn btn-primary mb-3">Tambah Data</a>

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
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Kondisi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1
        @endphp
        @foreach ($scholarships as $data)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$data->scholarship_name}}</td>
            <td>{{$data->scholarship_desc}}</td>
            <td>{{$data->scholarship_condition}}</td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('scholarships.edit', $data->id )}}" class="btn btn-warning">Edit</a>

                <form action="{{route('scholarships.destroy', $data->id )}}" method="POST" >
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