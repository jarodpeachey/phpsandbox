<?php
  // SERVER SUPERGLOBAL

  // Create server array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
  ];

  // echo $server['Host Server Name']; // localhost
  // echo '<br>';
  // echo $server['Host Header']; // localhost
  // echo '<br>';
  // echo $server['Server Software']; // server info
  // echo '<br>';
  // echo $server['Document Root']; // C:/Program Files (x86)/Ampps/www
  // echo '<br>';
  // echo $server['Current Page']; // /phpsandbox/Superglobals Website/server_info.php
  // echo '<br>';
  // echo $server['Script Name']; // /phpsandbox/Superglobals Website/server_info.php
  // echo '<br>';
  // echo $server['Absolute Path']; // C:/Program Files (x86)/Ampps/www/phpsandbox/Superglobals Website/server_info.php

  // Create client array
  $client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
  ];

  // echo '<br><br>';
  // echo $client['Client System Info'];
  // echo '<br>';
  // echo $client['Client IP'];
  // echo '<br>';
  // echo $client['Remote Port'];
?>