<?php
    spl_autoload_register(function ($class) {
        include_once __DIR__ . '\/class/' . $class . '.php';
    });
    $session = new Wrapper();
    $session->start();
?>
<html lang = "en">
   <head>
      <title>Task 1</title> 
      <link rel="stylesheet" href="./styles/style.css">
   </head>
   <body>
      <h2>Enter Username and Password</h2> 
         <?php
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
               if ($_POST['username'] == 'NogaKazaha' && 
                  $_POST['password'] == 'qweasdzxc') {
                  $session->setParams();
                  header("Location: " . $actual_link . "correct.php");  
                  exit();
               } else {
                header("Location: " . $actual_link . "wrong.php");
                exit();
               }
            }
         ?>
      <div class = "container">
         <form class = "form-signin" role = "form" 
             method = "post">
            <input type = "text" class = "form-control" 
               name = "username" placeholder="Username" required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder="Password" required>
            <button class = "btn" type = "submit" 
               name = "login">Login</button>
         </form>
      </div> 
   </body>
</html>