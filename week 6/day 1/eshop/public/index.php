<?php

/**
 * look at the URL adress and return the name of the controller
 *
 * @return string name of controller
 *
 */

 function getControllerForUrl()
 {
     return isset($_GET['page']) ? $_GET['page'] : 'index';
  
    vardump($page);
 }

 //get the name of controller (using the function above)
 $controller_name = getControllerForUrl();

 //include the correct controller file
//  print_r($_GET);
//  echo 'Hello ' . $_GET. '!';