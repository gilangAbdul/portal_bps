<!DOCTYPE html>
<html lang="en-US" dir="ltr">
@include('layout.head')

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-md navbar-light py-3 fixed-top" data-navbar-on-scroll="light">
            <div class="container"><a class="navbar-brand" href="/"><img src="{{url('assets/img/gallery/logobpsbogor_dark.png')}}" height="40" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-center">
                  <li class="nav-item"><a class="nav-link px-3" href="../#home">Beranda</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="../#about">Tentang Kami</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="../#aplikasi">Aplikasi Sistem</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="#cta">Hubungi Kami</a></li>
                  <button class="btn btn-sm btn-primary"><a class="text-light text-decoration-none" href="#aplikasi">Mulai Akses</a></button>
                </ul>
              </div>
            </div>
        </nav>
      <section class="py-7 py-lg-10" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/illustration/2.png);background-position:left top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="bg-holder py-95" style="background-image:url(assets/img/illustration/bg.png);background-position:right top;background-size:contain;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <div class="row align-items-center h-100 justify-content-center justify-content-lg-start">
            <div class="col-md-9 col-xxl-5 text-md-start text-center py-6 pt-8">
              <h1 class="fs-4 fs-md-5 fs-xxl-4" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll">Data Strategis</h1>
              <p class="fs-1 fs-sm-2" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">BPS Kabupaten Bogor</p>
              <div class="row" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">
                  <a class="btn my-2 btn-primary" style="width: 75%" href="https://bogorkab.bps.go.id/id/infographic" target="_blanks" role="button">Infografis</a>
                  <a class="btn my-2 btn-primary" style="width: 75%" href="https://bogorkab.bps.go.id/id/publication" target="_blanks" role="button">Publikasi</a>
                  <a class="btn my-2 btn-primary" style="width: 75%" href="https://bogorkab.bps.go.id/id/query-builder" target="_blanks" role="button">Tabel Dinamis</a>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('layout.js')
  </body>

</html>
