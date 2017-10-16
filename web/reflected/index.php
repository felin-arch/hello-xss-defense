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
    Reflected XSS <?php echo title(); ?>
  </h1>
</div>

<p class="large-font">
<?php
  echo encodeP(getP());
?>
</p>

<script src="http://127.0.0.1:8080/js/security-lib.js"></script>
<?php
require('../footer.php');

function title() {
  $titles = array(
    'blacklist' => 'Filter w/ blacklisting',
    'whitelist' => 'Filter w/ whitelisting',
    'regexp' => 'Sanitize w/ regexp',
    'context' => 'Sanitize w/ HTMLPurifier'
  );
  if (in_array($_GET['mode'], array_keys($titles))) {
    return '- ' . $titles[$_GET['mode']];
  }

  return '';
}

?>
