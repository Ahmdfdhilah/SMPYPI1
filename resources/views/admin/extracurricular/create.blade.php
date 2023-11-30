@extends('layouts.admin.app')

@section('title', 'Data Eskul')

@section('content')

<div class="container">
  <a href="/admin/extracurriculars" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('extracurriculars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" name="eskul_name" placeholder="Nama">
        </div>
        @error('eskul_name')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="eskul_desc" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" ></textarea>
        </div>
        @error('eskul_desc')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="file" class="form-control" name="eskul_img">
        </div>
        @error('eskul_img')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  
</div>

@endsection