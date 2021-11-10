@extends('layout.v_template')
@section('title', 'Add')
    
@section('content')
<div class="card card-primar y">
    <div class="card-header">
      <h3 class="card-title">Add Buku</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/daftarBuku/insert" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label >Judul</label>
          <input class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul" name="judul">
          @error('judul')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label >Pengarang</label>
          <input class="form-control @error('pengarang') is-invalid @enderror" placeholder="Masukkan Pengarang" name="pengarang">
          @error('pengarang')
          <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input class="form-control @error('penerbit') is-invalid @enderror" placeholder="Masukkan Penerbit" name="penerbit">
            @error('penerbit')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
          @error('gambar')
          <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
@endsection