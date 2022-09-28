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
    <link rel="stylesheet" href="Login_Style.css?4">
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <title>Row64 - Register</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Register/" />
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
      <div class="frame" style="background-color:#FFFFFF;">
          <h1 style="margin-block-start:20px;margin-block-end:20px;">
          Unlock The Power of Row64
          </h1>
        </div>
        <div class="frame">
          <div class="titleT" style="margin-bottom:20px;max-width:950px;text-align:center;font-size:17px;">
          Creating a free account grants access to a not-for-commercial-use software license, documentation, white paper, example projects, and a growing community of data science experts ready to answer any of your questions.
          </div>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

      <?php
        require "/var/www/database/config.php";
        foreach($_POST as $key => $value){
          // $txt .= "POST -  key: " . $key . ", value: " . $value . "<br>";
          if($key=="plus"){ 
            $_SESSION['action'] = "plus".$value;
          }
          else if($key=="pro"){ 
            $_SESSION['action'] = "pro".$value;
          }
          else if($key=="download"){ 
            $_SESSION['action'] = "download";
          }
          else if($key=="free"){ 
            $_SESSION['action'] = "free";
          }
        }
        $action = $_SESSION['action'];
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                if(isset($action)){
                    if($action == "plusmonth"){
                        echo '<script type="text/javascript">window.location = "/test-stripe"</script>';
                        exit;
                    }
                    else if($action == "plusyear"){
                        echo '<script type="text/javascript">window.location = "/test-stripe"</script>';
                        exit;
                    }
                    else if($action == "promonth"){
                        echo '<script type="text/javascript">window.location = "/test-stripe"</script>';
                        exit;
                    }
                    else if($action == "proyear"){
                        echo '<script type="text/javascript">window.location = "/test-stripe"</script>';
                        exit;
                    }
                    else if($action == "free"){
                    echo '<script type="text/javascript">window.location = "/Download"</script>';
                    exit;
                    }
                    else if($action == "download"){
                        echo '<script type="text/javascript">window.location = "/Download"</script>';
                        exit;
                    }
                } else {
                    echo '<script type="text/javascript">window.location = "/purchase"</script>';
                }
    exit;
}
        $username = $password = $confirm_password = $email = $confirm_email = $phone = $Fname = $Lname = $company = $usefor = "";
        $username_err = $password_err = $confirm_password_err = $email_err = $confirm_email_err = $phone_err = $Fname_err = $Lname_err = $company_err = $usefor_err = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                //Validate passwd
                if(empty(trim($_POST["password"]))){
                    $password_err = "Please enter a password.";
                } elseif(!preg_match('/^[a-zA-Z0-9_!@#$%^&*:.]+$/', trim($_POST["password"]))){
                    $password_err = "Password can only contain letters, numbers, _, !, @, #, $, %, ^, &, *, :, and .";
                } elseif(strlen(trim($_POST["password"])) < 8){
                    $password_err = "Password must be longer than 8 characters";
                } else{
                    $password = trim($_POST["password"]);
                }

                //Validate email, needs datatable check
                if(empty(trim($_POST["email"]))){
                    $email_err = "Please enter an email.";
                } else{
                    $email_test = trim($_POST["email"]);
                    if(!filter_var($email_test, FILTER_VALIDATE_EMAIL)){
                        $email_err = "Please enter a valid email.";
                    } else {
                        //Datatable validation here if the email does not already exist
                        $email_test = array(trim($_POST["email"]));
                        $stmt = $dbh->prepare("SELECT uid FROM Users WHERE email = ?");
                        $stmt->execute($email_test);
                        if($stmt->rowCount() > 0){
                            $email_err = "Email is already in use.";
                        } else{
                            $email = trim($_POST["email"]);
                        }
                    }
                }

                if(isset($_POST['subscribe']) && 
                $_POST['subscribe'] == 'Yes') 
                {
                    $stype = true;
                }else  {
                    $stype = false;
                }


                //Validate that there is no problems and uplaod, needs email
                if(empty($password_err) && empty($email_err)){
                     //needs to email might need to be a non-test server

                     $Fname = "";
                     $Lname = "";
                     $usefor = "Main Sign in";
                     $country = "";
                     
                     $passwd_hash = password_hash($password, PASSWORD_DEFAULT);
                     $ip = $_SERVER['REMOTE_ADDR'];
                     $data = array($passwd_hash,$email,$Fname,$Lname,$usefor,$ip,$country);
                     $stmt = $dbh->prepare("INSERT INTO Users (password,email,Fname,Lname,usedfor,ip,country) VALUES (?,?,?,?,?,?,?)");
                     $stmt->execute($data);
                     $email_test = array($email);
                     $stmt1 = $dbh->prepare("UPDATE Users SET LastLogin = LOCALTIMESTAMP() WHERE email = ?");
                     $stmt1->execute($email_test);
                     $_SESSION["loggedin"] = true;
                     $_SESSION["email"] = $email;
                     if($stype){
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

                        if ($err) {
                        echo "cURL Error #:" . $err;
                        } else {
                        echo $response;
                        }
                     } else if(!$stype){
                        $curl = curl_init();

                        curl_setopt_array($curl, array(
                          CURLOPT_URL => "https://api.hubapi.com/communication-preferences/v3/unsubscribe?hapikey=b85e89fb-aa00-439d-b20f-16281065fa3b",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => "",
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "POST",
                          CURLOPT_POSTFIELDS => "{\"emailAddress\":\"".$email."\",\"subscriptionId\":\"31343599\",\"legalBasis\":\"CONSENT_WITH_NOTICE\",\"legalBasisExplanation\":\"At users request, we opted them out\"}",
                          CURLOPT_HTTPHEADER => array(
                            "accept: application/json",
                            "content-type: application/json"
                          ),
                        ));
                        
                        $response = curl_exec($curl);
                        $err = curl_error($curl);
                        
                        curl_close($curl);
                        
                        if ($err) {
                          echo "cURL Error #:" . $err;
                        } else {
                          echo $response;
                        }
                     }
                     if (isset($_SESSION["ReURL"])){
                        echo '<script type="text/javascript">window.location = "'.$_SESSION["ReURL"].'"</script>';
                        unset($_SESSION["ReURL"]);
                        exit;
                      }
                      else if (isset($action)) {
                        if($action == "plusmonth"){
                            echo '<script type="text/javascript">window.location = "/test-stripe"</script>';
                            
                        }
                        else if($action == "plusyear"){
                            echo '<script type="text/javascript">window.location = "/test-stripe"</script>';
                            
                        }
                        else if($action == "promonth"){
                            echo '<script type="text/javascript">window.location = "/test-stripe"</script>';
                            
                        }
                        else if($action == "proyear"){
                            echo '<script type="text/javascript">window.location = "/test-stripe"</script>';
                            
                        }
                        else if($action == "free"){
                            echo '<script type="text/javascript">window.location = "/Download"</script>';
                            
                        }
                        else if($action == "download"){
                            echo '<script type="text/javascript">window.location = "/Download"</script>';
                            
                        }
                     } else{
                        echo '<script type="text/javascript">window.location = "/Welcome/"</script>';
                     }
                                 
                } /*else{
                    
                    if(!empty($username_err)){
                        echo '<div class="alert alert-danger">' . $username_err . '</div>';
                    }
                    if(!empty($password_err)){
                        echo '<div class="alert alert-danger">' . $password_err . '</div>';
                    }
                    if(!empty($confirm_password_err)){
                        echo '<div class="alert alert-danger">' . $confirm_password_err . '</div>';
                    }
                    if(!empty($email_err)){
                        echo '<div class="alert alert-danger">' . $email_err . '</div>';
                    }
                    if(!empty($confirm_email_err)){
                        echo '<div class="alert alert-danger">' . $confirm_email_err . '</div>';
                    }
                    if(!empty($phone_err)){
                        echo '<div class="alert alert-danger">' . $phone_err . '</div>';
                    }
                    if(!empty($Fname_err)){
                        echo '<div class="alert alert-danger">' . $Fname_err . '</div>';
                    }
                    if(!empty($Lname_err)){
                        echo '<div class="alert alert-danger">' . $Lname_err . '</div>';
                    }
                    if(!empty($company_err)){
                        echo '<div class="alert alert-danger">' . $company_err . '</div>';
                    }
                    if(!empty($usefor_err)){
                        echo '<div class="alert alert-danger">' . $usefor_err . '</div>';
                    }
                }*/
            }
