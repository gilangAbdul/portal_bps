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
              <p class="fs-1" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">Penyedia Data Statistik Berkualitas Untuk Indonesia Maju </p>
              <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start mt-5" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"><a class="btn btn-primary me-1" href="#!" role="button">Mulai</a></div>
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



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="vendors/gsap/customEase.js"></script>
    <script src="vendors/gsap/scrollToPlugin.js"></script>
    <!--script(src=`${CWD}vendors/gsap/drawSVGPlugin.js`)-->
    <script src="assets/js/theme.js"></script>
  </body>

</html>
