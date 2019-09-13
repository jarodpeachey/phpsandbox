<?php
  session_start();

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://jarodpeachey.github.io/breeze_css/breeze.css">
  </head>
  <body>
    <div class="bg-light">
      <div class="container">
        <h3 class="center-text">
          Thank you, <?php echo $name; ?>! You're done! Check your email for a verification code.
        </h3>
      </div>
    </div>
  </body>
</html>