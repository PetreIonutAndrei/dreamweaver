<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      Introduceti numarul:
      <input type="text" name="nr">
      <button type="button" value="Ghiceste">button</button>

    </form>
    <?php
      if (!isset($_COOKIE['random_nr']))

      {
        $random_nr = rand(0,100);
        $tries_left = 5;
        setcookie('random_nr', $random_nr);
        setcookie('tries_left', $tries_left);
      }

      if(isset($_POST['nr']))
      {
        $guess = $_POST['nr'];
        if ($guess < $_COOKIE['random_nr'])
          echo "Incearca mai mic";
        elseif ($guess < $_COOKIE['random_nr'])
          echo "Incearca mai mic";
        else echo "Ai ghicit";
      }
     ?>

  </body>
</html>
