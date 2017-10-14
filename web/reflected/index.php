<?php
header('X-XSS-Protection: 0');
require('../header.php');
?>
<div class="e-header">
  <h1>
    Reflected XSS <?php echo title(); ?>
  </h1>
</div>

<p style="font-size: 48px">
<?php echo getP(); ?>
</p>

<script src="../js/security-lib.js"></script>
<?php
require('../footer.php');

function getP() {
  switch ($_GET['mode']) {
    case 'blacklist':
      return blacklist($_GET['p']);
    case 'whitelist':
      return whitelist($_GET['p']);
    case 'regexp':
      return regexpFilter($_GET['p']);
    case 'context':
      return contextSensitiveFilter($_GET['p']);
    default:
      return $_GET['p'];
  }
}

function blacklist($p) {
  if (preg_match('/<script>/', $p)) {
    return 'Filtered by blacklist!';
  }

  return $p;
}

function whitelist($p) {
  if (!preg_match('/^[a-zA-Z\[\]]*$/', $p)) {
    return 'Filtered by whitelist!';
  } else {
    return $p;
  }
}

function regexpFilter($p) {
  return preg_replace('/<script>/', '', $p);
}

function contextSensitiveFilter($p) {
  return $p;
}

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
