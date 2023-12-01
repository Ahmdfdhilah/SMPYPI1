@extends('layouts.admin.app')

@section('title', 'Data Achievement')

@section('content')

<div class="container">
  <a href="/admin/achievements" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('achievements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Judul</label>
          <input type="text" class="form-control" name="achievement_name" placeholder="Judul">
        </div>
        @error('achievement_name')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Waktu</label>
          <input type="text" class="form-control" name="achievement_date" placeholder="Waktu">
        </div>
        @error('achievement_Date')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="achievement_desc" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" ></textarea>
        </div>
        @error('achievement_desc')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="file" class="form-control w-fit" name="achievement_img">
        </div>
        @error('achievement_img')
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