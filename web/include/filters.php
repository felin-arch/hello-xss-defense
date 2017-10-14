<?php

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
  $purifier = new HTMLPurifier(HTMLPurifier_Config::createDefault());
  return $purifier->purify($p);
}
