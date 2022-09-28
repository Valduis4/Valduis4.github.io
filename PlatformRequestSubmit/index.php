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

    <link rel="stylesheet" href="Contact_Style.css">
    <title>Row64 - Platform Request</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
  </head>
  <script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="ContactUs_Scripts.js"></script>


    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>

    <!--################################# END MENU BAR ###################################-->





    <div class="frame" >
      <div class="tBox" >
        <div class="dLine"></div>
      </div>
    </div>

    <div id="ContentLayer">
    <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
    <div class="frame">
      <div class="mainT">
        <h1>
        <center><font style="font-size:33px;">Your Platform Request Is Submitted!</font></center>
        </h1>
        <center><font style="font-size:24px;">We'll get back to you soon.</font></center>
        </div>
    </div>
    
    <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

    <!--#########--><div class="frame" style="height:180px;"></div>

    <!--#########--><div class="frame" style="height:50px;"></div>

    </div>
    
<?php
    
    // echo "<pre>"; print_r($_POST) ;  echo "</pre>";
    require('/var/www/Connect.php');
    if(isset($_POST["submit"])){
      $email = '';
      $email1 = '';
      $email2 = '';
      $email3 = '';
      if (isset($_POST['email1'])) {$email1 = $_POST['email1'];}
      if (isset($_POST['email2'])) {$email2 = $_POST['email2'];}
      if (isset($_POST['email3'])) {$email3 = $_POST['email3'];}
      if($email1 !== ''){$email = $email1;}
      else if($email2 !== ''){$email = $email2;}
      else if($email3 !== ''){$email = $email3;}
      $os = '';
      $platform = '';
      if (isset($_POST['os'])) {$os = $_POST['os'];}
      if (isset($_POST['platform'])) {$platform = $_POST['platform'];}
      if($platform !== "Linux"){$os='';}
      
      try {
          $pdo = new PDO('mysql:host=localhost;dbname=Row64;charset=utf8', $DbConnect['user'], $DbConnect['password']);
          $ip = $_SERVER['REMOTE_ADDR'];
          $data = array($ip,$email, $platform, $os);
          $result = $pdo->prepare("INSERT INTO Install (idate,Ip,Email,Platform,OS) values (NOW(), ?, ?, ?, ?)");
          $result->execute($data);
          $pdo = null;

      } catch (PDOException $e) {
          // print "Error!: " . $e->getMessage() . "<br/>";
          die();
      }

    }
    
?>



      <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->
      

      <!--#########--><div class="frame" style="height:110px;background-color:#F7F8F9"></div>


      <!--############################ MOBILE / TABLET INFO ###############################-->

      <div class="frame" style="background-color:#F7F8F9">
        <div class="infoParentNarrow"> 
          <div class="infoContainer">
              <a href="#"><img src="./images/Row64_LogoMobile.png" alt=""></a>
              
              <div class="info_SpacerB" style="height:55px;"></div>
              <a class="amInfoB">Data Products</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/">Overview</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/">Spreadsheet Features</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/">Dataframe Features</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/">Notebook Features</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/">GeoAnalysis Features</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/">Charting Features</a>

              <div class="info_Spacer" style="height:70px;"></div>
              
              <a class="amInfoB">Company</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/ContactUs">Contact Us</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/Company">Team</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="/Jobs">Jobs</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="blog/index.html">Blog</a>
              <div class="info_Spacer"></div>
              <a class="amInfo" href="https://forum.row64.com/">Forum</a>
              <div class="info_Spacer"></div>

          </div>
        </div>
      </div>

      <!--################################ DESKTOP INFO ###################################-->
      <div class="frame" style="background-color:#F7F8F9"> <!--  -->
        <div class="infoParent"> 
          <div class="infoContainerWide">

              <div class="infoBoxLogo">
                  
                  <div class="info_Center" style="width:200px">
                    <!-- <div class="info_LEdge">left edge</div> -->
                    <a href="/"><img src="./images/Row64_Logo.png" alt=""></a>
                    <!-- <div class="info_REdge">right edge</div> -->
                  </div>
                  
              </div>
              <div class="info_REdge"></div>
              <div class="infoBox">
                  <div class="info_Center">
                    <a class="aInfoB">Data Features</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Overview</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Spreadsheet Features</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Dataframe Features</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Notebook Features</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">GeoAnalysis Features</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Charting Features</a>
                  </div>
              </div>
              <div class="infoBox">
                  <div class="info_Center">
                    <a class="aInfoB">Learn About Videos</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Import / Export</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Data Investigation</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Data Cleaning</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Date & Time</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Data Summarization</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Natural Language</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Geo Analysis</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo">Statistics</a>
                  </div>
              </div>
              <div class="infoBox">
                  <div class="info_Center">
                    <a class="aInfoB">Libraries</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://exceljet.net/excel-formulas-and-functions">Spreadsheet Formulas</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://realpython.com/python-first-steps/">Python</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://www.learndatasci.com/tutorials/python-pandas-tutorial-complete-introduction-for-beginners/">Pandas</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://matplotlib.org/stable/index.html">MatPlotLib</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://plotly.com/python/">Plotly</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://seaborn.pydata.org/#">Seaborn</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://openpyxl.readthedocs.io/en/stable/">OpenPyxl</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://zetcode.com/gui/pysidetutorial/">PySide</a>

                  </div>
              </div>
              <div class="infoBox" >
                  <div class="info_Center" style="width:110px">
                    <a class="aInfoB">Company</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="/ContactUs">Contact Us</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="/Company">Team</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="/Jobs">Jobs</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="blog/index.html">Blog</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://forum.row64.com/">Forum</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="https://github.com/Row64/GPU-Script">Github</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="http://dillonridgecomputing.com/history.html">History</a>
                    <div class="info_Spacer"></div>
                    <a class="aInfo" href="">Press Kit</a>
                  </div>
              </div>

            </div>
        </div>


      </div>

    

      <!--###################################### END INFO ##################################-->


    <!--#########--><div class="frame" style="height:60px;background-color:#FFFFFF"></div>

  </body>
</html>