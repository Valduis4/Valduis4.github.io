<?php session_start();
  $URL_REF = $_SERVER['HTTP_REFERER'];
  require("/var/www/database/config.php");
    $page = "Whitepaper";
    $data = array($page,$URL_REF);
    $stmt = $dbh->prepare("INSERT INTO IncomingLinks (idate,Page,Link) VALUES (Now(),?,?)");
    $stmt->execute($data);
?>
<!DOCTYPE html>

<html lang="en-US">
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
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-5L6WRXR"></script>
    
    <meta charset="utf-8">
    <meta name="keywords" content="row64, spreadsheet, spreadsheet formulas, python spreadsheet, gpu compute, gpu intelligence, high speed business intelligence, high speed business, business intelligence, business trends 2020, business trends and insights, business trends data analytics, business growth trends, business intelligence trends, business trends of the future, latest business trends, digital business trends, new business trends, parallel programming revolution, parallel programming business">
    <meta property="og:title" content="Row64 — Whitepaper">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Analyze big data at lightning-fast speeds. Row64 simplifies data exploration, analysis, and visualization into one easy-to-use program that's 1000x faster than legacy software.">
    <meta property="og:image" content="https://row64.com/images/Thumbnail.png">
    <meta property="og:url" content="https://row64.com/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@row64software">
    
    <title>Row64 - Whitepaper</title>
    <meta name="description" content="Analyze big data at lightning-fast speeds. Row64 simplifies data exploration, analysis, and visualization into one easy-to-use program that's 1000x faster than legacy software.">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="/R64_Style.css?2">
    <link rel="stylesheet" href="/topmenu/Top_Style.css?75869">
    <link rel="stylesheet" href="scroll.css?8">
    <link rel="canonical" href="https://row64.com/Whitepaper/Whitepaper.php" />
    <script>
        (function () {
          var zi = document.createElement('script');
          zi.type = 'text/javascript';
          zi.async = true;
          zi.referrerPolicy = 'unsafe-url';
          zi.src = 'https://ws.zoominfo.com/pixel/629a3d6c7915ca008f06ebf7';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(zi, s);
        })();
      </script> 
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
<script type="text/javascript"> _linkedin_partner_id = "3680242"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type="text/javascript"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript";b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif" /> </noscript>
  <body>
    <script src="R64_Scripts.js?4"></script>
    <script>
    window.lintrk('track', { conversion_id: 6399338 });
    </script>






     <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>


    <!--################################# END MENU BAR ###################################-->



    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <!--#########--><div class="frame"><div class="filler" style="height:50px;"></div></div>

    <div class="frame">
        <a href="/Whitepaper/Download.php?file_name=RecipeUniverse_Doc.pdf" style="text-decoration:none; font-size:1.5em; color: #1189F2;">Download the PDF</a>
    </div>

    <!--#########--><div class="frame"><div class="filler" style="height:50px;"></div></div>

    <div class="frame">
        <h1 style="max-width:950px">Creating Your Own Recipies</h1>
    </div>

    <!--#########--><div class="frame"><div class="filler" style="height:10px;"></div></div>

    <div class="frame"><img src="./images/Vs.png" alt=""width="950"  style=""></div>

    <!--#########--><div class="frame"><div class="filler" style="height:10px;"></div></div>

    <div class="frame" >
        <div><p style="max-width:950px; font-style:italic;">Direct-to-hardware programming and low-latency optimization are delivering 1000x the
speed of traditional spreadsheets with the enhanced functionality of big data systems.</p>

</div>
    </div>

    <!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>







      <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->
      
<?php
require"/var/www/html/bottommenu/bottom.php";
$color = '#F7F8F9';
echo bottom($color);
?>
    </div>
  </body>
  <noscript>
        <img src="https://ws.zoominfo.com/pixel/629a3d6c7915ca008f06ebf7" width="1" height="1" style="display: none;" alt="websights"/>
      </noscript>
</html>