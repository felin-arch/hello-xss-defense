<?php require('header.php'); ?>
<div class="e-header">
  <h1>
    XSS Defense in Depth
  </h1>
</div>
<div class="start_text">
  <div>
    <p>
      Hi, I'm Daniel. Welcome to the workshop! The goal is to give you hands-on knowledge
      about XSS defense mechanisms. First, you will learn about the concept of denfense in depth and then
      we will take a look at various techniques you can use to combat XSS.
    </p>
      Let's get started!
    <p>
    </p>
  </div>
  <div>
    <h2 class="start_header">
      1 - Starting up
    </h2>
    <p>
      Objective
      <ul>
        <li>Execute a reflected XSS attack!</li>
        <li>Execute a persistent XSS attack!</li>
      </ul>
    </p>
    <p>
      Reading
      <ul>
        <li>
          <a href="https://www.securitydrops.com/360-xss/" target="_blank">360 view of XSS</a>
        </li>
      </ul>
    </p>
    <p>
      Hint:
      <ul>
        <li>
          <span class="start_hint">&lt;script&gt;alert(1)&lt;/script&gt;</span>
        </li>
      </ul>
    </p>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      2 - Web Application Firewall
    </h2>
    <p>
      Objective:
      <ul>
        <li>Submit payloads to the WAF!</li>
        <li>Check WAF log as you progress!</li>
      </ul>
    </p>
    <p>
      Reading
      <ul>
        <li>
          <a href="https://modsecurity.org/" target="_blank">ModSecurity's website</a>
        </li>
      </ul>
    </p>
    <p>
      Hint:
      <ul>
        <li>
          <span class="start_hint">&lt;script&gt;alert(1)&lt;/script&gt;</span>
        </li>
        <li>
          <span class="start_hint">&lt;img src="\\x" onerror=alert(1) /&gt;</span>
        </li>
      </ul>
    </p>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      3 - Input handling
    </h2>
    <p>
      Objective
      <ul>
        <li>Defeat the Blacklist filtering!</li>
        <li>Defeat the Regexp sanitization!</li>
        <li>Check the code of Whitelist filtering!</li>
        <li>Check the code of Context Sensitive sanitization!</li>
      </ul>
    </p>
    <p>
      Reading
      <ul>
        <li>
          <a href="https://www.owasp.org/index.php/XSS_Filter_Evasion_Cheat_Sheet" target="_blank">OWASP XSS Filter Evasion Cheat Sheet</a>
        </li>
      </ul>
    </p>
    <p>
      Hint:
      <ul>
        <li>
          <span class="start_hint">For blacklist: &lt;script &gt;alert(1)&lt;/script&gt;</span>
        </li>
        <li>
          <span class="start_hint">For regexp: &lt;scr&lt;script&gt;ipt&gt;alert(1)&lt;/script&gt;</span>
        </li>
        <li>
          <span class="start_hint">Code: /web/include/filters.php</span>
        </li>
      </ul>
    </p>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      4 - Output encoding
    </h2>
    <p>
      Objective
      <ul>
        <li>Submit different payloads and watch what happens!</li>
        <li>Check the code of Output Encoding!</li>
      </ul>
    </p>
    <p>
      Reading
      <ul>
        <li>
          <a href="https://www.owasp.org/index.php/XSS_(Cross_Site_Scripting)_Prevention_Cheat_Sheet" target="_blank">OWASP XSS Prevention Cheat Sheet</a>
        </li>
      </ul>
    </p>
    <p>
      Hint:
      <ul>
        <li>
          <span class="start_hint">Code: /web/include/encoders.php</span>
        </li>
      </ul>
    </p>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      5 - XSS Auditor
    </h2>
    <p>
      Objective
      <ul>
        <li>Prevent the security library from loading!</li>
        <li>Execute a persistent XSS w/ Auditor turned to blocking!</li>
      </ul>
    </p>
    <p>
      Reading
      <ul>
        <li>
          <a href="https://webcache.googleusercontent.com/search?q=cache:blog.innerht.ml/tag/xss/" target="_blank">This misunderstood X-XSS-Protection (Cache)</a>
        </li>
      </ul>
    </p>
    <p>
      Hint:
      <ul>
        <li>
          <span class="start_hint">&lt;script src="http://xss.lappfold.com:8080/js/security-lib.js"&gt;&lt;/script&gt;</span>
        </li>
        <li>
          <span class="start_hint">This does not protect against persistent attacks!</span>
        </li>
      </ul>
    </p>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      6 - Content Security Policy
    </h2>
    <p>
      Objective
      <ul>
        <li>Defeat CSP! Execute a persistent XSS attack!</li>
      </ul>
    </p>
    <p>
      Reading
      <ul>
        <li>
          <a href="https://github.com/cure53/XSSChallengeWiki/wiki/H5SC-Minichallenge-3:-%22Sh*t,-it%27s-CSP!%22" target="_blank">H5SC Minichallenge 3: "Sh*t, it's CSP!"</a>
        </li>
      </ul>
    </p>
    <p>
      Hint:
      <ul>
        <li>
          <span class="start_hint">&lt;script src="//ajax.googleapis.com/ajax/libs/angularjs/1.1.3/angular.min.js"&gt;&lt;/script&gt;&lt;div ng-app ng-csp id=p ng-click=$event.view.alert(1337)&gt;&lt;script async src=//ajax.googleapis.com/jsapi?callback=p.click&gt;&lt;/script&gt;
</span>
        </li>
      </ul>
    </p>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      7 - Same Origin Policy
    </h2>
    <p>
      Objective
      <ul>
        <li>Appreciate the Same Origin Policy!</li>
      </ul>
    </p>
    <p>
      Reading
      <ul>
        <li>
          <a href="https://www.securitydrops.com/same-origin-policy/" target="_blank">Same-origin policy</a>
        </li>
        <li>
          <a href="http://blog.trendmicro.com/trendlabs-security-intelligence/same-origin-policy-bypass-vulnerability-has-wider-reach-than-thought/" target="_blank">Same-origin policy bypass vulnerability</a>
        </li>
      </ul>
    </p>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      8 - Subresource Integrity
    </h2>
    <p>
      Objective
      <ul>
        <li>Get to know SRI!</li>
      </ul>
    </p>
    <p>
      Reading
      <ul>
        <li>
          <a href="https://scotthelme.co.uk/subresource-integrity/" target="_blank">Subresource Integrity: Securing CDN loaded assets</a>
        </li>
      </ul>
    </p>
  </div>
</div>
<?php require('footer.php'); ?>
