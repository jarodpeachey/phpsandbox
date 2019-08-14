<?php
  /* LOOPS
    There are 4 main types of arrays:
      - For loop
      - While loop
      - Do...while loop
      - Foreach loop
  */

  //// FOR LOOPS
      for ($i = 0; $i <= 10; $i++) {
        echo $i;
        echo '<br>';
      }

  //// WHILE LOOP
      // While loops used if you don't know set number
      $i = 0;

      while($i <= 10) {
        echo $i;
        echo '<br>';
        $i++;
      }

  //// DO...WHILE LOOP
      // Like while loop, but runs at least once
      $j = 0;

      do {
        echo $j;
        echo '<br>';
        $j++;
      } while ($j <= 10);

  //// FOREACH LOOP
      // ForEach loops are for arrays
      $people = ['Brad' => [34, 'male'], 'James' => [12, 'male'], 'Mike' => [44, 'male']];

      foreach($people as $person => $info) {
        echo $person . '\'s age is: ' . $info[0];
        echo '<br>';
      }
?>