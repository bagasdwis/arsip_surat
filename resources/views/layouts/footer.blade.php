<!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
          </div>
          
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <!-- Sweetalert -->
  <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets/js/argon.js?v=1.2.0')}}"></script>
  <script>
    $(function () {

      $(document).ready( function () {
          // $('.sidebar').click(function(e){
          //   $('.preloader').fadeIn();
          // })

          var flash = "{{ Session::has('sukses') }}";
          if(flash){
              var pesan = "{{ Session::get('sukses') }}"
              swal("Sukses", pesan, "success");
          }
   
          var gagal = "{{ Session::has('gagal') }}";
          if(gagal){
              var pesan = "{{ Session::get('gagal') }}"
              swal("Error", pesan, "error");
          }
      });
    })
  </script>
     @yield('footer')
  </body>

</html>