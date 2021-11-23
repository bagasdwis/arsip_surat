@extends('layouts.header')
@section('content')
<!-- Main content -->
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
              <h1 class="h1 text-white d-inline-block mb-0">Arsip Surat</h1>
            <h6 class="h5 text-white d-inline-block mb-0">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</h6>
            <h6 class="h5 text-white d-inline-block mb-0">Klik "Lihat" pada kolom aksi untuk menampilkan surat.</h6><<br><<br>
            </div>
          </div>
          <form action="{{ route('cari') }}" method="GET">>
            <div class="row">
              <div class="col-sm-10">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label text-white">Cari surat:</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-alternative input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                          </div>
                          <input class="form-control" placeholder="Search" type="text" name="cari">
                        </div>
                    </div>
              </div>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-neutral">Cari!</button>
            </div>
            
          </div>
        </form><br>
        </div>
      </div>
    </div>
    
   <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Nomor Surat</th>
                    <th scope="col" class="sort" data-sort="budget">Kategori</th>
                    <th scope="col" class="sort" data-sort="status">Judul</th>
                    <th scope="col">Waktu Pengarsipan</th>
                    <th scope="col" class="sort" data-sort="completion">Aksi</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach ($surat as $sur)
                  <tr>
                    <td>{{$sur->no_surat }}</td>
                    <td>{{$sur->kategori->nama_kategori }}</td>
                    <td>{{$sur->judul }}</td>
                    <td>{{$sur->waktu }}</td>
                    <td>
                        <button class="btn btn-danger delete" id="{{$sur->id}}">Hapus</button>
                        <a href="/{{ $sur->file_surat }}" class="btn btn-warning">Unduh</a>
                        <a href="{{ route('surat.show', $sur->id ) }}"><button class="btn btn-primary">Lihat >></button></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <a class="btn btn-neutral btn-icon" href="{{ route('surat.create') }}">Arsipkan Surat.</a>

      
@endsection

@section('footer')
  <script>
  $(function () {

    $(document).ready( function () {
        // btn hapus di klik
        $('.delete').click(function(){
            var id = $(this).attr('id');
            swal({
            title: "Yakin?",
            text: "Ingin menghapus data ini!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              if (willDelete) {
                window.location = "surat/"+id+"/delete"
              }
              }
          });
        });
    });
  })
</script>
@endsection