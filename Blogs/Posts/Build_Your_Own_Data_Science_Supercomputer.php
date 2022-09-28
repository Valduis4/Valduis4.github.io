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
                <meta property="og:title" content="Row64 — Build Your Own Data Science Supercomputer">
                <meta property="og:type" content="website" />
                <meta property="og:description" content="Have you ever wanted to build your own supercomputer? Yes?!
Why wouldn’t you!

If you want to break records and blaze through 100’s of millions of data rows in a way that was previously impossible, consider DIY.

There’s something exciting about bare-metal hardware, and with your own …">
                <meta property="og:image" content="https://row64.com/images/Thumbnail.png">
                <meta property="og:url" content="https://row64.com/Blogs/Build_Your_Own_Data_Science_Supercomputer.php">
                <meta name="twitter:card" content="summary_large_image">
                <meta name="twitter:site" content="@row64software">
                
                <title>Row64 - Build Your Own Data Science Supercomputer</title>
                <meta name="description" content="Have you ever wanted to build your own supercomputer? Yes?!
Why wouldn’t you!

If you want to break records and blaze through 100’s of millions of data rows in a way that was previously impossible, consider DIY.

There’s something exciting about bare-metal hardware, and with your own …">
                <link rel="shortcut icon" href="/images/favicon.ico">
            
                <link rel="stylesheet" href="Bottom.css?1">
                <link rel="stylesheet" href="/topmenu/Top_Style.css?3">
                <link rel="stylesheet" href="MainStyle.css?2">
                <link rel="canonical" href="https://row64.com/Blogs/Build_Your_Own_Data_Science_Supercomputer" />
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
                <script src="../Blogs.js?1"></script>
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

                <div class="frame">
                    <h1>
                        Build Your Own Data Science Supercomputer
                    </h1>
                </div>

                <div class="frame">
                    <img src="https://row64.com/blog/images/DIY_SC_Header_04.jpg" alt="" width="100%" height="" loading="lazy" style="max-width:950px">
                </div>

                <div style="height:30px;"></div>

                <div class="frame">
                    <div class="BlueCard" style="text-align:unset">
                        <div  style="height:30px"></div>
                            <p>Have you ever wanted to build your own supercomputer? Yes?!<br>Why wouldn&rsquo;t you!</p>
