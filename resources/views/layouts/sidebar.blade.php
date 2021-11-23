
<body>
  <!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Menu</span>
          </h6>
          <hr class="my-3">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('surat.index') }}">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Arsip</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about.index') }}">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">About</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
        </div>
      </div>
    </div>
  </nav>