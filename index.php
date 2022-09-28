<?php session_start();
  $URL_REF = $_SERVER['HTTP_REFERER'];
  require("/var/www/database/config.php");
    $page = "Home";
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
    <meta property="og:title" content="Row64 —The World’s Fastest Spreadsheet">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Analyze big data at lightning-fast speeds. Row64 simplifies data exploration, analysis, and visualization into one easy-to-use program that's 1000x faster than legacy software.">
    <meta property="og:image" content="https://row64.com/images/Thumbnail.png">
    <meta property="og:url" content="https://row64.com/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@row64software">
    
    <title>Row64 - The GPU Spreadsheet</title>
    <meta name="description" content="Analyze big data at lightning-fast speeds. Row64 simplifies data exploration, analysis, and visualization into one easy-to-use program that's 1000x faster than legacy software.">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="R64_Style.css?2">
    <link rel="stylesheet" href="/topmenu/Top_Style.css?75869">
    <link rel="stylesheet" href="scroll.css?8">
    <link rel="canonical" href="https://row64.com/" />
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
                echo fulltop(true);
                ?>


    <!--################################# END MENU BAR ###################################-->



    <!--########################## INTO HEADLINES & GRAPHICS #############################-->
    <div id="ContentLayer">
      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <h1 style="font-size: 48px;font-weight: 800;background: -webkit-linear-gradient(45deg, #46E1B2, #00D2E9 40%, #1B62F5 90%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;margin: 0;">
        The World's Fastest Big Data Spreadsheet
      </h1>
      <!--#########--><div class="frame"><div class="filler" style="height:10px"></div></div>

      <div class="frame">
        <div class="tBox" style="font-size: 35px;">
          Up to 1 billion rows. No coding required.
        </div>
      </div>
      <!--#########--><div class="frame"><div class="filler" style="height:10px"></div></div>
    <div class="frame">
        <div style="border:none;box-shadow: none;">
          <div class="vBox" >
            <video id="introVideo" controls muted playsinline poster="./images/Poster.png"style="border:0;">
              <source src="./videos/Intro_2022.04.29.mp4" type=video/mp4>
            </video>
         </div>
        </div>
      </div>
      <!--#########--><div class="frame"><div class="filler" style="height:20px"></div></div>
      <!-- <div class="frame">
          <img src="./images/Title.png" style="width:100%;max-width:850px;" />
      </div>

      <div class="frame"><div class="filler" style="height:25px"></div></div>

      <div class="frame">
        <div class="tBox">
          Up to 1 billion rows. No coding required.
        </div>
      </div> -->
      <!--#########--><div class="frame"><div class="filler" style="height:40px;"></div></div>
      <div class="frame">
       <a href="/Download/" style="text-decoration:none"><button class="blueButton1" name="Try" value="try">Try It Free</button></a>
      </div>
      <!--#########--><div class="frame"><div class="filler" style="height:18px;"></div></div>
      <div class="frame">
        <div class="tBox" style="font-size:14px;">
          No Credit Card Required<br>
        </div>
      </div>
      <!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>

      <!-- <div class="frame">
        <div style="border:none;box-shadow: none;">
          <div class="vBox" >
            <video id="introVideo" autoplay loop muted playsinline style="border:0;">
              <source src="./videos/Intro_Anim_02.mp4" type=video/mp4>
            </video>
         </div>
        </div>
      </div> -->
      

      <!--############################## PARTNERSHIP ################################-->


      <div class="frame" >
        <div class="tBox" >
          <h3 style="height:25px">In Partnership With:</h3>
          <div class="dLine"></div>
        </div>
      </div>


      <div class="frame" style="height:7px"></div>

      <div id="partnerWide">
        <div class="frame">
            <ul class="imgBox" >
              <li><a href="https://www.python.org/psf/"><img src="./images/Partner01.webp" alt="" loading="lazy" width="214px" height="55px"></a></li>
              <li><a href="https://www.nvidia.com/en-us/startups/"><img src="./images/Partner02.webp" alt="" loading="lazy" width="140px" height="32px"></a></li>
              <li><a href="https://pandas.pydata.org/"><img src="./images/Partner03.webp" alt="" loading="lazy" width="128px" height="42px"></a></li>
              <li><a href="https://www.lunarg.com/"><img src="./images/Partner04.webp" alt="" loading="lazy" width="144px" height="59px" ></a></li>
              <li><a href="https://www.khronos.org/"><img src="./images/Partner05.webp" alt="" loading="lazy" width="152px" height="31px"></a></li>
            </ul>
        </div>
      </div>
      <div id="partnerNarrow">
        <div class="parterNarrowContainer">
            <div class="pImgBox">
              <div class="imgH"><a href="#"><img src="./images/mparnter_NV.webp" width="100%" height="95" alt="" loading="lazy"></a></div>
              <div class="imgH"><a href="#"><img src="./images/mparnter_PA.webp" width="100%" height="95" alt="" loading="lazy"></a></div>
            </div>
            <div class="pImgBox" style="justify-content:center;">
              <div class="imgH"><a href="#"><img src="./images/mparnter_PY.webp" width="366" height="80" alt="" loading="lazy"></a></div>
            </div>
            <div class="pImgBox">
              <div class="imgH"><a href="#"><img src="./images/mparnter_LG.webp" width="100%" height="95" alt="" loading="lazy"></a></div>
              <div class="imgH"><a href="#"><img src="./images/mparnter_KH.webp" width="100%" height="95" alt="" loading="lazy"></a></div>
            </div>
        </div>
      </div>

      <div class="frame" ><div class="dLine"></div></div>
      
      <!--#########--><div class="frame"><div class="filler" style="height:160px"></div></div>
      
      <!--############################## Slides ################################-->

      <div class="frame" id="whitePaper">
        <div class="tBox" style="background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;">
          <h1 style="margin-top:60px;">
            What is Row64?
          </h1>
          <div class="tBox" style="text-align:left; padding:10px;height:unset;width:unset;margin:10px;margin-bottom:32px">
          Row64 is the world’s first GPU-enabled spreadsheet software built for big data from the ground up. By combining the simplicity of spreadsheets with the enhanced functionality of big data systems. Row64 delivers results up to 1000x faster than traditional software—without any need to learn any programming.<br> 
          </div>
          <a href="/Whitepaper/" style="text-decoration:none; font-size:1.5em; color: #1189F2;">Get the Whitepaper</a>
          <div style="height:60px;"></div>
        </div>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:75px"></div></div>

      <div class="frame" style="flex-direction: column;">
            <h1 style="font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;color: black;text-align: center;font-size:50px;">
              Record Breaking Speed
            </h1>
            <div class="filler" style="height:50px"></div>
            <div class="frame">
            <img class = "none" src="./images/claimGif.gif?1" alt="" width="100%" height="" loading="lazy" style="max-width:950px">
            </div>
            <!--#########--><div class="frame"><div class="filler" style="height:50px"></div></div>
            <div class="frame">
              <a href="/Gallery/ExProFiles.php" style="text-decoration:none; font-size:2em; color: #1189F2;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">Download the Performance Test Project Files</a>
            </div>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:200px"></div></div>

      <div class="frame" id="DocDown1">
        <div class="tBox" style="background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;">
          <h1>
            Data Science Simplified
          </h1>
          <div class="switch" style="display:flex;align-items:center;">
            <img src="./images/dataScienceRecipe.png?1" alt="" width="464" style="margin-left: 20px;margin-bottom: 32px;border-radius: 10px;">
            <div class="tBox" style="text-align: left;padding: 20px;">
            Redefining how data teams collaborate, Row64 enables python experts to create, modify and share data science skills easily via spreadsheet-style formulas. Pre-loaded with 
            <a href="https://www.youtube.com/watch?v=58he0Cx8se8" style="font-family: 'AkkuratLLWeb-Regular', Fallback, sans-serif;text-decoration:none;color:#1189F2;">300+ plug-and-play recipes and discovery templates</a> 
             compiled by our data experts makes onboarding a breeze.  
            <br><br><br>
            </div>
          </div>
            <a href="/Whitepaper/Doc.php" style="font-size: 26px;text-decoration:none;color:#1189F2;margin-bottom:32px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;"> Download the Documentation</a>
            <div style="height:32px"></div>
        </div>
      </div>
      <!--#########--><div class="frame"><div class="filler" style="height:100px"></div></div>

      <!--############################## VIDEO SECTION ################################-->

      <div class="frame" >
        <div class="tBox" style="">
          <h1>
          Get Visualizations Lightning Fast
          </h1>
          <div class="tBox" style="">
          GPU-enabled. In real time.  From <a href="https://youtu.be/gAxngLJNiQo" style="font-size: 24px;text-decoration:none;color:#1189F2;">geo-mapping</a> to time series and bar chart racing,  Row64 enables business intelligence teams to make better decisions.
          </div>
        </div>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:50px"></div></div>

      <div class="frame">
        <img src="./images/globe-volcanos_3.gif" width="950px" loading="lazy">
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:50px"></div></div>

      <div class="frame">
        <a href="/DataViz/" style="text-decoration:none; font-size:2em; color: #1189F2;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">Explore Visualizations</a>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:150px" id="cases"></div></div>

      <div class="frame">
        <div class="outerScrollBox" id="OuterBox2" style="min-width: 950px; height:1920px; width:950px">
          <div class="innerScrollBox" style="overflow-y:hidden;height:693px;top:15%;background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;">
            <h1 style="font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;color: black;text-align: center;font-size:50px;">
              Use Cases
            </h1>
            <div class="filler" style="height:0px;background-color:#E2EEF7;"></div>
            <div class="HTranslateCont" id="Tran2" style="position: relative;height: 400px;background-color:#E2EEF7;">
              <div class="ScollCardBox" style="flex-direction:column;">
                <div style="display:flex;margin-bottom:5px;height:50px">
                  <img src="./images/case1.png?1" alt="" width="100" height="100"style="margin-left: 645px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
                  <img src="./images/case2.png?1" alt="" width="100" height="100"style="margin-left: 220px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
                  <img src="./images/case3.png?1" alt="" width="100" height="100"style="margin-left: 220px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
                  <img src="./images/case4.png?1" alt="" width="100" height="100"style="margin-left: 220px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
                  <img src="./images/case5.png?1" alt="" width="100" height="100"style="margin-left: 220px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
                  <img src="./images/case6.png?1" alt="" width="100" height="100"style="margin-left: 220px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">  
                </div>
                <div style="display:flex;margin-bottom:100px;">
                    <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:820px;width:276px;text-align:left;padding:10px;height:350px;font-size:22px;">
                      <h2 style="font-size:20pt;text-align: center;">
                        <br>Financial Reports<br>
                      </h2>
                      Simplify tedious FP&A tasks with one click. Create time-series summary analyses, budget reconciliation, and data aggregation from single click pre-sets.
                    </div>
                    <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:25px;width:276px;text-align:left;padding:10px;height:350px;font-size:22px;">
                      <h2 style="font-size:20pt;text-align: center;">
                        <br>Profile & Investigate<br>
                      </h2>
                      Spreadsheet functions like sort, deduplicate, and text search will find the needle in the data haystack up to 1000x faster than legacy software. 
                    </div>
                    <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:25px;width:276px;text-align:left;padding:10px;height:350px;font-size:22px;">
                      <h2 style="font-size:20pt;text-align: center;">
                      <br>Automated Cleaning<br>
                      </h2>
                      Eliminate time-consuming data cleaning tasks from null values & empty strings to uniform formatting of names / addresses / emails / phone numbers leaving time to find critical insights.
                    </div>
                    <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:25px;width:276px;text-align:left;padding:10px;height:350px;font-size:22px;">
                      <h2 style="font-size:20pt;text-align: center;">
                      <br>Visual Insights<br>
                      </h2>
                      Communicate powerful data stories to colleagues with high-quality 2D & 3D visualizations or animated charts and graphs on data sets of any size.
                    </div>
                    <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:25px;width:276px;text-align:left;padding:10px;height:350px;font-size:22px;">
                      <h2 style="font-size:20pt;text-align: center;">
                      <br>Market Analysis<br>
                      </h2>
                      Access and analyze market-wide data feeds in real time. Row 64’s hybrid engine prices 1M options in less than 0.5 seconds.
                    </div>
                    <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:25px;width:276px;text-align:left;padding:10px;height:350px;font-size:22px;">
                      <h2 style="font-size:20pt;text-align: center;">
                      <br>Data Problems?<br>
                      </h2>
                      Not finding the solution on our 
                      <a href="https://forum.row64.com/" target="_blank" rel="noopener noreferrer" style="font-size: 22px;text-decoration:none;color:#1189F2;">Community Boards</a>? 
                      Explore our enterprise solutions and get training from our data experts to build solutions to your specific data problems.
                    </div>
                </div>
              </div>
            </div>
            <script type="text/javascript">
              setInterval(function() {
                var el = document.getElementById('Tran2');
                var Offset = document.getElementById('OuterBox2').offsetTop;
                Offset = window.scrollY-Offset;
                Offset *= -1;
                // Offset -= 950
                if(Offset < -992){
                  Offset = -992;
                }
                if(Offset > 0){
                  Offset = 0;
                }
                el.style.transform = 'translateX('+Offset+'px)';
              }, 10);
              </script>
            <!--#########--><div class="frame"style="background-color:#E2EEF7;"><div class="filler" style="height:83.5px;background-color:#E2EEF7;"></div></div>
            <div class="frame"style="background-color:#E2EEF7;">
              <a href="/ContactUs/" style="text-decoration:none;margin-bottom:50px;"><button class="blueButton1" name="Try" value="try" style="margin-bottom:50px">Book a Demo</button></a>
            </div>
          </div>
        </div>

        <div class="smallDisplay" style="background-color:#E2EEF7;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;width:100%;justify-content:center">
          <h1 style="font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;color: black;text-align: center;font-size:50px;width:100%">
            Use Cases
          </h1>
          <div>
            <div style="display:flex;margin-bottom:5px;height:50px;margin-top:5px;">
              <img src="/images/case1.png" alt="" width="100" height="100"style="margin-left: 15px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
            </div>
            <div style="display:flex;margin-bottom:0px;">
                <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:5px;margin-right:15px;width:276px;text-align:left;padding:10px;height:380px;font-size:22px;align-items: center;font-family: 'AkkuratLLWeb-Regular', Fallback, sans-serif;">
                  <h2 style="font-size:20pt;text-align: center;">
                    <br>Financial Reports<br>
                  </h2>
                  Simplify tedious FP&A tasks with one click. Create time-series summary analyses, budget reconciliation, and data aggregation from single click pre-sets.
                </div>

            </div>
          </div>
          <div>
            <div style="display:flex;margin-bottom:5px;height:50px;margin-top:5px;">
              <img src="/images/case2.png" alt="" width="100" height="100"style="margin-left: 15px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
            </div>
            <div style="display:flex;margin-bottom:0px;">
                <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:5px;margin-right:15px;width:276px;text-align:left;padding:10px;height:380px;font-size:22px;align-items: center;font-family: 'AkkuratLLWeb-Regular', Fallback, sans-serif;">
                  <h2 style="font-size:20pt;text-align: center;">
                    <br>Profile & Investigate<br>
                  </h2>
                  Spreadsheet functions like sort, deduplicate, and text search will find the needle in the data haystack up to 1000x faster than legacy software.
                </div>

            </div>
          </div>
          <div>
            <div style="display:flex;margin-bottom:5px;height:50px;margin-top:5px;">
              <img src="/images/case3.png" alt="" width="100" height="100"style="margin-left: 15px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
            </div>
            <div style="display:flex;margin-bottom:0px;">
                <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:5px;margin-right:15px;width:276px;text-align:left;padding:10px;height:380px;font-size:22px;align-items: center;font-family: 'AkkuratLLWeb-Regular', Fallback, sans-serif;">
                  <h2 style="font-size:20pt;text-align: center;">
                    <br>Automated Cleaning<br>
                  </h2>
                  Eliminate time-consuming data cleaning tasks from null values & empty strings to uniform formatting of names / addresses / emails / phone numbers leaving time to find critical insights.
                </div>

            </div>
          </div>
          <div>
            <div style="display:flex;margin-bottom:5px;height:50px;margin-top:5px;">
              <img src="/images/case4.png" alt="" width="100" height="100"style="margin-left: 15px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
            </div>
            <div style="display:flex;margin-bottom:0px;">
                <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:5px;margin-right:15px;width:276px;text-align:left;padding:10px;height:380px;font-size:22px;align-items: center;font-family: 'AkkuratLLWeb-Regular', Fallback, sans-serif;">
                  <h2 style="font-size:20pt;text-align: center;">
                    <br>Visual Insights<br>
                  </h2>
                  Communicate powerful data stories to colleagues with high-quality 2D & 3D visualizations or animated charts and graphs on data sets of any size.
                </div>

            </div>
          </div>
          <div>
            <div style="display:flex;margin-bottom:5px;height:50px;margin-top:5px;">
              <img src="/images/case5.png" alt="" width="100" height="100"style="margin-left: 15px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
            </div>
            <div style="display:flex;margin-bottom:0px;">
                <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:5px;margin-right:15px;width:276px;text-align:left;padding:10px;height:380px;font-size:22px;align-items: center;font-family: 'AkkuratLLWeb-Regular', Fallback, sans-serif;">
                  <h2 style="font-size:20pt;text-align: center;">
                    <br>Market Analysis<br>
                  </h2>
                  Access and analyze market-wide data feeds in real time. Row 64’s hybrid engine prices 1M options in less than 0.5 seconds.
                </div>

            </div>
          </div>
          <div>
            <div style="display:flex;margin-bottom:5px;height:50px;margin-top:5px;">
              <img src="/images/case6.png" alt="" width="100" height="100"style="margin-left: 15px;z-index: 1;background-color: #FFFFFF;border-radius: 10px;padding: 1px;box-shadow: 5px 5px 10px grey;">
            </div>
            <div style="display:flex;margin-bottom:0px;">
                <div class="tBox" style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;margin-left:5px;margin-right:15px;width:276px;text-align:left;padding:10px;height:380px;font-size:22px;align-items: center;font-family: 'AkkuratLLWeb-Regular', Fallback, sans-serif;">
                  <h2 style="font-size:20pt;text-align: center;">
                    <br>Data Problems?<br>
                  </h2>
                  Not finding the solution on our 
                  <a href="https://forum.row64.com/" target="_blank" rel="noopener noreferrer" style="font-size: 22px;text-decoration:none;color:#1189F2;">Community Boards</a>? 
                  Explore our enterprise solutions and get training from our data experts to build solutions to your specific data problems.
                </div>

            </div>
          </div>
          <div class="frame"style="background-color:#E2EEF7;">
            <a href="/ContactUs/" style="text-decoration:none;"><button class="blueButton1" name="Try" value="try" style="margin-bottom:50px;margin-top:50px;">Book a Demo</button></a>
          </div>
        </div>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:100px"></div></div>

      <div class="frame" >
        <div class="tBox" style="">
          <h1 style="font-size:21pt;text-align: left;">
          Try It For Yourself!
          </h1>
          <div class="tBox" style="text-align: left;">
          The best way to understand the power of Row64 is to try it for yourself. 
          <a href="/Gallery/ExProFiles.php" style="text-decoration:none;color:#1189F2;">Click here</a> 
          to download samples from the gallery and see how Row64 can sort through 30 million rows of data in just 1.18 seconds or try it out with any data set you’re working with.
          </div>
        </div>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:40px;"></div></div>
      <div class="frame">
       <a href="/Download/" style="text-decoration:none;"><button class="blueButton1" name="Try" value="try">Try It Free</button></a>
      </div>
      <!--#########--><div class="frame" id="PricingLink"><div class="filler" style="height:150px;"></div></div>
      
      <!--################################### PRICING RADIO BUTTON #####################################-->
      
      <div class="frame" style="background-color:#F7F8F9">
          <div>
          <h3 style="height:12px">
            <center>Pricing:</center>
          </h3>
          </div>
      </div>

      <div class="frame" style="height:90px;background-color:#F7F8F9">
        <div class="container" style="background-color:#F7F8F9">
            <div class="PR_SwitchFill">
              <div class="PR_SwitchText" style="margin-left:auto;">Monthly</div>
            </div>
            <div class="PR_SwitchCenter">
              <input type="checkbox" id="switch" onclick="priceSwitch()" checked/><label for="switch" id="label" style="background-color:#1189F2;">Toggle</label>
            </div>
            <div class="PR_SwitchFill">
              <div class="PR_SwitchText">Yearly&nbsp;&nbsp;(Save up to 20%)</div>
            </div>
        </div>
      </div>

      <!--################################### MOBILE/TABLET PRICING #####################################-->
      
      <div class="frame" style="background-color:#F7F8F9">
        <div class="priceParentNarrow"> 
            <div class="MPR_Outer"> 
                <div class="MPR_LeftP">
                    <div class = "PR_Product">Free</div>
                    <div class = "PR_PriceBox">
                      <div class="PR_Price">$0</div><div class="PR_Duration">&nbsp;monthly <br>per user</div>
                    </div>
                    <div class="PR_Toggle"></div>
                    
                    <!-- <form action="/Downloads/" id="contactForm" method="POST"> -->
                    <a href="/Download/" style="text-decoration:none"><button class="Free_Button" >Get Row64 Free</button></a>
                    <!-- </form> -->
                    
                </div>
                <div class="MPR_RightP">
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Non-Commercial Use</div>
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>All Non-Enterprise Data Features</div>
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>All Non-Enterprise  Graphics Features</div>
                </div>
            </div>
          </div>
      </div>

      <!--#########--><div class="frame" style="height:20px;background-color:#F7F8F9"><div class="filler" style="background-color:#F7F8F9"></div></div>


      <div class="frame">
        <div class="priceParentNarrow" > 
            <div class="MPR_Outer"> 
                <div class="MPR_LeftP">
                    <div>
                    <div class = "PR_Product">Plus</div>
                    <div class = "PR_PriceBox">
                      <div id="PlusPriceM" class="PR_Price">$20</div><div class="PR_Duration">&nbsp;monthly <br>per user</div>
                    </div>
                    <br>
                    <div id="PlusPriceDescM" class="PR_Toggle" style="position:relative;top:35px">Billed as $240 Yearly</div>
                    <div class="PR_Toggle"></div>
                    </div>
                    <!-- <div class="PR_ButtonParent">
                      <div class="PR_Button"><div style="position: relative;top: 5px">Subscribe Now</div></div>
                    </div> -->
                    <div class="PR_ButtonMonth">
                      <form action="/Register/" id="contactForm" method="POST">
                        <button class="blueButton" name="plus" value="month">Subscribe Now</button>
                      </form>
                    </div>
                    <div class="PR_ButtonYear">
                      <form action="/Register/" id="contactForm" method="POST">
                        <button class="blueButton" name="plus" value="year">Subscribe Now</button>
                      </form>
                    </div>

                </div>
                <div class="MPR_RightP"> 
                  <div class="PR_FHeader">Unlimited commercial use of the following features:</div>
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>High speed load of large files</div>
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>GPU Paragraph Text Seach with Wildcards and Logic</div>
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>GPU Compute for primary data features</div>
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Formulas that auto-generate Python code</div>
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Chart Animation</div>
                  <div class="F_Spacer"></div>
                  <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>2 hours per month of support</div>


                </div>
            </div>
          </div>
      </div>

      <!--#########--><div class="frame" style="height:20px;background-color:#F7F8F9"><div class="filler" style="background-color:#F7F8F9"></div></div>

      <div class="frame" style="background-color:#F7F8F9">
        <div class="priceParentNarrow" style="border: 4px solid #1969F7;"> 
            <div class="MPR_Outer"> 
                <div class="MPR_LeftP">
                    <div>
                    <div class = "PR_Product">Pro</div>
                    <div class = "PR_PriceBox">
                      <div id="ProPriceM" class="PR_Price">$80</div><div class="PR_Duration">&nbsp;monthly <br>per user</div>
                    </div>
                    <br>
                    <div id="ProPriceDescM" class="PR_Toggle" style="position:relative;top:35px">Billed as $960 Yearly</div>
                    </div>

                    <div class="PR_Toggle"></div>
                    <!-- <div class="PR_ButtonParent">
                      <div class="PR_Button"><div style="position: relative;top: 5px">Subscribe Now</div></div>
                    </div> -->
                    <div class="PR_ButtonMonth">
                      <form action="/Register/" id="contactForm" method="POST">
                        <button class="blueButton" name="pro" value="month">Subscribe Now</button>
                      </form>
                    </div>
                    <div class="PR_ButtonYear">
                      <form action="/Register/" id="contactForm" method="POST">
                        <button class="blueButton" name="pro" value="year">Subscribe Now</button>
                      </form>
                    </div>

                </div>
                <div class="MPR_RightP"> 
                  <div class="F_Spacer"></div>
                  <div class="PR_FHeader">Unlimited commercial use of the following features:</div>

                    <div class="F_Spacer"></div>
                    <div class="PR_FeatureB"><div class="PR_Check"></div><div class="F_Widen"></div>Everything in Plus, and...</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Geoanalyis Features</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Natural Language</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Raytraced Presentation Charting & Graphics</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Python Notebooks</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>5 hours per month of support</div>
                </div>
            </div>
          </div>
      </div>

      <!--#########--><div class="frame" style="height:20px;background-color:#F7F8F9"><div class="filler" style="background-color:#F7F8F9"></div></div>
      
      <div class="frame" style="background-color:#F7F8F9">
        <div class="priceParentNarrow"> 
            <div class="MPR_Outer"> 
                <div class="MPR_LeftP">
                    <div>
                    <div class = "PR_Product">Enterprise</div>
                    <div class = "PR_PriceBox">
                      <div class="PR_Price" style="position:relative;top:10px;font-size:37px;">Contact Us</div>
                    </div>
                    <div class="PR_Toggle"></div>
                    </div>
                    <div class="blueButton" onclick="location.href='/ContactUs/';"><div style="position:relative;top: 5px">Contact Row64</div></div>
                </div>
                <div class="MPR_RightP"> 
                  <div class="PR_FeatureB"><div class="PR_Check"></div><div class="F_Widen"></div>Everything in Pro, and...</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Access To Source Code</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Security Features and Support</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Site installation support</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Unlimited support</div>


                </div>
            </div>
          </div>
      </div>


      <!--################################### LARGE SCREEN PRICING #####################################-->

      <div class="frame" style="background-color:#F7F8F9">
        <div class="priceParent"> 
            <div class="priceContainer">
              <div class="priceBox">
                <div class="PR_Top"></div>
                <div class = "PR_Main">
                  
                  <div class = "PR_LEdge"></div>
                  <div class = "PR_Center">
                      <div class = "PR_Product">Free</div>
                      <div class = "PR_PriceBox">
                        <div class="PR_Price">$0</div><div class="PR_Duration">&nbsp;monthly per user</div>
                      </div>
                      <div class="PR_Toggle"></div>
                      <div class="F_Spacer" style="top: 1px;"></div>
                      <!-- <form action="/Login/" id="contactForm" method="POST">
                        <button class="Free_Button" name="free" value="free">Get Row64 Free</button>
                      </form> -->

                      <a href="/Download/" style="text-decoration:none"><button class="Free_Button">Get Row64 Free</button></a>

                      <div class="PR_Spacer"></div>
                      <div class="F_Spacer"></div>
                      <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Non-Commercial Use</div>
                      <div class="F_Spacer"></div>
                      <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>All Non-Enterprise Data Features</div>
                      <div class="F_Spacer"></div>
                      <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>All Non-Enterprise  Graphics Features</div>
                  </div>

                  <div class = "PR_REdge"></div>

                </div>
              </div>
              <div class="priceBox" >
                 <div class="PR_Top"></div>
                <div class = "PR_Main">
                  <div class = "PR_LEdge"></div>
                  <div class = "PR_Center">
                    
                    <div class = "PR_Product">Plus</div>
                    <div class = "PR_PriceBox">
                      <div id="PlusPrice" class="PR_Price" >$20</div><div class="PR_Duration">&nbsp;monthly per user</div>
                    </div>
                    <div id="PlusPriceDesc" class="PR_Toggle">Billed as $240 Yearly</div>
                    <div class="F_Spacer" style="top: 1px;"></div>
                    
                    <div class="PR_ButtonMonth">
                      <form action="/Register/" id="contactForm" method="POST">
                        <button class="blueButton" name="plus" value="month">Subscribe Now</button>
                      </form>
                    </div>
                    <div class="PR_ButtonYear">
                      <form action="/Register/" id="contactForm" method="POST">
                        <button class="blueButton" name="plus" value="year">Subscribe Now</button>
                      </form>
                    </div>

                    <div class="PR_Spacer" height: 10px;></div>
                    
                    <div class="PR_FHeader">Unlimited commercial use of the following features:</div>

                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>High speed load of large files</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>GPU Paragraph Text Seach with Wildcards and Logic</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>GPU Compute for primary data features</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Formulas that auto-generate Python code</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Chart Animation</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>2 hours per month of support

                    </div>
                    
                  </div>
                  <div class = "PR_REdge"></div>

                </div>
              </div>
              <div class="priceBox" style="border: 2px solid #1969F7;" >

                <div class="PR_Top">
                  <img src="./images/MostPopular.webp" style="float:right;" alt="" width="79" height="24" loading="lazy">
                </div>
                <div class = "PR_Main">

                  <div class = "PR_LEdge"></div>
                  <div class = "PR_Center">
                    <div class = "PR_Product">Professional</div>
                    <div class = "PR_PriceBox">
                      <div id="ProPrice" class="PR_Price">$80</div><div class="PR_Duration">&nbsp;monthly per user</div>
                    </div>
                    <div id="ProPriceDesc" class="PR_Toggle">Billed as $960 Yearly</div>
                    
                    <div class="F_Spacer" style="top: 1px;"></div>
                    <div class="PR_ButtonMonth" >
                      <form action="/Register/" id="contactForm" method="POST">
                        <button class="blueButton" name="pro" value="month">Subscribe Now</button>
                      </form>
                    </div>
                    <div class="PR_ButtonYear">
                      <form action="/Register" id="contactForm" method="POST">
                        <button class="blueButton" name="pro" value="year">Subscribe Now</button>
                      </form>
                    </div>

                    <div class="PR_Spacer"></div>
                    <div class="PR_FHeader">Unlimited commercial use of the following features:</div>

                    <div class="F_Spacer"></div>
                    <div class="PR_FeatureB"><div class="PR_Check"></div><div class="F_Widen"></div>Everything in Plus, and...</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Geoanalyis Features</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Natural Language</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Raytraced Presentation Charting & Graphics</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Python Notebooks</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>5 hours per month of support</div>

                  </div>
                  <div class = "PR_REdge"></div>
                </div>
                
              </div>
              <div class="priceBox" >

                <div class="PR_Top"></div>
                <div class = "PR_Main">
                  <div class = "PR_LEdge"></div>
                  <div class = "PR_Center">
                    <div class = "PR_Product">Enterprise</div>
                    <div class = "PR_PriceBox">
                      <div class="PR_Price">Contact Us</div>
                    </div>
                    <div class="PR_Toggle"></div>
                    <div class="F_Spacer" style="top: 1px;"></div>
                    <div class="blueButton" onclick="location.href='/ContactUs/';">Contact Row64</div>
                    <div class="PR_Spacer"></div>

                    <div class="F_Spacer"></div>
                    <div class="PR_FeatureB"><div class="PR_Check"></div><div class="F_Widen"></div>Everything in Pro, and...</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Access To Source Code</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Security Features and Support</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Site installation support</div>
                    <div class="F_Spacer"></div>
                    <div class="PR_Feature"><div class="PR_Check"></div><div class="F_Widen"></div>Unlimited support</div>

                  </div>
                  <div class = "PR_REdge"></div>

                </div>

                
              </div>
            </div>
          </div>
      </div>

    <!--#########--><div class="frame" style="height:90px;background-color:#F7F8F9"></div>



    <!--################################### QUESTIONS #####################################-->


     <!--#########--><div class="frame"><div class="filler" style="height:100px"></div></div>

     <div class="frame" >
        <div class="tBox" style="">
          <h1 style="">
          Our Team
          </h1>
          <img src="./images/Team.png" alt="" width="792" height="275"style="">
          <div class="tBox" style="text-align: left;">
          Co-founders Michael Isner & Marc Stevens have worked together for over 20 years on real-time character animation pipelines on groundbreaking projects such as Jurassic Park, Metal Gear Solid 4 and Half-Life 2. 
          After leading teams at Microsoft, Autodesk, Activision, and Avid, the two teamed back up when they both came upon the same realization that modern data analytics could greatly benefit from the innovations 
          of modern gaming technology. Joined by data scientist and scientific programmer June Isner, they are hoping to revolutionize analysis software so that every size business and analyst can benefit from the power 
          of big data. 
          </div>
        </div>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:40px;"></div></div>
      

      <div class="frame" >
        <div class="tBox" style="">
          <h1 style="font-size:21pt;text-align: left;">
          Still have questions?
          </h1>
          <div class="tBox" style="text-align: left;">
          <a href="/ContactUs/" style="font-size: 24px;text-decoration:none;color:#1189F2;">Contact Us</a>, if you have data needs, we have data solutions. 
          </div>
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