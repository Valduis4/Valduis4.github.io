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
    <link rel="stylesheet" href="Register_Style.css">
    <title>Row64 - Update Information</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
<script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="Register_Scripts.js"></script>

    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>


    <!--################################# END MENU BAR ###################################-->

    
    




    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <div id="ContentLayer">

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame" style="background-color:#FFFFFF">
          <h1>
          <center>Change Your Company Information</center>
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

      <!--#########--><div class="frame" style="height:65px;background-color:#F7F8F9"></div>
      <?php
      require"/var/www/database/config.php";
      $emailp = trim($_SESSION['email']);
      $emailpt = array($emailp);
      $stmt = $dbh->prepare("SELECT * FROM Users WHERE email = ?");
      $stmt->execute($emailpt);
      $results = $stmt->fetch();
      $cidp = $results['cid'];
      $uid = $results['uid'];
      $cidpt = array($cidp);
      $stmt = $dbh->prepare("SELECT * FROM Company WHERE cid = ?");
      $stmt->execute($cidpt);
      $results1 = $stmt->fetch();
      $companyp = $results1['name'];
      $admin_uid = $results1['admin_uid'];
      $mainPOCp = $results1['mainPOC'];
      $phonep = $results1['phone'];

      $name = $mainPOC = $phone = "";
        $name_err = $mainPOC_err = $phone_err = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
            
                if(empty(trim($_POST["name"]))){
                    $name_err = "Please enter a company name.";
                } elseif(trim($_POST['name']) === $companyp){
                    $name = trim($_POST['name']);
                } else{
                    $name = trim($_POST['name']);
                }

                //Validate email, needs datatable check
                if(trim($_POST["email"]) === trim($_SESSION["email"])){
                    $mainPOC = trim($_POST['email']);
                } else{
                    $email_test = trim($_POST["email"]);
                    if(!filter_var($email_test, FILTER_VALIDATE_EMAIL)){
                        $mainPOC_err = "Please enter a valid email.";
                    } else {
                        $mainPOC = trim($_POST['email']);
                    }
                }

                //Validate phone#
                $phone = trim($_POST['phone']);

                $contact = trim($_POST['contact']);

                //Validate that there is no problems and uplaod, needs email
                if(empty($name_err) && empty($email_err) && empty($phone_err)){
                     //needs to email might need to be a non-test server
                     $data = array($name,$mainPOC,$phone,$cidp);
                     $stmt = $dbh->prepare("UPDATE Company SET name=?, mainPOC=?, phone=? WHERE cid=?");
                     $stmt->execute($data);
                     $datau = array($name,$cidp);
                     $stmt = $dbh->prepare("UPDATE Users SET company=? WHERE cid=?");
                     $stmt->execute($datau);
                     echo '<script type="text/javascript">window.location = "/Welcome"</script>';
                     exit;
                } else{
                    
                }
            }
      ?>
      <div class="frame" style="height:600px;background-color:#F7F8F9">
        <div class="C_Parent" > 
            <div class="C_Outer" >

                <div class="C_FormBox" style="height:800px">
                    <div class="C_Edge" style="height:298px"></div>
                      <div class="C_Center">
                        <div class="C_Spacer" style="height:30px"></div>
                        <form id="contactForm" method="POST">

                          <label>Name:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($companyp); ?>" style="<?php if(empty($name_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($name_err)){
                           echo '<div class="alert-danger alert">' . $name_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>
                          
                          <label>Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($mainPOCp); ?>" style="<?php if(empty($mainPOC_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($mainPOC_err)){
                           echo '<div class="alert-danger alert">' . $mainPOC_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Phone:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phonep); ?>" style="<?php if(empty($phone_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($phone_err)){
                           echo '<div class="alert-danger alert">' . $phone_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Contact Person:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="contact" name="contact" value="<?php echo htmlspecialchars($contact); ?>" style="<?php if(empty($contact_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($contact_err)){
                           echo '<div class="alert-danger alert">' . $contact_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="submit" name="submit" value="Change">

                        </form>
                        <div class="C_Spacer" style="height:30px"></div>
                     </div>
                    <div class="C_Edge"></div>
                </div>
            </div>
        </div>
      </div>


      <div class="frame" style="height:fit-content">
        <div class="CM_Parent"style="height:fit-content">
            <div class="CM_Outer"style="height:fit-content">
                  
                  <div class="C_LabelBox"style="height:fit-content">
                    <div class="C_FormBox"style="height:fit-content">
                      <div class="C_EdgeMobile"style="height:fit-content"></div>
                      <div class="C_Center" style="width:700px">
                        <div class="C_Spacer" style="height:30px;"></div>
                        <form id="loginForm" method="POST">

                          <label>Name:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($companyp); ?>" style="<?php if(empty($name_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($name_err)){
                           echo '<div class="alert-danger alert">' . $name_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>
                          
                          <label>Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($mainPOCp); ?>" style="<?php if(empty($mainPOC_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($mainPOC_err)){
                           echo '<div class="alert-danger alert">' . $mainPOC_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Phone:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phonep); ?>" style="<?php if(empty($phone_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($phone_err)){
                           echo '<div class="alert-danger alert">' . $phone_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>
                            
                           <label>Contact Person:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="contact" name="contact" value="<?php echo htmlspecialchars($contact); ?>" style="<?php if(empty($contact_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($contact_err)){
                           echo '<div class="alert-danger alert">' . $contact_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="submit" name="submit" value="Change">
                          
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
              <a href="/compinfo/">Return to Company overview</a>.</center>
              <div class="C_Spacer" style="height:30px"></div>
          </div>
        </div>
      </div>


    

  

      </div>   

  

      <!--#########--><div class="infoSpace" style="height:60px;background-color:#FFFFFF"></div>

    <?php
      require"/var/www/html/bottommenu/bottom.php";
      echo bottom("#FFFFFF");
      ?>
  </body>
</html>
