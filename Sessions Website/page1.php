<?php
  if (isset($_POST['submit'])) {
    session_start();

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php');
  }
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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="mx-auto">
          <div class="input-element">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter name...">
          </div>
          <div class="input-element">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter email...">
          </div>
          <input type="submit" value="Submit" class="button primary" name="submit">
        </form>
      </div>
    </div>
  </body>
</html>