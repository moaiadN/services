  <?php
    include '../processes/_addService.php';
    include_once 'sidebar.php' ?>

  <div class="container mb-3">
      <form method="POST" class="col-6 m-auto" enctype="multipart/form-data">
          <h5 class="modal-title" id="exampleModalLabel">Add service</h5>
          <div class="input-group mb-2">
              <label class="input-group-text" for="image">Select Image</label>
              <input type="file" class="form-control" id="image" name="image">
          </div>
          <div class="mb-2">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price">
          </div>
          <div class="mb-2">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="mb-2">
              <label for="details" class="form-label">Details</label>
              <input type="text" class="form-control" id="details" placeholder="" name="details">
          </div>
          <div class="mb-2">
              <label for="inputCity" class="form-label">Number OF Beds</label>
              <input type="number" class="form-control" name="number_of_beds" min="1" value="1">
          </div>
          <div class="mb-2">
              <label for="inputZip" class="form-label">Number Of Bathrooms</label>
              <input type="number" class="form-control" name="number_of_bathrooms" min="1" value="1">
          </div>
          <div class="mb-2">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" name="city">
          </div>
          <div class="mb-2">
              <select class="form-select" aria-label="Default select example" name="categories">
                  <option selected>Select category</option>
                  <option value="Student Apartments" name="Student Apartments"> Student Apartments </option>
                  <option value="Study Places" name="Study Places"> Study Places </option>
                  <option value="Student option3" name="Student option3"> Student option3 </option>
              </select>
          </div>
          <hr>
          <h5 class="modal-title" id="exampleModalLabel">Contact Info</h5>

          <div class="b-2">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" name="fname">
          </div>
          <div class="b-2">
              <label for="secondName" class="form-label">Second Name</label>
              <input type="text" class="form-control" id="secondName" name="lname">
          </div>
          <div class="mb-2">
              <label for="email" class="form-label">email</label>
              <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-2">
              <label for="phoneNumber" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phoneNumber" placeholder="" name="phone_number">
          </div>

          <button type="submit" class="btn btn-primary form-control mb-3" name="submit">Save</button>
      </form>
  </div>
  <?php include_once 'footer.php' ?>