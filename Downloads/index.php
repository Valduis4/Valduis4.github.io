<?php session_start();
  $URL_REF = $_SERVER['HTTP_REFERER'];
  require("/var/www/database/config.php");
  $page = "Downloads";
  $data = array($page,$URL_REF);
  $stmt = $dbh->prepare("INSERT INTO IncomingLinks (idate,Page,Link) VALUES (Now(),?,?)");
  $stmt->execute($data);
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
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <link rel="stylesheet" href="Downloads_Style.css">
    <title>Row64 - Downloads</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Downloads/" />
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
<script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="Downloads_Scripts.js?1"></script>



    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->
    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>


    <!--################################# END MENU BAR ###################################-->

    

    <div id="ContentLayer">

      <div class="frame" >
        <div class="tBox" >
          <div class="dLine"></div>
        </div>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame">
          <h1>
          <center><font style="font-size:48px;">Download Row64</font></center>
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

      <!--#########--><div class="frame" style="height:50px;background-color:#F7F8F9"></div>

      <div class="frame" style="background-color:#F7F8F9">
        <div class="C_Parent"> 
            <div class="C_Outer">
                <div class="C_LabelBox">
                    
                    <div class="titleT">
                      Download Row64 Here
                    </div>
                    <div class="C_Spacer" style="height:10px"></div>
                    <div class="mainT">
                      The same installer will setup both the
                      free and paid versions.
                    </div>

                    <div class="C_Spacer" style="height:60px"></div>

                    <div class="titleT">
                      Please Fill These Questions
                    </div>
                    <div class="C_Spacer" style="height:10px"></div>
                    <div class="mainT">
                      And we'll get the right Row64 for optimal speed and data
                      scale on your your system
                    </div>
                    <div class="C_Spacer" style="height:60px"></div>

                    <div class="titleT">
                      More Install Information 
                    </div>
                    <div class="C_Spacer" style="height:10px"></div>
                    <div class="mainT">
                      To discuss and get help with installation, please
                      use our <a href="https://forum.row64.com/t/hardware-drivers-gpu/32">forum</a>, or for paid accounts contact us at support@row64.com
                    </div>

                    <div class="C_Spacer" style="height:60px"></div>

                    <div class="titleT">
                      Want To Help Test Row64?
                    </div>
                    <div class="C_Spacer" style="height:10px"></div>
                    <div class="mainT">
                      If your interested in testing development versions,
                      contact us at info@row64.com
                    </div>
                </div>
                
                <div class="C_FormBox">
                    <div class="C_Edge"></div>
                    <div class="C_Center">
                      <div class="C_Spacer" style="height:30px"></div>
                      <!-- <form action="/PlatformRequestSubmit/" id="platformForm" method="POST"> -->
                      <form action="/Login/" id="platformForm" name="platformForm" method="POST">
                        <label for="name" >Version:</label><br>
                        <div class="C_Spacer" style="height:8px"></div>
                        <select id="version" name="version" class="form-control" onchange="ChangeOS()">
                          <option value="Row64 1.5">Row64 1.5</option>
                          <option value="Row64 1.3">Row64 1.3</option>
                          <option value="Row64 1.2">Row64 1.2</option>
                          <option value="Row64 1.01">Row64 1.01</option>
                        </select>
                        <div class="C_Spacer" style="height:24px"></div>

                        <label for="name" >Operating System:</label><br>
                        <select id="platform" name="platform" class="form-control" onchange="ChangeOS()">
                            <option value="Windows">Windows</option>
                            <option value="Mac">Mac</option>
                            <option value="Linux">Linux</option>
                            <option value="Windows 32-bit (legacy)">Windows 32-bit (legacy)</option>
                        </select>
                        <div class="C_Spacer" style="height:24px"></div>
                        
                        <!-- ############################## WINDOWS ############################## -->
                        <div id="PCContainer">
                          <div class="C_Spacer" style="height:15px"></div>

                          <a style="text-decoration:none" href="/Download/Download.php?file_name=Row64_V1_5_Installer.exe"><div class="C_Button" id="C_Button">DOWNLOAD</div></a><br>
                        </div>
                        <div id="PCContainer1"style="display:none;">
                          <div class="C_Spacer" style="height:15px"></div>

                          <a style="text-decoration:none" href="/Download/Download.php?file_name=Row64_V1_3_Installer.exe"><div class="C_Button" id="C_Button">DOWNLOAD</div></a><br>
                        </div>
                        <div id="PCContainer2"style="display:none;">
                          <div class="C_Spacer" style="height:15px"></div>

                          <a style="text-decoration:none" href="/Download/Download.php?file_name=Row64_V1_2_Installer.exe"><div class="C_Button" id="C_Button">DOWNLOAD</div></a><br>
                        </div>
                        <div id="PCContainer3"style="display:none;">
                          <div class="C_Spacer" style="height:15px"></div>

                          <a style="text-decoration:none" href="/Download/Download.php?file_name=Row64_V1_01_Installer.exe"><div class="C_Button" id="C_Button" onclick="">DOWNLOAD</div></a><br>
                        </div>

                        <!-- ############################## MAC ############################## -->
                        <div id="MacContainer">
                          <div class="DlMessage" id="DlMessage">
                            This platform is not currently supported.
                            But we are rapidly expanding compatibility. 
                            Enter your email and we’ll let you know when Row64 
                            is ready for your system.
                          </div>
                          <div class="C_Spacer" style="height:14px"></div>
                          <label for="lname">Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email1" name="email1" value="<?php if(!empty($_SESSION['email'])){echo $_SESSION['email'];}?>">
                          <div class="C_Spacer" style="height:36px"></div>
                          <input type="submit" name="submit" value="REQUEST YOUR PLATFORM">
                        </div>

                        <!-- ############################## LINUX ############################## -->
                        <div id="LinuxContainer">
                            <div><label id="hModelLabel">Distribution:</label><br></div>
                             <select id="os" name="os" class="form-control">
                                <!-- <option value="MacBook">MacBook</option> -->
                                <option value="Ubuntu">Ubuntu</option>
                                <option value="Arch Linux">Arch Linux</option>
                                <option value="Debian">Debian</option>
                                <option value="Fedora">Fedora</option>
                                <option value="Linux Mint">Linux Mint</option>
                                <option value="Xubuntu">Xubuntu</option>
                                <option value="Kubuntu">Kubuntu</option>
                                <option value="Gentoo">Gentoo</option>
                                <option value="OpenSUSE">OpenSUSE</option>
                                <option value="Plasma">Plasma</option>
                                <option value="Manjaro">Manjaro</option>
                                <option value="EndeavourOS">EndeavourOS</option>
                                <option value="elementary">elementary</option>
                                <option value="Garuda">Garuda</option>
                                <option value="KDE neon">KDE neon</option>
                                <option value="Zorin">Zorin</option>
                                <option value="Solus">Solus</option>
                                <option value="deepin">deepin</option>
                                <option value="Other">Other</option>
                            </select>
                          <div class="C_Spacer" style="height:24px"></div>
                          <div class="DlMessage" id="DlMessage">
                            This platform is not currently supported.
                            But we are rapidly expanding  compatibility. 
                            Enter your email and we’ll let you know when Row64
                            is ready for your system.
                          </div>
                          <div class="C_Spacer" style="height:14px"></div>
                          <label for="lname">Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email2" name="email2" value="<?php if(!empty($_SESSION['email'])){echo $_SESSION['email'];}?>">
                          <div class="C_Spacer" style="height:24px"></div>
                          <input type="submit" name="submit" value="REQUEST YOUR PLATFORM">
                        </div>
                        <!-- ############################## WINDOWS 32BIT ############################## -->
                        <div id="Win32BitContainer">
                          <div class="DlMessage" id="DlMessage">
                            This platform is not currently supported.
                            But we are rapidly expanding  compatibility. 
                            Enter your email and we’ll let you know when Row64
                            is ready for your system.
                          </div>
                          <div class="C_Spacer" style="height:14px"></div>
                          <label for="lname">Email:</label><br>
                          <div class="C_Spacer" style="height:8px"></div>
                          <input type="text" id="email3" name="email3" value="<?php if(!empty($_SESSION['email'])){echo $_SESSION['email'];}?>">
                          <div class="C_Spacer" style="height:24px"></div>
                          <input type="submit" name="submit" value="REQUEST YOUR PLATFORM">
                        </div>
                      </form>
                    </div>
                    <div class="C_Edge"></div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <div id="ContentLayerMobile">

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame">
          <h1 id="downloadText">
          <center><font style="font-size:48px;">Download Row64</font></center>
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:35px"></div></div>
      
      <div class="C_MobileTextB" >
      Lightning Speed on the Desktop
      
      <div style="height:2px;background-color: #CCCCCC;"></div>
      <!--#########--><div class="frame"><div class="filler" style="height:20px"></div></div>

      </div>

      <div class="frame" >
        <div class="tBox" >
          <div class="dLine"></div>
        </div>
      </div>

      <div class="C_MobileText" >
        Row64 is currently designed to run on
        the desktop and take advantage of recent breakthroughs
        in hardware.  To use Row64 today, please open
        this download page from a desktop computer.
        <br><br>

        We have also had many requests for a
        mobile & tablet version and are carefully researching this.
        <br><br>

        If you are on the desktop, and have minimized the browser
        to be very narrow - just widen your web browser to see
        the full download page.
      </div>
      <!--#########--><div class="frame"><div class="filler" style="height:50px"></div></div>

    </div>





      <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->
      
      <?php
      require"/var/www/html/bottommenu/bottom.php";
      $color = "#F7F8F9";
      echo bottom($color);
      ?>
  </body>
</html>