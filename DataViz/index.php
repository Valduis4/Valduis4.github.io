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
    <meta property="og:title" content="Row64 — Better Visualizations">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Create superior visualizations using the intuitive tools of Row64 to impress whoever sees them.">
    <meta property="og:image" content="https://row64.com/images/Thumbnail.png">
    <meta property="og:url" content="https://row64.com/DataViz/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@row64software">
    
    <title>Row64 - Better Visualizations</title>
    <meta name="description" content="Create superior visualizations using the intuitive tools of Row64 to impress whoever sees them.">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <link rel="stylesheet" href="/R64_Style.css?2">
    <link rel="stylesheet" href="/topmenu/Top_Style.css?75869">
    <link rel="stylesheet" href="/scroll.css?8">
    <link rel="canonical" href="https://row64.com/DataViz/" />
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
    <script src="/R64_Scripts.js?4"></script>
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
      Better Visualization Lighting Fast
      </h1>
        <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
        <div class="frame"><div class="tBox" style="text-align:left; padding:10px;height:unset;width:100%;max-width:950px;margin:10px;margin-bottom:32px">
        Want to tell compelling stories with data? Check our visualization examples all created in Row64 with no editing or programming.<br><br>
        Download our free version of Row64 to try recreating for yourself with our included sample files—and see just how easy creating modern data visualization can be!
          </div></div>
          <!--#########--><div class="frame"><div class="filler" style="height:40px;"></div></div>
          <div class="frame">
            <div style="height:fit-content;width:100%;max-width:950px;background-color:#808080;padding:5px;">
                <div style="border:none;box-shadow: none;">
                  <div class="vBox" >
                    <video id="introVideo" controls muted playsinline poster="/images/Taxes.png?2" style="border:0;">
                      <source src="/videos/Taxes.mp4" type=video/mp4>
                    </video>
                </div>
                </div>
              </div>
              </div>
            <div class="frame">
                <div class="tbox" style="background-color:#808080;color:#FFFFFF;width:100%;max-width:930px;padding:15px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">
                    <h2 style="color:#FFFFFF;text-align:left;margin-top:0px;margin-bottom:0px;">How much does your state contribute to federal taxes</h2><br>
                    Animated BarChart dipicting states contribution to federal taxes<br><br>
                    <div style="display:flex;margin-top:20px;margin-bottom:20px;"><a href="/Download/" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;">Download Row64</a>
                    <a download href="/Taxes.r64" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;margin-left:30px;">Download Sample Project File</a>
                    </div><div style="width:100%;text-align:right;">Author: Paul Trinh</div>
                </div>
            </div>
          <!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>
          
          <div class="frame">
            <div style="height:fit-content;width:100%;max-width:950px;background-color:#808080;padding:5px;">
                <div style="border:none;box-shadow: none;">
                  <div class="vBox" >
                    <video id="introVideo" controls muted playsinline poster="/images/Reddit.png?2" style="border:0;">
                      <source src="/videos/Reddit.mp4" type=video/mp4>
                    </video>
                </div>
                </div>
              </div>
              </div>
            <div class="frame">
                <div class="tbox" style="background-color:#808080;color:#FFFFFF;width:100%;max-width:930px;padding:15px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">
                    <h2 style="color:#FFFFFF;text-align:left;margin-top:0px;margin-bottom:0px;">Top 15 Subreddit Subscriber Growth</h2><br>
                    Racing Line Chart depicting subscriber growth of top 15 subreddit subgroups<br><br>
                    <div style="display:flex;margin-top:20px;margin-bottom:20px;"><a href="/Download/" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;">Download Row64</a>
                    <a download href="/Reddit.r64" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;margin-left:30px;">Download Sample Project File</a>
                    </div><div style="width:100%;text-align:right;">Author: Paul Trinh</div>
                </div>
            </div>
          <!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>

          <div class="frame">
    <div style="height:fit-content;width:100%;max-width:950px;background-color:#808080;padding:5px;">
        <div style="border:none;box-shadow: none;">
          <div class="vBox" >
            <video id="introVideo" controls muted playsinline poster="/images/BoxOffice.png?2" style="border:0;">
              <source src="/videos/BoxOffice.mp4" type=video/mp4>
            </video>
         </div>
        </div>
      </div>
      </div>
    <div class="frame">
        <div class="tbox" style="background-color:#808080;color:#FFFFFF;width:100%;max-width:930px;padding:15px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">
            <h2 style="color:#FFFFFF;text-align:left;margin-top:0px;margin-bottom:0px;">Impact of COVID-19 on US Domestic Box Office</h2><br>
            Top 15 Movie Studio Performance Total Gross Box Office (Last Decade)<br><br>
            <div style="display:flex;margin-top:20px;margin-bottom:20px;"><a href="/Download/" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;">Download Row64</a>
            <a download href="/BoxOffice.r64" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;margin-left:30px;">Download Sample Project File</a>
            </div><div style="width:100%;text-align:right;">Author: Paul Trinh</div>
        </div>
    </div>
          <!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>

    <div class="frame">
    <div style="height:fit-content;width:100%;max-width:950px;background-color:#808080;padding:5px;">
        <div style="border:none;box-shadow: none;">
          <div class="vBox" >
            <video id="introVideo" controls muted playsinline poster="/images/Amazon.png?2" style="border:0;">
              <source src="/videos/Amazon.mp4" type=video/mp4>
            </video>
         </div>
        </div>
      </div>
      </div>
    <div class="frame">
        <div class="tbox" style="background-color:#808080;color:#FFFFFF;width:100%;max-width:930px;padding:15px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">
            <h2 style="color:#FFFFFF;text-align:left;margin-top:0px;margin-bottom:0px;">Effect of AWS on Amazon's Operating Income</h2><br>
            Animated Bar Chart dipicting the impact of AWS.<br><br>
            <div style="display:flex;margin-top:20px;margin-bottom:20px;"><a href="/Download/" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;">Download Row64</a>
            <a download href="/Amazon.r64" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;margin-left:30px;">Download Sample Project File</a>
            </div><div style="width:100%;text-align:right;">Author: Paul Trinh</div>
        </div>
    </div>
          <!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>

    <div class="frame">
    <div style="height:fit-content;width:100%;max-width:950px;background-color:#808080;padding:5px;">
        <div style="border:none;box-shadow: none;">
          <div class="vBox" >
            <video id="introVideo" controls muted playsinline poster="/images/CA.png?4" style="border:0;">
              <source src="/videos/CA.mp4" type=video/mp4>
            </video>
         </div>
        </div>
      </div>
      </div>
    <div class="frame">
        <div class="tbox" style="background-color:#808080;color:#FFFFFF;width:100%;max-width:930px;padding:15px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">
            <h2 style="color:#FFFFFF;text-align:left;margin-top:0px;margin-bottom:0px;">The Decline of CA's 10 Largest Water Resources</h2><br>
            Animated Bar Chart dipicting the rapid decline of water reasources in the state of CA.<br><br>
            <div style="display:flex;margin-top:20px;margin-bottom:20px;"><a href="/Download/" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;">Download Row64</a>
            <a download href="/CA.r64" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;margin-left:30px;">Download Sample Project File</a>
            </div><div style="width:100%;text-align:right;">Author: Paul Trinh</div>
        </div>
    </div>
    <!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>

    <div class="frame">
    <div style="height:fit-content;width:100%;max-width:950px;background-color:#808080;padding:5px;">
        <div style="border:none;box-shadow: none;">
          <div class="vBox" >
            <video id="introVideo" controls muted playsinline poster="/images/Apple.png?2" style="border:0;">
              <source src="/videos/AppleNetSales.mp4" type=video/mp4>
            </video>
         </div>
        </div>
      </div>
      </div>
    <div class="frame">
        <div class="tbox" style="background-color:#808080;color:#FFFFFF;width:100%;max-width:930px;padding:15px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">
            <h2 style="color:#FFFFFF;text-align:left;margin-top:0px;margin-bottom:0px;">Apple Sales By Product Type</h2><br>
            Animated Pie Chart Showing The Impact of Apple Product Lines On Total Revenue Over Time.<br><br>
            <div style="display:flex;margin-top:20px;margin-bottom:20px;"><a href="/Download/" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;">Download Row64</a>
            <a download href="/Apple.r64" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;margin-left:30px;">Download Sample Project File</a>
            </div><div style="width:100%;text-align:right;">Author: Paul Trinh</div>
        </div>
    </div>
      <!--#########--><div class="frame"><div class="filler" style="height:100px"></div></div>

      <div class="frame">
        <div style="height:fit-content;width:100%;max-width:950px;background-color:#808080;padding:5px;">
        <div style="border:none;box-shadow: none;">
          <div class="vBox" >
            <video id="introVideo" controls muted playsinline poster="/images/PPI.png"style="border:0;">
              <source src="/videos/PPI.mp4" type=video/mp4>
            </video>
         </div>
        </div>
        </div>
      </div>
    <div class="frame">
        <div class="tbox" style="background-color:#808080;color:#FFFFFF;width:100%;max-width:930px;padding:15px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">
            <h2 style="color:#FFFFFF;text-align:left;margin-top:0px;margin-bottom:0px;">Producer Price Index YoY Change</h2><br>
            Animated bar chart showing the rampant growing cost of goods and services in the United States.<br><br>
            <div style="display:flex;margin-top:20px;margin-bottom:20px;"><a href="/Download/" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;">Download Row64</a>
            <a download href="/Inflation-PPI.r64" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;margin-left:30px;">Download Sample Project File</a>
            </div><div style="width:100%;text-align:right;">Author: Paul Trinh</div>
        </div>
    </div>
    <!--#########--><div class="frame"><div class="filler" style="height:100px;"></div></div>

    <div class="frame">
    <div style="height:fit-content;width:100%;max-width:950px;background-color:#808080;padding:5px;">
        <div style="border:none;box-shadow: none;">
          <div class="vBox" >
            <video id="introVideo" controls muted playsinline poster="/images/Income.png"style="border:0;">
              <source src="/videos/Inflation.mp4" type=video/mp4>
            </video>
         </div>
        </div>
</div>
      </div>
    <div class="frame">
        <div class="tbox" style="background-color:#808080;color:#FFFFFF;width:100%;max-width:930px;padding:15px;font-family: 'AkkuratLLWeb-Bold', Fallback, sans-serif;">
            <h2 style="color:#FFFFFF;text-align:left;margin-top:0px;margin-bottom:0px;">Real vs. Normal Disposable Income</h2><br>
            Animated Line Chart dipicting the relationship between Disposable Income value and Value Adjusted for Inflation.<br><br>
            <div style="display:flex;margin-top:20px;margin-bottom:20px;"><a href="/Download/" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;">Download Row64</a>
            <a download href="/Inflation-Disposable_Income.r64" style="background-color:#0277c1;text-decoration:none;color:#FFFFFF;padding:2px 10px 2px 10px;border-radius:3px;border: 1px #c0ddef solid;margin-left:30px;">Download Sample Project File</a>
            </div><div style="width:100%;text-align:right;">Author: Paul Trinh</div>
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