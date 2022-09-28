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
    <title>Row64 - Password Reset</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Emailpasswordset/" />
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
<script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="PASS_Scripts.js"></script>

    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>


    <!--################################# END MENU BAR ###################################-->

    <?php
        $username = $password = $confirm_password = $link = "";
        $username_err = $password_err = $confirm_password_err = $link_err = "";
        require("/var/www/database/config.php");
            if($_SERVER["REQUEST_METHOD"] == "POST"){
            
                //Validate Username
                if(empty(trim($_POST["username"]))){
                    $username_err = "Please enter a username or email.";
                } elseif(!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)){
                    
                    $username_test = array(trim($_POST["username"]));
                    $stmt=$dbh->prepare("SELECT uid FROM Users WHERE username = ?");
                    $stmt->execute($username_test);
                    $result = $stmt->fetch();
                    $id = $result['uid'];
                    if($stmt->rowCount() > 0){
                        $username = trim($_POST["username"]);
                    } else{
                        $username_err = "12";
                    }
                } else{
                    $username_test = array(trim($_POST["username"]));
                    $stmt=$dbh->prepare("SELECT uid FROM Users WHERE email = ?");
                    $stmt->execute($username_test);
                    $result = $stmt->fetch();
                    $id = $result['uid'];
                    if($stmt->rowCount() > 0){
                        $username = trim($_POST["username"]);
                    } else{
                        $username_err = "12";
                    }
                }
                
                //Validate "link"
                if(empty(trim($_POST["link"]))){
                    $link_err = "Please enter the code provided in the email.";
                } else{
                    $id_test = array($id);
                    $stmt=$dbh->prepare("SELECT repass FROM Users WHERE uid = ?");
                    $stmt->execute($id_test);
                    $ipresult = $stmt->fetch();
                    $ip = $ipresult['repass'];
                    $link = trim($_POST["link"]);
                    if($link == $ip){
                        //Check
                    } else{
                        $link_err = "Incorrect code";
                    }
                }

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

                //Validate confirm passwd
                if(empty(trim($_POST["confirm_password"]))){
                    $confirm_password_err = "Please confirm password.";
                } else{
                    $confirm_password = trim($_POST["confirm_password"]);
                    if(empty($password_err) && $password != $confirm_password){
                        $confirm_password_err = "Paswords do not match.";
                    }
                }
                
                //Validate that there is no problems and uplaod, needs email
                if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($link_err)){
                     $passwd_hash = password_hash($password, PASSWORD_DEFAULT);
                     $data = array($passwd_hash,$id);
                     $stmt = $dbh->prepare("UPDATE Users SET password = ? WHERE uid = ?");
                     $stmt->execute($data);
                     echo '<script type="text/javascript">window.location = "/Login"</script>';
                     exit;
                } else{
                    
                    if(!empty($username_err)){
                         if($username_err == "12"){
                            $temp = "Username or email does not exist.  " . "<a href='/Register/'>Sign up</a>" . "!";
                         }else{
                            $temp = $username_err;
                         }
                    }
                }
                
            }
    ?>
    




    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <div id="ContentLayer">

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame" style="background-color:#FFFFFF">
          <h1>
          <center>Reset Password</center>
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

      <!--#########--><div class="frame" style="height:65px;background-color:#F7F8F9"></div>

      <div class="frame" style="height:fit-content;background-color:#F7F8F9">
        <div class="C_Parent" style="height:fit-content"> 
            <div class="C_Outer" style="height:fit-content">

                <div class="C_FormBox" style="height:fit-content">
                    <div class="C_Edge" style="height:298px"></div>
                      <div class="C_Center" style="height:fit-content">
                        <div class="C_Spacer" style="height:30px"></div>
                        <form id="contactForm" method="POST">

                          <label>Username or Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="username" name="username" value="<?php echo htmlspecialchars(trim($_POST['username'])); ?>" style="<?php if(empty($temp)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($temp)){
                           echo '<div class="alert-danger alert">' . $temp . '</div>';
                          }
                          ?>
                          
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Code:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="link" name="link" value="<?php echo htmlspecialchars(trim($_POST['link'])); ?>" style="<?php if(empty($link_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($link_err)){
                           echo '<div class="alert-danger alert">' . $link_err . '</div>';
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

                          <label>Confirm Password:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="password" id="confirm_password" name="confirm_password" value="<?php echo htmlspecialchars(trim($_POST['confirm_password'])); ?>" style="<?php if(empty($confirm_password_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($confirm_password_err)){
                           echo '<div class="alert-danger alert">' . $confirm_password_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="submit" name="submit" value="Submit">

                        </form>
                        <div class="C_Spacer" style="height:30px"></div>
                     </div>
                    <div class="C_Edge"></div>
                </div>
            </div>
        </div>
      </div>


      <div class="frame"style="height:fit-content">
        <div class="CM_Parent"style="height:fit-content">
            <div class="CM_Outer"style="height:fit-content">
                  
                  <div class="C_LabelBox"style="height:fit-content">
                    <div class="C_FormBox"style="height:fit-content">
                      <div class="C_EdgeMobile"></div>
                      <div class="C_Center" style="width:700px">
                        <div class="C_Spacer" style="height:30px;"></div>
                        <form id="loginForm" method="POST">

                          <label>Username or Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="username" name="username" value="<?php echo htmlspecialchars(trim($_POST['username'])); ?>" style="<?php if(empty($temp)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($temp)){
                           echo '<div class="alert-danger alert">' . $temp . '</div>';
                          }
                          ?>
                          
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Code:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="link" name="link" value="<?php echo htmlspecialchars(trim($_POST['link'])); ?>" style="<?php if(empty($link_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($link_err)){
                           echo '<div class="alert-danger alert">' . $link_err . '</div>';
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

                          <label>Confirm Password:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="password" id="confirm_password" name="confirm_password" value="<?php echo htmlspecialchars(trim($_POST['confirm_password'])); ?>" style="<?php if(empty($confirm_password_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($confirm_password_err)){
                           echo '<div class="alert-danger alert">' . $confirm_password_err . '</div>';
                          }
                          ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="submit" name="submit" value="Submit">
                          
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
              <center>Remeber password?<br><br>
              <a href="/Login/">Log in here</a>!</center>
              <div class="C_Spacer" style="height:30px"></div>
          </div>
        </div>
      </div>
     

  

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