?>

      <div class="frame" style="height:fit-content;background-color:#FFFFFF">
        <div class="C_Parent" style="height:fit-content;background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;width:100%;max-width:950px;">
        <h1 style="margin-block-start:20px;margin-block-end:20px;font-size:35px">
          Create Account
          </h1>
        <div style="height:10px;"></div> 
            <div class="C_Outer"style="height:fit-content" >

                <div class="C_FormBox" style="height:fit-content;box-shadow: 5px 5px 10px grey;">
                    <div class="C_Edge" style="height:298px"></div>
                      <div class="C_Center"style="height:fit-content">
                        <div class="C_Spacer" style="height:30px"></div>
                        <form id="contactForm" method="POST">
                        
                          
                          <label>Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email" name="email" value="<?php echo htmlspecialchars(trim($_POST['email'])); ?>" style="background-repeat: repeat-x;
                          <?php
                          if(empty($email_err)){
                          echo 'border: 1px solid #D9D9D9;';
                          } else{
                                echo 'border: 1px solid #D30000;';
                          }
                          ?>
                          height: 25px;width: 100%;margin: 0px;padding: 0px;">
                          <?php if(!empty($email_err)){
                           echo '<div class="alert-danger alert">' . $email_err . '</div>';
                          }
                          ?>

                          <div class="C_Spacer" style="height:24px"></div>
                          <label>Password:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="password" id="password" name="password" value="<?php echo htmlspecialchars(trim($_POST['password'])); ?>" style="<?php if(empty($password_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($password_err)){
                           echo '<div class="alert-danger alert">' . $password_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <input type="checkbox" class="sbox" name="subscribe" id="subscribe" value="Yes" style="margin-left: 25px;" checked/><label>Subscribe to Row64 News & Updates</label>
                          <div class="C_Spacer" style="height:10px"></div>
                          <input type="submit" name="submit" value="Sign Up" style="height: fit-content;line-height: unset;font-size: 30px;width: 200px;margin-left: 50px;">

                        </form>
                        <div class="C_Spacer" style="height:30px"></div>
                     </div>
                    <div class="C_Edge"></div>
                </div>
            </div>
            <div class="CM_Outer"style="height:fit-content;margin:10px;width:fit-content;">
                  
                  <div class="C_LabelBox"style="height:fit-content">
                    <div class="C_FormBox"style="height:fit-content;box-shadow: 5px 5px 10px grey;">
                      <div class="C_EdgeMobile"></div>
                      <div class="C_Center" style="width:700px">
                        <div class="C_Spacer" style="height:30px;"></div>
                        <form id="loginForm" method="POST">
                        
                          <label>Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email" name="email" value="<?php echo htmlspecialchars(trim($_POST['email'])); ?>" style="
                          <?php
                          if(empty($email_err)){
                          echo 'border: 1px solid #D9D9D9;';
                          } else{
                                echo 'border: 1px solid #D30000;';
                          }
                          ?>
                          ">
                          <?php if(!empty($email_err)){
                           echo '<div class="alert-danger alert">' . $email_err . '</div>';
                          }
                          ?>

                          <div class="C_Spacer" style="height:24px"></div>
                          <label>Password:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="password" id="password" name="password" value="<?php echo htmlspecialchars(trim($_POST['password'])); ?>" style="<?php if(empty($password_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($password_err)){
                           echo '<div class="alert-danger alert">' . $password_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="checkbox" class="sbox" name="subscribe" id="subscribe" value="Yes" checked/><label>Subscribe to Row64 News & Updates</label>
                          <div class="C_Spacer" style="height:10px"></div>
                          <input type="submit" name="submit" value="Sign Up">
                          
                        </form>
                        <div class="C_Spacer" style="height:30px;"></div> 
                     </div>
                    <div class="C_EdgeMobile" ></div>
                </div>
                </div>
            </div>
        <div style="height:30px;"></div>
        <div class="tcontainer">
          <div class="titleT" style="text-align:center;">
              <a href="/Login/" style="text-decoration:none;color:#1189F2;">Already have a login</a>?
              <div class="C_Spacer" style="height:30px"></div>
          </div>
        </div>
        <div style="height:20px;"></div> 
        </div>
      </div>


      <!--################################# DON'T HAVE A LOGIN? ###################################-->
  

      </div>   

  

      <!--#########--><div class="infoSpace" style="height:60px;background-color:#FFFFFF"></div>

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
