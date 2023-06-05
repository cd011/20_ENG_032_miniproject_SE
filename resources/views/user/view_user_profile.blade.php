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

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/profile_bg_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Welcome to your profile</span>
        <h1 class="display-4">{{Auth::user()->name}}</h1>
        <!--a href="#" class="btn btn-primary">Let's Consult</a-->
      </div>
    </div>
  </div>


  <div class="bg-light">
    <!--div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div--> <!-- .page-section -->

  @include('user.user_profile_data')

  @include('user.footer')

  @include('user.script')
  
</body>
</html>