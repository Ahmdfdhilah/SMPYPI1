@extends('layouts.admin.app')

@section('title', 'Data Publikasi')

@section('content')

<div class="container">
  <a href="/admin/news/create" class="btn btn-primary mb-3">Tambah Data</a>

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
          <th>Tipe</th>
          <th>Link</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1
        @endphp
        @foreach ($news as $data)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$data->publication_name}}</td>
            <td>{{$data->publication_desc}}</td>
            <td>{{$data->publication_type}}</td>
            <td>{{$data->publication_link}}</td>
            <td>
              <img src="/image/{{$data->publication_img}}" class="img-fluid" alt="" width="90">
            </td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('news.edit', $data->id )}}" class="btn btn-warning">Edit</a>

                <form action="{{route('news.destroy', $data->id )}}" method="POST" >
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