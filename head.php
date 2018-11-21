<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php

          if(isset($title)){
            echo $title;
          }else{
            echo "Page Title";
          }

       ?>
    </title>
    <link rel="icon" href="images/favicon-96x96.png">
    <link href="css/admin.css" rel="stylesheet">