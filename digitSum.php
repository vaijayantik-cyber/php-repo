<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="digitSum.php" method= "get">

      Input number  :  <input type='text' name='num'/>

      <input type='submit'>
    </form>


    <?php

$num = $_GET["num"];

echo "sum of digits of the number is <b>" . sumDigits($num) . "</b>";

  function sumDigits($num)
      {

        $sum = 0;
        if(!is_numeric($num) ||  $num < 0  || strpos( $num, '.' ))
        {
          return "provided input is not a positive integer";
        }
        //go ahead with summing the digits

        $numString = "$num";
        do{
          $sum = 0;
          for($i = 0;$i < strlen($numString) ; $i++)
          {
            $sum = $sum + $numString[$i];
          }
          $numString = "$sum";
        }while ($sum > 9 );
        return $sum;
}
     ?>

  </body>
</html>
