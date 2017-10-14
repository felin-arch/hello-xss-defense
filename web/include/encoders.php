<?php

function encodeP($p) {
  switch ($_GET['encoding']) {
    case 'true':
      return htmlentities($p, ENT_QUOTES | ENT_HTML5 | ENT_SUBSTITUTE);
    default:
      return $p;
  }
}
