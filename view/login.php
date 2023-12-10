<?php
include "header.php" ?>
<div class="row mt-5">
  <div class="col col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12">
    <form method="post" action="../controller/usercontroller.php">
      <div class="card ">
        <div class="card-header">
          <p class="h3 text-center">Log in</p>
        </div>
        <div class="card-body text-left">
          <div class="form-group">
            <label>Username :</label>
            <input type="text" class="form-control" name="username" placeholder="Enter your name">
          </div>
          <br>
          <div class="form-group">
            <label for="exampleInputPassword1">Password :</label>
            <input type="password" class="form-control" name="password"
              placeholder="Enter your Password">
          </div>
          <br>
          <p class="text-center">New user?Please
            <a href="register.php" class="card-link text-right register-btn">Register</a>
          </p>
        </div>
        <div class="card-footer text-center">
          <button type="submit" name="login" class="btn btn-success">Log in</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
include "footer.php" ?>