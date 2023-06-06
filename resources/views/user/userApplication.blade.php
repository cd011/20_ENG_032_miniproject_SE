<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Application</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
        <label>Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <label>Telephone number</label>
            <input type="text" name="phone" class="form-control" placeholder="Telephone">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <label>DOB</label>
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <label>Select Year</label>
            <select name="year" id="departement" class="custom-select">
              <option>--Select Year--</option>
              <option value="first">First Year</option>
              <option value="second">Second Year</option>
              <option value="third">Third Year</option>
              <option value="fourth">Fourth Year</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label>Permanent Address</label>
            <input type="text" name="address" class="form-control" placeholder="Permanent Address">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <label>Any other important details.</label>
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter details..."></textarea>
          </div>
        </div>

        <button type="submit" style="background-color:grey; color:white;" class="btn btn-primary mt-3 wow zoomIn">Submit</button>
      </form>
    </div>
  </div> <!-- .page-section -->