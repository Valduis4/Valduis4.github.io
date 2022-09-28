<?php session_start();
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
    <meta property="og:title" content="Row64 —The World’s Fastest Spreadsheet">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Analyze big data at lightning-fast speeds. Row64 simplifies data exploration, analysis, and visualization into one easy-to-use program that's 1000x faster than legacy software.">
    <meta property="og:image" content="https://row64.com/images/Thumbnail.png">
    <meta property="og:url" content="https://row64.com/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@row64software">
    
    <title>Row64 - Blog</title>
    <meta name="description" content="Analyze big data at lightning-fast speeds. Row64 simplifies data exploration, analysis, and visualization into one easy-to-use program that's 1000x faster than legacy software.">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="Bottom.css?1">
    <link rel="stylesheet" href="/topmenu/Top_Style.css?3">
    <link rel="stylesheet" href="MainStyle.css?6">
    <link rel="canonical" href="https://row64.com/Blogs/" />
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
    <script src="Blogs.js?1"></script>
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
    <?php
        require"/var/www/database/config.php";
        $data = array();
        $stmt = $dbh->prepare("SELECT * FROM Blogs ORDER BY `Blogs`.`Date` DESC");
        $stmt->execute($data);
        $display = $stmt->fetchAll();
    
        foreach ($display as $key => & $value) {
            unset($value['0']);
            unset($value['1']);
            unset($value['2']);
            unset($value['3']);
            unset($value['4']);
        }
        function build_list($array){
            foreach( $array as $key=>$value){
                $Title = $value['Title'];
                $IURL = $value['IURL'];
                $Desc = $value['Descr'];
                $URL = $value['URL'];
                $date = new DateTime($value['Date']);
                $html .= '<div style="background-color:#F8F7F6;width:100%;max-width:950px;text-align:left;">';
                $html .= '<a href="'.$URL.'" style="text-decoration:none;color:#1189F2;"><h2 style="text-align:left;padding-left:10px;text-decoration:none;color:#1189F2;margin-bottom:0px;font-size: 35px;">' . htmlspecialchars($Title) . '</h2></a>
                <br><p style="text-align:left;padding-left:10px;margin-bottom:10px;">Posted - ' . htmlspecialchars(date_format($date, 'F d, Y')) . '</p></div>';
                $html .= '<img src="'. $IURL .'" alt="" width="100%" height="" loading="lazy" style="max-width:950px">';
                $html .= '<p style="text-align:left;padding-left:10px;width:100%;max-width:950px;">'. htmlspecialchars($Desc) .'</p>';
                $html .= '<div style="height:30px;"></div>';
            }
            return $html;
        }
    ?>

    <div class="frame" style="background: -webkit-linear-gradient(0deg, #46E1B2 0%, #00D2E9 40%, #1B62F5 90%);color:#FFFFFF;flex-direction: column;">
        <h1 style="color:#FFFFFF;">
            Row64 Blog
        </h1>
        <p style="color:#FFFFFF;">Stay updated with our latest news and announcements<br> 
        to stay on top of your game in data science.</p>
        <div style="height:30px;"></div>
    </div>
    <div class="frame" style="background-color:#000000;">
        <div style="display:flex;width:100%;max-width:950px;justify-content: space-around;">
        <a href="https://forum.row64.com/"><img src="./images/forumIcon-01.png" alt="" height="50px" loading="lazy"></a>
        <a href="https://www.youtube.com/channel/UCRvAcfactX9XSnzPIg5iPrw"><img src="./images/youTubeIcon-01.png" alt="" height="50px" loading="lazy"></a>
        <a href="https://github.com/Row64/GPU-Script"><img src="./images/githubIcon-01.png" alt="" height="50px" loading="lazy"></a>
        <a href="#end"><img src="./images/historyIcon-01.png" alt="" height="50px" loading="lazy"></a>
        </div>
    </div>

    <div style="height:30px;"></div>

    <div class="frame" style="flex-direction: column;align-items: center;">
        <div style="height:30px;"></div>
        <?php echo build_list($display);?>
        <div style="height:30px;" id="end"></div>
    </div>

    <!--##################################################################################-->
    <!--############################### BOTTOM INFO BAR ##################################-->
    <!--##################################################################################-->
      
    <?php
        require"/var/www/html/bottommenu/bottom.php";
        $color = '#F7F8F9';
        echo bottom($color);
    ?>
</body>
<noscript>
    <img src="https://ws.zoominfo.com/pixel/629a3d6c7915ca008f06ebf7" width="1" height="1" style="display: none;" alt="websights"/>
</noscript>
</html>
