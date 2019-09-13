<?php
  $path = '/dir1/myfile.php';
  $file = 'file1.txt';

  echo basename($path);
  echo "<br>";
  echo basename($path, '.php');
  echo "<br>";
  echo dirname($path);
  echo "<br>";
  echo file_exists($file);
  echo "<br>";
  echo realpath($file);
  echo "<br>";
  echo is_file($file);
  echo "<br>";
  echo is_writable($file);
  echo "<br>";
  echo is_readable($file);
  echo "<br>";
  echo filesize($file);
  echo ' bytes';
  echo "<br>";

  //Create directory
  mkdir('Testing');

  // Remove directory if no files
  rmdir('Testing');

  // Copy file
  copy('file1.txt', 'file2.txt');

  // Delete file
  unlink('file2.txt');

  // Write from file to string
  echo file_get_contents($file);

  file_put_contents($file, 'Hello World');

  $current = file_get_contents($file);
  
  $current .= ' Goodbye world.';

  file_put_contents($file, $current);

  $handle = fopen($file, 'r');

  $data = fread($handle, filesize($file));

  echo "<br>";
  echo $data;
?>