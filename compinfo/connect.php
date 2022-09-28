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
    <link rel="stylesheet" href="Login_Style.css">
    <link rel="stylesheet" href="leave.css">
    <title>Row64 - Company Overview</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
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
    require"/var/www/database/config.php";
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        echo '<script type="text/javascript">window.location = "/Login"</script>';
        exit;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["company"]))){
            $company_err = "Please input your company.";
        } elseif(!preg_match('/^[a-zA-Z0-9 _!,.&#$]+$/', trim($_POST["company"]))){
            $company_err = "Company name can only include letters, numbers, whitespaces, _, !, ,, ., &, #, and $.";
        } else{
            $company = trim($_POST["company"]);
        }
        if(empty($company_err)){
                     
                     $company_test = array($company);
                     $stmt = $dbh->prepare("SELECT cid FROM Company WHERE name = ?");
                     $stmt->execute($company_test);
                     if($stmt->rowCount() > 0){
                            $cid_r = $stmt->fetch();
                            $cid = $cid_r['cid'];
                     } else{
                            $data = array($company,$email,$usefor);
                            $stmt = $dbh->prepare("INSERT INTO Company (name, firstPOC, firstuse) VALUES (?,?,?)");
                            $stmt->execute($data);
                            $company_test = array($company);
                            $stmt = $dbh->prepare("SELECT cid FROM Company WHERE name = ?");
                            $stmt->execute($company_test);
                            $cid_r = $stmt->fetch();
                            $cid = $cid_r['cid'];
                     }
                     $data = array($cid,$company,$_SESSION['email']);
                     $stmt = $dbh->prepare("UPDATE Users SET cid=?,company=?,cdate=Now() WHERE email=?");
                     $stmt->execute($data);
                     echo '<script type="text/javascript">window.location = "/Login"</script>';
                     exit;
        }
    }
    ?>

    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <div id="ContentLayer">

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame" style="background-color:#FFFFFF">
          <h1>
          <center>Connect a Company</center>
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

      <!--#########--><div class="frame" style="height:65px;background-color:#F7F8F9"></div>

      <div class="frame" style="height:200px;background-color:#F7F8F9">
        <div class="C_Parent" style="height:fit-content;"> 
            <div class="C_Outer" style="height:fit-content;">

                <div class="A_FormBox" style="height:200px">
                    <div class="C_Edge" style="height:298px"></div>
                      <div class="C_Center">
                        <div class="C_Spacer" style="height:30px"></div>
                        <form id="contactForm" method="POST">

                          <label>Company:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="company" name="company">
                          <div class="C_Spacer" style="height:24px"></div>

                            <input type="submit" name="submit" value="Join Company">
                        </form>
                        <div class="C_Spacer" style="height:30px"></div>
                     </div>
                    <div class="C_Edge"></div>
                </div>
            </div>
        </div>
      </div>


      <div class="frame">
        <div class="CM_Parent"style="height:fit-content;">
            <div class="CM_Outer"style="height:fit-content;">
                  
                  <div class="C_LabelBox">
                    <div class="C_FormBox">
                      <div class="C_EdgeMobile"></div>
                      <div class="C_Center" style="width:700px">
                        <div class="C_Spacer" style="height:30px;"></div>
                        <form id="loginForm" method="POST">
                          <label>Company:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="company" name="company">
                          <div class="C_Spacer" style="height:24px"></div>

                        <input type="submit" name="submit" value="Join Company">
                          
                        </form>
                        <div class="C_Spacer" style="height:30px;"></div> 
                     </div>
                    <div class="C_EdgeMobile" ></div>
                </div>
                </div>
            </div>
            <!--#########--><div class="infoSpace" style="height:30px;background-color:#F7F8F9"></div>
        </div>
      </div>


      <!--################################# DON'T HAVE A LOGIN? ###################################-->


       <!--#########--><div class="infoSpace" style="height:30px;background-color:#F7F8F9"></div>


      <div class="frame" style="background-color:#F7F8F9">
        <div class="tcontainer">
          <div class="titleT" >
              <center>
              <a href="/Welcome/">Return to Dashboard</a>.</center>
              <div class="C_Spacer" style="height:30px"></div>
          </div>
        </div>
      </div>
      
      <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->
      <?php
      require"/var/www/html/bottommenu/bottom.php";
      echo bottom("#FFFFFF");
      ?>
  </body>
</html>