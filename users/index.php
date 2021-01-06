<?php
/**
 * users/index.php
 *
 * @package default
 */


?>
<!--includes -->

<?php
ob_start();
require_once '../includes/load.php';

if ($session->isUserLoggedIn()) { redirect('../users/home.php', false);}
?>
<?php include_once '../layouts/header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--animation link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css">

  <link rel="stylesheet" href="style.css">
</head>
<body>

<!--updated -->

<form method="post" action="../users/auth.php" class="clearfix">
  <div class="row animate__animated animate__backInDown" >
      <div class="img container">
          <img src="image/avatar.png" alt="Avatar" class="avatar">
      </div>
  
          <div class = "row">
             <h1> Welcome</h1>
             <p>Sign in to start your session</p>
           </div>        
           <?php echo display_msg($msg); ?>
  
  
            <div class="row">
                    <label for="username" class="control-label">Username</label>
                    <input type="name" class="form-control animate__animated animate__lightSpeedInLeft animate__delay-1s" name="username" placeholder="Username" required >
            </div>
  
            <div class="row">
                  <label for="Password" class="control-label">Password</label>
                  <input type="password"  id="UserInput" name= "password" class="form-control animate__animated animate__lightSpeedInLeft animate__delay-2s " placeholder="Password" required>
                  <br>
                  <input type="checkbox" onclick="myFunction()"> Show Password
                  <!-- show password -->
                                      <script>
                          function myFunction() {
                            var x = document.getElementById("UserInput");
                            if (x.type === "password") {
                              x.type = "text";
                            } else {
                              x.type = "password";
                            }
                          }
                          </script>
             </div>
  
                <div class="row">
                                <button type="submit" class="btn btn-info  pull-right">Login</button>
                </div>
    </div>
  </form>
  
<?php include_once '../layouts/footer.php'; ?>


</body>
</html>
