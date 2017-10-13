<?php
header('X-XSS-Protection: 1');
require('header.php');
?>
<div class="e-header">
  <h1>
    Reflected XSS
  </h1>
</div>
<p style="font-size: 48px">
<?php echo $_GET['p']; ?>
</p>
<script src="//real.defense.in.depth:8080/security-lib.js"></script>
<?php
$date = new DateTime('now');
file_put_contents('/tmp/last_called_apache', $date->format('c') . "\n");
require('footer.php');
?>
