<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>p3 exercice 3</title>
  </head>
  <body>
    <main>
      <p>
      <?php
        $one = 100;
        $two = 58;
        echo "la deuxieme variable est de",$two,"</br>";
        while ($one >= 10) {
          $resulte=$one*$two;
          echo "le resultat et",$resulte,"</br>";
          $one --;
          if ($one >= 10) {
            echo "</br>";
          }else {
            echo "</br>";
          }
        }
       ?>
       </p>
    </main>
  </body>
</html>
