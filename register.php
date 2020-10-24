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
  <title>Register</title>
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />
</head>

<body>
  <div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
      <form class="uk-form-stacked js-register">
        <h2>Register</h2>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Email</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text-regist" type="email" required="required" placeholder="example@email.com">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Password</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Your Password">
          </div>
        </div>
        <div class="uk-margin uk-alert uk-alert-danger js-error" style='display:none'>
          test
        </div>
        <div class="uk-margin">
          <button class="uk-button uk-button-default" type="submit">
            Register
          </button>
        </div>
      </form>
    </div>
    <p>
      Still have an account? please <a href="login.php">Login</a>
    </p>
    <hr class="uk-grid-divider">
    <div/>

<?php require_once("inc/footer.php"); ?>


  </body>
  </html>
