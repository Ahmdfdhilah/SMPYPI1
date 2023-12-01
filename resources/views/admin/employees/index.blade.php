@extends('layouts.admin.app')

@section('title', 'Data Pegawai')

@section('content')

<div class="container">
  <a href="/admin/employees/create" class="btn btn-primary mb-3">Tambah Data</a>

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
          <th>Tipe</th>
          <th>posisi</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1
        @endphp
        @foreach ($employees as $data)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$data->employee_name}}</td>
            <td>{{$data->employee_type}}</td>
            <td>{{$data->employee_position}}</td>
            <td>
              <img src="/image/{{$data->employee_img}}" class="img-fluid" alt="" width="90">
            </td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('employees.edit', $data->id )}}" class="btn btn-warning">Edit</a>

                <form action="{{route('employees.destroy', $data->id )}}" method="POST" >
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