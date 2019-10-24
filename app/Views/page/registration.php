<!DOCTYPE html>
<html>
  <head>
    <title><?= esc($title); ?></title>
    <meta name="viewport" content="initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  </head>
  <body>
  <?= \Config\Services::validation()->listErrors(); ?>
  <div class = "container">
    <div class = "row">
        <div class = "col-lg-6 col-sm-12">
            <h2><?= esc($title); ?></h2>
            <div class="form-group">
                <form action="/Registration/create">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName" /><br/>
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" required /><br />
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required /><br />
                    <label for="toc">Term and Condition</label><br/>
                    <input type="checkbox" name="toc" value="accept" required> I accept Term and Condition<br>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required /><br />
                    <label for="repeat_password">Repeat Password</label>
                    <input type="password" class="form-control" name="repeat_password" required /><br />
                    <label for="addess">Address</label>
                    <textarea name="address" class="form-control" required></textarea><br />
                    <label for="dob">Date of birth</label>
                    <input type="date" class="form-control" name="dob" required /><br />
                    <label for="type">Membership Type</label>
                    <input type="text" class="form-control" name="type" required /><br />
                    <label for="ccNumber">Credit Card Number</label>
                    <input type="text" class="form-control" name="ccNumber" required /><br />
                    <label for="ccType">Credit Card Type</label>
                    <input type="text" class="form-control" name="ccType" required /><br />
                    <label for="ccDate">Credit Card Date</label>
                    <input type="text" class="form-control" name="ccDate" required /><br />
                    <input type="submit" class = "btn btn-danger" name="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>
  </div>
  </body>
</html>