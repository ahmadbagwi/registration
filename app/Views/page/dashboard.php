
  <body>
  <?= \Config\Services::validation()->listErrors(); ?>
  <div class = "container">
  <?php print_r($logged_in); ?>
    <div class = "row">
        <div class = "col-lg-12 col-sm-12">
            <div class="jumbotron">
            <h2><?= esc($title); ?></h2>
            <p class="lead">Welcome to Dashboard Page</p>
            <hr class="my-4">
            <p>You are logged in!</p>
            <a class="btn btn-primary btn-lg" href=<?php echo base_url()."\Registration\login";?> role="button">Logout</a>
            </div>
        </div>
    </div>
  </div>
  </body>
</html>