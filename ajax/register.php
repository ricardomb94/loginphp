<?php
      //Allow the config
      define('__CONFIG__', true);
      //Require the config
      require_once("../inc/config.php");

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Always return JSON format
            header('Content-type: application/json');

            $return = [];

            //Make sure the user does not exists.
            //MAke sure the user can be added and is added.
            //Return the proper information back to Js to redirect us.

            $return['redirect'] = 'dashboard.php';
            $return['name'] = 'Ricardo M\'BOUKOU';
            echo json_encode($return, JSON_PRETTY_PRINT);exit;
            // $array = ['test1', 'test2', 'test3', array('name'=> 'Ricardo', 'lastname'=> 'M\'BOUKOU')];

      }else{
            //Die. Kill the script.Redirect the user. Do something
            exit('test');
      }
?>
