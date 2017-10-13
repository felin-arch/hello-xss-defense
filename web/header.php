<?php
setcookie('secret', 'hide_this');
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://redirector.eservice.emarsys.net/ui/latest/css/app.css">
  </head>
  <body>
    <div class="e-topnav">
      <div class="e-topnav__container">
        <div class="e-topnav__logo e-topnav__logo-b2c">
          <svg>
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#e-logo"></use>
          </svg>
        </div>
        <input id="e-topnav__mobilemenu" type="checkbox" class="e-topnav__mobilemenu">
        <nav class="e-menu">
          <ul class="e-menu__list">
            <li class="e-menu__item">
              <a href="/rxss.php?p=[xss]" class="e-menu__name">
                Reflected XSS
              </a>
            </li>
            <li class="e-menu__item">
              <a href="/pxss.php" class="e-menu__name">
                Persistent XSS
              </a>
            </li>
            <li class="e-menu__item">
              <a href="/pxss-sop.php" class="e-menu__name">
                Persistent XSS w/ SOP
              </a>
            </li>
          </ul>
        </nav>
        <label for="e-topnav__mobilemenu" class="e-hamburger">
          <span class="e-hamburger__line"></span>
        </label>
      </div>
    </div>
    <div class="e-grid e-grid-center">
      <div class="e-cell e-cell-8">
