<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="stringMerge.php" method= "get">

      Input word 1 :  <input type='text' name='word1'/>
      Input word 2 :  <input type='text' name='word2'/>
      <input type='submit'>
    </form>


    <?php

$word1 = $_GET["word1"];
$word2 = $_GET["word2"];

echo "merged word is <b>" . mergeWords($word1,$word2) . "</b>";

  function mergeWords($word1,$word2)
      {

        $n = strlen($word1);
        $k = strlen($word2);
        echo $n . " lengths " . $k . "<BR>";
        $newWord = "";

        for($i=0;$i<min($n,$k);$i++)
        {
          $newWord = $newWord . $word1[$i];
          $newWord = $newWord . $word2[$i];
        }

        if($n>$k)
        {
          $newWord = $newWord . substr($word1, $k);
        }
        else if($k>$n)
        {
          $newWord = $newWord . substr($word2, $n);
        }
        return $newWord;
}
     ?>

  </body>
</html>
