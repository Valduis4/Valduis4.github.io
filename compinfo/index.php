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
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <link rel="stylesheet" href="Login_Style.css">
    <link rel="stylesheet" href="R64_Style.css">
    <link rel="stylesheet" href="grid.css">
    <title>Row64 - Company Overview</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/compinfo/" />
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
    $email = trim($_SESSION['email']);
    $email_test = array($email);
    $stmt = $dbh->prepare("SELECT * FROM Users WHERE email = ?");
    $stmt->execute($email_test);
    $results = $stmt->fetch();
    $uid= $results['uid'];

    $company = $results['company'];
    $cid = $results['cid'];

    $cid_go = array($cid);
    $stmt = $dbh->prepare("SELECT * FROM Company WHERE cid = ?");
    $stmt->execute($cid_go);
    $results2 = $stmt->fetch();
    $firstPOC = $results2['firstPOC'];
    $mainPOC = $results2['mainPOC'];
    $ad_uid = $results2['admin_uid'];
    $phone = $results2['phone'];
    $contact = $results2['contact'];
    $stmt = $dbh->prepare("SELECT uid, email, Fname, Lname, comp_v, cdate, type FROM Users WHERE cid = ?");
    $stmt->execute($cid_go);
    $display = $stmt->fetchAll();

    foreach ($display as $key => & $value) {
        unset($value['0']);
        unset($value['1']);
        unset($value['2']);
        unset($value['3']);
        unset($value['4']);
    }

    function build_table($array){
    // start table
    $html = '<div class="table">';
    // header row
    $html .= '<div class="heading">Name</div>';
    $html .= '<div class="heading">Type</div>';
    $html .= '<div class="heading">Date Joined</div>';
    $html .= '<div class="heading">Email</div>';


    // data rows
    foreach( $array as $key=>$value){
    if($value['comp_v'] === "1"){
        $id = $value['uid'];
        $clickid = "clickrow('".htmlspecialchars($id)."')";
        $html .= '<div class="anchor line" id="'.$id.'" onclick="'.$clickid.'">';
        $name = $value['Fname'] . " " . $value['Lname'];
        $date = new DateTime($value['cdate']);
        $html .= '<div class="row" id="'.$id.'"><span>'.htmlspecialchars($name) .'</span></div>';
        $html .= '<div class="row" id="'.$id.'"><span>' . htmlspecialchars($value['type']) . '</span></div>';
        $html .= '<div class="row" id="'.$id.'"><span>' . htmlspecialchars(date_format($date, 'm/d/Y')) . '</span></div>';
        $html .= '<div class="row" id="'.$id.'"><span>' . htmlspecialchars($value['email']) . '</span></div>';
        $html .= '</div>';
        }
        
    }

    // finish table and return it

    $html .= '</div>';
    return $html;
    }

    function build_requests($array){
    // start table
    $html = '<div class="table">';
    // header row
    $html .= '<div class="heading">Name</div>';
    $html .= '<div class="heading">Request Date</div>';
    $html .= '<div class="heading">Email</div>';


    // data rows
    foreach( $array as $key=>$value){
    if($value['comp_v'] === "0"){
        $id = $value['uid'];
        $clickid = "clickrow2('".htmlspecialchars($id)."')";
        $html .= '<div class="anchor line" id="'.$id.'" onclick="'.$clickid.'">';
        $name = $value['Fname'] . " " . $value['Lname'];
        $date = new DateTime($value['cdate']);
        $html .= '<div class="row"><span>'.htmlspecialchars($name) .'</span></div>';
        $html .= '<div class="row"><span>' . htmlspecialchars(date_format($date, 'm/d/Y')) . '</span></div>';
        $html .= '<div class="row"><span>' . htmlspecialchars($value['email']) . '</span></div>';
        $html .= '</div>';
        }
        
    }

    // finish table and return it

    $html .= '</div>';
    return $html;
    }

