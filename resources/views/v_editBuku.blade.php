@extends('layout.v_template')

@section('content')
<div class="card card-primar y">
    <div class="card-header">
      <h3 class="card-title">Add Buku</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/daftarBuku/update/{{$daftarBuku->id}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">

        <div class="form-group">
          <label >Judul</label>
          <input value="{{$daftarBuku->judul}}" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul" name="judul">
          @error('judul')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label >Pengarang</label>
          <input value="{{$daftarBuku->pengarang}}" class="form-control @error('pengarang') is-invalid @enderror" placeholder="Masukkan Pengarang" name="pengarang">
          @error('pengarang')
          <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
            <label>Penerbit</label>
            <input value="{{$daftarBuku->penerbit}}" class="form-control @error('penerbit') is-invalid @enderror" placeholder="Masukkan Penerbit" name="penerbit">
            @error('penerbit')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-sm-12">
            <div class="col-sm-4">
                <img src="{{url('gambar/'.$daftarBuku->gambar)}}" width="150px">
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Ganti Gambar</label>
                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                    @error('gambar')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
            </div>
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