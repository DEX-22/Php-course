<html>
  <head>
    <meta charset="UTF-8">
    <title>Monsters again player</title>
  </head>
  <body>
    <?php
      include "./models/player.php";
      $you = new Player("Anonymous", 100, 15, 0);
      $you->welcome();
    ?>
  </body>
</html>