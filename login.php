<?php 
  require_once 'controllers/authController.php';

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form registration</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 
  <link rel="stylesheet" href="registration.css">
</head>
<body>
  
    <div class="container ">
        <div class="row">
           <div class="col-md-4 offset_md_4 form-div login">
             <form action="signup.php" method="post">
               <h3 class=" text-center">Login</h3>
  
                <!--If there are errors at all-->
               <?php if(count($errors) > 0): ?>
               <div class="alert alert-danger">
                  <?php foreach($errors as $error): ?>
                  <li><?php echo $error; ?></li>
                  <?php endforeach; ?>
                </div>
               <?php endif; ?>

                  <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg "> 
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label> 
                     <input type="password" name="password"class="form-control form-control-lg " >
                   </div>
                   
                    <div class="form-group">
                       <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>
                    <p class="text-center" >Not yet a member? <a href="signup.php">Sign up</a></p>
                    <div style="font-size:0.8em; text-align:center;"><a href="forgot_password.php">Forgot your password?</a></div>
                  </form>
           </div>
        </div>
      </div> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


 <footer><b>CREATED BY IBUKUN SAMUEL<b></footer>
</body>
</html>