<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>p3 exercice 2</title>
  </head>
  <body>
    <main>
      <p>
      <?php
        $one = 0;
        $two = 58;
        echo "la deuxieme variable est de",$two,"</br>";
        while ($one <= 20) {
          $resulte=$one*$two;
          echo "le resultat et",$resulte,"</br>";
          $one ++;
          if ($one <= 20) {
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
