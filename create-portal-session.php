<?php
echo '1';
require '/var/www/vendor/autoload.php';
echo 'test';
// This is your real test secret API key.
\Stripe\Stripe::setApiKey('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');
header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://row64.com/Welcome';
echo ' is ';
try {
  $checkout_session = \Stripe\Checkout\Session::retrieve($_POST['session_id']);
  $return_url = $YOUR_DOMAIN;
  echo 'realy';
  // Authenticate your user.
  $session = \Stripe\BillingPortal\Session::create([
    'customer' => $checkout_session->customer,
    'return_url' => $return_url,
  ]);
  header("HTTP/1.1 303 See Other");
  header("Location: " . $session->url);
  echo ' not ';
} catch (Error $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
  echo 'here';
}
?>