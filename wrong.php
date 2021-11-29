<?php
   $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<html lang = "en">
   <head>
      <title>Task 1</title> 
      <link rel="stylesheet" href="./styles/style.css">
   </head>
   <body>
      <h2>Sorry, but your login data is incorrect</h2>
      <div class = "container">
        <?php
            if (isset($_POST['hidden'])) {
              $link = str_replace("wrong.php", "", $actual_link);
              header("Location: " . $link);
            }
         ?>
        <form class = "form-signin" role = "form" 
              method = "post">
              <input type = "hidden" class = "form-control" 
               name = "hidden">
          <button class = "btn" type = "submit">Back to login</button>
        </form>
      </div> 
   </body>
</html>