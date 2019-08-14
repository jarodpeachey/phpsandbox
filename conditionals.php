<?php
  /* CONDITIONALS
    ==    Equal to
    ===   Identical to
    <     Less than
    >     Greater than
    <=    Less than or equal to
    >=    Greater than or equal to
    !=    Not equal
    !==   Not identical
  */

  $num = 6;

  if ($num == 5) {
    echo 'Passed 5';
  } else if ($num == 6) {
    echo 'Passed 6';
  } else {
    echo "Passed $num";
  }

  /* Logical operators
    and    &&
    or     ||
    xor means one is true but not both
  */

  if ($num > 4 XOR $num < 10) {
    echo "$num is less than 10 OR greater than 4";
  }

  // Switch statements
  $color = 'red';

  switch ($color) {
    case 'red':
      echo "Your favorite color is $color!!";
      break;
    default:
      echo "Your favorite color is $color";
      break;
  }
?>
