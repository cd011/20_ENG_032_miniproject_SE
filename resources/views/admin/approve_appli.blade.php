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
            <div class="container" align="Center" style="padding-top: 100px">
                <table>
                    <tr style="background-color:black">
                        <th style="padding: 20px">User name</th>
                        <th style="padding: 20px">Phone</th>
                        <th style="padding: 20px">User email</th>
                        <th style="padding: 20px">DOB</th>
                        <th style="padding: 20px">Category</th>
                        <th style="padding: 20px">Address</th>
                        <th style="padding: 20px width:500px">Details</th>
                        <th style="padding: 20px">Status</th>
                        <th style="padding: 20px">Approve</th>
                        <th style="padding: 20px">Reject</th>
                    </tr>
                    @foreach($data as $news)
                    <tr style="background-color:blue">
                        <th style="padding: 20px">{{$news->name}}</th>
                        <th style="padding: 20px">{{$news->phone}}</th>
                        <th style="padding: 20px">{{$news->email}}</th>
                        <th style="padding: 20px">{{$news->date}}</th>
                        <th style="padding: 20px">{{$news->year}}</th>
                        <th style="padding: 20px">{{$news->address}}</th>
                        <th style="padding: 20px width:500px">{{$news->message}}</th>
                        <th style="padding: 20px">{{$news->status}}</th>
                        <th style="padding: 20px">
                        <a class="btn btn-success" href="{{url('approve_user_appli',$news->id)}}">Approve</a>
                        </th>
                        <th style="padding: 20px">
                        <a class="btn btn-danger" href="{{url('reject_user_appli',$news->id)}}">Reject</a>
                        </th>
                    </tr>
                    @endforeach
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
