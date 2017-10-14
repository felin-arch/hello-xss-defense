<?php

switch ($_GET['auditor']) {
  case 'sanitize':
    header('X-XSS-Protection: 1');
    break;
  case 'block':
    header('X-XSS-Protection: 1; mode=block');
    break;
  default:
    header('X-XSS-Protection: 0');
    break;
}
