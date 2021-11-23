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
              <h1 class="h1 text-white d-inline-block mb-0">Arsip Surat >> Unggah</h1>
              <h6 class="h5 text-white d-inline-block mb-0">Unggah surat yang telah terbit pada form ini untuk diarsipkan.</h6><br>
              <h6 class="h5 text-white d-inline-block mb-0">Catatan:</h6>
              <ul>
                <li class="text-white">
                  <h6 class="h5 text-white d-inline-block mb-0">Gunakan file berformat PDF</h6>
                </li>
              </ul>

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
              <form action="{{ route('surat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
          			  <div class="form-group row">
          			    <label class="col-sm-2 col-form-label">Nomor Surat</label>
          			    <div class="col-sm-4">
          			      <input type="text" class="form-control" name="no_surat">
          			    </div>
          			  </div>
          			  <div class="form-group row">
          			    <label class="col-sm-2 col-form-label">Kategori</label>
          			    <div class="col-sm-4">
          			      <select class="custom-select custom-select-lg" name="kategori_id">
          					  @foreach($kategori as $result)
                      <option value="{{ $result->id }}">{{  $result->nama_kategori }}</option>
                      @endforeach
          					</select>
          			    </div>
          			  </div>
          			  <div class="form-group row">
          			    <label class="col-sm-2 col-form-label">Judul</label>
          			    <div class="col-sm-10">
          			      <input type="text" class="form-control" name="judul">
          			    </div>
          			  </div>
          			  <div class="form-group row">
          			    <label class="col-sm-2 col-form-label">File Surat PDF</label>
          			    <div class="col-sm-6">
          			      <div class="custom-file">
          				    <input type="file" class="custom-file-input" id="validatedCustomFile" required name="file_surat">
          				    <label class="custom-file-label" for="validatedCustomFile"></label>
          				  </div>
          			    </div>
          			  </div>
          			  <div>
                    <a href="{{ route('surat.index') }}" class="btn btn-neutral"><< Kembali</a>
                    <button type="submit" class="btn btn-neutral">Simpan</button>
                  </div>
      			</form>
            </div>
          </div>
        </div>
      </div>
     
@endsection