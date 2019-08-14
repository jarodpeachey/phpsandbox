<?php
  /* FUNCTIONS
    A function is a reuasable block of code
  */

  // Functions can have default values
  function sayHello ($name = 'user') {
    echo "Hello $name! <br>";
  }

  sayHello('James');

  // You can return values from functions
  function sayGoodbye ($name = 'user') {
    return "Goodbye $name! <br>";
  }

  echo sayGoodbye('Mike');

  // Adding ampersand manipulates the number
  $myNum = 5;

  function addTen (&$num) {
    $num += 10;
  }

  function addFive (&$num) {
    $num += 5;
  }

  addFive($myNum);
  echo "Number: $myNum <br>";
  addTen($myNum);
  echo "Number: $myNum <br>";
?>