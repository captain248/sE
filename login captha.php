<?php
// reCAPTCHA secret key
define('SecretKey', $6Ld2DkoUAAAAALpsqSZ3ryM4wgI8ba0UglgrWFuK);
// allowed only POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $query_params = [
    'secret' => SecretKey,
    'response' => filter_input(INPUT_POST, 'g-recaptcha-response'),
    'remoteip' => $_SERVER['REMOTE_ADDR']
  ];
  $url = 'https://www.google.com/recaptcha/api/siteverify?'.http_build_query($query_params);
  $result = json_decode(file_get_contents($url), true);
  if ($result['success']) {
    // TODO, when reCAPTCHA verify successfully
  } else {
    // TODO, when reCAPTCHA failed
  }
}