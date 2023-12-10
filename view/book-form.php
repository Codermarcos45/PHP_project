<?php
include "header.php" ?>
<div class="row mt-5">
  <div class="col col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12">
    <form method="post" action="../controller/usercontroller.php">
      <div class="card">
        <div class="card-header">
          <p class="h3">Add New Book</p>
        </div>
        <div class="card-body text-left">
          <div class="form-group">
            <label>Title : </label>
            <input type="text" class="form-control" name="title" placeholder="Enter title of the book">
          </div>
          <br>
          <div class="form-group">
            <label>Author : </label>
            <input type="text" class="form-control" name="author"
              placeholder="Enter author of the book">
          </div>
          <br>
          <div class="form-group">
            <label>Front Cover : </label>
            <input type="text" class="form-control" name="imageLink"
              placeholder="Paste the link of the front page of the book">
          </div>
          <br>
          <div class="form-group">
            <label>Description : </label>
            <input type="text" class="form-control" name="des"
              placeholder="Enter a short description">
          </div>
          <br>
          
        <div class="card-footer text-center">
          <button type="submit" name="book" class="btn btn-success">Log in</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
include "footer.php" ?>