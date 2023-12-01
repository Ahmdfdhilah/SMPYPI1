@extends('layouts.admin.app')

@section('title', 'Data Siswa')

@section('content')

<div class="container">
  <a href="/admin/students/create" class="btn btn-primary mb-3">Tambah Data</a>

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
          <th>Total</th>
          <th>Tahun ajaran</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1
        @endphp
        @foreach ($students as $data)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$data->student_total}}</td>
            <td>{{$data->student_tahun_ajaran}}</td>
            <td>
              <div class="btn-group" role="group">
                <a href="{{ route('students.edit', $data->id )}}" class="btn btn-warning">Edit</a>

                <form action="{{route('students.destroy', $data->id )}}" method="POST" >
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