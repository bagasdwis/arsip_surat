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
              <h1 class="h1 text-white d-inline-block mb-0">About</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    
   <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 order-xl-2">
          <div class="card card-profile">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <img src="assets/img/bagas.jpg" width="150px">

            <div class="card-body pt-0">
              <div class="text-left">
                <h4 class="mb-0">Aplikasi ini dibuat oleh:</h4>
                <h4 class="mb-0">Nama: Bagas Dwi Santoso</h4>
                <h4 class="mb-0">NIM: 1931713065</h4>
                <h4 class=" mb-0">Tanggal: 20 November 2021</h4>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
     
@endsection