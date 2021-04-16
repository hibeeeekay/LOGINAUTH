<?php
   require_once 'controllers/authController.php';

   //Verify the user using token
   if(isset($_GET['token'])){
      $token = $_GET['token'];
      verifyUser($token);
   }

    //Verify the user using token
   if(isset($_GET['password-token'])){
      $passwordToken = $_GET['password-token'];
      resetPassword($passwordToken);
   }

   if (!isset($_SESSION['id'])) {
      header('location: login.php');
      exit();
   }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FORM AUTHENTICATION</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
  <link rel="stylesheet" href="registration.css">
</head>
<body>

  <div class="container2">
    <div class="row">
       <div class="col-md-4 offset-md-4 form-div">

          <?php if(isset($_SESSION['message'])): ?>
          <div class="alert <?php echo $_SESSION['alert-class']; ?>">
               <?php
                  echo $_SESSION['message'];
                  unset($_SESSION['message']);
                  unset($_SESSION['alert-class']);
              ?>
          </div>
          <?php endif; ?>

          <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>

          <a href="index.php?logout=1" class="logout">logout</a>
          
          <!--If not verified-->
          <?php if(!$_SESSION['verified']): ?>
             <div class="alert alert-warning">
                 You need to verify your account.
                 Sign in to your email account and click on the 
                 verification link we just emailed you at
              <strong><?php echo $_SESSION['email']; ?></strong>
             </div>
          <?php endif; ?>

          <!--If verified-->
          <?php if(!$_SESSION['verified']): ?>
           <button class="btn btn-block btn-lg btn-primary">I am verified</button>
          <?php endif; ?>
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


 <footer><b>CREATED BY IBUKUN SAMUEL<b></footer>
</body>
</html>