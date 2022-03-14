@extends('layouts/head')

@section('head')
    

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('landing/logo.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Pegawai
      </a>
    </div>
  </nav>
@yield('navbar')

@endsection