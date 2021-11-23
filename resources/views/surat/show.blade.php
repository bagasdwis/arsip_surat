@extends('layouts.header')
@section('content')
<div class="main-content" id="panel">
     <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h1 class="h1 text-white">Arsip Surat >> Lihat</h1>
              <h6 class="h5 text-white d-inline-block mb-0">Nomor : </h6><h6 class="h5 text-white d-inline-block mb-0">{{ $surat->no_surat }}</h6><br>
              <h6 class="h5 text-white d-inline-block mb-0">Kategori : </h6><h6 class="h5 text-white d-inline-block mb-0">{{ $surat->kategori->nama_kategori }}</h6><br>
              <h6 class="h5 text-white d-inline-block mb-0">Judul : </h6><h6 class="h5 text-white d-inline-block mb-0">{{ $surat->judul }}</h6><br>
              <h6 class="h5 text-white d-inline-block mb-0">Waktu Unggah : </h6><h6 class="h5 text-white d-inline-block mb-0">{{ $surat->waktu }}</h6>
            <br>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <iframe type="application/pdf" src="/{{ $surat->file_surat }}" width="100%" height="500"></iframe><br>
			  <div>
              <a href="{{ route('surat.index') }}" class="btn btn-neutral"><< Kembali</a>
              <a href="/{{ $surat->file_surat }}" class="btn btn-neutral">Unduh</a>
              <a href="{{ route('surat.edit', $surat->id ) }}" class="btn btn-neutral">Edit/Ganti FIle</a>
            </div>
          </div>
        </div>
      </div>
@endsection