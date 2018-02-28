<?php
require('../vendor/HTMLPurifier.standalone.php');
require('../include/filters.php');
require('../include/encoders.php');
require('../include/auditor.php');
require('../include/csp.php');
require('../header.php');
?>
<div class="e-header">
  <h1>
    Subresource Integrity - <?php echo title(); ?>
  </h1>
</div>

<p class="large-font">
</p>

<script src="http://127.0.0.1:8080/js/security-lib.js" crossorigin="anonymous"<?php echo sriTag(); ?>></script>
<script src="http://127.0.0.1:8080/js/security-lib-tampered.js" crossorigin="anonymous"<?php echo sriTag(); ?>></script>

<?php
require('../footer.php');

function title() {
  if ($_GET['sri'] === 'on') {
    return 'On';
  }

  return 'Off';
}

function sriTag() {
  if ($_GET['sri'] === 'on') {
    return ' integrity="sha384-z2c7Cr8zQhtcKrXObZx6RVGOJAh3jUa9BLFfcQS4tKYV9cJiTR5GGL7et1Ryu/ta"';
  }

  return '';
}

?>
