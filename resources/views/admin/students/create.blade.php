@extends('layouts.admin.app')

@section('title', 'Data Siswa')

@section('content')

<div class="container">
  <a href="/admin/students" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Total</label>
          <input type="number" class="form-control" name="student_total" placeholder="Total">
        </div>
        @error('student_total')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Tahun ajaran</label>
          <input name="student_tahun_ajaran" id="" cols="30" rows="10" class="form-control" placeholder="Tipe" >
        </div>
        @error('student_tahun_ajaran')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <button class="btn btn-primary btn-block bg-blue-600 w-fit" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  
</div>

@endsection