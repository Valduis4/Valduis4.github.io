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
    <link rel="stylesheet" href="Login_Style.css">
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <title>Row64 - Forgot Password</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Lost_password/" />
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
<script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="Lost_password_Scripts.js"></script>

    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>


    <!--################################# END MENU BAR ###################################-->

    
    <?php
    
    // Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo '<script type="text/javascript">window.location = "/Welcome"</script>';
    exit;
}
 

 
// Define variables and initialize with empty values
$email = $password = "";
$username_err = $password_err = $login_err = "";
require("/var/www/database/config.php");
$action = $_SESSION['action'];
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter your email.";
    } else{
        $username_test = array(trim($_POST["username"]));
        $stmt=$dbh->prepare("SELECT uid FROM Users WHERE email = ?");
        $stmt->execute($username_test);
        if($stmt->rowCount() > 0){
            $email = trim($_POST["username"]);
        } else{
            $username_err = "12";
        }
    }

    if(empty($username_err)){
        $email_test = array($email);
        $stmt=$dbh->prepare("SELECT * FROM Users WHERE email = ?");
        $stmt->execute($email_test);
        $result = $stmt->fetch();
        $email = $result['email'];
        $Fname = $result['Fname'];
        $Lname = $result['Lname'];
        $link = mt_rand(1000000000,9999999999);
        $name = $Fname . " " . $Lname;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['link'] = $link;
        $data = array($link,$email);
        $stmt = $dbh->prepare("UPDATE Users SET repass = ? WHERE email = ?");
        $stmt->execute($data);

        try {
        require_once ("/var/www/MailService1.php");
        $mailService = new MailService();
        echo $_SESSION['name'];
        $mailResponse = $mailService->sendContactMail($_SERVER);
        echo $output;
      } catch (PDOException $e) {
          // print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }
      $_SESSION = array();
      session_destroy();
      echo '<script type="text/javascript">window.location = "/Emailsent"</script>';
    } else{
        if($username_err == "12"){
            $up = "Email does not exist.  " . "<a href='/Register/'>Sign up</a>" . "!";
        }else{
            $up = $username_err;
        }
    }
}
?>




    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <div id="ContentLayer">

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame" style="background-color:#FFFFFF">
          <h1>
          <center>Forgot Password?</center>
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

      <!--#########--><div class="frame" style="height:65px;background-color:#FFFFFF"></div>

      <div class="frame" style="height:fit-content;background-color:#FFFFFF">
        <div class="C_Parent" style="height:fit-content;background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;width:100%;max-width:950px;">
          <div class="infoSpace" style="height:30px;background-color:#E2EEF7"></div> 
            <div class="C_Outer" style="height:fit-content">

                <div class="C_FormBox" style="height:fit-content;box-shadow: 5px 5px 10px grey;">
                    <div class="C_Edge"></div>
                      <div class="C_Center"style="height:fit-content">
                        <div class="C_Spacer" style="height:30px"></div>
                        <form id="contactForm" method="POST">

                          <label for="name" >Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="login" name="username" value="<?php echo htmlspecialchars(trim($_POST['username'])); ?>" style="<?php if(empty($up)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($up)){
                           echo '<div class="alert-danger alert">' . $up . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="submit" name="submit" value="Submit">
                          <div class="C_Spacer" style="height:30px"></div>
                        </form>
                     </div>
                    <div class="C_Edge"></div>
                </div>
            </div>
            <div class="CM_Outer"style="height:fit-content">
                  
                  <div class="C_LabelBox">
                    <div class="C_FormBox"style="height:fit-content;box-shadow: 5px 5px 10px grey;">
                      <div class="C_EdgeMobile"></div>
                      <div class="C_Center" style="width:700px">
                        <div class="C_Spacer" style="height:100px;"></div>
                        <form  method="POST">

                          <label for="name" >Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="login" name="username" value="<?php echo htmlspecialchars(trim($_POST['username'])); ?>" style="<?php if(empty($up)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($up)){
                           echo '<div class="alert-danger alert">' . $up . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <input type="submit" name="submit" value="Submit">
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
              Already have a password -
              <a href="/Login/" style="text-decoration:none;color:#1189F2;">login</a>
              <div class="C_Spacer" style="height:30px"></div>
          </div>
        </div>
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