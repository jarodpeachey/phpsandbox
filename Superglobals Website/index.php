<?php include 'server_info.php' ?>
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
    <div class="bg-dark">
      <div class="container p-sm">
        <div class="center-text">
          <h2 class="m-none">Server and Client Info</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row desktop">
        <div class="col col-6">
          <h2 class="mb-xs">Server Info</h2>
          <?php if($server): ?>
            <ul class="collection mb-md tablet-mb-none">
              <?php foreach($server as $key => $value): ?>
                <li class="collection-item">
                  <strong><?php echo $key; ?>: </strong>
                  <?php echo $value; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>        
        </div>
        <div class="col col-6">
          <h2 class="mb-xs">Client Info</h2>
          <?php if($client): ?>
            <ul class="collection">
              <?php foreach($client as $key => $value): ?>
                <li class="collection-item">
                  <strong><?php echo $key; ?>: </strong>
                  <?php echo $value; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>        
        </div>
      </div>
    </div>
  </body>
</html>