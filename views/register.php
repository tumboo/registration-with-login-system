<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Registration Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?> assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
  </head>
  <body>

    <div class="col-lg-8 col-lg-offset-2">

        <h1>Registration Form</h1>
        <p>Fill the all above for the registration</p>

        <?php if (isset($_SESSION['success'])) { ?>

          <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>

        <?php } ?>

        <?php echo validation_errors('<div class="alert alert-danger">' , '</div>'); ?>

        <form action="#" method="POST">

      <div class="from-group">
        <label for="username"> Username</label>
        <input type="text" name="username" id="username" class="from-control">
      </div>
    
            </br>

       <div class="from-group">
        <label for="email"> Email</label>
        <input type="text" name="email" id="email" class="from-control">
      </div>

             </br>

       <div class="from-group">
        <label for="phone"> Phone</label>
        <input type="text" name="phone" id="phone" class="from-control">
      </div>

             </br>

       <div class="from-group">
        <label for="address"> Address</label>
        <input type="text" name="address" id="address" class="from-control">
      </div>

           </br>

       <div class="from-group">
        <label for="gender"> Gender</label>
        <select class="from-control" id="gender" name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female </option> 
        </select>
      </div>

         </br>

       <div class="from-group">
        <label for="password"> Password</label>
        <input type="password" name="password" id="password" class="from-control">
      </div>

           </br>

       <div class="from-group">
        <label for="password"> Confirm Password</label>
        <input type="password" name="password2" id="password" class="from-control">
      </div>

      <dir>
          <button class="btn btn-primary" name="register"> Register</button>
      </dir>

</form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>