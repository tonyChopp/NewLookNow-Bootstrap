<?php
  require_once('./stripeconfig.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 2000,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $20!</h1>';
  
?>