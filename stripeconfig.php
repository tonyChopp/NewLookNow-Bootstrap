<?php

require_once('stripe/vendor/autoload.php');

$stripe = array(
  "secret_key"      => "",
  "publishable_key" => ""
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>