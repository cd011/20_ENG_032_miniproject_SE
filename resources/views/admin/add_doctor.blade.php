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
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        
        @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="left" style="padding-top: 100px">
                @if(session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">
                    x
                  </button>
                  {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                  @csrf

                    <div style="padding: 15px">
                        <label>Advisor Name</label>
                        <input type="text" style="color:black;" name="name" placeholder="Doctor name" required="">
                    </div>
                    <div style="padding: 15px">
                        <label>Phone number</label>
                        <input type="number" style="color:black;" name="phone" placeholder="+94xxxxxxxxx" required="">
                    </div>
                    <div style="padding: 15px">
                        <label>Email</label>
                        <input type="text" style="color:black;" name="email" placeholder="example@email.com" required="">
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
