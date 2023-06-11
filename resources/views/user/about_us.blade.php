<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    @include('user.navbar')
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav>
        <h1 class="display-4">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 style="font-size: 24px;">Group 09 <br></h1>
            <br>
            <p class="text-grey mb-4">20/ENG/032 - D.M.C.J. Dissanayake</p>
            <p class="text-grey mb-4">20/ENG/051 - M.F.F. Hamna</p>
            <p class="text-grey mb-4">20/ENG/055 - H.M.D.N. Herath </p>
            <p class="text-grey mb-4">20/ENG/101 - M.T.V. Perera</p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/uni_image_1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.footer')

  @include('user.script')
  
</body>
</html>