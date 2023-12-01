@extends('layouts.admin.app')

@section('title', 'Data Beasiswa')

@section('content')

<div class="container">
  <a href="/admin/scholarships" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('scholarships.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" name="scholarship_name" placeholder="Nama">
        </div>
        @error('scholarship_name')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="scholarship_desc" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" ></textarea>
        </div>
        @error('scholarship_desc')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Syarat</label>
          <textarea name="scholarship_condition" id="" cols="30" rows="10" class="form-control" placeholder="Kondisi" ></textarea>
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