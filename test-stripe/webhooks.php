<?php
//echo 'php';
require '/var/www/vendor/autoload.php';
//echo 'here';

// This is your real test secret API key.
\Stripe\Stripe::setApiKey('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');

// Replace this endpoint secret with your endpoint's unique secret
// If you are testing with the CLI, find the secret by running 'stripe listen'
// If you are using an endpoint defined with the API or dashboard, look in your webhook settings
// at https://dashboard.stripe.com/webhooks
$endpoint_secret = 'whsec_DkjZKaK8jKBKRc42dTEPK7IwQCZ3ds7M';

$payload = @file_get_contents('php://input');
$event = null;
try {
  $event = \Stripe\Event::constructFrom(
    json_decode($payload, true)
  );
} catch(\UnexpectedValueException $e) {
  // Invalid payload
  echo '??  Webhook error while parsing basic request.';
  http_response_code(400);
  exit();
}
function handleSubscriptionCreated($subscription){
    //pull data
    $id = $subscription['id'];
    $custid = $subscription['customer'];
    $metadata = $subscription['metadata'];
    $uid = $metadata['uid'];
    $billing_cycle_anchor = $subscription['billing_cycle_anchor'];
    $billinganchordate = date('Y-m-d',$billing_cycle_anchor);
    $default_payment_method = $subscription['default_payment_method'];
    $plan = $subscription['plan'];
    $price = $plan['id'];
    $current_period_end = $subscription['current_period_end'];
    $expire_date = date('Y-m-d', $current_period_end);
    $status = $subscription['status'];
    $data = array($uid);
    
    //Pull data from Users table
    $dbh = new PDO('mysql:host=localhost;dbname=Row64', "admin", "Mnt7Chyenn7");
    $stmt = $dbh->prepare("SELECT * FROM Users WHERE uid = ?");
    $stmt->execute($data);
    $results = $stmt->fetch();
    $cid = $results['cid'];
    $email = $results['email'];

    //Figure out subscription type
    if($lookup_key === "price_1K45ahJfOTHGXotw2An1115c"){
        $upgradetype = "Plus Monthly";
    } elseif($lookup_key === "price_1K45acJfOTHGXotwkLmLT0cJ"){
        $upgradetype = "Plus Yearly";
    } elseif($lookup_key === "price_1K45aXJfOTHGXotwfH2OZ9dd"){
        $upgradetype = "Pro Monthly";
    } elseif($lookup_key === "price_1K45aQJfOTHGXotwvUgIenZP"){
        $upgradetype = "Pro Yearly";
    } else{
        $upgradetype = "Enterprise";
    }

    //Uplaod data to tables
    $dbh = new PDO('mysql:host=localhost;dbname=Row64', "admin", "Mnt7Chyenn7");
    $pdata = array($id,$billinganchordate,$default_payment_method,$expire_date,$uid,$cid,$email,$upgradetype);
    $stmt = $dbh->prepare("INSERT INTO Purchases (pid,billdate,defaultpaymethod,expiredate,uid,cid,email,upgradetype) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->execute($pdata);
    $udata = array($status,$expire_date,$upgradetype,$id,$custid,$uid);
    $stmt= $dbh->prepare("UPDATE Users SET Status = ?, UpgradeExpire = ?, UpgradeType = ?, pid = ?, stripe_custid = ? WHERE uid = ?");
    $stmt->execute($udata);
}

function handleSubscriptionUpdated($subscription){
    //pull data
    $id = $subscription['id'];
    $custid = $subscription['customer'];
    $metadata = $subscription['metadata'];
    $uid = $metadata['uid'];
    $billing_cycle_anchor = $subscription['billing_cycle_anchor'];
    $billinganchordate = date('Y-m-d',$billing_cycle_anchor);
    $default_payment_method = $subscription['default_payment_method'];
    $plan = $subscription['plan'];
    $price = $plan['id'];
    $lookup_key = $price['lookup_key'];
    $current_period_end = $subscription['current_period_end'];
    $expire_date = date('Y-m-d',$current_period_end);
    $status = $subscription['status'];
    $end_after_cycle = $subscription['cancel_at_period_end'];
    if($end_after_cycle === true){
        $end ='1';
    } else{
        $end = '0';
    }
    $data = array($uid);
    echo $end;
    //Pull data from Users table
    $dbh = new PDO('mysql:host=localhost;dbname=Row64', "admin", "Mnt7Chyenn7");
    $stmt = $dbh->prepare("SELECT * FROM Users WHERE uid = ?");
    $stmt->execute($data);
    $results = $stmt->fetch();
    $cid = $results['cid'];
    $email = $results['email'];

    //Figure out subscription type
    if($price === "price_1K45ahJfOTHGXotw2An1115c"){
        $upgradetype = "Plus Monthly";
    } elseif($price === "price_1K45acJfOTHGXotwkLmLT0cJ"){
        $upgradetype = "Plus Yearly";
    } elseif($price === "price_1K45aXJfOTHGXotwfH2OZ9dd"){
        $upgradetype = "Pro Monthly";
    } elseif($price === "price_1K45aQJfOTHGXotwvUgIenZP"){
        $upgradetype = "Pro Yearly";
    } else{
        $upgradetype = "Enterprise";
    }

    //Uplaod data to tables
    $dbh = new PDO('mysql:host=localhost;dbname=Row64', "admin", "Mnt7Chyenn7");
    $pdata = array($id,$billinganchordate,$default_payment_method,$expire_date,$cid,$email,$upgradetype,$end,$uid);
    $stmt = $dbh->prepare("UPDATE Purchases SET pid = ?, billdate = ?, defaultpaymethod = ?, expiredate = ?, cid = ?, email = ?, upgradetype = ?, endaftercycle = ? WHERE uid = ?");
    $stmt->execute($pdata);
    foreach($pdata as $key=>$value){
        echo $value . "  ";
    }
    $udata = array($status,$expire_date,$upgradetype,$id,$custid,$uid);
    $stmt= $dbh->prepare("UPDATE Users SET Status = ?, UpgradeExpire = ?, UpgradeType = ?, pid = ?, stripe_custid = ? WHERE uid = ?");
    $stmt->execute($udata);
}

function handleSubscriptionDeleted($subscription){
    //pull data
    $id = $subscription['id'];
    $custid = $subscription['customer'];
    $metadata = $subscription['metadata'];
    $username = $metadata['username'];
    $billing_cycle_anchor = $subscription['billing_cycle_anchor'];
    $billinganchordate = date('Y-m-d',$billing_cycle_anchor);
    $default_payment_method = $subscription['default_payment_method'];
    $plan = $subscription['plan'];
    $price = $plan['id'];
    $current_period_end = $subscription['current_period_end'];
    $expire_date = date('Y-m-d',$current_period_end);
    $status = $subscription['status'];
    $end_after_cycle = $subscription['cancel_at_period_end'];
    $data = array($uid);

    //Pull data from Users table
    $dbh = new PDO('mysql:host=localhost;dbname=Row64', "admin", "Mnt7Chyenn7");
    $stmt = $dbh->prepare("SELECT * FROM Users WHERE uid = ?");
    $stmt->execute($data);
    $results = $stmt->fetch();
    $cid = $results['cid'];
    $email = $results['email'];

    //Figure out subscription type
    if($price === "price_1K45ahJfOTHGXotw2An1115c"){
        $upgradetype = "Plus Monthly";
    } elseif($price === "price_1K45acJfOTHGXotwkLmLT0cJ"){
        $upgradetype = "Plus Yearly";
    } elseif($price === "price_1K45aXJfOTHGXotwfH2OZ9dd"){
        $upgradetype = "Pro Monthly";
    } elseif($price === "price_1K45aQJfOTHGXotwvUgIenZP"){
        $upgradetype = "Pro Yearly";
    } else{
        $upgradetype = "Enterprise";
    }

    //Uplaod data to tables
    $dbh = new PDO('mysql:host=localhost;dbname=Row64', "admin", "Mnt7Chyenn7");
    $pdata = array($id,$billinganchordate,$default_payment_method,$expire_date,$cid,$email,$upgradetype,$end_after_cycle,$uid);
    $stmt = $dbh->prepare("UPDATE Purchases SET pid = ?, billdate = ?, defaultpaymethod = ?, expiredate = ?, cid = ?, email = ?, upgradetype = ?, endaftercycle=? WHERE uid = ?");
    $stmt->execute($pdata);
    $udata = array($status,$expire_date,$upgradetype,$id,$custid,$uid);
    $stmt= $dbh->prepare("UPDATE Users SET Status = ?, UpgradeExpire = ?, UpgradeType = ?, pid = ?, stripe_custid = ? WHERE uid = ?");
    $stmt->execute($udata);
}

// Handle the event
switch ($event->type) {
  case 'customer.subscription.created':
    $subscription = $event->data->object; // contains a \Stripe\Subscription
    // Then define and call a method to handle the subscription being created.
    handleSubscriptionCreated($subscription);
    break;
  case 'customer.subscription.deleted':
    $subscription = $event->data->object; // contains a \Stripe\Subscription
    // Then define and call a method to handle the subscription being deleted.
    handleSubscriptionDeleted($subscription);
    break;
  case 'customer.subscription.updated':
    $subscription = $event->data->object; // contains a \Stripe\Subscription
    // Then define and call a method to handle the subscription being updated.
    handleSubscriptionUpdated($subscription);
    break;
  default:
    // Unexpected event type
    echo 'Received unknown event type';
}

?>