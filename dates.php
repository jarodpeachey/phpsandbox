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
    <?php
      // Set time zone
      date_default_timezone_set('America/New_York');
    ?>
    <table class="m-auto" style="width: 400px;">
      <thead>
        <td>Number</td>
        <td>Description</td>
        <td>Output</td>
      </thead>
      <tbody>
        <tr>
          <td>date('d')</td>
          <td>Day of the month with leading zeros</td>
          <td>
            <?php 
              echo date('d');
            ?>
          </td>  
        </tr>
        <tr>
          <td>date('D')</td>
          <td>Abbreviation for day</td>
          <td>
            <?php 
              echo date('D');
            ?>
          </td>   
        </tr> 
        <tr>
          <td>date('j')</td>
          <td>Day of the month without leading zeros</td>
          <td>
            <?php 
              echo date('j');
            ?>
          </td>  
        </tr> 
        <tr>
          <td>date('jS')</td>
          <td>Suffix for the date</td>
          <td>
            <?php 
              echo date('jS');
            ?>
          </td>   
        </tr> 
        <tr>
          <td>date('F')</td>
          <td>Full month</td>
          <td>
            <?php 
              echo date('F');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('m')</td>
          <td>Numeric month number with leading zeros</td>
          <td>
            <?php 
              echo date('m');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('n')</td>
          <td>Numeric month number without leading zeros</td>
          <td>
            <?php 
              echo date('n');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('t')</td>
          <td>Number of days in the month</td>
          <td>
            <?php 
              echo date('t');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('Y')</td>
          <td>Full year</td>
          <td>
            <?php 
              echo date('Y');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('A')</td>
          <td>AM or PM</td>
          <td>
            <?php 
              echo date('A');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('g')</td>
          <td>12 hour format without leading zeros</td>
          <td>
            <?php 
              echo date('g');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('G')</td>
          <td>24 hour format without leading zeros</td>
          <td>
            <?php 
              echo date('G');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('h')</td>
          <td>12 hour format with leading zeros</td>
          <td>
            <?php 
              echo date('h');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('H')</td>
          <td>24 hour format with leading zeros</td>
          <td>
            <?php 
              echo date('H');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('i')</td>
          <td>Minutes</td>
          <td>
            <?php 
              echo date('i');
            ?>
          </td>   
        </tr>
        <tr>
          <td>date('s')</td>
          <td>Seconds</td>
          <td>
            <?php 
              echo date('s');
            ?>
          </td>   
        </tr>
      </tbody>
    </table> 
    <?php
      echo '<br><br>';
      echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
      echo '<br><br>';

      // You can pass in multiple params for simpler code
      echo date('l m/d/Y | h:i:s a');
      echo '<br><br>';

      // You can make timestamps (hours, min, sec, month, day, year)
      // A timestamp is number of seconds between Jan 1 1970 and this time
      $timestamp = mktime(7, 54, 0, 10, 7, 2001);
      echo $timestamp;
      echo '<br>';

      // We can change timestamp to echo the date by passing a second param into the date function
      echo date('l m/d/Y h:i:s a', $timestamp);

      // We can turn strings to time
      $timestamp2 = strtotime('7:54am October 7th 2001');
      $timestamp3 = strtotime('next Sunday');
      $timestamp4 = strtotime('+2 Months next Thursday');

      echo '<br>';
      echo date('l m/d/Y h:i:s a', $timestamp4);
    ?>  
  </div>

</body>
</html>
