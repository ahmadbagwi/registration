
  <body>
  <?= \Config\Services::validation()->listErrors(); ?>
  <div class = "container">
    <div class = "row">
        <div class = "col-lg-6 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Login Form</div>
                <div class="panel-body">
                    <form action = "\Registration\dologin" id="login" method = "POST">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" /><br/>
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" /><br/>
                        <input type="submit" class = "btn btn-primary" name="submit" value="Login" />
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  </body>

  <script>
  // just for the demos, avoids form submit
 /* jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });*/
  $( "#login" ).validate({
    rules: {
      email: "required",
      password: "required",
    },
    messages: {
      email: {
        required: "Please fill the email address",
        email: "Your email address must be in the format of name@domain.com"
      },
      password: "Please input your password",
    }
  });
  </script>
</html>