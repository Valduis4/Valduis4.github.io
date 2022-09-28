<?php

require '../vendor/autoload.php';
// This is your real test secret API key.
\Stripe\Stripe::setApiKey('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');

header('Content-Type: application/json');

$email = $_POST['email_key'];
$data = array($email);
$dbh = new PDO('mysql:host=localhost;dbname=Row64', "admin", "Mnt7Chyenn7");
$stmt = $dbh->prepare("SELECT * FROM Users WHERE email = ?");
$stmt->execute($data);
$results = $stmt->fetch();
$uid = $results['uid'];
$uid = (string)$uid;

$YOUR_DOMAIN = 'https://row64.com/test-stripe';

try {
  /*$prices = \Stripe\Price::all([
    'lookup_keys' => [$_POST['lookup_key']],
    'expand' => ['data.product']
  ]);*/
   echo $prices;
  $checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'customer_email' => $email,
    'line_items' => [[
      'price' => $_POST['lookup_key'],
      'quantity' => 1,
    ]],
    'mode' => 'subscription',
    'success_url' => $YOUR_DOMAIN . '/success.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => 'https://row64.com/purchase/',
    'subscription_data' => [
    'metadata' => ['uid'=> $uid]
    ]
  ]);

  header("HTTP/1.1 303 See Other");
  header("Location: " . $checkout_session->url);
} catch (Error $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}
?>