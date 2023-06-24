  <?php
    include_once 'sidebar.php';
    include '../processes/_addService.php';
    ?>

  <div class="container mb-3">
      <form method="POST" class="col-6 m-auto needs-validation" enctype="multipart/form-data" novalidate>
          <h5 class="modal-title" id="exampleModalLabel">Add service</h5>
          <div class="input-group mb-2">
              <label class="input-group-text" for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" required>
          </div>
          <div class="input-group mb-2">
              <label class="input-group-text" for="imgs">Added Images</label>
              <input type="file" class="form-control" id="imgs" name="imgs[]" multiple required>
          </div>
          <div class="mb-2">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price" required>
          </div>
          <div class="mb-2">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" required>
          </div>
          <div class="mb-2">
              <label for="details" class="form-label">Details</label>
              <input type="text" class="form-control" id="details" placeholder="" name="details" required>
          </div>
          <div class="mb-2">
              <label for="inputCity" class="form-label">Number OF Beds</label>
              <input type="number" class="form-control" name="number_of_beds" min="1" value="1" required>
          </div>
          <div class="mb-2">
              <label for="inputZip" class="form-label">Number Of Bathrooms</label>
              <input type="number" class="form-control" name="number_of_bathrooms" min="1" value="1" required>
          </div>
          <div class="mb-2">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" name="city" required>
          </div>
          <div class="mb-2">
              <select class="form-select" id="categoryId" aria-label="Default select example" name="categories" onchange="tabTitle()" required>
                  <option selected disabled value="">Select category</option>
                  <?php $categories = mysqli_query($conn, "SELECT * FROM categories ORDER BY id ASC");
                    foreach ($categories as $category) { ?>
                      <option value="<?php echo $category['id'] ?>"><?php echo $category['cat_name'] ?></option>
                  <?php } ?>
              </select>
              <input type="hidden" id="cat_name" name="cat_name">
          </div>
          <hr>
          <!-- -============================{Contact Info}===================== -->
          <!-- <h5 class="modal-title" id="exampleModalLabel">Contact Info</h5>
          <?php $rows = mysqli_query($conn, "SELECT * FROM register WHERE email ='" . $_SESSION['user']['email'] . "' LIMIT 1");
            $result = mysqli_fetch_assoc($rows);
            ?>
          <div class="b-2">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" name="fname" value="<?php echo $result['fname'] ?>" required>
          </div>
          <div class="b-2">
              <label for="secondName" class="form-label">Second Name</label>
              <input type="text" class="form-control" id="secondName" name="lname" value="<?php echo $result['lname'] ?>" required>
          </div>
          <div class="mb-2">
              <label for="email" class="form-label">email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $result['email'] ?>" readonly>
          </div>
          <div class="mb-2">
              <label for="phoneNumber" class="form-label">Phone Number</label>
              <input type="text" class="form-control" id="phoneNumber" placeholder="" name="phone_number" value="<?php echo $result['phone_number'] ?>" required>
          </div> -->
          <div class="col-12">
              <button type="submit" class="btn btn-primary form-control mb-3" name="submit">Save</button>
          </div>
      </form>
  </div>


  <script>
      // =================>>> To get selection value  ==>>
      function tabTitle() {
          var categoryId = document.getElementById("categoryId");
          var selectedText = categoryId.options[categoryId.selectedIndex].text;
          document.getElementById("cat_name").value = selectedText;
      }
  </script>
  <?php include_once 'footer.php' ?>