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
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <link rel="stylesheet" href="Contact_Style.css">
    <title>Row64 - Contact Us Submit</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/ContactUsSubmit/" />
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
<script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="ContactUs_Scripts.js"></script>


    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>


    <!--################################# END MENU BAR ###################################-->





    <div class="frame" >
      <div class="tBox" >
        <div class="dLine"></div>
      </div>
    </div>

    <div id="ContentLayer">
    <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
    <div class="frame">
      <div class="mainT">
        <h1>
        <center><font style="font-size:33px;">Thanks for Contacting Row64</font></center>
        </h1>
        <center><font style="font-size:24px;">We'll get back to you soon.</font></center>
        </div>
    </div>
    
    <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

    <!--#########--><div class="frame" style="height:180px;"></div>

    <!--#########--><div class="frame" style="height:50px;"></div>

    </div>
    
<?php
    require('/var/www/Connect.php');
    if(isset($_POST["submit"])){
      $name = '';
      $email = '';
      $company = '';
      $title = '';
      $country = '';
      if (isset($_POST['name'])) {$name = $_POST['name'];}
      if (isset($_POST['email'])) {$email = $_POST['email'];}
      if (isset($_POST['company'])) {$company = $_POST['company'];}
      if (isset($_POST['title'])) {$title = $_POST['title'];}
      if (isset($_POST['country'])) {$country = $_POST['country'];}
      $feedback = htmlspecialchars($_POST['feedback']);

      $curl = curl_init();

      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.hubapi.com/communication-preferences/v3/subscribe?hapikey=b85e89fb-aa00-439d-b20f-16281065fa3b",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{\"emailAddress\":\"".$email."\",\"subscriptionId\":\"31343599\",\"legalBasis\":\"CONSENT_WITH_NOTICE\",\"legalBasisExplanation\":\"At users request, we opted them in\"}",
      CURLOPT_HTTPHEADER => array(
          "accept: application/json",
          "content-type: application/json"
      ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);
      try {
        require_once ("/var/www/MailService.php");
        $mailService = new MailService();
        $mailResponse = $mailService->sendContactMail($_POST);
      } catch (PDOException $e) {
          // print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }

      // var_dump($_POST);
      try {
        $pdo = new PDO('mysql:host=localhost;dbname=Row64;charset=utf8', $DbConnect['user'], $DbConnect['password']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = array($ip, $name, $email, $company, $title, $country, $feedback);
        $result = $pdo->prepare("INSERT INTO Contact (idate, Ip, name, email, company, title, country, details) values (NOW(), ?, ?, ?, ?, ?, ?, ?)");
        $result->execute($data);
        $pdo = null;

    } catch (PDOException $e) {
        // print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    }
    
?>




      <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->
      <?php
      require"/var/www/html/bottommenu/bottom.php";
      $color = "#FFFFFF";
      echo bottom($color);
      ?>

  </body>
</html>