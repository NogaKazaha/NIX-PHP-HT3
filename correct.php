<?php
    spl_autoload_register(function ($class) {
        include_once __DIR__ . '\/class/' . $class . '.php';
    });
    $session = new Wrapper();
    $session->start();
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<html lang = "en">
   <head>
      <title>Task 1</title> 
      <link rel="stylesheet" href="./styles/style.css">
   </head>
   <body>
      <h2>Hello <?php echo $session->getUser() ?></h2>
      <div class = "container">
        <?php
            if (isset($_POST['hidden'])) {
              $link = str_replace("correct.php", "", $actual_link);
              $session->destroy();
              header("Location: " . $link);
            }
         ?>
        <form class = "form-signin" role = "form" 
              method = "post">
              <input type = "hidden" class = "form-control" 
               name = "hidden">
          <button class = "btn" type = "submit">Logout</button>
        </form>
      </div> 
   </body>
</html>