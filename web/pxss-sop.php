<?php
header('X-XSS-Protection: 0');
require('header.php');
require('message_handler.php');
?>
<div class="e-header">
  <h1>
    Persisted XSS w/ SOP
  </h1>
</div>
<p>
  <form method="post" action="/pxss.php">
    <textarea style="font-size: 48px" name="message" rows="4" cols="40">[xss]</textarea><br/>
    <input type="submit" value="Store" class="e-btn" />
    <a href="/pxss.php?clear=true" class="e-btn">Clear</a>
    <a href="/pxss.php?create_some=true" class="e-btn">Create some</a>
  </form>
</p>

<iframe src="//127.0.0.1:8081/pxss-list.php" frameborder="0" height="100%" width="100%"></iframe>
<?php require('footer.php'); ?>

