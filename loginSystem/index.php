<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Project</title>
  </head>
  <body>
    <div class="container">
      <div class="row d-flex justify-content-center pt-5">
        <div class="col col-6 bg-dark text-light mt-2 p-5 mb-5">
          <h1 class="text-center text-success">LOG IN</h1>
          <form method="POST">
            <div class="mb-3">
            <div class="mb-3">
              <label for="accname" class="form-label text-success">Account name</label>
              <input type="text" value="" name="accname" class="form-control" id="accname" autocomplete="off">
                <strong class="text-danger"></strong>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-success">Password</label>
              <input type="password"  name="password" class="form-control" id="password" autocomplete="off">
                <strong class="text-danger"> </strong>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-success ">log in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<div class="container">
  <div class="row d-flex justify-content-center pt-5">
    <div class="col col-6 bg-dark text-light mt-2 p-5 mb-5">
      <h1 class="text-center text-success">SIGN UP</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="email" class="form-label text-success">Email address</label>
          <input type="email" value="" name="email" class="form-control" id="email" autocomplete="off">
            <strong class="text-danger"></strong>
        </div>
        <div class="mb-3">
          <label for="accname" class="form-label text-success">Account name</label>
          <input type="text" value="" name="accname" class="form-control" id="accname" autocomplete="off">
            <strong class="text-danger"> </strong>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label text-success">Password</label>
          <input type="password"  name="password" class="form-control" id="password" autocomplete="off">
            <strong class="text-danger"></strong>
        </div>
        <div class="mb-3">
          <label for="repassword" class="form-label text-success">Repeat password</label>
          <input type="password"  name="repassword" class="form-control" id="repassword" autocomplete="off">
            <strong class="text-danger"></strong>
        </div>
        <div class="text-center">
          <button type="submit" name="submit" class="btn btn-success ">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>