@extends('layouts.admin.app')

@section('title', 'Tambah Data Kepsek')

@section('content')

<div class="container">
  <a href="{{ route('kepsek.index') }}" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('kepsek.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="kepsek_name">Nama</label>
          <input type="text" class="form-control" name="kepsek_name" placeholder="Nama">
        </div>
        @error('kepsek_name')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <label for="kepsek_welcome">Sambutan</label>
          <textarea name="kepsek_welcome" class="form-control" placeholder="Sambutan"></textarea>
        </div>
        @error('kepsek_welcome')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <label for="kepsek_date">Tanggal Jabatan</label>
          <input type="date" class="form-control" name="kepsek_date">
        </div>
        @error('kepsek_date')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <label for="kepsek_history">Riwayat</label>
          <textarea name="kepsek_history" class="form-control" placeholder="Riwayat"></textarea>
        </div>
        @error('kepsek_history')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <label for="kepsek_img">Gambar</label>
          <input type="file" class="form-control" name="kepsek_img">
        </div>
        @error('kepsek_img')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <button class="btn btn-primary btn-block bg-blue-600 w-fit" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  
</div>

@endsection
