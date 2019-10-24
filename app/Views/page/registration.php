<!DOCTYPE html>
<html>
  <head>
    <title><?= esc($title); ?></title>
    <meta name="viewport" content="initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  </head>
  <body>
  <?= \Config\Services::validation()->listErrors(); ?>
  <div class = "container">
    <div class = "row">
        <div class = "col-lg-6 col-sm-12">
            <h2><?= esc($title); ?></h2>
            <div class="form-group">
                <form id="registration" action="/Registration/create">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName" /><br/>
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" /><br />
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" /><br />
                    <label for="toc">Term and Condition</label><br/>
                    <input type="checkbox" name="toc" value="accept" required> I accept Term and Condition<br>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required /><br />
                    <label for="repeat_password">Repeat Password</label>
                    <input type="password" class="form-control" id="repeat_password" name="repeat_password" required /><br />
                    <label for="addess">Address</label>
                    <div class = "wrapper_address">
                      <textarea name="address[]" class="form-control"></textarea><br />
                      <button class="add_address">+</button>
                    </div>
                    <label for="dob">Date of birth</label>
                    <input type="date" class="form-control" name="dob" /><br />
                    <label for="type">Membership Type</label>
                    <input type="text" class="form-control" id="type" name="type" /><br />
                    <label for="ccNumber">Credit Card Number</label>
                    <input type="text" class="form-control" name="ccNumber" placeholder="5361-8428-6553-4298" /><br />
                    <label for="ccType">Credit Card Type</label>
                    <input type="text" class="form-control" id="ccType" name="ccType"/><br />
                    <label for="ccDate">Credit Card Date</label>
                    <input type="text" class="form-control" name="ccDate" placeholder="12/21"/><br />
                    <input type="submit" class = "btn btn-danger" name="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>
  </div>
  </body>
  <script>
    //$("#registration").validate();
  </script>

  <script>
  // just for the demos, avoids form submit
  jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });
  $( "#registration" ).validate({
    rules: {
      lastName: "required",
      password: "required",
      repeat_password: {
        equalTo: "#password"
      },
      email: {
        required: true,
        email: true
      },
      toc: "required",
      dob: "required",
      type: "required",
      ccNumber: {
        required: true,
        creditcard: true
      },
      ccType: "required",
      ccDate: "required",
    },
    messages: {
      lastName: "Please fill your last name",
      email: {
        required: "Please fill the email address",
        email: "Your email address must be in the format of name@domain.com"
      },
      toc: "Please accept the Term and Condition",
      dob: "Please fill valid date of birth",
      type: "Select your membership type",
      ccNumber: {
        required:  "Input credit card number spart by -",
        creditcard: "Please input valid credit card number",
      },
      ccType: "Input valid credit card type",
      ccDate: "Input valid credit card date",
    }
  });
  </script>
  <script>
    $(document).ready(function() {
      var max_fields      = 4; //maximum input boxes allowed
      var wrapper   		= $(".wrapper_address"); //Fields wrapper
      var add_button      = $(".add_address"); //Add button ID
      
      var x = 1; //initlal text box count
      $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
          x++; //text box increment
          $(wrapper).append('<div><textarea name="address[]" class="form-control"></textarea><a href="#" class="remove_address"><button class="add_address">-</button></a></div><br />'); //add input box
        }
      });
      
      $(wrapper).on("click",".remove_address", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
      })
    });
  </script>
  <script>
  $( function() {
    var membershipType = [
      "Silver",
      "Gold",
      "Platinum",
      "Black",
      "VIP",
      "VVIP"
    ];
    $( "#type" ).autocomplete({
      source: membershipType
    });

    var ccType = [
      "Visa",
      "Master Card"
    ];
    $( "#ccType" ).autocomplete({
      source: ccType
    });
  } );
  </script>
</html>