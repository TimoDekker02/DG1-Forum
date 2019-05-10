<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<link rel="stylesheet" href="forum.css">

<ul>
  <li><a class="active" href="Forum.php">Homepage</a></li>
  <li><a href="#news">Games</a></li>
  <li><a href="#news">Programming</a></li>
  <li><a href="Contact.php">Contact</a></li>
  <li><a href="Registration.php">Account</a></li>
</ul>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <center>
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username">
  </div>

  <div class="textbox">
  <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password">
  </div>

  <input type="button" class="btn" value="Sign in"> <href="forum.php">
</center>
</div>
  </body>
</html>


<html lang="en">
<br>
<br>
<br>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <title>Registration Form</title>

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="col" id="notification">

                </div>
                <div class="regForm">
                    <h1>Register Here</h1>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="fullName" placeholder="Enter Full Name" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div>

                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" class="form-control" name="age" placeholder="Enter Age" max="100" required>
                        </div>

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="date" class="form-control" name="dob" required>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="Male" required>
                                  <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="Female" required>
                                  <label class="form-check-label">Female</label>
                                </div>
                              </div>
                            </div>
                        </fieldset>

                      

                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Languages Known</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="English" checked>
                                  <label class="form-check-label">English</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="French">
                                  <label class="form-check-label">French</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="German">
                                  <label class="form-check-label">German</label>
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="German">
                                  <label class="form-check-label">Dutch</label>
                                </div>
                              </div>
                            </div>
                        </fieldset>

                        <div class="form-group">
                            <label>Verification</label>
                            <textarea class="form-control" rows="3" name="bio" placeholder="What is 4+5?" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" maxlength="15" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Re-enter Password" maxlength="15" required>
                        </div>
                        <button type="submit" href="Forum.php" class="btn btn-primary" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>










  </body>
</html>
