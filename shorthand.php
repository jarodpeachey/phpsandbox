<?php 
  // Standard if statement
  $loggedIn = true;

  if ($loggedIn) {
    echo 'You are logged in';
  } else {
    echo 'You are not logged in';
  }

  // Shorthand
  echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <div>
      <!-- Standard way -->
      <?php if($loggedIn) { ?>
        <h1>Welcome, USER!</h1>
      <?php } else { ?>
        <h1>Welcome, GUEST!</h1>
      <?php } ?>

      <!-- Shorthand way -->
      <?php if($loggedIn) : ?>
        <h1>Welcome, USER!</h1>
      <?php else: ?>
        <h1>Welcome, GUEST!</h1>
      <?php endif; ?>
    </div>
  </body>
</html>