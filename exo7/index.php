<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>p3 exercice 7</title>
  </head>
  <body>
    <main>
      <p>
      <?php
        $pas = 1;
        for ($pas=1; $pas < 100 ; $pas+15) {
          echo "On y arrive presque ils nous reste ",$pas," pas </br>";
        }
       ?>
       </p>
    </main>
  </body>
</html>
