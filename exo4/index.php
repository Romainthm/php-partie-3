<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>p3 exercice 4</title>
  </head>
  <body>
    <main>
      <p>
      <?php
        $one = 1;
        while ($one < 10) {
          echo "one et egale à", $one;
          $one+=$one/2;
          if ($one< 10) {
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
