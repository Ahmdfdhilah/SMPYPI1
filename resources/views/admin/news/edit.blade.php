@extends('layouts.admin.app')

@section('title', 'Data Publikasi')

@section('content')

<div class="container">
  <a href="/admin/news" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')  
      @csrf
        <div class="form-group">
          <label for="">Nama</label>
          <input type="text" class="form-control" name="publication_name" placeholder="Judul" value="{{$news->publication_name}}">
        </div>
        @error('publication_name')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="publication_desc" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi" >{{$news->publication_desc}}</textarea>
        </div>
        @error('publication_desc')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Link</label>
          <input name="publication_link" id="" cols="30" rows="10" class="form-control" placeholder="Link" value="{{$news->publication_link}}">
        </div>
        @error('publication_link')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <label for="">Tipe</label>
          <input name="publication_type" id="" cols="30" rows="10" class="form-control" placeholder="Tipe" value="{{$news->publication_type}}">
        </div>
        @error('publication_type')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <img src="/image/{{$news->image}}" class="img-fluid" width="150">
        <div class="form-group">
          <label for="">Gambar</label>
          <input type="file" class="form-control w-fit" name="publication_img">
        </div>
        @error('publication_img')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <div class="form-group">
          <button class="btn btn-primary btn-block bg-blue-600 w-fit" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('publication_desc').addEventListener('input', function () {
          this.value = this.value.replace(/\n/g, '<br>');
      });
  });
</script>
@endsection