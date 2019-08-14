<?php
  /* ARRAYS
    There are 3 main types of arrays:
      - Indexed
      - Associative
      - Multi-dimensional
  */

  //// INDEXED ARRAYS
      $people = array('Kevin', 'Jeremy', 'Sarah');
      $ids = [23, 55, 12];

      // Push to arrays
      $people[3] = 'James';
      // If you don't know the index of the array - like array.push in JS
      $ids[] = 34;

      // Get length of array - like array.length in JS
      $totalPeople = count($people);

      // Check data type oof any variable or array
      var_dump($people);

  //// ASSOCIATIVE ARRAYS
      // Associative arrays have keys
      $peopleTwo = ['Brad' => 35, 'James' => 45];

      // Add to an associative array
      $peopleTwo['Mike'] = 35;

      var_dump($peopleTwo);

  //// MULTI-DIMENSIONAL
      // These are arrays within arrays. It's like having an array of objects
      $peopleThree = ['Brad' => [35, 'Male', true], 'Mike' => [57, 'Male', false]];

      var_dump($peopleThree);
?>