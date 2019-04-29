<?php

require 'recaptcha/src/autoload.php';
if(isset($_POST['g-recaptcha-response']))
{
$recaptcha = new ReCaptcha('6LcETaAUAAAAAAhIUAwCgv5bcBwF4CxxKh3kgqaW');
$resp = $recaptcha->setExpectedHostname('recaptcha-demo.appspot.com')
                  ->verify($_POST['g-recaptcha-response']);
if ($resp->isSuccess()) {
    // Verified!
  var_dump('captcha valid');
} else {
    $errors = $resp->getErrorCodes();
    var_dump('captcha invalid');
}
} else var_dump('captcha non rempli');
?>
<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LcETaAUAAAAANZASOUMoV1Nb8xOPfQGq_DJ-cAK"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>