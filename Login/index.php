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

    <meta charset="utf-8">
    <meta name="keywords" content="row64, spreadsheet, spreadsheet formulas, python spreadsheet, gpu compute, gpu intelligence, high speed business intelligence, high speed business, business intelligence, business trends 2020, business trends and insights, business trends data analytics, business growth trends, business intelligence trends, business trends of the future, latest business trends, digital business trends, new business trends, parallel programming revolution, parallel programming business, login">
    <meta property="og:title" content="Row64">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Log in to Row64.">
    <meta property="og:image" content="https://row64.com/images/Thumbnail.png">
    <meta property="og:url" content="https://row64.com/Login/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="description" content="Log in to Row64.">

    <link rel="stylesheet" href="Login_Style.css?1">
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <title>Row64 - Login</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Login/" />
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
      function encryptDecrypt($input) {
        $key = 'ROW';
        $inputLen = strlen($input);
        $keyLen = strlen($key);

        if ($inputLen <= $keyLen) {
            return $input ^ $key;
        }

        for ($i = 0; $i < $inputLen; ++$i) {
            $input[$i] = $input[$i] ^ $key[$i % $keyLen];
        }
        return $input;
    }

    function binToStr($input)
    {
        if (!is_string($input))
            return false;
        $chunks = str_split($input,8);
        $ret = '';
        foreach ($chunks as $chunk)
        {
            $temp = base_convert($chunk, 2, 16);
            $ret .= pack('H*',str_repeat("0", 2 - strlen($temp)) . $temp);
        }
        return $ret;
    }

        require("/var/www/database/config.php");
        if(isset($_GET['Email'])){ 
          $email = $_GET['Email'];
          $email2 = binToStr($email);
          $email1 = encryptDecrypt($email2);
          $email_test = array($email1);
          $stmtCHK = $dbh->prepare("SELECT COUNT(1) FROM Users WHERE email = ?");
          $email_test = array($email1);
          $stmtCHK->execute($email_test);
          $CHKR = $stmtCHK->fetch();
          $tester = $CHKR['0'];
          echo $tester;
          if($tester == 1){
            $stmtid=$dbh->prepare("SELECT uid FROM Users WHERE email = ?");
            $stmtid->execute($email_test);
            $results = $stmtid->fetch();
            $id = $results['uid'];
            $_SESSION['id'] = $id;
            $_SESSION["loggedin"] = true;
            $_SESSION['email'] = $email1;
            echo 'RLog';
            echo '<script type="text/javascript">window.location = "/Welcome"</script>';
          }else{
            echo "Login failed";
            echo '<script type="text/javascript">window.location = "/Login/"</script>';
          }
          exit;
        }

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
    
    // Check if the user is already logged in, if yes then redirect him to welcome page
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
                    echo '<script type="text/javascript">window.location = "/Welcome"</script>';
                }
    exit;
}
 

 
// Define variables and initialize with empty values
$username = $password = $email = "";
$username_err = $password_err = $login_err = "";
require("/var/www/database/config.php");
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["login"]))){
        $username_err = "Please enter username or email.";
    } else{
        $test = trim($_POST["login"]);
        if(filter_var($test, FILTER_VALIDATE_EMAIL)){
            $email = trim($_POST["login"]);
        } else{
            $username = trim($_POST["login"]);
        }
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        if(empty($email)){
            $username_test = array($username);
            $stmt=$dbh->prepare("SELECT email FROM Users WHERE username = ?");
            $stmt->execute($username_test);
            $results = $stmt->fetch();
            $email = $results['email'];
        }
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
                if (isset($_SESSION["ReURL"])){
                  echo '<script type="text/javascript">window.location = "'.$_SESSION["ReURL"].'"</script>';
                  unset($_SESSION["ReURL"]);
                  exit;
                }
                else if (isset($action)) {
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
                } else{
                    echo '<script type="text/javascript">window.location = "/Welcome"</script>';
                }
                exit;
            } else{
                $login_err = "Incorrect username or password";
                //echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }
        } else{
            $login_err = "Incorrect username or password";
            //echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
    } else{
        /*if(!empty($username_err)){
            echo '<div class="alert alert-danger">' . $username_err . '</div>';
        }
        if(!empty($password_err)){
            echo '<div class="alert alert-danger">' . $password_err . '</div>';
        }*/
    }
        
}
    else{

    }
  print($txt);
  
