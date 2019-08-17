<?php 
  $stringFunctions = [
    'substr("Hello", 0, 3)' => ['Return string segment', substr('Hello', 0, 3)],
    'strlen("Hello")' => ['Returns the string length, counting spaces', strlen('Hello')],
    'strpos("Hello", "e")' => ['Returns position of first occurence of a specified substring', strpos('Hello', 'e')],
    'trim("Hello      ")' => ['Trims the whitespace from the string', trim('Hello      ')],
    'strtoupper("hello")' => ['Makes everything uppercase', strtoupper('hello')],
    'strtolower("HELLO")' => ['Makes everything lowercase', strtoupper('HELLO')],
    'ucwords("hello world")' => ['Makes words capitalized', ucwords('hello world')],
    'str_replace("World", "Everyone", "Hello World")' => ['Replace words: (word to find, word to replace with, string to search)', str_replace('World', 'Everyone', 'Hello World')],
    'is_string(4)' => ['Tests if value is a string: returns 1 for true', is_string(4)],
    'gzcompress("Hello World is a really great sentence to use in web development")' => ['Compress text', gzcompress('Hello World is a really great sentence to use in web development')],
    'gzuncompress(*Random unreadable compressed text*)' => ['Uncompress text', gzuncompress(gzcompress('Hello World is a really great sentence to use in web development'))],
  ];
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
    <div class="bg-dark">
      <div class="container py-xs">
        <h1 class="m-none center-text">String Functions</h1>
      </div>
    </div>
    <div class="container">
      <?php if($stringFunctions): ?>
        <table class="dark">
          <thead>
            <tr>
              <th>Function</th>
              <th>Description</th>
              <th>Output</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($stringFunctions as $string => $value): ?>
              <tr>
                <td>
                  <strong><?php echo $string; ?></strong>
                </td>
                <td>
                  <?php echo $value[0]; ?>
                </td>
                <td>
                  <?php echo $value[1]; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </body>
</html>