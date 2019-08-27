<?php
  $msg = '';
  $msgClass = '';

  if (filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'Please enter a valid email';
        $msgClass = 'alert-danger';
      } else {
        $toEmail = 'jwpeachey107@aol.com';
        $subject = 'Contact Request from ' . $name;
        $body = '<div>'.$name . $email . $message.'</div>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: " .$name. "<".$email.">". "\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          $msg = 'There was an error sending your message';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      $msg = 'Please fill in all the fields';
      $msgClass = 'alert-danger';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://jarodpeachey.github.io/breeze_css/breeze.css">
    <title>Contact Us</title>
    <style>
      .alert-danger {
        padding: 12px 16px;
        background: red;
        color: white;
        font-weight: bold;
        width: 100%;
        border-radius: 3px;
      }
    </style>
  </head>
  <body>
    <div class="bg-primary">
      <div class="container py-xxs">
        <div class="navbar-content">
          <div class="navbar-left">
            <h2>Contact Us</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-sm">
    <?php if($msg !== ''): ?>
      <div class="<?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="input-element">
          <label for="name">Name</label>
          <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
        </div>
        <div class="input-element">
          <label for="email">Email</label>
          <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
        </div>
        <div class="input-element">
          <label for="message">Message</label>
          <textarea class="full-width" name="message" rows="6"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
        </div>
        <button class="primary" name="submit" type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>