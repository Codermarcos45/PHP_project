<?php
include "header.php" ?>
<div class="container">
<div class="row mt-5">
    <div class="col col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12">
    
          <form action="../controller/usercontroller.php" method="post">
    <div class=" card shadow-sm">
    
  <div class="card-header">
   <p class="h3">Registration form </p>
  </div>
  <div class="card-body text-left">
  <div class="form-group">
    <label for="user_name">Username :</label>
    <input type="text" name="username" class="form-control" placeholder="Enter your name" required>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address :</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter your email id" required>
  </div>
  <br>
  <div class="form-group">
    <label for="phone_number">Phone Number :</label>
    <input type="Number" name="ph"  class="form-control"placeholder="Enter your Mobile number" required>
  </div>
  <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password :</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" required>
  </div>
  <br>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">You'll follow our rules and regulations</label>
  </div>
  <br>
  <p class="text-center">Already registered? <a href="login.php" class="register-btn">Login</a> Here...</p>
  <div class="card-footer text-center text-muted">
  <button type="Submit" name="register" class="btn btn-success">Register </button>
  </div>
</div>
</form>
</div>
</div>
</div>
<?php
include "footer.php" ?>
