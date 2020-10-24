
<?php
      //Allow the config
      define('__CONFIG__', true);
      //Require the config
      require_once("inc/config.php");
      ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css"/>
</head>

<body>
  <div class="uk-section uk-container">
    <?php
          echo "Hello World. To day is ";
          echo date("Y m d");
     ?>
     <p>
       <a href="login.php">Login</a>
       <a href="register.php">Register</a>
     </p>
    <hr class="uk-grid-divider">
    <div/>

<?php require_once("inc/footer.php"); ?>


  </body>
  </html>
