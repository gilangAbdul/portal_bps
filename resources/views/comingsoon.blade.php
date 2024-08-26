<!DOCTYPE html>
<html lang="en-US" dir="ltr">
@include('layout.head')

<body>
    <main class="main" id="top">
        @include('layout.navbar')
        <section class="py-7 py-lg-10">
          <div class="bg-holder bg-size" style="background-image:url(assets/img/illustration/2.png);background-position:center ;background-size:contain;"></div>
          <div class="container">
            <div class="row align-items-center h-100 justify-content-center justify-content-lg-start">
              <div class="col-md-9 col-xxl-5 text-md-start text-center py-6 pt-8">
                <h1 class="fs-4 fs-md-5 fs-xxl-4">Coming Soon</h1>
                <p class="fs-1" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">We're working on something amazing for you! Stay tuned for the latest updates and be the first to know about our launch. Thank you for your patience.</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start mt-5" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"><a class="btn btn-primary me-1" href="#!" role="button">Back to Home</a></div>
              </div>
            </div>
          </div>
        </section>
  </main>
      <!-- ===============================================-->
      <!--    End of Main Content-->
      <!-- ===============================================-->
      @include('layout.footer')
      @include('layout.js')
    </body>
  
  </html>
  