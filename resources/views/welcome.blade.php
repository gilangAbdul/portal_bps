<!DOCTYPE html>
<html lang="en-US" dir="ltr">
@include('layout.head')

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      @include('layout.navbar')
      <section class="py-7 py-lg-10" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/illustration/2.png);background-position:left top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder py-100" style="background-image:url(assets/img/illustration/bg.png);background-position:right top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row align-items-center h-100 justify-content-center justify-content-lg-start">
            <div class="col-md-9 col-xxl-5 text-md-start text-center py-6 pt-8">
              <h1 class="fs-4 fs-md-5 fs-xxl-4" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">Portal BPS Kabupaten Bogor</h1>
              <p class="fs-1 fs-sm-2" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">Penyedia Data Statistik Berkualitas Untuk Indonesia Maju </p>
              <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start mt-5" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"><a class="btn btn-primary me-1" href="#about" role="button">Mulai</a></div>
            </div>
          </div>
        </div>
      </section>
      @include('layout.about')
      @include('layout.aplikasi')
      @include('layout.contact')
      @include('layout.footer')
</main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('layout.js')
  </body>

</html>

{{--
Created By : MAGANG STIS BPS KAB BOGOR THN. 2024
CP : GILANG (089506608135)
--}}