?>
    




    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <div id="ContentLayer">

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame" style="background-color:#FFFFFF">
          <h1>
          <center>Account Login</center>
          </h1>
      </div>

      <div class="frame" style="background-color:#FFFFFF;height:fit-content">
        <div class="C_Parent" style="height:fit-content;background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;width:100%;max-width:950px;">
        <div class="infoSpace" style="height:30px;background-color:#E2EEF7"></div> 
            <div class="C_Outer" style="height:fit-content;">

                <div class="C_FormBox" style="height:fit-content;box-shadow: 5px 5px 10px grey;">
                    <div class="C_Edge"></div>
                      <div class="C_Center"style="height:fit-content;">
                        <div class="C_Spacer" style="height:30px"></div>
                        <form id="contactForm" method="POST">
                            <div class="C_Spacer" style="height:10px"></div>
                          <label for="name" >Email or username:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($_POST['login']); ?>"  style="<?php if(empty($username_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>"><br>
                           <?php
                          if(!empty($username_err)){
                            echo '<div class="alert alert-danger">' . $username_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>
                          
                          <label for="name">Password:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="password" id="password" name="password"  style="<?php if(empty($password_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php
                          if(!empty($password_err)){
                            echo '<div class="alert alert-danger">' . $password_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>
                           <?php
                          if(!empty($login_err)){
                            echo '<div class="alert alert-danger">' . $login_err . '</div>';
                          }
                          ?>

                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="submit" name="submit" value="Log In">
                          <div class="C_Spacer" style="height:30px"></div>

                        </form>
                     </div>
                    <div class="C_Edge"></div>
                </div>
            </div>
            <div class="CM_Outer"style="height:fit-content;">
                  
                  <div class="C_LabelBox"style="height:fit-content;">
                    <div class="C_FormBox"style="height:fit-content;box-shadow: 5px 5px 10px grey;">
                      <div class="C_EdgeMobile"></div>
                      <div class="C_Center" style="width:700px">
                        <div class="C_Spacer" style="height:100px;"></div>
                        <form method="POST">
                            <div class="C_Spacer" style="height:30px"></div>
                          <label for="name" >Email or username:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($_POST['login']); ?>"><br>
                          <?php
                          if(!empty($username_err)){
                            echo '<div class="alert alert-danger">' . $username_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>
                          
                          <label for="name">Password:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="password" id="password" name="password">
                          <?php
                          if(!empty($password_err)){
                            echo '<div class="alert alert-danger">' . $password_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>
                          <?php
                          if(!empty($login_err)){
                            echo '<div class="alert alert-danger">' . $login_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:34px"></div>

                          <input type="submit" name="submit" value="Log In">
                          <div class="C_Spacer" style="height:30px"></div>
                          
                        </form>
                        <div class="C_Spacer" style="height:100px;"></div> 
                     </div>
                    <div class="C_EdgeMobile" ></div>
                </div>
                </div>
            </div>
            <div class="infoSpace" style="height:30px;background-color:#E2EEF7"></div>
          <div class="tcontainer">
            <div class="titleT" style="text-align:center;">
                <a href="/Register/" style="text-decoration:none;color:#1189F2;">Create account</a><br><br>
                <a href="/Lost_password/" style="text-decoration:none;color:#1189F2;">Forgot password</a>?
                <div class="C_Spacer" style="height:30px"></div>
            </div>
          </div>
        </div>
      </div>



      <!--################################# DON'T HAVE A LOGIN? ###################################-->


       <!--#########--><div class="infoSpace" style="height:30px;background-color:#FFFFFF"></div>





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