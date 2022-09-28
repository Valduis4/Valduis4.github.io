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
    <link rel="stylesheet" href="Register_Style.css">
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <title>Row64 - Update Information</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/change" />
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
          Update Profile
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>
      <?php
      $emailp = trim($_SESSION['email']);
      $emailpt = array($emailp);
      require("/var/www/database/config.php");
      $stmt = $dbh->prepare("SELECT * FROM Users WHERE email = ?");
      $stmt->execute($emailpt);
      $results = $stmt->fetch();
      $uid = $results['uid'];
      $usernamep = $results['username'];
      $phonep = $results['phone'];
      $Fnamep = $results['Fname'];
      $Lnamep = $results['Lname'];
      $companyp = $results['company'];

      $username = $password = $confirm_password = $email = $confirm_email = $phone = $Fname = $Lname = $company = $usefor = "";
        $username_err = $password_err = $confirm_password_err = $email_err = $confirm_email_err = $phone_err = $Fname_err = $Lname_err = $company_err = $usefor_err = "";
        require("/var/www/database/config.php");
            if($_SERVER["REQUEST_METHOD"] == "POST"){

              if(empty(trim($_POST["password"]))){
                  $password_err = "Please enter a password.";
              } elseif(!preg_match('/^[a-zA-Z0-9_!@#$%^&*:.]+$/', trim($_POST["password"]))){
                  $password_err = "Password can only contain letters, numbers, _, !, @, #, $, %, ^, &, *, :, and .";
              } elseif(strlen(trim($_POST["password"])) < 8){
                  $password_err = "Password must be longer than 8 characters";
              } else{
                  $password = trim($_POST["password"]);
              }
            
                if(empty(trim($_POST["username"]))){
                    
                } elseif(trim($_POST['username']) === $usernamep){
                    $username = trim($_POST['username']);
                }elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
                    $username_err = "Username can only contain letters, numbers, and underscores";
                } else{
                    $username_test = array(trim($_POST["username"]));
                    $stmt=$dbh->prepare("SELECT uid FROM Users WHERE username = ?");
                    $stmt->execute($username_test);
                    if($stmt->rowCount() > 0){
                        $username_err = "Username is already in use.";
                    } else{
                        $username = trim($_POST["username"]);
                    }
                }

                //Validate email, needs datatable check
                if(empty(trim($_POST["email"]))){
                    $email_err = "Please input an email.";
                } elseif(trim($_POST["email"]) === trim($_SESSION["email"])){
                    $email = trim($_POST['email']);
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

                //Validate phone#
                if(empty(trim($_POST["phone"]))){
                    
                } else{
                    $phone = trim($_POST['phone']);
                }

                //Validate Fname
                if(empty(trim($_POST["Fname"]))){
                    
                } elseif(!preg_match('/^[a-zA-Z0-9 _!,.&#$]+$/', trim($_POST["Fname"]))){
                    $Fname_err = "Your first name can only include letters, numbers, whitespaces, _, !, ,, ., &, #, and $.";
                } else{
                    $Fname = trim($_POST["Fname"]);
                }

                
                //Validate Lname
                if(empty(trim($_POST["Fname"]))){
                    
                } elseif(!preg_match('/^[a-zA-Z0-9 _!,.&#$]+$/', trim($_POST["Lname"]))){
                    $Lname_err = "Your last name can only include letters, numbers, whitespaces, _, !, ,, ., &, #, and $.";
                } else{
                    $Lname = trim($_POST["Lname"]);
                }

                $country = $_POST['country'];

                if(isset($_POST['subscribe']) && 
                $_POST['subscribe'] == 'Yes') 
                {
                    $stype = true;
                }else  {
                    $stype = false;
                }
                

                //Validate that there is no problems and uplaod, needs email
                if(empty($username_err) && empty($email_err) && empty($phone_err) && empty($Fname_err) && empty($Lname_err) && empty($password_err)){
                     //needs to email might need to be a non-test server
                    
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

                     $passwd_hash = password_hash($password, PASSWORD_DEFAULT);
                     $ip = $_SERVER['REMOTE_ADDR'];
                     $data = array($passwd_hash,$username,$email,$phone,$Fname,$Lname,$country,$uid);
                     $stmt = $dbh->prepare("UPDATE Users SET password=? username=?, email=?, phone=?, Fname=?, Lname=?, country=? WHERE uid=?");
                     $stmt->execute($data);
                     echo '<script type="text/javascript">window.location = "/Welcome"</script>';
                } else{/*
                    
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
                */}
            }
      ?>
      <div class="frame" style="height:fit-content;background-color:#FFFFFF">
        <div class="C_Parent" style="height:fit-content;background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;width:100%;max-width:950px;">
        <div style="height:30px"></div> 
            <div class="C_Outer" style="height:fit-content">

                <div class="C_FormBox" style="height:fit-content;box-shadow: 5px 5px 10px grey;">
                    <div class="C_Edge"></div>
                      <div class="C_Center"style="height:fit-content">
                        <div class="C_Spacer" style="height:30px"></div>
                        <form id="contactForm" method="POST">

                          <label>Username:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($usernamep); ?>"style="<?php if(empty($username_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>"><br>
                          <?php if(!empty($username_err)){
                            echo '<div class="alert alert-danger">' . $username_err . '</div>';
                          } ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($emailp); ?>" style="<?php if(empty($email_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($email_err)){
                            echo '<div class="alert alert-danger">' . $email_err . '</div>';
                          } ?>
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

                          <label>Phone:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phonep); ?>" style="<?php if(empty($phone_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($phone_err)){
                            echo '<div class="alert alert-danger">' . $phone_err . '</div>';
                          } ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>First Name:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="Fname" name="Fname" value="<?php echo htmlspecialchars($Fnamep); ?>" style="<?php if(empty($Fname_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($Fname_err)){
                            echo '<div class="alert alert-danger">' . $Fname_err . '</div>';
                          } ?>
                          <div class="C_Spacer" style="height:24px"></div>
                          
                          <label>Last Name:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="Lname" name="Lname" value="<?php echo htmlspecialchars($Lnamep); ?>" style="<?php if(empty($Lname_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($Lname_err)){
                            echo '<div class="alert alert-danger">' . $Lname_err . '</div>';
                          } ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Country:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <select id="country" name="country" class="form-control">
                              <option value="United States">United States</option>
                              <option value="Afghanistan">Afghanistan</option>
                              <option value="�land Islands">Aland Islands</option>
                              <option value="Albania">Albania</option>
                              <option value="Algeria">Algeria</option>
                              <option value="American Samoa">American Samoa</option>
                              <option value="Andorra">Andorra</option>
                              <option value="Angola">Angola</option>
                              <option value="Anguilla">Anguilla</option>
                              <option value="Antarctica">Antarctica</option>
                              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                              <option value="Argentina">Argentina</option>
                              <option value="Armenia">Armenia</option>
                              <option value="Aruba">Aruba</option>
                              <option value="Australia">Australia</option>
                              <option value="Austria">Austria</option>
                              <option value="Azerbaijan">Azerbaijan</option>
                              <option value="Bahamas">Bahamas</option>
                              <option value="Bahrain">Bahrain</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Barbados">Barbados</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Belgium">Belgium</option>
                              <option value="Belize">Belize</option>
                              <option value="Benin">Benin</option>
                              <option value="Bermuda">Bermuda</option>
                              <option value="Bhutan">Bhutan</option>
                              <option value="Bolivia">Bolivia</option>
                              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Bouvet Island">Bouvet Island</option>
                              <option value="Brazil">Brazil</option>
                              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                              <option value="Brunei Darussalam">Brunei Darussalam</option>
                              <option value="Bulgaria">Bulgaria</option>
                              <option value="Burkina Faso">Burkina Faso</option>
                              <option value="Burundi">Burundi</option>
                              <option value="Cambodia">Cambodia</option>
                              <option value="Cameroon">Cameroon</option>
                              <option value="Canada">Canada</option>
                              <option value="Cape Verde">Cape Verde</option>
                              <option value="Cayman Islands">Cayman Islands</option>
                              <option value="Central African Republic">Central African Republic</option>
                              <option value="Chad">Chad</option>
                              <option value="Chile">Chile</option>
                              <option value="China">China</option>
                              <option value="Christmas Island">Christmas Island</option>
                              <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                              <option value="Colombia">Colombia</option>
                              <option value="Comoros">Comoros</option>
                              <option value="Congo">Congo</option>
                              <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                              <option value="Cook Islands">Cook Islands</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Cote D'ivoire">Cote D'ivoire</option>
                              <option value="Croatia">Croatia</option>
                              <option value="Cuba">Cuba</option>
                              <option value="Cyprus">Cyprus</option>
                              <option value="Czech Republic">Czech Republic</option>
                              <option value="Denmark">Denmark</option>
                              <option value="Djibouti">Djibouti</option>
                              <option value="Dominica">Dominica</option>
                              <option value="Dominican Republic">Dominican Republic</option>
                              <option value="Ecuador">Ecuador</option>
                              <option value="Egypt">Egypt</option>
                              <option value="El Salvador">El Salvador</option>
                              <option value="Equatorial Guinea">Equatorial Guinea</option>
                              <option value="Eritrea">Eritrea</option>
                              <option value="Estonia">Estonia</option>
                              <option value="Ethiopia">Ethiopia</option>
                              <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                              <option value="Faroe Islands">Faroe Islands</option>
                              <option value="Fiji">Fiji</option>
                              <option value="Finland">Finland</option>
                              <option value="France">France</option>
                              <option value="French Guiana">French Guiana</option>
                              <option value="French Polynesia">French Polynesia</option>
                              <option value="French Southern Territories">French Southern Territories</option>
                              <option value="Gabon">Gabon</option>
                              <option value="Gambia">Gambia</option>
                              <option value="Georgia">Georgia</option>
                              <option value="Germany">Germany</option>
                              <option value="Ghana">Ghana</option>
                              <option value="Gibraltar">Gibraltar</option>
                              <option value="Greece">Greece</option>
                              <option value="Greenland">Greenland</option>
                              <option value="Grenada">Grenada</option>
                              <option value="Guadeloupe">Guadeloupe</option>
                              <option value="Guam">Guam</option>
                              <option value="Guatemala">Guatemala</option>
                              <option value="Guernsey">Guernsey</option>
                              <option value="Guinea">Guinea</option>
                              <option value="Guinea-bissau">Guinea-bissau</option>
                              <option value="Guyana">Guyana</option>
                              <option value="Haiti">Haiti</option>
                              <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                              <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                              <option value="Honduras">Honduras</option>
                              <option value="Hong Kong">Hong Kong</option>
                              <option value="Hungary">Hungary</option>
                              <option value="Iceland">Iceland</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Ireland">Ireland</option>
                              <option value="Isle of Man">Isle of Man</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Jamaica">Jamaica</option>
                              <option value="Japan">Japan</option>
                              <option value="Jersey">Jersey</option>
                              <option value="Jordan">Jordan</option>
                              <option value="Kazakhstan">Kazakhstan</option>
                              <option value="Kenya">Kenya</option>
                              <option value="Kiribati">Kiribati</option>
                              <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                              <option value="Korea, Republic of">Korea, Republic of</option>
                              <option value="Kuwait">Kuwait</option>
                              <option value="Kyrgyzstan">Kyrgyzstan</option>
                              <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                              <option value="Latvia">Latvia</option>
                              <option value="Lebanon">Lebanon</option>
                              <option value="Lesotho">Lesotho</option>
                              <option value="Liberia">Liberia</option>
                              <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                              <option value="Liechtenstein">Liechtenstein</option>
                              <option value="Lithuania">Lithuania</option>
                              <option value="Luxembourg">Luxembourg</option>
                              <option value="Macao">Macao</option>
                              <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                              <option value="Madagascar">Madagascar</option>
                              <option value="Malawi">Malawi</option>
                              <option value="Malaysia">Malaysia</option>
                              <option value="Maldives">Maldives</option>
                              <option value="Mali">Mali</option>
                              <option value="Malta">Malta</option>
                              <option value="Marshall Islands">Marshall Islands</option>
                              <option value="Martinique">Martinique</option>
                              <option value="Mauritania">Mauritania</option>
                              <option value="Mauritius">Mauritius</option>
                              <option value="Mayotte">Mayotte</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                              <option value="Moldova, Republic of">Moldova, Republic of</option>
                              <option value="Monaco">Monaco</option>
                              <option value="Mongolia">Mongolia</option>
                              <option value="Montenegro">Montenegro</option>
                              <option value="Montserrat">Montserrat</option>
                              <option value="Morocco">Morocco</option>
                              <option value="Mozambique">Mozambique</option>
                              <option value="Myanmar">Myanmar</option>
                              <option value="Namibia">Namibia</option>
                              <option value="Nauru">Nauru</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Netherlands">Netherlands</option>
                              <option value="Netherlands Antilles">Netherlands Antilles</option>
                              <option value="New Caledonia">New Caledonia</option>
                              <option value="New Zealand">New Zealand</option>
                              <option value="Nicaragua">Nicaragua</option>
                              <option value="Niger">Niger</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Niue">Niue</option>
                              <option value="Norfolk Island">Norfolk Island</option>
                              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                              <option value="Norway">Norway</option>
                              <option value="Oman">Oman</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Palau">Palau</option>
                              <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                              <option value="Panama">Panama</option>
                              <option value="Papua New Guinea">Papua New Guinea</option>
                              <option value="Paraguay">Paraguay</option>
                              <option value="Peru">Peru</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Pitcairn">Pitcairn</option>
                              <option value="Poland">Poland</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Puerto Rico">Puerto Rico</option>
                              <option value="Qatar">Qatar</option>
                              <option value="Reunion">Reunion</option>
                              <option value="Romania">Romania</option>
                              <option value="Russian Federation">Russian Federation</option>
                              <option value="Rwanda">Rwanda</option>
                              <option value="Saint Helena">Saint Helena</option>
                              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                              <option value="Saint Lucia">Saint Lucia</option>
                              <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                              <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                              <option value="Samoa">Samoa</option>
                              <option value="San Marino">San Marino</option>
                              <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                              <option value="Saudi Arabia">Saudi Arabia</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Serbia">Serbia</option>
                              <option value="Seychelles">Seychelles</option>
                              <option value="Sierra Leone">Sierra Leone</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Slovakia">Slovakia</option>
                              <option value="Slovenia">Slovenia</option>
                              <option value="Solomon Islands">Solomon Islands</option>
                              <option value="Somalia">Somalia</option>
                              <option value="South Africa">South Africa</option>
                              <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                              <option value="Spain">Spain</option>
                              <option value="Sri Lanka">Sri Lanka</option>
                              <option value="Sudan">Sudan</option>
                              <option value="Suriname">Suriname</option>
                              <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                              <option value="Swaziland">Swaziland</option>
                              <option value="Sweden">Sweden</option>
                              <option value="Switzerland">Switzerland</option>
                              <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                              <option value="Taiwan">Taiwan</option>
                              <option value="Tajikistan">Tajikistan</option>
                              <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Timor-leste">Timor-leste</option>
                              <option value="Togo">Togo</option>
                              <option value="Tokelau">Tokelau</option>
                              <option value="Tonga">Tonga</option>
                              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                              <option value="Tunisia">Tunisia</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Turkmenistan">Turkmenistan</option>
                              <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                              <option value="Tuvalu">Tuvalu</option>
                              <option value="Uganda">Uganda</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                              <option value="Uruguay">Uruguay</option>
                              <option value="Uzbekistan">Uzbekistan</option>
                              <option value="Vanuatu">Vanuatu</option>
                              <option value="Venezuela">Venezuela</option>
                              <option value="Viet Nam">Viet Nam</option>
                              <option value="Virgin Islands, British">Virgin Islands, British</option>
                              <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                              <option value="Wallis and Futuna">Wallis and Futuna</option>
                              <option value="Western Sahara">Western Sahara</option>
                              <option value="Yemen">Yemen</option>
                              <option value="Zambia">Zambia</option>
                              <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                          <div class="C_Spacer" style="height:24px"></div>

                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="checkbox" class="sbox" name="subscribe" id="subscribe" value="Yes" checked/><label>Subscribe to Row64 News & Updates</label>
                          <div class="C_Spacer" style="height:10px"></div>
                          <input type="submit" name="submit" value="Update">

                        </form>
                        <div class="C_Spacer" style="height:30px"></div>
                     </div>
                    <div class="C_Edge"></div>
                </div>
            </div>
            <div class="CM_Outer"style="height:fit-content">
                  
                  <div class="C_LabelBox">
                    <div class="C_FormBox"style="height:fit-content;box-shadow: 5px 5px 10px grey;">
                      <div class="C_EdgeMobile"></div>
                      <div class="C_Center" style="width:700px">
                        <div class="C_Spacer" style="height:30px;"></div>
                        <form id="loginForm" method="POST">

                          <label>Username:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($usernamep); ?>"style="<?php if(empty($username_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>"><br>
                          <?php if(!empty($username_err)){
                            echo '<div class="alert alert-danger">' . $username_err . '</div>';
                          } ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($emailp); ?>" style="<?php if(empty($email_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($email_err)){
                            echo '<div class="alert alert-danger">' . $email_err . '</div>';
                          } ?>
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

                          <label>Phone:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($phonep); ?>" style="<?php if(empty($phone_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($phone_err)){
                            echo '<div class="alert alert-danger">' . $phone_err . '</div>';
                          } ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>First Name:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="Fname" name="Fname" value="<?php echo htmlspecialchars($Fnamep); ?>" style="<?php if(empty($Fname_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($Fname_err)){
                            echo '<div class="alert alert-danger">' . $Fname_err . '</div>';
                          } ?>
                          <div class="C_Spacer" style="height:24px"></div>
                          
                          <label>Last Name:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="Lname" name="Lname" value="<?php echo htmlspecialchars($Lnamep); ?>" style="<?php if(empty($Lname_err)){
                                echo 'border: 1px solid #D9D9D9;';
                          } else{
                            echo 'border: 1px solid #D30000;';
                          }?>">
                          <?php if(!empty($Lname_err)){
                            echo '<div class="alert alert-danger">' . $Lname_err . '</div>';
                          } ?>
                          <div class="C_Spacer" style="height:24px"></div>

                          <label>Country:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <select id="country" name="country" class="form-control">
                              <option value="United States">United States</option>
                              <option value="Afghanistan">Afghanistan</option>
                              <option value="�land Islands">Aland Islands</option>
                              <option value="Albania">Albania</option>
                              <option value="Algeria">Algeria</option>
                              <option value="American Samoa">American Samoa</option>
                              <option value="Andorra">Andorra</option>
                              <option value="Angola">Angola</option>
                              <option value="Anguilla">Anguilla</option>
                              <option value="Antarctica">Antarctica</option>
                              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                              <option value="Argentina">Argentina</option>
                              <option value="Armenia">Armenia</option>
                              <option value="Aruba">Aruba</option>
                              <option value="Australia">Australia</option>
                              <option value="Austria">Austria</option>
                              <option value="Azerbaijan">Azerbaijan</option>
                              <option value="Bahamas">Bahamas</option>
                              <option value="Bahrain">Bahrain</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Barbados">Barbados</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Belgium">Belgium</option>
                              <option value="Belize">Belize</option>
                              <option value="Benin">Benin</option>
                              <option value="Bermuda">Bermuda</option>
                              <option value="Bhutan">Bhutan</option>
                              <option value="Bolivia">Bolivia</option>
                              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Bouvet Island">Bouvet Island</option>
                              <option value="Brazil">Brazil</option>
                              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                              <option value="Brunei Darussalam">Brunei Darussalam</option>
                              <option value="Bulgaria">Bulgaria</option>
                              <option value="Burkina Faso">Burkina Faso</option>
                              <option value="Burundi">Burundi</option>
                              <option value="Cambodia">Cambodia</option>
                              <option value="Cameroon">Cameroon</option>
                              <option value="Canada">Canada</option>
                              <option value="Cape Verde">Cape Verde</option>
                              <option value="Cayman Islands">Cayman Islands</option>
                              <option value="Central African Republic">Central African Republic</option>
                              <option value="Chad">Chad</option>
                              <option value="Chile">Chile</option>
                              <option value="China">China</option>
                              <option value="Christmas Island">Christmas Island</option>
                              <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                              <option value="Colombia">Colombia</option>
                              <option value="Comoros">Comoros</option>
                              <option value="Congo">Congo</option>
                              <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                              <option value="Cook Islands">Cook Islands</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Cote D'ivoire">Cote D'ivoire</option>
                              <option value="Croatia">Croatia</option>
                              <option value="Cuba">Cuba</option>
                              <option value="Cyprus">Cyprus</option>
                              <option value="Czech Republic">Czech Republic</option>
                              <option value="Denmark">Denmark</option>
                              <option value="Djibouti">Djibouti</option>
                              <option value="Dominica">Dominica</option>
                              <option value="Dominican Republic">Dominican Republic</option>
                              <option value="Ecuador">Ecuador</option>
                              <option value="Egypt">Egypt</option>
                              <option value="El Salvador">El Salvador</option>
                              <option value="Equatorial Guinea">Equatorial Guinea</option>
                              <option value="Eritrea">Eritrea</option>
                              <option value="Estonia">Estonia</option>
                              <option value="Ethiopia">Ethiopia</option>
                              <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                              <option value="Faroe Islands">Faroe Islands</option>
                              <option value="Fiji">Fiji</option>
                              <option value="Finland">Finland</option>
                              <option value="France">France</option>
                              <option value="French Guiana">French Guiana</option>
                              <option value="French Polynesia">French Polynesia</option>
                              <option value="French Southern Territories">French Southern Territories</option>
                              <option value="Gabon">Gabon</option>
                              <option value="Gambia">Gambia</option>
                              <option value="Georgia">Georgia</option>
                              <option value="Germany">Germany</option>
                              <option value="Ghana">Ghana</option>
                              <option value="Gibraltar">Gibraltar</option>
                              <option value="Greece">Greece</option>
                              <option value="Greenland">Greenland</option>
                              <option value="Grenada">Grenada</option>
                              <option value="Guadeloupe">Guadeloupe</option>
                              <option value="Guam">Guam</option>
                              <option value="Guatemala">Guatemala</option>
                              <option value="Guernsey">Guernsey</option>
                              <option value="Guinea">Guinea</option>
                              <option value="Guinea-bissau">Guinea-bissau</option>
                              <option value="Guyana">Guyana</option>
                              <option value="Haiti">Haiti</option>
                              <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                              <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                              <option value="Honduras">Honduras</option>
                              <option value="Hong Kong">Hong Kong</option>
                              <option value="Hungary">Hungary</option>
                              <option value="Iceland">Iceland</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Ireland">Ireland</option>
                              <option value="Isle of Man">Isle of Man</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Jamaica">Jamaica</option>
                              <option value="Japan">Japan</option>
                              <option value="Jersey">Jersey</option>
                              <option value="Jordan">Jordan</option>
                              <option value="Kazakhstan">Kazakhstan</option>
                              <option value="Kenya">Kenya</option>
                              <option value="Kiribati">Kiribati</option>
                              <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                              <option value="Korea, Republic of">Korea, Republic of</option>
                              <option value="Kuwait">Kuwait</option>
                              <option value="Kyrgyzstan">Kyrgyzstan</option>
                              <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                              <option value="Latvia">Latvia</option>
                              <option value="Lebanon">Lebanon</option>
                              <option value="Lesotho">Lesotho</option>
                              <option value="Liberia">Liberia</option>
                              <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                              <option value="Liechtenstein">Liechtenstein</option>
                              <option value="Lithuania">Lithuania</option>
                              <option value="Luxembourg">Luxembourg</option>
                              <option value="Macao">Macao</option>
                              <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                              <option value="Madagascar">Madagascar</option>
                              <option value="Malawi">Malawi</option>
                              <option value="Malaysia">Malaysia</option>
                              <option value="Maldives">Maldives</option>
                              <option value="Mali">Mali</option>
                              <option value="Malta">Malta</option>
                              <option value="Marshall Islands">Marshall Islands</option>
                              <option value="Martinique">Martinique</option>
                              <option value="Mauritania">Mauritania</option>
                              <option value="Mauritius">Mauritius</option>
                              <option value="Mayotte">Mayotte</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                              <option value="Moldova, Republic of">Moldova, Republic of</option>
                              <option value="Monaco">Monaco</option>
                              <option value="Mongolia">Mongolia</option>
                              <option value="Montenegro">Montenegro</option>
                              <option value="Montserrat">Montserrat</option>
                              <option value="Morocco">Morocco</option>
                              <option value="Mozambique">Mozambique</option>
                              <option value="Myanmar">Myanmar</option>
                              <option value="Namibia">Namibia</option>
                              <option value="Nauru">Nauru</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Netherlands">Netherlands</option>
                              <option value="Netherlands Antilles">Netherlands Antilles</option>
                              <option value="New Caledonia">New Caledonia</option>
                              <option value="New Zealand">New Zealand</option>
                              <option value="Nicaragua">Nicaragua</option>
                              <option value="Niger">Niger</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Niue">Niue</option>
                              <option value="Norfolk Island">Norfolk Island</option>
                              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                              <option value="Norway">Norway</option>
                              <option value="Oman">Oman</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Palau">Palau</option>
                              <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                              <option value="Panama">Panama</option>
                              <option value="Papua New Guinea">Papua New Guinea</option>
                              <option value="Paraguay">Paraguay</option>
                              <option value="Peru">Peru</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Pitcairn">Pitcairn</option>
                              <option value="Poland">Poland</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Puerto Rico">Puerto Rico</option>
                              <option value="Qatar">Qatar</option>
                              <option value="Reunion">Reunion</option>
                              <option value="Romania">Romania</option>
                              <option value="Russian Federation">Russian Federation</option>
                              <option value="Rwanda">Rwanda</option>
                              <option value="Saint Helena">Saint Helena</option>
                              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                              <option value="Saint Lucia">Saint Lucia</option>
                              <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                              <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                              <option value="Samoa">Samoa</option>
                              <option value="San Marino">San Marino</option>
                              <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                              <option value="Saudi Arabia">Saudi Arabia</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Serbia">Serbia</option>
                              <option value="Seychelles">Seychelles</option>
                              <option value="Sierra Leone">Sierra Leone</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Slovakia">Slovakia</option>
                              <option value="Slovenia">Slovenia</option>
                              <option value="Solomon Islands">Solomon Islands</option>
                              <option value="Somalia">Somalia</option>
                              <option value="South Africa">South Africa</option>
                              <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                              <option value="Spain">Spain</option>
                              <option value="Sri Lanka">Sri Lanka</option>
                              <option value="Sudan">Sudan</option>
                              <option value="Suriname">Suriname</option>
                              <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                              <option value="Swaziland">Swaziland</option>
                              <option value="Sweden">Sweden</option>
                              <option value="Switzerland">Switzerland</option>
                              <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                              <option value="Taiwan">Taiwan</option>
                              <option value="Tajikistan">Tajikistan</option>
                              <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Timor-leste">Timor-leste</option>
                              <option value="Togo">Togo</option>
                              <option value="Tokelau">Tokelau</option>
                              <option value="Tonga">Tonga</option>
                              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                              <option value="Tunisia">Tunisia</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Turkmenistan">Turkmenistan</option>
                              <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                              <option value="Tuvalu">Tuvalu</option>
                              <option value="Uganda">Uganda</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                              <option value="Uruguay">Uruguay</option>
                              <option value="Uzbekistan">Uzbekistan</option>
                              <option value="Vanuatu">Vanuatu</option>
                              <option value="Venezuela">Venezuela</option>
                              <option value="Viet Nam">Viet Nam</option>
                              <option value="Virgin Islands, British">Virgin Islands, British</option>
                              <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                              <option value="Wallis and Futuna">Wallis and Futuna</option>
                              <option value="Western Sahara">Western Sahara</option>
                              <option value="Yemen">Yemen</option>
                              <option value="Zambia">Zambia</option>
                              <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                          <div class="C_Spacer" style="height:24px"></div>
                          
                          <div class="C_Spacer" style="height:34px"></div>
                          <input type="checkbox" class="sbox" name="subscribe" id="subscribe" value="Yes" checked/><label>Subscribe to Row64 News & Updates</label>
                          <div class="C_Spacer" style="height:10px"></div>
                          <input type="submit" name="submit" value="Update">
                          
                        </form>
                        <div class="C_Spacer" style="height:30px;"></div> 
                     </div>
                    <div class="C_EdgeMobile" ></div>
                </div>
                </div>
            </div>
            <div style="height:20px;"></div>
            <div class="titleT" style="text-align:center">
              <a href="/Welcome/" style="text-decoration:none;color:#1189F2;">Return to Dashboard</a>
          </div>
          <div style="height:30px"></div> 
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
