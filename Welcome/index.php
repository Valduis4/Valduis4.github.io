<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
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
    <link rel="stylesheet" href="Login_Style.css">
    <link rel="stylesheet" href="/R64_Style.css?1">
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <title>Row64 - Welcome</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Welcome/" />
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
<script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="Login_Scripts.js"></script>

    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>


    <!--################################# END MENU BAR ###################################-->

    <?php
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Welcome";
        echo '<script type="text/javascript">window.location = "/Login"</script>';
        exit;
    }
    $email = trim($_SESSION['email']);
    $email_test = array($email);
    require("/var/www/database/config.php");
    $stmt = $dbh->prepare("SELECT * FROM Users WHERE email = ?");
    $stmt->execute($email_test);
    $results = $stmt->fetch();
    $uid= $results['uid'];
    $username = $results['username'];
    $phone = $results['phone'];
    $Fname = $results['Fname'];
    $Lname = $results['Lname'];
    $company = $results['company'];
    $cid = $results['cid'];
    $country = $results['country'];
    $LastLogin = $results['LastLogin'];
    $UpgradeExpire = $results['UpgradeExpire'];
    $UpgradeType = $results['UpgradeType'];
    $Status = $results['Status'];
    $pid = $results['pid'];
    $comp_v = $results['comp_v'];
    $type = $results['type'];
    $pid_go = array($pid);
    $stmt = $dbh->prepare("SELECT * FROM Purchases WHERE pid = ?");
    $stmt->execute($pid_go);
    $results1 = $stmt->fetch();
    $endaftercycle = $results1['endaftercycle'];
    $billdate = $results1['billdate'];
    $cid_go = array($cid);
    $stmt = $dbh->prepare("SELECT * FROM Company WHERE cid = ?");
    $stmt->execute($cid_go);
    $results2 = $stmt->fetch();
    $firstPOC = $results2['firstPOC'];
    $mainPOC = $results2['mainPOC'];
    $admin_uid = $results2['admin_uid'];
    $date = new DateTime($UpgradeExpire);
    $udate = date_format($date, 'm/d/Y');
    $stmt = $dbh->prepare("SELECT * FROM Users WHERE cid=?");
    $stmt->execute($cid_go);
    $results3 = $stmt->fetchAll();
    foreach($results3 as $key=>$value){
        if($value['type'] === 'Admin'){
            $testa = 'yep';
        } elseif($value['comp_v'] === 1){
            $testb = "yep";
        }
    }

    $Now = new DateTime("now");
    if($UpgradeExpire > $Now){
        $UpgradeType = "free";
        $Status = "inactive";
    }
    ?>

    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <div id="ContentLayer">

      <!--#########--><div class="frame" style="background-color:#F8F7F6"><div class="filler" style="height:20px;background-color:#F8F7F6"></div></div>

      <div class="frame" style="background-color:#F8F7F6">
      <div style="width:100%;max-width:950px;align-items:left;">
        <div  style="height:0px"></div>
        <h1 style="margin-bottom:10px;text-align:left;">
            Account Details
        </h1>
        <h1 style="font-size:30px; margin-top:10px;text-align:left;margin-left:10px;">
            Profile
        </h1>
        <div style="height:20px"></div>
        <div style="display:flex;margin-left:10px">
        <div class="tBox" style="text-align:right;padding:unset;width:fit-content;">
         Email:<br><br>Name:<br><br>Phone:
        </div>
        <div style="width:30px;"></div>
        <div class="tBox" style="text-align:left;padding:unset;width:fit-content;">
            <?php
                $name = $Fname . " " . $Lname;
                echo $email . "<br><br>";
                echo $name . "<br><br>";
                echo $phone . "";
            ?>
        </div>
        <div style="width:90px;"></div>
        <div class="tBox" style="text-align:left;padding:unset;width:fit-content;">
            <a href="/change/" style="text-decoration:none;color: #1189F2;">Change Profile</a><br><br><br><br><br>
        </div>
        </div>
        <div style="height:20px;"></div>
        <div style="width:100%;max-width:950px;height:3px;background-color:#080706;margin-left:10px;"></div>
        <div style="height:20px;"></div>
        <h1 style="font-size:30px; margin-top:10px;text-align:left;margin-left:10px;">
            Subscription
        </h1>
        <div style="height:20px"></div>
        <div style="display:flex;margin-left:10px;">
            <div class="tBox" style="text-align:right;padding:unset;width:fit-content;">
            Current Plan:
            </div>
            <div style="width:90px"></div>
            <div class="tBox" style="text-align:left;padding:unset;width:fit-content;">
                <?php
                 if($Status === "active" || $Status === "trialing"){
                    echo $UpgradeType;
                 }else{
                    echo "Free";
                 }
                ?>
            </div>
            <div style="width:70px"></div>
            <div class="tBox" style="text-align:left;padding:unset;width:fit-content;">
                <?php
                 if($Status === "active" && $endaftercycle !== "1"){
                     echo'<a href="/billing/" style="text-decoration:none"><button class="blueButton1" style="height:35px;font-size:24px;line-height:24px;width:220px;">Upgrade & Billing</button></a>';
                 } elseif($endaftercycle === "1"){
                     echo'<a href="/billing/" style="text-decoration:none"><button class="blueButton1" style="height:35px;font-size:24px;line-height:24px;width:220px;">Upgrade & Billing</button></a>';
                 } else{
                     echo'<a href="/purchase/" style="text-decoration:none"><button class="blueButton1" style="height:35px;font-size:24px;line-height:24px;width:220px;">Purchase</button></a>';
                 }
                ?>
            </div>
        </div>
        <div style="height:24px;"></div><div class="tBox" style="text-align:left;padding:unset;width:fit-content;height:fit-content;font-size:20px;margin-left:30px;">
            <?php
                if($Status === "active" && $endaftercycle !== "1"){
                    echo "Renews: " . $udate . "<br><br>";
                } elseif($endaftercycle === "1"){
                    echo "Subscription will end: " . $udate . "<br><br>"; 
                } else{
                }
            ?>
        </div>
        <div style="height:20px;"></div>
        <div style="width:100%;max-width:950px;height:3px;background-color:#080706;margin-left:10px;"></div>
        <div style="height:20px;"></div>
        <h1 style="font-size:30px; margin-top:10px;text-align:left;margin-left:10px;">
            Download Prior Versions
        </h1>
        <div class="tBox" style="text-align:left;padding:unset;width:fit-content;height:fit-content;font-size:20px;margin-left:30px;"><a href="/Downloads" style="text-decoration:none"><button class="blueButton1" style="height:35px;font-size:24px;line-height:24px;width:220px;">Download</button></a></div>
        <div style="height:24px;"></div>
        <div style="width:100%;max-width:950px;height:3px;background-color:#080706;margin-left:10px;"></div>
        <div style="height:20px;"></div>
        <h1 style="font-size:30px; margin-top:10px;text-align:left;margin-left:10px;">
            Sharing
        </h1>
        <div style="height:20px"></div>
        <div style="display:flex;margin-left:10px;">
            <div class="tBox" style="text-align:right;padding:unset;width:fit-content;">
            Company:
            </div>
            <div style="width:90px"></div>
            <div class="tBox" style="text-align:left;padding:unset;width:fit-content;">
                <?php
                 if(!empty($company)){
                    if($comp_v === '0' && !empty($testb)){
                        echo "Please wait for your company to verify you.";
                    }else{
                        echo $company;
                    }
                } else{
                    echo "No company connected";
                }
                ?>
            </div>
            <div style="width:70px"></div>
            <div class="tBox" style="text-align:left;padding:unset;width:fit-content;">
                <?php
                 if(!empty($company)){
                    if($comp_v === '0' && !empty($testb)){
                    }else{
                        if(empty($testa)){
                            echo'<a href="/compinfo/" style="text-decoration:none;color: #1189F2;">Manage </a> / ';
                            echo'<a href="/compinfo/leave.php" style="text-decoration:none;color: #1189F2;"> Leave</a>';
                        } elseif($type === 'Admin'){
                            echo'<a href="/compinfo/" style="text-decoration:none;color: #1189F2;">Manage </a> / ';
                            echo'<a href="/compinfo/leave.php" style="text-decoration:none;color: #1189F2;"> Leave</a>';
                        } else{
                            echo'<a href="/compinfo/leave.php" style="text-decoration:none;color: #1189F2;">Leave</a>';
                        }
                        }
                    } else{
                        echo'<a href="/compinfo/connect.php" style="text-decoration:none;color: #1189F2;">Connect</a>';
                    }
                ?>
            </div>
        </div>
        <?php
        if($cid = 1 && $comp_v === '1'){
            echo '<div style="height:24px;"></div>';
            echo '<div class="tBox" style="text-align:left;padding:unset;width:fit-content;height:fit-content;font-size:20px;margin-left:30px;"><a href="/Blogs/CreatePost.php" style="text-decoration:none;color: #1189F2;">Create Blog Post</a></div><br>';
            echo '<div class="tBox" style="text-align:left;padding:unset;width:fit-content;height:fit-content;font-size:20px;margin-left:30px;"><a href="/ExampleUploader" style="text-decoration:none;color: #1189F2;">Upload Examples</a></div>';
        }   
        ?>
        <div style="height:24px;"></div>
        </div>
            </div>

      <?php
      require"/var/www/html/bottommenu/bottom.php";
      $color = "#F8F7F6";
      echo bottom($color);
      ?>
  </body>
</html>