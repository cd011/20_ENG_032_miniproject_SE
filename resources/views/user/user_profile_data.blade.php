<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Appointments</h1>
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
                <img src="" alt="">
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
