<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />

  <!-- Boostrap CSS -->
  <link href="Content/style.css" rel="stylesheet" type="text/css" />
  <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Bootstrap JS and Jquery -->
  <script src="Scripts/jquery-3.0.0.min.js"></script>
  <script src="Scripts/bootstrap.min.js"></script>

  <title>Private Journal - Welcome</title>

</head>

<body>
  <!-- Main for future background editing -->
  <main>
    <div class="container">
      <!-- Header to welcome page -->
      <div class="row">
        <div id="welcome-header" class="col-sm-12">
          <h1>Welcome to Private Journal</h1>
        </div>
      </div>
      <!-- Row for Login -->
      <div class="row">
        <div class="col-sm-3"></div>
        <div id="login" class="col-sm-6">
          <?php
          if (isset($message)) {
            echo "<p class='warning'>$message</p>";
            unset($message);
          }
          ?>
          <!-- Login Button attached to form for entering email and password -->
          <form action="/Journal/accounts/index.php">
            <div class="form-group">
              <label class="sr-only" for="email">Enter Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name="userEmail">
            </div>
            <div class="form-group">
              <label class="sr-only" for="pwd">Enter Password</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="userPassword">
            </div>
            <button id="btn-login" type="submit" class="btn btn-primary btn-block">Login</button>
            <input type="hidden" name="action" value="login">
          </form>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <div class="row">
        <div class="col-sm-3"></div>
        <!-- Create Account button is a collapse to show form -->
        <div id="create-account" class="col-sm-6">
          <button id="btn-create-account" type="button" class="btn btn-success" data-toggle="collapse" data-target="#signup">Create an Account</button>
          <div id="signup" class="collapse">
            <!-- Form for sign up information -->
            <form action="/Journal/accounts/index.php">
              <div class="form-group">
                <label for="fname">Enter Your First Name</label>
                <input type="text" class="form-control" id="fname" placeholder="First Name" name="userFirstName">
              </div>
              <div class="form-group">
                <label for="lname">Enter Your Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="userLastName">
              </div>
              <div class="form-group">
                <label for="email-signup">Enter Your Email Address</label>
                <input type="email" class="form-control" id="email-signup" placeholder="Email Address" name="userEmail">
              </div>
              <div class="form-group">
                <label for="pwd-signup">Create Password</label>
                <input type="password" class="form-control" id="pwd-signup" placeholder="Password" name="userPassword">
              </div>
              <!-- Sign up button -->
              <button id="btn-sign-up" type="submit" class="btn btn-primary btn-block">Sign Up</button>
              <input hidden="action" value="register">
            </form>
          </div>
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </main>

</body>

</html>