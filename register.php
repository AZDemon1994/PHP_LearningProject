<?php include "includes/header.php"; ?>

<div class="container">
  <div class="card mx-auto" id="register-card">
    <div class="card-header">
      <div class="card-title">
        <h4>User Register</h4>
      </div>
    </div>
    <div class="card-body">
      <form>
        <div class="form-group mb-3">
          <input type="text" placeholder="Phone Number" class="form-control">
        </div>
        <div class="form-group mb-3">
          <input type="password" placeholder="Password" class="form-control">
        </div>
        <div class="form-group mb-3">
          <input type="password" placeholder="Confirm Password" class="form-control">
        </div>
        <!-- <div class="form-group mb-3">
          <select class="form-control">
            <option selected>Chose Account Type</option>
            <option>Bookie</option>
            <option>Agent</option>
            <option>User</option>
          </select>
        </div> -->
        <button class="btn btn-success" type="button" name="button">Register</button>
      </form>
    </div>
  </div>
</div>


<?php include "includes/footer.php"; ?>
