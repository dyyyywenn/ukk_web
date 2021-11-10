@extends('layout.v_template')

@section('content')
    <h2 align='center'>Selamat datang {{ Auth::user()->name }}</h2>
@endsection