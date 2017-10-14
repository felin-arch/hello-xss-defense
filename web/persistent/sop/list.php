<?php
header('X-XSS-Protection: 0');

$db = new PDO(getenv('MYSQL_DSN'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));

?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://redirector.eservice.emarsys.net/ui/latest/css/app.css">
  </head>
  <body style="margin: 0px">
    <div>
      <?php
        foreach ($db->query('select * from messages') as $row) {
          $message = $row['message'];
          echo "<div style=\"font-size: 36px\" class=\"e-box\">{$message}</div>";
        }
      ?>
    </div>
    <script src="https://redirector.eservice.emarsys.net/ui/latest/js/app.js"></script>
  </body>
</html>
