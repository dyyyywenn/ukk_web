@extends('layout.v_template')

@section('content')
          <!-- Default box -->
          <div class="card">
            <div class="card-header" >
              <div class="text-center">
                <h4>
                    Daftar Isi
                </h4>
            </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <a href="/daftarBuku/add" class="btn btn-primary">Tambah</a>
                </div>
                <div class="col-md-6">
                  <form action="/search" method="GET">
                    @csrf
                    <div class="input-group mb-3">
                      <input type="search" class="form-control" placeholder="Search" name="search">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                      </div>
                    </div>
                  </form>
              </div>
              </div>
               
                
                @if (session('pesan'))
                <div class="alert alert-success alert-dismissible" role="alert">
                  Success!
                  {{session('pesan')}}
                </div>
              
              
                @endIf
                <hr>
                <div class="row">
           
                    @foreach ($daftarBuku as $data)
                    <div class="card-colums ">
                      <div class="card m-3" style="width: 12rem; ">
                        <div class="card-body">
                         
                            <img src="{{url('gambar/'.$data->gambar)}}" width="150" height="250"> 
                            <p align="center">{{$data->judul}}</p> 

                            <a href="/daftarBuku/edit/{{$data->id}}" class="btn btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
                              Delete
                            </button>
                        </div>
                    </div>
              
                    </div>
                    @endforeach
       
                </div>
                <div class="col-md-6 m-4">
                  {{$daftarBuku->links()}}
                </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->

        @foreach ($daftarBuku as $data)
          <div class="modal fade" id="delete{{$data->id}}">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Delete Data {{$data->judul}}</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Apakah Anda yakin ingin menghapus data ini ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  <a href="/daftarBuku/delete/{{$data->id}}" class="btn btn-primary">Yes</a>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        @endforeach
          
@endsection