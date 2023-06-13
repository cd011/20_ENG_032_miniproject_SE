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
                <form action="{{url('upload_news')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px">
                        <label>News Title</label>
                        <input type="text" style="color:black; width: 42em;" name="title" placeholder="Add news title.." required="">
                    </div>

                    <div style="padding: 15px">
                        <label>Category</label>
                        <select name="category" style="color:black;" required="">
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
                        <textarea name="body" style="color:black; width: 42em; height: 20em" placeholder="Add news body.." required="">
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
