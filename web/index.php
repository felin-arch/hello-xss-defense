<?php require('header.php'); ?>
<div class="e-header">
  <h1>
    Hello XSS Defense in Depth - Hacktivity 2017
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
        <li>Defeat the WAF!</li>
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
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      5 - XSS Auditor
    </h2>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      6 - Content Security Policy
    </h2>
    <hr/>
  </div>
  <div>
    <h2 class="start_header">
      7 - Same Origin Policy
    </h2>
  </div>
</div>
<?php require('footer.php'); ?>
