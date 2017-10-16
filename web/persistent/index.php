<?php
require('../include/auditor.php');
require('../include/csp.php');
require('message_handler.php');
require('../header.php');
?>
<div class="e-header">
  <h1>
    Persisted XSS
  </h1>
</div>
<p>
  <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
    <textarea class="large-font" name="p" rows="4" cols="40">[injection]</textarea><br/>
    <input type="submit" value="Store" class="e-btn" />
    <a href="/persistent/?clear=true" class="e-btn">Clear</a>
    <a href="/persistent/?create_some=true" class="e-btn">Create some</a>
  </form>
</p>

<div>
  <?php
    foreach ($messages() as $row) {
      $message = $row['message'];
      echo "<div class=\"e-box large-font\">{$message}</div>";
    }
  ?>
</div>
<?php require('../footer.php'); ?>
