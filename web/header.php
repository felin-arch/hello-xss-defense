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
        <input id="e-topnav__mobilemenu" type="checkbox" class="e-topnav__mobilemenu">
        <nav class="e-menu">
          <ul class="e-menu__list">
            <li class="e-menu__item">
              <a href="http://localhost:8080/" class="e-menu__name">
                0 - Start
              </a>
            </li>
            <li class="e-menu__item">
              <span class="e-menu__name">
                1 - Starting up
              </span>
              <div class="e-menu__drop">
                <ul class="e-menu__list e-menu__list-child">
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]" class="e-menu__name e-menu__name-child">
                      1/A - Reflected XSS
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/persistent/" class="e-menu__name e-menu__name-child">
                      1/B - Persistent XSS
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="e-menu__item">
              <span class="e-menu__name">
                2 - Web Application Firewall
              </span>
              <div class="e-menu__drop">
                <ul class="e-menu__list e-menu__list-child">
                  <li class="e-menu__item e-menu__item-child">
                    <a href="http://localhost:8080/" class="e-menu__name e-menu__name-child">
                      2/A - ModSecurity Off
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="http://localhost:8081/" class="e-menu__name e-menu__name-child">
                      2/B - ModSecurity On
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="e-menu__item">
              <span class="e-menu__name">
                3 - Input Handling
              </span>
              <div class="e-menu__drop">
                <ul class="e-menu__list e-menu__list-child">
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&mode=blacklist" class="e-menu__name e-menu__name-child">
                      3/A - Blacklisting
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&mode=whitelist" class="e-menu__name e-menu__name-child">
                      3/B - Whitelisting
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&mode=regexp" class="e-menu__name e-menu__name-child">
                      3/C - Regexp filtering
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&mode=context" class="e-menu__name e-menu__name-child">
                      3/D - Context sensitive filtering
                    </a>
                  </li>
                </ul>
              </div>
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
