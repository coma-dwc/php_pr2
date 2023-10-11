<html>
  <head>
    <title>何曜日？</title>
  </head>
  <body>
    <?php
    $date = $_POST['date'];
    $date = new DateTime($date);
    echo $date->format('Y/m/dは<b>l</b>です');
    ?>
  </body>
</html>