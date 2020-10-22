
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
  <title>Login</title>
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css" />
</head>

<body>
  <div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
      <form class="uk-form-stacked js-login">
        <h2>Login</h2>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Email</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" required="required" placeholder="example@email.com">
          </div>
        </div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Password</label>
          <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" required="required" placeholder="Your Password">
          </div>
        </div>
        <div class="uk-margin">
          <button class="uk-button uk-button-default" type="submit">
            login
          </button>
        </div>
      </form>
    </div>
    <hr class="uk-grid-divider">
    <div/>

<?php require_once("inc/footer.php"); ?>


  </body>
  </html>
