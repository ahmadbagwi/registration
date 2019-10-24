
  <body>
  <?= \Config\Services::validation()->listErrors(); ?>
  <div class = "container">
    <div class = "row">
        <div class = "col-lg-12 col-sm-12">
            <div class="jumbotron">
            <h2><?= esc($title); ?></h2>
            <p class="lead">Your Registration is Complete</p>
            <hr class="my-4">
            <p>You can login with email and password</p>
            <a class="btn btn-primary btn-lg" href=<?php echo base_url()."\Registration\login";?> role="button">Login</a>
            </div>
        </div>
    </div>
  </div>
  </body>
</html>