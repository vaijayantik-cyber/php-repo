<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Hello world !

    <form action="checkWordsWithRepeatingLetters.php" method= "get">

      Input word :  <input type='text' name='wordToCheck'/>
      <input type='submit'>
    </form>


    <?php

      if ( checkWordForRepeatingLetter($_GET["wordToCheck"]) )
      {
        echo "Word '" . $_GET["wordToCheck"] . "' does not have repeating letter";
      }
      else {
        // code...
        echo "Word '" . $_GET["wordToCheck"] . "' has repeating letter/s";
      }

      function checkWordForRepeatingLetter($word)
      {
        $n = strlen($word);
        $result = true;

        $letters = array();

        for($i=0; $i < $n; $i++)
        {
          $letters[$i] = $word[$i];
        }

        sort($letters);

        for($i=1; $i < $n; $i++)
        {
          if($letters[$i] == $letters[$i-1])
          {
            $result = false;
          }
        }

   return $result;
  }

     ?>

  </body>
</html>
