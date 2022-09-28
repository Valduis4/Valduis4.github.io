<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, minimum-scale=1">

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-22XVR023RP"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-22XVR023RP');
        </script>
    <!-- END Global GOOGLE -->
    <!-- Old Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-154737984-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- New End Google Analytics -->
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window,document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1170404306856125'); 
      fbq('track', 'PageView');
      </script>
      <noscript>
      <img height="1" width="1" 
      src="https://www.facebook.com/tr?id=1170404306856125&ev=PageView
      &noscript=1"/>
      </noscript>
    <!-- End Facebook Pixel Code -->
    <link rel="stylesheet" href="R64_Style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
        <title>Subscribe Row 64</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
</head>
<body>
 <?php
    $email = array($_SESSION['email']);
    require "/var/www/database/config.php";
    $stmt = $dbh->prepare("SELECT * FROM Users WHERE email = ?");
    $stmt->execute($email);
    $results = $stmt->fetch();
    $custid = $results['stripe_custid'];
 ?>
    

        <div class="frame" style="background-color:#FFFFFF">
            <div class="C_Parent" >
                <div class="C_Outer" >
                    <div class="C_FormBox"style="height:90px">
                        <div class="C_Edge"></div>
                        <div class="C_Center">
                            <div class="C_Spacer" style="height:30px"></div>
            
            <form name="test" id="test" action="/create-portal-session1.php" method="POST">
                <?php
                    echo '<input type="hidden" name="cust_key" value="'.$custid.'" />';
                ?>
                <input type="hidden" id="checkout-and-portal-button"  value="Checkout"></input>
            </form>
            <script>
            document.test.submit();
            </script>
            <div class="C_Spacer" style="height:30px"></div>
                        </div>
                        <div class="C_Edge"></div>
                    </div>
                </div>
            </div>
        </div>

      
</body>
</html>