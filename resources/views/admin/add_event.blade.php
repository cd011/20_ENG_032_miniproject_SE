<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        
        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="left" style="padding-top: 50px">
                @if(session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">
                    x
                  </button>
                  {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_event')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label>Event Title</label>
                        <input type="text" style="color:black; width: 42em;" name="title" placeholder="Add event title.." required="">
                    </div>

                    <div style="padding: 15px">
                        <label>Category</label>
                        <select style="color:black;" required="">
                            <option>--Select--</option>
                            <option value="Faculty">Faculty</option>
                            <option value="University">University</option>
                            <option value="Local">Local</option>
                            <option value="International">International</option>
                        </select>
                    </div>

                    <div style="padding: 15px">
                        <label>Body</label>
                        <!--input type="text" style="color:black;" name="body" placeholder="Add news body.."-->
                        <textarea name="body" style="color:black; width: 42em; height: 20em" placeholder="Add event body.." required="">
                        </textarea>
                    </div>

                    <div style="padding: 15px">
                        <label>Image</label>
                        <input type="file" name="image" required="">
                    </div>

                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
