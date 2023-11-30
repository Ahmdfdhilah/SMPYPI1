@extends('layouts.admin.app')

@section('title', 'Data Achievement')

@section('content')

<div class="container">
  <a href="/admin/achievements" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('achievements.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')  
      @csrf
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" name="achievement_name" placeholder="Judul" value="{{$achievement->achievement_name}}">
        </div>
        @error('achievment_name')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Waktu</label>
          <input type="text" class="form-control" name="achievement_date" placeholder="Waktu" value="{{$achievement->achievement_date}}">
        </div>
        @error('achievement_date')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="achievement_desc" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" >{{$achievement->achievement_desc}}</textarea>
        </div>
        @error('achievement_desc')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <img src="/image/{{$achievement->achievement_img}}" class="img-fluid" width="150">
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="file" class="form-control" name="achievement_img">
        </div>
        @error('achievement_img')
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