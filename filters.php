<?php 
  // if (filter_has_var(INPUT_POST, 'email')) {
  //   echo 'Email was found';
  // } else {
  //   echo 'Email not found';
  // }

  if (filter_has_var(INPUT_POST, 'email')) {
    $email = $_POST['email'];

    // Remove illegal characters
    $emailSanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $emailSanitized;

    // Filter and validate email
    if(filter_var($emailSanitized, FILTER_VALIDATE_EMAIL)) {
      echo 'Email is valid';
    } else {
      echo 'Email is not valid';
    }
  }

  #FILTER_VALIDATE_BOOLEAN
  #FILTER_VALIDATE_EMAIL
  #FILTER_VALIDATE_FLOAT
  #FILTER_VALIDATE_INT
  #FILTER_VALIDATE_IP
  #FILTER_VALIDATE_REGEXP
  #FILTER_VALIDATE_URL

  #FILTER_SANITIZE_EMAIL
  #FILTER_SANITIZE_ENCODED
  #FILTER_SANITIZE_NUMBER_FLOAT
  #FILTER_SANITIZE_NUMBER_INT
  #FILTER_SANITIZE_SPECIAL_CHARS
  #FILTER_SANITIZE_STRING
  #FILTER_SANITIZE_URL
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
    <div class="container">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="input-element">
          <label>Email</label>
          <input type="text" placeholder="Enter email..." name="email">
        </div>
        <div class="input-element">
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>