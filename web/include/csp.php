<?php

switch ($_GET['csp']) {
  case 'on':
    header('Content-Security-Policy: default-src \'self\'; style-src \'self\' \'unsafe-inline\' redirector.eservice.emarsys.net assets.emarsys.net; script-src \'self\' redirector.eservice.emarsys.net assets.emarsys.net 127.0.0.1:8080 ajax.googleapis.com; font-src assets.emarsys.net data:');
    break;
  default:
    break;
}

