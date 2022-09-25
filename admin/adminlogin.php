<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Northampton Admin Panel</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
  <link rel = "icon" href = "images/footer.svg" type = "image/png">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              <?php 
                if (!isset($_SESSION['type']))
                {
                
              ?>
                
              </div>
              <p class="login-card-description">Northampton Adminpanel</p>
              <form action="login.php" method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                  </div>
                  <button type="submit" name="login" class="btn btn-success btn-block login-btn">Sign in</button>
                </form>
                
                
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <?php 
            }
            else
            {
              $success_login_id = $_SESSION['id'];
              $success_login_name_admin = $_SESSION['name'];
              $success_login_username_admin = $_SESSION['username'];
              $success_login_email_admin = $_SESSION['email'];
              $success_login_type_password_admin = $_SESSION['password'];
              $success_login_gender_admin = $_SESSION['gender'];
              $success_login_image_admin = $_SESSION['image'];
              $success_login_code_admin = $_SESSION['code'];
              $success_login_status_admin = $_SESSION['status'];
              $success_login_type_admin = $_SESSION['type'];
              
           ?>
<div class="card my-4">
        <div class="card-header">
          <p align="center"><img  class="zoom3" src="admin/images/users/<?php echo $success_login_image_admin; ?>" width="110"></p>
          <p align="center"><b>Welcome <?php echo $success_login_name_admin; ?></b></p>
        </div>
        <div class="card-header">
          
          <!-- Status -->
          <p align="center">
            <?php 
              if ($_SESSION['type'] =='1')
              {
               

             ?>
          <a href="admin/" class="btn btn-default btn-flat" target="_blank">Administration</a>
          <?php
           }
           else
            {

           ?>
           <a href="profil.php/" class="btn btn-default btn-flat">Profil</a>
           <?php } ?>
          <a href="logout.php" class="btn btn-default btn-flat">Sign out</a></p>
        </div>
      </div>
      <?php 
            }
          ?>
   
  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
