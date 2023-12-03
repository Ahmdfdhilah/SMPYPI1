@extends('layouts.admin.app')

@section('title', 'Edit Data Kepsek')

@section('content')

<div class="container">
  <a href="{{ route('kepsek.index') }}" class="btn btn-primary mb-3">Kembali</a>
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('kepsek.update', $kepsek->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
        <div class="form-group">
          <label for="kepsek_name">Nama</label>
          <input type="text" class="form-control" name="kepsek_name" placeholder="Nama" value="{{ $kepsek->kepsek_name }}">
        </div>
        @error('kepsek_name')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <label for="kepsek_welcome">Sambutan</label>
          <textarea name="kepsek_welcome" class="form-control" placeholder="Sambutan">{{ $kepsek->kepsek_welcome }}</textarea>
        </div>
        @error('kepsek_welcome')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <label for="kepsek_date">Tanggal Jabatan</label>
          <input type="date" class="form-control" name="kepsek_date" value="{{ $kepsek->kepsek_date }}">
        </div>
        @error('kepsek_date')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <label for="kepsek_history">Riwayat</label>
          <textarea name="kepsek_history" class="form-control" placeholder="Riwayat">{{ $kepsek->kepsek_history }}</textarea>
        </div>
        @error('kepsek_history')
        <small style="color: red;">{{ $message }}</small>
        @enderror
        <div class="form-group">
          <label for="kepsek_img">Gambar</label>
          <input type="file" class="form-control" name="kepsek_img">
          @if ($kepsek->kepsek_img)
            <img src="{{ asset($kepsek->kepsek_img) }}" class="img-fluid mt-2" alt="Kepsek Image" width="90">
          @endif
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
