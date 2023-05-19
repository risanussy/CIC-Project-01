<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title>
        <?= $title; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light ">
     <div class="container">   
          <a class="navbar-brand" href="#">
          <img src="<?= base_url('assets/img/log/bc.jpg'); ?>" width="50" height="50" class="d-inline-block align-top" alt="">
          B-Community
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
     
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bantuan</a>
            </li>
            </ul>
            <style>
            @media (min-width: 992px) {
                .nav-link {
                text-transform: uppercase;
                margin-right: 30px;
                }

                .nav-link:hover::after {
                content: "";
                display: block;
                border-bottom: 3px solid green;
                width: 50%;
                margin: auto;
                padding-bottom: 5px;
                margin-bottom: -8px;
                }
            }
            </style>
            <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-2 tombol" type="submit">Login</button>
            </form>
         </div>

</nav>
<div class="container">
  <div class="row">
    <div class="col-12" style="display: inline-block;">
      <label for="username" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" id="username" placeholder="Username" required>
        <div class="invalid-feedback">
          Your username is required.
        </div>
      </div>
    </div>

    <div class="col-12" style="display: inline-block;">
      <label for="username" class="form-label">Username</label>
      <div class="input-group has-validation">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" id="username" placeholder="Username" required>
        <div class="invalid-feedback">
          Your username is required.
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="col-12">
      <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
      <input type="email" class="form-control" id="email" placeholder="you@example.com">
      <div class="invalid-feedback">
        Please enter a valid email address for shipping updates.
      </div>
    </div>

    <div class="col-12">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" required>
      <div class="invalid-feedback">
        Please enter a valid password.
      </div>
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>

    <div class="col-12">
      <button class="btn btn-primary" type="submit">Register</button>
    </div>
  </div>
</form>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
