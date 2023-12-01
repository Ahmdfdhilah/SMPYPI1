@extends('layouts.admin.app')

@section('title', 'Data Pegawai')

@section('content')

<div class="container">
  <a href="/admin/employees" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" name="employee_name" placeholder="Nama" value="{{$employee->employee_name}}">
        </div>
        @error('employee_name')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Tipe</label>
          <input name="employee_type" id="" cols="30" rows="10" class="form-control" placeholder="Tipe"  value="{{$employee->employee_type}}">
        </div>
        @error('employee_type')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Posisi</label>
          <input name="employee_position" id="" cols="30" rows="10" class="form-control" placeholder="Posisi" value="{{$employee->employee_position}}">
        </div>
        @error('employee_position')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="file" class="form-control w-fit" name="employee_img">
        </div>
        @error('employee_img')
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