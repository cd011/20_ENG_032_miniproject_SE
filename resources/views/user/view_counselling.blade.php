<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Counselling</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
  @include('user.navbar')
  </header>
    @if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">
        x
      </button>
      {{session()->get('message')}}
    </div>
    @endif
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/counselling_bg_1.jpeg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Counselling</li>
          </ol>
        </nav>
        <h1 class="display-4">Student counselling</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
    <h1 class="text-center wow fadeInUp" style="font-size: 24px;">Advisors</h1>
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
          @foreach($doctors as $doctor)
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="doctorimage/{{$doctor->image}}" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0">{{$doctor->name}}</p>
                  <span class="text-sm text-grey">{{$doctor->email}}</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  @include('user.appointment')

  @include('user.footer')

  @include('user.script')
  
</body>
</html>