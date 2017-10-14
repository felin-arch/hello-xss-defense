<?php

switch ($_GET['csp']) {
  case 'on':
    header('Content-Security-Policy: default-src \'self\'; style-src \'unsafe-inline\' redirector.eservice.emarsys.net assets.emarsys.net; script-src \'self\' redirector.eservice.emarsys.net assets.emarsys.net; font-src assets.emarsys.net');
    break;
  default:
    break;
}