$tablet_browser = 0;
$mobile_browser = 0;
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
     ?>
    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <div id="ContentLayer">

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame" style="background-color:#FFFFFF">
          <h1>
          <center>Manage Company</center>
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

      <!--#########--><div class="frame" style="height:65px;background-color:#F7F8F9"></div>

    </div>


           <!--################################# DON'T HAVE A LOGIN? ###################################-->


       <!--#########--><div class="infoSpace" style="height:30px;background-color:#F7F8F9"></div>
       <?php
        
if ($mobile_browser > 0) {
   echo '<div class="frame" style="background-color:#F7F8F9">
       <div class="C_FormBox">
            <div class="C_Edge"></div>
                <div class="C_Center">
                    <div class="C_Spacer" style="height:30px"></div>
                    <div class="tBox">
                        <h2>
                            People Magangement is not avalible on Moble
                        </h2>
                        <div class="tBox">
                            
                                Please use a computer to edit people in Company.
                           
                        </div>
                    </div>
                    
                    <div class="C_Spacer" style="height:30px"></div>
                </div>
            </div>

      </div>';
}
else if ($tablet_browser >0) {
   echo '<div class="frame" style="background-color:#F7F8F9">
       <div class="C_FormBox">
            <div class="C_Edge"></div>
                <div class="C_Center">
                    <div class="C_Spacer" style="height:30px"></div>
                    <div class="tBox">
                        <h2>
                            People Magangement is not avalible for tablet
                        </h2>
                        <div class="tBox">
                            
                                Please use a computer to edit people in Company.
                           
                        </div>
                    </div>
                    
                    <div class="C_Spacer" style="height:30px"></div>
                </div>
            </div>

      </div>';
}
else {
   // do something else
       echo '<div class="frame" style="background-color:#F7F8F9">
       <div class="C_FormBox">
            <div class="C_Edge"></div>
                <div class="C_Center">
                    <div class="C_Spacer" style="height:30px"></div>
                    <div class="tBox">
                        <h2>
                            Requests To Join:
                        </h2>
                        <div class="tBox">';
                            
                                echo build_requests($display);
                           
                        echo '</div>
                    </div>
                    <form class="type" id="contactForm" method="POST">
                       <input type="hidden" name="uids1" id="uids1" value=""></input>
                       <button class="blueButton" name="accept" id="accept" value="year" style="margin-bottom: 5px;">Accept</button>
                       <button class="blueButton" name="deny" id="deny" value="year">Deny</button>
                    </form>';
                    
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Something posted

                            if (isset($_POST['accept'])) {
                                require "/var/www/database/config.php";
                                $uids1 = explode(",",$_POST['uids1']);
                                foreach($uids1 as $key=>$yelp){
                                    $data = array($yelp);
                                    $stmt = $dbh->prepare("UPDATE Users SET comp_v = '1' WHERE uid = ?");
                                    $stmt->execute($data);
                                    $_POST = array();
                                    echo '<script type="text/javascript">window.location = "/compinfo"</script>';
                                }
                            } elseif(isset($_POST['deny'])) {
                                require "/var/www/database/config.php";
                                $uids1 = explode(",",$_POST['uids1']);
                                foreach($uids1 as $key=>$yelp){
                                    $data = array($yelp);
                                    $stmt = $dbh->prepare("UPDATE Users SET company = '', cid='', comp_v='0' WHERE uid = ?");
                                    $stmt->execute($data);
                                    $_POST = array();
                                    echo '<script type="text/javascript">window.location = "/compinfo"</script>';
                                } 
                            } else{
                                //Not these buttons
                            }
                        }
                    
                    echo '<div class="C_Spacer" style="height:30px"></div>
                </div>
            </div>

      </div>
      <div class="frame" style="background-color:#F7F8F9">
        <div class="C_Spacer" style="height:30px"></div>
      </div>
      <div class="frame" style="background-color:#F7F8F9">
        <div class="C_FormBox">
            <div class="C_Edge"></div>
                <div class="C_Center">
                    <div class="C_Spacer" style="height:30px"></div>
                    <div class="tBox">
                        <h2>
                            Company List
                        </h2>
                        <div class="tBox">';
                            
                                echo build_table($display);
                                                                                   
                        echo '</div>
                    </div>
                    <form class="type" id="contactForm" method="POST">
                        <input type="hidden" name="uids" id="uids" value=""></input>
                       <button class="blueButton" name="change" id="change" value="year" style="margin-bottom: 5px;">Change</button>
                       <button class="blueButton" name="remove" id="remove" value="year">Remove</button>
                    </form>';
                    
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Something posted

                            if (isset($_POST['change'])) {
                                require "/var/www/database/config.php";
                                $uids = explode(",",$_POST['uids']);
                                foreach($uids as $key=>$yelp){
                                    $data = array($yelp);
                                    $stmt = $dbh->prepare("SELECT * FROM Users WHERE uid=?");
                                    $stmt->execute($data);
                                    $results3 = $stmt->fetch();
                                    $type = $results3['type'];
                                    if($type === "User"){
                                        $newtype = "Admin";
                                    } else{
                                        $newtype = "User";
                                    }
                                    $data1 = array($newtype,$yelp);
                                    $stmt = $dbh->prepare("UPDATE Users SET type=? WHERE uid=?");
                                    $stmt->execute($data1);
                                    $_POST = array();
                                    echo '<script type="text/javascript">window.location = "/compinfo"</script>';
                                }
                            } elseif(isset($_POST['remove'])) {
                                require "/var/www/database/config.php";
                                $uids = explode(",",$_POST['uids']);
                                foreach($uids as $key=>$yelp){
                                    $data = array($yelp);
                                    $stmt = $dbh->prepare("UPDATE Users SET company = '', cid='', comp_v='0' WHERE uid = ?");
                                    $stmt->execute($data);
                                    $_POST = array();
                                    echo '<script type="text/javascript">window.location = "/compinfo"</script>';
                                } 
                            } else{
                                //Not these buttons
                            }
                        }
                    
                    echo '<div class="C_Spacer" style="height:30px"></div>
                </div>
            </div>

      </div>';
      }
      ?>
      <div class="frame" style="background-color:#F7F8F9">
        <div class="C_Spacer" style="height:30px"></div>
      </div>
      <div class="frame" style="background-color:#F7F8F9">
         <div class="C_FormBox">
            <div class="C_Edge"></div>
                <div class="C_Center">
                    <div class="C_Spacer" style="height:30px"></div>
                    <div class="tBox">
                        <h2>
                            Company Information
                        </h2>
                        <div class="tBox">
                            <?php
                                echo "Company Name: " . $company . "<br><br>";
                                echo "Contact Name: " . $contact . "<br><br>";
                                echo "Phone Number: " . $phone . "<br><br>";
                                echo '<a href="/compinfo/Change.php"> Update Information</a><br><br>';
                            ?>
                        </div>
                    </div>
                    <div class="C_Spacer" style="height:30px"></div>
                </div>
            </div>
         </div>
        </div>
      </div>

      <!--#########--><div class="infoSpace" style="height:30px;background-color:#F7F8F9"></div>
      <div class="frame" style="background-color:#F7F8F9">
        <div class="tcontainer">
          <div class="titleT" >
              <center>
              <a href="/Welcome/">Return To Your Dashboard</a>!</center>
              <div class="C_Spacer" style="height:30px"></div>
          </div>
        </div>
      </div>

      <!--#########--><div class="infoSpace" style="height:60px;background-color:#FFFFFF"></div>

      <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->
      <?php
      require"/var/www/html/bottommenu/bottom.php";
      echo bottom("#FFFFFF");
      ?>
  </body>
</html>