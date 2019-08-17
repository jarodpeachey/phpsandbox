<?php 
  // if (isset($_GET['name'])) {
  //   $name = htmlentities($_GET['name']);
  // }

  // if (isset($_GET['email'])) {
  //   $email = htmlentities($_GET['email']);
  // }

  if (isset($_POST['name'])) {
    $name = htmlentities($_POST['name']);
  }

  if (isset($_POST['email'])) {
    $email = htmlentities($_POST['email']);
  }

  // if (isset($_REQUEST['name'])) {
  //   $name = htmlentities($_REQUEST['name']);
  // }

  // if (isset($_REQUEST['email'])) {
  //   $email = htmlentities($_REQUEST['email']);
  // }
?>

<!-- GET sends through URL -->
<!-- POST sends through headers and is not visible -->

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
      <div class="card no-shadow border bg-light px-md py-sm m-auto mb-md" style="max-width: 576px">
        <form method="POST" action="get_post.php">
          <div class="input-element full-width">
            <label>Name</label>
            <input class="full-width" type="text" name="name" placeholder="Enter name..." value=<?php if($name) {echo $name;}; ?>>
          </div>
          <div class="input-element full-width">
            <label>Email</label>
            <input class="full-width" type="email" name="email" placeholder="Enter email..." value=<?php if($email) {echo $email;}; ?>>
          </div>
          <div class="input-element m-none">
            <input class="button primary" type="submit" value="Submit Form">
          </div>
        </form>      
      </div>
      <?php if($name || $email): ?>
        <div class="card no-shadow border bg-light px-md py-sm m-auto" style="max-width: 576px">
          <h3 class="title">Info</h3>
          <ul class="collection bg-white">
            <?php if($name): ?>
              <div class="collection-item">
                <strong>Name:</strong> <?php echo $name ?>
              </div>
            <?php endif; ?>
            <?php if($email): ?>
              <div class="collection-item">
                <strong>Email:</strong> <?php echo $email ?>
              </div>
            <?php endif; ?>
          </ul>
        </div>
      <?php endif; ?>

    </div>
  </body>
</html>