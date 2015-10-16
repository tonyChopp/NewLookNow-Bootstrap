<?php

require_once('stripe/vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_live_H1YwPT9PCcmwtwHBpAgXOsw3",
  "publishable_key" => "pk_live_Cjta64iHYng2Ztpmh6Pl8loe"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>