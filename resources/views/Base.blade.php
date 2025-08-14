
@include('includes.header')

    <!-- Sidebar Start -->

    @include('includes.sidebar')


    <!--  Sidebar End -->

    <!--  Main wrapper -->

      <!--  Header Start -->
{{-- header --}}
      <!--  Header End -->
      <div class="body-wrapper-inner">
        <div class="container-fluid">

            @yield('maincontent')



        </div>
      </div>
    </div>




    @include('includes.footer')
