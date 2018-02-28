<?php
setcookie('secret', 'hide_this', 0, '', '', false, false);
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://redirector.eservice.emarsys.net/ui/latest/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/site.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
                      3/A - Blacklisting filtering
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&mode=whitelist" class="e-menu__name e-menu__name-child">
                      3/B - Whitelisting filtering
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&mode=regexp" class="e-menu__name e-menu__name-child">
                      3/C - Regexp sanitization
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&mode=context" class="e-menu__name e-menu__name-child">
                      3/D - Context sensitive sanitization
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="e-menu__item">
              <a href="/reflected/?p=[injection]&encoding=true" class="e-menu__name">
                4 - Output encoding
              </a>
            </li>
            <li class="e-menu__item">
              <span class="e-menu__name">
                5 - XSS Auditor
              </span>
              <div class="e-menu__drop">
                <ul class="e-menu__list e-menu__list-child">
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&auditor=sanitize" class="e-menu__name e-menu__name-child">
                      5/A - Auditor Sanitizing
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&auditor=block" class="e-menu__name e-menu__name-child">
                      5/B - Auditor blocking
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/persistent/?auditor=block" class="e-menu__name e-menu__name-child">
                      5/C - Auditor blocking - Persistent
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="e-menu__item">
              <span class="e-menu__name">
                6 - Content Security Policy
              </span>
              <div class="e-menu__drop">
                <ul class="e-menu__list e-menu__list-child">
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/reflected/?p=[injection]&csp=on" class="e-menu__name e-menu__name-child">
                      6/A - Reflected w/ CSP
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/persistent/?csp=on" class="e-menu__name e-menu__name-child">
                      6/B - Persistent w/ CSP
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="e-menu__item">
              <span class="e-menu__name">
                7 - Same Origin Policy
              </span>
              <div class="e-menu__drop">
                <ul class="e-menu__list e-menu__list-child">
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/persistent/" class="e-menu__name e-menu__name-child">
                      7/A - Same domains
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/persistent/sop/" class="e-menu__name e-menu__name-child">
                      7/B - Different domains
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="e-menu__item">
              <span class="e-menu__name">
                8 - Subresource Integrity
              </span>
              <div class="e-menu__drop">
                <ul class="e-menu__list e-menu__list-child">
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/sri/" class="e-menu__name e-menu__name-child">
                      8/A - SRI Off
                    </a>
                  </li>
                  <li class="e-menu__item e-menu__item-child">
                    <a href="/sri/?sri=on" class="e-menu__name e-menu__name-child">
                      8/B - SRI On
                    </a>
                  </li>
                </ul>
              </div>
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
