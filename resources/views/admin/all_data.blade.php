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
            <div class="container" align="left" style="padding-top: 50px">
            <table>
                <caption style="caption-side:top">News Articles</caption>
                    <tr style="background-color:black">
                        <th style="padding: 20px">Title</th>
                        <th style="padding: 20px">Category</th>
                        <th style="padding: 20px">Details</th>
                        <th style="padding: 20px width:500px">Image</th>
                        <th style="padding: 20px">Remove</th>
                    </tr>
                    @foreach($news as $data1)
                    <tr style="background-color:blue">
                        <th style="padding: 20px">{{$data1->title}}</th>
                        <th style="padding: 20px">{{$data1->category}}</th>
                        <th style="padding: 20px width:500px">{{$data1->body}}</th>
                        <th style="padding: 20px">{{$data1->image}}</th>
                        <th style="padding: 20px">
                        <a class="btn btn-danger" href="{{url('deleteNews',$data1->id)}}">Remove</a>
                        </th>
                    </tr>
                    @endforeach
                </table>

                <table>
                <caption style="caption-side:top">Events</caption>
                    <tr style="background-color:black">
                        <th style="padding: 20px">Title</th>
                        <th style="padding: 20px">Category</th>
                        <th style="padding: 20px">Details</th>
                        <th style="padding: 20px width:500px">Image</th>
                        <th style="padding: 20px">Remove</th>
                    </tr>
                    @foreach($events as $data2)
                    <tr style="background-color:blue">
                        <th style="padding: 20px">{{$data2->title}}</th>
                        <th style="padding: 20px">{{$data2->category}}</th>
                        <th style="padding: 20px width:500px">{{$data2->body}}</th>
                        <th style="padding: 20px">{{$data2->image}}</th>
                        <th style="padding: 20px">
                        <a class="btn btn-danger" href="{{url('deleteEvents',$data2->id)}}">Remove</a>
                        </th>
                    </tr>
                    @endforeach
                </table>

                <table>
                <caption style="caption-side:top">List of Advisors</caption>
                    <tr style="background-color:black">
                        <th style="padding: 20px">Name</th>
                        <th style="padding: 20px">Phone</th>
                        <th style="padding: 20px">Email</th>
                        <th style="padding: 20px width:500px">Image</th>
                        <th style="padding: 20px">Remove</th>
                    </tr>
                    @foreach($doctors as $data3)
                    <tr style="background-color:blue">
                        <th style="padding: 20px">{{$data3->name}}</th>
                        <th style="padding: 20px">{{$data3->phone}}</th>
                        <th style="padding: 20px">{{$data3->email}}</th>
                        <th style="padding: 20px">{{$data3->image}}</th>
                        <th style="padding: 20px">
                        <a class="btn btn-danger" href="{{url('deleteDoc',$data3->id)}}">Remove</a>
                        </th>
                    </tr>
                    @endforeach
                </table>

                <table>
                <caption style="caption-side:top">Applications</caption>
                    <tr style="background-color:black">
                        <th style="padding: 20px">Title</th>
                        <th style="padding: 20px">Category</th>
                        <th style="padding: 20px">Details</th>
                        <th style="padding: 20px width:500px">Image</th>
                        <th style="padding: 20px">Remove</th>
                    </tr>
                    @foreach($appli as $data4)
                    <tr style="background-color:blue">
                        <th style="padding: 20px">{{$data4->title}}</th>
                        <th style="padding: 20px">{{$data4->category}}</th>
                        <th style="padding: 20px width:500px">{{$data4->body}}</th>
                        <th style="padding: 20px">{{$data4->image}}</th>
                        <th style="padding: 20px">
                        <a class="btn btn-danger" href="{{url('deleteAppli',$data4->id)}}">Remove</a>
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
