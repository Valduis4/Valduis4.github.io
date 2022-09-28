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
    <link rel="stylesheet" href="/topmenu/Top_Style.css">
    <link rel="stylesheet" href="../Login_Style.css">
    <link rel="stylesheet" href="../flex.css">
    <title>Row64 - Geo Volcanos</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
  <body>
    <script src="R64_Scripts.js"></script>



    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->
                <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>

    <!--################################# END MENU BAR ###################################-->



 


    <div class="frame" ><div class="tBox" ><div class="dLine"></div></div></div>

    <div id="ContentLayer"style="font-family: 'AkkuratLLWeb-Regular';">
    <!--#########--><div class="frame"><div class="filler" style="height:20px"></div></div>
    <div class="frame">
      <div class="tcontainer">
        <h1 style="height:35px;">
        <font style="font-size:44px;">Geo Volcanos</font>
        </h1>
        <div style="height:2px;width:100%;background-color:grey;"></div>
      </div>
    </div>

     <!--#########--><div class="frame" style="height:30px;background-color:#FFFFFF"></div>
    
     <div class="frame">
     <img src="../images/Section_PR/HighRes/PC_Volcano_H.jpg" alt="" width="1200px" height="690px">
     </div>

     <!--#########--><div class="frame" style="height:150px;background-color:#FFFFFF"></div>



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