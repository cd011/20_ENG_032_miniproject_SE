<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 24px;">Appointments</h1>
      <div class="row mt-5">

        @foreach($profile_data as $data)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a>{{$data->status}}</a>
                <a onclick="return confirm('Are you sure you want to cancel this appointment?')" href="{{url('cancel_appointment',$data->id)}}">Cancel</a>
              </div>
              <a>
                <img src="assets/img/appointment_user.png" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="{{url('view_counselling')}}">{{$data->doctor}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <span>{{$data->date}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 24px;">Articles</h1>
      <div class="row mt-5">

        @foreach($profile_news as $news)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a>{{$news->status}}</a>
              </div>
              <a>
                <img src="assets/img/news_bg_1.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a>{{$news->topic}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <span>{{$news->date}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 24px;">Events</h1>
      <div class="row mt-5">

        @foreach($profile_events as $news)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a>{{$news->status}}</a>
              </div>
              <a>
                <img src="assets/img/events_bg_1.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a>{{$news->topic}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <span>{{$news->date}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 24px;">Applications</h1>
      <div class="row mt-5">

        @foreach($profile_applications as $applicationsData)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a>{{$applicationsData->status}}</a>
                <a onclick="return confirm('Are you sure you want to delete this application?')" href="{{url('cancel_application',$data->id)}}">Cancel</a>
              </div>
              <a>
                <img src="assets/img/aid_bg_1.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5>{{$applicationsData->year}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <span>{{$applicationsData->date}}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div> <!-- .page-section -->