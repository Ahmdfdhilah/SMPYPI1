@extends('layouts.admin.app')

@section('title', 'Data Publikasi')

@section('content')

<div class="container">
  <a href="/admin/scholarships" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('scholarships.update', $scholarship->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')  
      @csrf
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" name="scholarship_name" placeholder="Nama" value="{{$scholarship->scholarship_name}}">
        </div>
        @error('scholarship_name')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="scholarship_desc" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" >{{$scholarship->scholarship_desc}}</textarea>
        </div>
        @error('scholarship_desc')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Kondisi</label>
          <textarea name="scholarship_condition" id="" cols="30" rows="10" class="form-control" placeholder="Syarat" >{{$scholarship->scholarship_condition}}</textarea>
        </div>
        @error('scholarship_condition')
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