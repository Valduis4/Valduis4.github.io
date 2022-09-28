<?php session_start();

  if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
    $_SESSION["ReURL"] = "/Whitepaper";
    echo '<script type="text/javascript">window.location = "/Whitepaper/Whitepaper.php"</script>';
    exit;
  }
?>
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
    <link rel="stylesheet" href="Downloading.css?1">
    <link rel="stylesheet" href="MainStyle.css?1">
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <title>Row64 - Whitepaper</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Whitepaper/" />
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
<script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="Downloading.js"></script>

    
    
    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>

<?php
        require "/var/www/database/config.php";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              $password = $email = $Login = $stype = "";
              $password_err = $email_err = $Login_err = "";

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
                          $email = trim($_POST["email"]);
                          $Login = true;
                        } else{
                            $email = trim($_POST["email"]);
                            $Login = false;
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

                if(empty($email_err) && empty($password_err) && $Login){
                  // Prepare a select statement
                  $email_test = array($email);
                  $stmt=$dbh->prepare("SELECT password FROM Users WHERE email = ? LIMIT 1");
                  $stmt->execute($email_test);
                  $stmtid=$dbh->prepare("SELECT uid FROM Users WHERE email = ?");
                  $stmtid->execute($email_test);
                  $idresult = $stmtid->fetch();
                  $id = $idresult['uid'];
                  if($stmt->rowCount() > 0){
                      $result = $stmt->fetch();
                      $result1 = $result['password'];
                      if(password_verify($password,$result1)){
                          //last login update here   
                          $stmt = $dbh->prepare("UPDATE Users SET LastLogin = LOCALTIMESTAMP() WHERE email = ?");
                          $stmt->execute($email_test);
                          $_SESSION["loggedin"] = true;
                          $_SESSION["id"] = $id;
                          $_SESSION["email"] = $email;
                          echo '<script type="text/javascript">window.location = "/Whitepaper/Whitepaper.php"</script>';
                          exit;
                      } else{
                          $login_err = "Incorrect username or password";
                      }
                  } else{
                      $login_err = "Incorrect username or password";
                  }
                }
                //Validate that there is no problems and uplaod, needs email
                if(empty($password_err) && empty($email_err) && !$Login){
                     //needs to email might need to be a non-test server
                     
                     $usefor = "Downloading";
                     $Fname = "";
                     $Lname = "";
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
                        echo '<script type="text/javascript">window.location = "/Whitepaper/Whitepaper.php"</script>';
                                 
                }
            }
?>


    <!--################################# END MENU BAR ###################################-->


    <div class="frame" ><div class="tBox" ><div class="dLine"></div></div></div>

    <div id="ContentLayer">

    <div class="frame" >
      <h1 style="font-size:40px;">
      The Future of Data Analytics Software, Today
      </h1>
    </div>

    <!--#########--><div class="frame"><div class="filler" style="height:30px; background-color:#FFFFFF; width:100%;"></div></div>
    <div class="frame"style=" width:100%;flex-wrap:wrap;">
    <div style="display:flex;width:100%;max-width:950px;"><div>
    <div class="tcontainer"style="width:fit-content;justify-content:flex-start;background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 35px;height:fit-content">
        <img src="./images/Vs.png" alt=""width="542" height="291" style="margin: 10px;margin-bottom: 0px;">
        <div style="height:10px"></div>
          </div><div class="tbox" style="width:100%;max-width:562px;font-family: 'AkkuratLLWeb-Regular', Fallback, sans-serif;">
        Spreadsheets are the most popular computer software in the world. Excel itself has been the top PC program globally for virtually the last 20 years. 
        <br><br>The problem is that Excels’ limitations are becoming major bottlenecks in modern data science and business intelligence. One of Excel’s main limitations is being able to only ingest 1 million rows at a time—a fraction of the amount needed for modern big data analytics. 
        <br><br>The result is that 73% of business data is left unused for analytics—an opportunity cost estimated to be $3.1 billion annually. It’s estimated that 80% of data analyst time is spent simply preparing data. 
        <br><br>Our whitepaper covers how Row64 is using the technology of the gaming industry—such as GPU acceleration, bare metal programming and low latency optimization—to unleash the power of spreadsheets for modern business intelligence and data science. 
        <br><br>Sign up below to receive a free copy of our technical whitepaper to learn about the technology behind our revolutionary spreadsheet software.
        <div style="height:10px"></div>
      </div></div>
      <div style="width:50px;"></div>
      <div class="tcontainer"style="width:fit-content;justify-content:flex-start;background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;height:fit-content;padding:20px;">
        <div style="height:45px"></div>
        <h1 style="margin-block-start:0px;margin-block-end:20px;font-size:25px">
        Create Account
          </h1>
                      <div class="C_Center"style="height:fit-content">
                        <div class="C_Spacer" style="height:10px"></div>
                        <form id="contactForm" method="POST">

                          <label>Email:</label><br>
                          <div  style="height:8px"></div>
                          <input type="text" id="email" name="email" value="<?php echo htmlspecialchars(trim($_POST['email'])); ?>" style="background-repeat: repeat-x;
                          <?php
                          if(empty($email_err)){
                          echo 'border: 1px solid #D9D9D9;';
                          } else{
                                echo 'border: 1px solid #D30000;';
                          }
                          ?>
                          height: 25px;width:100%;margin:0px;padding:0px;">
                          <?php if(!empty($email_err)){
                           echo '<div class="alert-danger alert">' . $email_err . '</div>';
                          }
                          ?>

                          <div  style="height:17px"></div>
                          <label>Password:</label><br>
                          <div  style="height:8px"></div>
                          <input type="password" id="password" name="password" value="<?php echo htmlspecialchars(trim($_POST['password'])); ?>" style="<?php if(empty($password_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($password_err)){
                           echo '<div class="alert-danger alert">' . $password_err . '</div>';
                          }
                          ?>
                          <div  style="height:17px"></div>

                          <input type="checkbox" class="sbox" name="subscribe" id="subscribe" value="Yes" style="margin-left: 25px;" checked/><label>Subscribe to Row64 News & Updates</label>
                          <div  style="height:10px"></div>
                          <input type="submit" name="submit" value="View" style="height: fit-content;line-height: unset;font-size: 30px;width: 200px;margin-left: 50px;background-color:#3689EC;">

                        </form>
                        <div style="height:20px"></div>
                      </div>
        <!-- </form> -->
        <div style="height:0px"></div>
                        </div>
      </div>
      
      
    </div>
    <!--#########--><div class="frame" style="height:10px; width:100%;"></div>
    
    <div class="subMessage">
      <div class="frame" >
        <div class="tcontainer">
          <div class="titleT" >
             
          </div>
        </div>
      </div>
    <div>

     <!--#########--><div class="frame" style="height:90px; background-color:#FFFFFF; width:100%;"></div>




      <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->
      
      <?php
      require"/var/www/html/bottommenu/bottom.php";
      $color = "#F7F8F9";
      echo bottom($color);
      ?>
    </div>

  </body>
</html>