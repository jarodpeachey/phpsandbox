<?php

  /*  VARIABLES
    - Can only start with letters or underscore
    - Case sensitive
    - Only letters, numbers and underscores
    - Prefix with $  
  */
  $output = 'Hello world';

  /*  CONSTANTS
    - Start with define
    - Cannot be reassigned
  */
  define('GREETING', 'Hello everyone!!', /* Make case insensitive */ true);
  echo GREETING;

  /*  DATA TYPES
    1. String
    2. Integers
    3. Floats
    4. Booleans
    5. Arrays
    6. Objects
    7. NULL
    8. Resource
  */
  $string = 'Test string';
  $integer = 4;
  $float = 4.4;

  // To concat strings, use a .
  $string1 = 'Hello';
  $string2 = 'World';
  $message = $string1 . ' ' . $string2 . '!';

  // Double qoutes are like backticks in JS
  $message = "$string1 $string2!";

  echo $message;
?>