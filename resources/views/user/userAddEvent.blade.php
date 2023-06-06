<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: 24px;">Organize an event</h1>

      <form class="main-form" action="{{url('userAddEvent')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <label>Date of applying</label>
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <label>Select category</label>
            <select name="category" id="departement" class="custom-select">
              <option>--Select Category--</option>
              <option value="faculty">Faculty</option>
              <option value="university">University</option>
              <option value="local">Local</option>
              <option value="international">International</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label>Topic</label>
            <input type="text" name="topic" class="form-control" placeholder="Topic">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label>Event details</label>
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter full details about the event."></textarea>
          </div>
        </div>

        <button type="submit" style="background-color:grey; color:white;" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
      </form>
    </div>
  </div> <!-- .page-section -->