<?php
  session_start();

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];

  if (isset($_POST['submit'])) {
    session_start();

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page3.php');
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
        <h3 class="center-text">
          Thank you, <?php echo $name; ?> for subscribing with the email <strong><?php echo $email;?></strong>
        </h3>
        <div class="center-text">
          <a class="button primary dark" href="page3.php">Continue</a>
          <h2>--- OR ---</h2>
          <h3>Update your information</h3>
          <form style="width: 400px;" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="m-auto align-text-left">
            <div class="input-element">
              <label for="">Name</label>
              <input type="text" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="input-element">
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <input type="submit" value="Submit" class="button primary small mt-none" name="submit">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>