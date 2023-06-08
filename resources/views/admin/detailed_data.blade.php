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
    <base href="/public">

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
            <div class="container" align="left" style="padding-top: 50px">
            <a class="btn btn-success" href="{{url('all_data_view')}}">Go Back</a>
            <table>
                    <tr style="background-color:grey">
                        <th style="padding: 20px">Detailed View</th>
                    </tr>
                    <tr>
                        <th style="padding: 20px">{{$data}}</th>
                    </tr>
                </table>
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