<p>If you want to break records and blaze through 100&rsquo;s of millions of data rows in a way that was previously impossible, consider DIY.</p>
<p>There&rsquo;s something exciting about bare-metal hardware, and with your own hands, putting together a data Ferrari that breaks records and does things that were impossible a year ago. Also, if you were ever a PC gamer, then this is easy because the heart of Data Science 2.0 is GPU &amp; VRAM and builds similar to gamer rigs.</p>
<p>If you just want a ready-made machine, you could easily just go to the&nbsp;<u><a href="https://www.cyberpowerpc.com/">CyberPowerPC</a></u>&nbsp;website and get a great build. But, for the adventurous, read on!</p>
<p>Ok, let's get right to the details of the build:</p>
<p>&nbsp;</p>
<div class="container" style="height:fit-content;">
<table class="table table-sm" style="padding: 1px;width: 620px;border-collapse: collapse;border-spacing: 0;font-family: inherit;">
<thead>
<tr>
<th style="vertical-align: bottom;border-bottom: 2px solid #ddd;padding: 8px;line-height: 1.42857143;text-align: left;box-sizing: border-box;border-collapse: collapse;border-spacing: 0;">Component</th>
<th style="vertical-align: bottom;border-bottom: 2px solid #ddd;padding: 8px;line-height: 1.42857143;text-align: left;box-sizing: border-box;border-collapse: collapse;border-spacing: 0;">Price (USD)</th>
</tr>
</thead>
<tbody>
<tr>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">GPU - EVGA GeForce RTX 3090, 24GB GDDR6X</td>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">2235</td>
</tr>
<tr>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">CPU - AMD Ryzen 9 3950X 16-Core</td>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">719</td>
</tr>
<tr>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">SSD - WD_Black 1TB SN850 NVMe230</td>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">230</td>
</tr>
<tr>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">RAM -Corsair Vengeance LPX 64GB</td>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">350</td>
</tr>
<tr>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">CPU Cooler - Noctua NH-D15</td>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">248</td>
</tr>
<tr>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">Case: Lian Li Lancool II Mesh</td>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">133</td>
</tr>
<tr>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">Fans 3 Noctua NF-P12 (1700 PWM)</td>
<td style="padding: 8px;line-height: 1.42857143;vertical-align: top; border-top: 1px solid #ddd;box-sizing: border-box;display: table-cell;border-collapse: collapse;border-spacing: 0;">130</td>
</tr>
</tbody>
</table>
</div>
<p>&nbsp;</p>
<p>Overall, the build is just over $4K&hellip;Buying this build pre-made will likely be around double the price&hellip; anywhere from $8-10K.</p>
<p>You can get a great computer to run Row64 for $1.5K, but if you want to break records and push the limits of data, it&rsquo;s worth considering DIY.</p>
<p>Another factor is the price of GPU. The GPU is the heart of next-generation Data Science performance. So most of the money is going there.</p>
<p>If you consider the 3090 has an MSRP of $1.4K, then when prices come back down after this current cryptocurrency price surge, it will be about $800 less (than the above listing) to break records, especially when cheaper cards come out next year.</p>
<p><br><img src="https://row64.com/blog/images/All_Parts_01.jpg"><br><br></p>
<p>For a few of us, this was the first time doing a custom computer build - at Row64 we&rsquo;re mostly data scientists and coders.</p>
<p>So this was a bit of an adventure&hellip; First, we got out the motherboard and attached the CPU, the RAM &amp; SSD, and then the CPU Cooler.</p>
<p>Overall it went pretty well, but we had to watch a few YouTube videos to make sure we were putting in the CPU and the Cooler in correctly. This was the intense exciting part of the whole process.</p>
<p><br><img src="https://row64.com/blog/images/Insert_CPU_And_Cooler_01.jpg"><br><br></p>
<p>Next, plugged in the GPU and wired the motherboard to the power and case externally just to make sure everything was working.</p>
<p>It was an awesome moment when it first turned on!</p>
<p><br><br><iframe src="https://www.youtube.com/embed/NyTpzWYiHuw" width="620" height="455"></iframe><br><br></p>
<p>On a side note, we should probably talk about the case&hellip; the big picture our goal was to make the fastest build possible, but not to use anything exotic or labor-intensive. So we took overclocking and water cooling off the list.</p>
<p>That meant we had to come up with the best possible solution for air cooling. Actually, we got quite obsessed with this topic and spent several months researching it. What we arrived at turned out incredibly well - the &ldquo;Lian Li Lancool II Mesh Performance&rdquo;.</p>
<p>I can&rsquo;t say enough how awesome this case is. It&rsquo;s really great, because you can open it up from 4 different angles with 4 different hinges, and is just perfectly designed for incredible cooling and build flexibility. In fact, we brought our build over to our friends and Colorado neighbors at&nbsp;<a href="https://www.lunarg.com/"><u>LunarG</u></a>&nbsp;for a company field trip. These folks in Fort Collins are all incredible hardware engineers, who also are great GPU coders. When we brought out the build and were chatting about our Data Science Supercomputer, they liked all the ideas, but 95% of the conversation revolved around this case and how cool it was.</p>
<p>So, we pushed the cooling a step further than the case default. If you get the Lancool II Mesh Performance it comes with 3 fans. 2 in the front and 1 in the back. We bought an additional 3 Noctua fans and did lots of research on how to get optimal airflow for cooling. Row64 really pushes the GPUs, and we knew we needed great cooling if we wanted to break records.</p>
<p><br><img src="https://row64.com/blog/images/Airflow_Setup_01.jpg"><br><br></p>
<p>As you can see our airflow setup is designed to draw air from the front and base of the case and push it out the back and top.</p>
<p>In all our tests afterward, this has worked perfectly and is a highly effective approach to cooling a cutting-edge GPU and CPU build.</p>
<p>Finally, we got all the parts together. Now it&rsquo;s time for the Data Science Supercomputer moment of truth&hellip; Turning it on!</p>
<p><br><br><iframe src="https://www.youtube.com/embed/nIu3kE26XTs" width="620" height="455"></iframe><br><br></p>
<p>It worked!</p>
<p>This is a great build for data supercomputing. At Row64, we&rsquo;ve recently sorted over a billion records using this exact build and are pushing the frontier even farther with new coding techniques.</p>
<p>Let&rsquo;s take a quick look at what this all means compared to some of the other cards (actually CyberpowerPC &amp; ASUS builds) we have in the office:</p>
<p><br><img src="https://row64.com/blog/images/DS_3090_Performacne.jpg"><br><br></p>
<p>So there it is&hellip; A Data Science Supercomputer.</p>
<p>Over 53% faster than our 2080Ti, and it can sort over a billion records in 60 seconds (details coming soon).</p>
<p>And running Geo Ray-Tracing is beyond mind-blowing on this machine - but we&rsquo;ll explain more of that soon enough - it&rsquo;s for an upcoming blog post&hellip;</p>
<br><br><a href="/Blogs/" style="font-family:inherit;font-size:20px;">Back to the blog.</a>
                    </div>
                </div>

                
                <!--##################################################################################-->
                <!--############################### BOTTOM INFO BAR ##################################-->
                <!--##################################################################################-->
                
                <?php
                    require"/var/www/html/bottommenu/bottom.php";
                    echo bottom('#F7F8F9');
                ?>
            </body>
            <noscript>
                <img src="https://ws.zoominfo.com/pixel/629a3d6c7915ca008f06ebf7" width="1" height="1" style="display: none;" alt="websights"/>
            </noscript>
            </html>
            