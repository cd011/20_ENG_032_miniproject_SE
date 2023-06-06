<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp" style="font-size: 24px;">Student Counselling</h1>
      
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($doctors as $doctor)
        <div class="item">
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