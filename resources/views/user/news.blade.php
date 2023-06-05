<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">

        @foreach($news as $newss)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a>{{$newss->category}}</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="newsimage/{{$newss->image}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">{{$newss->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <span>{{$newss->category}}</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        @endforeach


        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('view_news')}}" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->
