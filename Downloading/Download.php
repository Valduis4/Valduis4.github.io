<?php session_start();
    if(isset($_GET['file_name'])){
        $download_path = '/SaphirePointTransfer/' . $_GET['file_name'];
    } else {
        die("Please don't load this page directly!");
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="5;url=<?php echo $download_path ?>"/>
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
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-154737984-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- New End Google Analytics -->
    <link rel="stylesheet" href="Downloading.css?5768657">
    <link rel="stylesheet" href="/topmenu/Top_Style.css">
    <title>Row64 - Download</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Download/" />
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
    <!--################################# END MENU BAR ###################################-->


    <div class="frame" ><div class="tBox" ><div class="dLine"></div></div></div>

<div id="ContentLayer">
<!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>
<div class="frame"style="width:100%;flex-wrap:wrap;">
  <div class="tcontainer" style="justify-content:flex-start;width:fit-content;">
    <h1 style="font-size:44px;">
    Done Downloading? Next...
    </h1>
    <div style="display:flex;align-items: center;"><img src="./images/1.png?37837478" alt=""width="50" height="50"><div style="width:25px"></div><div style="width:520px;height: 50px;line-height:25px;">Once downloaded, open the file by double clicking it in your downloads folder.</div></div>
    <div style="height:40px"></div>
    <div style="display:flex;align-items: center;"><img src="./images/2.png?383737" alt=""width="50" height="50"><div style="width:25px"></div><div style="width:fit-Content;">Follow the instructions to install Row64 to your computer.</div></div>
    <div style="height:122.05px"></div>
    <div style="display:flex;align-items: center;"><div style:="width:fit-Content;">Problems downloading? <a class="abo" href="<?php echo $download_path; ?>" download> Try Again</a>.</div></div>
  </div>
  <div style="width:20px"></div>
  <img src="./images/Asset-1.png?37478378" alt=""width="374" height="404">
</div>

<!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>

                
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