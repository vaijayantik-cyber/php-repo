<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="dateParsing.php" method= "get">

      Input word :  <input type='text' name='dateToParse'/>
      <input type='submit'>
    </form>


    <?php

  //    $result = dateParsing($_GET["dateToParse"]);
//      echo "result date - " . $result;
$dateText = $_GET["dateToParse"];

  /*    function dateParsing($dateText)
      {*/
      $validCount = array( "first", "second", "third", "fourth", "fifth", "last");
      $days = array ("monday","tuesday","wednesday","thursday","friday","saturday","sunday");
      $months = array( 'january', 'february', 'march', 'april', 'may', 'june', 'july ', 'august', 'september', 'october', 'november', 'december', );

      $n = strlen($dateText);


      for ($i=0; $i < $n; $i++)
      {

        if(is_numeric($dateText[$i]))
        {
          $yearAtIndex = $i;
          break;
        }
      }

      $year = substr($dateText,$yearAtIndex,($n-$yearAtIndex));
      if (is_numeric($year))
      {
        //valid year provided
        print  "year is " . $year;
      }
      else {
        // code...
          print  "please provide correct year";
      }


      $words = str_word_count($dateText, 1);
      $descriptorFound = false;
      $monthFound = false;
      $dayFound = false;

      for($i=0;$i<count($words);$i++)
      {
        if( !$descriptorFound && in_array(strtolower($words[$i]),  $validCount))
        {
          $descriptor = strtolower($words[$i]);
          $descriptorFound = true;
        }

        if( !$monthFound && in_array(strtolower($words[$i]),  $months))
        {
          $month = strtolower($words[$i]);
          $monthFound = true;
        }

        if( !$dayFound && in_array(strtolower($words[$i]),  $days))
        {
          $day = strtolower($words[$i]);
          $dayFound = true;
        }
      }

      if($descriptorFound && $monthFound && $dayFound)
      {
        echo "all input available to continue to parse date";

      }
      else
      {
        echo "invalid input";
      }


  //}

     ?>

  </body>
</html>
