@extends('layouts.admin.app')

@section('title', 'Data Fasilitas')

@section('content')

<div class="container">
  <a href="/admin/facilities" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('facilities.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" name="facilities_name" placeholder="Nama">
        </div>
        @error('facilities_name')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="facilities_desc" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" ></textarea>
        </div>
        @error('facilities_desc')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Total</label>
          <input type="number" class="form-control" name="facilities_total" placeholder="Total">
        </div>
        @error('facilities_total')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="file" class="form-control" name="facilities_img">
        </div>
        @error('facilities_img')
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