<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>p3 exercice 8</title>
  </head>
  <body>
    <main>
      <p>
      <?php
        $pas = 200;
        for ($pas=200; $pas >= 0; $pas-=12) {
          echo "On y arrive presque ils nous reste ",$pas," pas </br>";
        }
       ?>
       </p>
    </main>
  </body>
</html>
