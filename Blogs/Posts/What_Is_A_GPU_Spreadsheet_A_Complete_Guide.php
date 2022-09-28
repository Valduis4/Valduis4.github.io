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
                <meta property="og:title" content="Row64 — What Is A GPU Spreadsheet? A Complete Guide">
                <meta property="og:type" content="website" />
                <meta property="og:description" content="What exactly is a GPU Spreadsheet? What is GPU Compute? Read our comprehensive guide below to learn more about the exciting world of GPU calculations for data science.">
                <meta property="og:image" content="https://row64.com/Blogs/Posts/images/GPU_Compute.png">
                <meta property="og:url" content="https://row64.com/Blogs/Posts/What_Is_A_GPU_Spreadsheet_A_Complete_Guide.php">
                <meta name="twitter:card" content="summary_large_image">
                <meta name="twitter:site" content="@row64software">
                
                <title>Row64 - What Is A GPU Spreadsheet? A Complete Guide</title>
                <meta name="description" content="What exactly is a GPU Spreadsheet? What is GPU Compute? Read our comprehensive guide below to learn more about the exciting world of GPU calculations for data science.">
                <link rel="shortcut icon" href="/images/favicon.ico">
            
                <link rel="stylesheet" href="Bottom.css?1">
                <link rel="stylesheet" href="/topmenu/Top_Style.css?3">
                <link rel="stylesheet" href="MainStyle.css?2">
                <link rel="canonical" href="https://row64.com/Blogs/Posts/What_Is_A_GPU_Spreadsheet_A_Complete_Guide.php" />
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
                        What Is A GPU Spreadsheet? A Complete Guide
                    </h1>
                </div>

                <div class="frame">
                    <img src="https://row64.com/Blogs/Posts/images/GPU_Compute.png" alt="" width="100%" height="" loading="lazy" style="max-width:950px">
                </div>

                <div style="height:30px;"></div>

                <div class="frame">
                    <div class="BlueCard" style="text-align:unset">
                        <div  style="height:30px"></div>
                            <p dir="ltr">Often Row64 we get asked about many of the terms and technologies we are pioneering. After all, many are curious how exactly we deliver roughly <a href="/Gallery/ExProFiles.php">10x the speed of Microsoft Excel</a> on personal computers with exact identical specs.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">While the full answers to these questions are best found in <a href="/Whitepaper/">our whitepaper</a>, the short answer for questions surrounding our revolutionary &lsquo;GPU Spreadsheets&rsquo; can be found in our comprehensive guide below.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<ol>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation"><a href="#GPU_Spreadsheet"><strong>What is A GPU Spreadsheet?</strong></a></p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation"><a href="#GPU_Compute"><strong>What Are GPU Enabled Calculations?</strong></a></p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation"><a href="#How_Compute"><strong>How Can I Do GPU Enabled Calculations?&nbsp;</strong></a></p aria-level="1"> </a></p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation"><a href="#Speed_Advantages"><strong>Speed Advantages of A GPU Spreadsheet&nbsp;</strong></a></p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation"><a href="#Examples"><strong>Examples of GPU Spreadsheet Software</strong></a></p>
</li>
</ol>
<p><strong>&nbsp;</strong></p>
<h2 id="GPU_Spreadsheet" dir=>What Exactly Is A GPU Spreadsheet?</h2>
<p dir="ltr">In simple terms a GPU spreadsheet is a spreadsheet whose software is &lsquo;GPU-enabled&rsquo; to take advantage of the graphics processing unit (GPU) of a computer. This is in contrast to most spreadsheet software that use the computer&rsquo;s CPU for their calculations, as is standard for most applications. The main benefit of a GPU spreadsheet is improved speed and scale of calculations.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">The reason why a GPU spreadsheet is so powerful is because a GPU is a processor very well suited for the complex numeric calculations required in spreadsheets. This is a function of the highly parallelized architecture of the GPU. Also known as parallel processing, this type of computing refers to a process by which similar calculations are performed across one data stream at the same time, (i.e. in parallel). You can even see this physically in the architecture of a GPU which has many more cores than a CPU all lined up in parallel rows.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://lh3.googleusercontent.com/Rhcqd7u17ZXH7X8mZkvIjRpE8PmEJUSE-4b4TPDmPc4LzSqB3WeEOCYVgL274WkscesMN_lpH8kl25AUcvC3u8i46PPpiM8MQ285XyhhdiNeYpMtnpgFkEGHJuH85S71HbQs0adl8SbcxznsSsQ5X1c" width="624" height="289"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">The nature of parallel processing makes GPUs very fast at very specialized tasks. This includes graphics rendering, but also the types of formulas and display required for spreadsheets and corresponding data visualizations&mdash;hence the invention of the &lsquo;GPU spreadsheet&rsquo;.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h2 id="GPU_Compute" dir=>What are &lsquo;GPU-Enabled Calculations&rsquo;? Is It The Same Thing As GPU Compute?</h2>
<p dir="ltr">When you hear about GPU spreadsheets, you&rsquo;ll often also hear about &ldquo;GPU calculations&rdquo;, often referred to as &ldquo;GPU compute&rdquo;. To break it down, GPU-enabled calculations or GPU compute are non-graphics calculations that are either wholly or partially routed to a computer&rsquo;s GPU by software which has coded directly to the GPU, allowing it to understand and process the necessary data.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">To better understand the nature of GPU compute, it&rsquo;s useful to remember that historically GPUs were just designed for graphics processing;&nbsp; it&rsquo;s literally in the name: graphics processing unit. Rendering complex pixel maps in real time for video games or video software was exactly the type of task for which highly parallelized processing was fantastic at. Through parallel processing, GPUs would &ldquo;load&rdquo; up one set of instructions enabling them to perform roughly <a href="https://computer.howstuffworks.com/graphics-card.htm">60-200 calculations a second</a> from the same set of coordinate &ldquo;instructions&rdquo;, thus displaying thousands of pixels in a cohesive, real-time 3D environment.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In recent years, as data sets have grown astronomically larger, data scientists and other businesses have increasingly looked to harness the computational strength of GPUs not just for graphics rendering, but for calculations as well. Uses of GPU compute have included data science, bitcoin mining, genomic sequencing, options market pricing, machine deep learning and climate modeling.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Putting the two concepts together, you&rsquo;ll see that GPU spreadsheets are applying GPU compute in the context of a spreadsheet user interface.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h2 id="How_Compute" dir="ltr">How Can I Do GPU Compute?&nbsp;</h2>
<p dir="ltr">The unfortunate reality is that enabling your GPU isn&rsquo;t as simple as flipping a button. In order for any function to be allocated to the GPU it needs to actually be coded in its own language, which is optimized to the highly parallelized nature of GPUs. This is because CPUs and GPUs are so different in architecture that it isn&rsquo;t possible to create language that speaks to both.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In addition, GPU languages aren&rsquo;t (at least at the moment) commonly known. They&rsquo;re also somewhat time consuming as they were historically designed for graphics and thus you had to sort of &ldquo;trick&rdquo; your program graphics processor into thinking of data like graphics. To make matters worse, both Nvidia and AMD, the two main graphics processor manufacturers, have their own proprietary GPU language&mdash;CUDA and StreamSDK/Brook+ respectively. Apple has also introduced Apple Metal as a GPU language as they&rsquo;ve begun adding their own GPUs into their products.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">There are some attempts at using open source language such as <a href="http://opencl">OpenCL</a> to &lsquo;hack&rsquo; Excel into doing calculations through the GPU. However while these do show substantial speed improvements, they definitely don&rsquo;t have the robustness or user friendly design more analysts have come to expect from their software.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Ultimately for GPU-enabled calculations, one would need to have specific knowledge of GPU programming. This is challenging for even highly skilled programmers.&nbsp; There exists third party software that enables some translation from traditional programs to executable GPU files that do the computing, however these need to be written manually for each function.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">&nbsp;At <a href="../">Row64</a> we take pride in being one of the only companies out there making user friendly GPU spreadsheets that give everyday analysts the power of GPU calculations without needing to learn to code directly themselves.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h2 id="Speed_Advantages" dir="ltr">Speed Advantages of GPU Spreadsheets&nbsp;</h2>
<p dir="ltr">In general GPU enabled calculations are estimated to be in the realm of 10-100x faster than CPU calculations for similar tasks. However these speeds differ based on the task being assigned, as GPU calculations are not just used for spreadsheets but often for machine learning.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">A couple speed benchmarks of the GPU calculations:&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">A <a href="https://towardsdatascience.com/parallel-computing-upgrade-your-data-science-with-a-gpu-bba1cc007c24#:~:text=GPUs%20render%20images%20more%20quickly,including%20the%20GPU(s).">test using a benchmark</a> CIFAR-10 Object Recognition Model (a popular deep learning test for recognizing visual patterns) showed a 27x speed increase when using the GPU rather than simply the CPU. <br><br></p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">McKinsey &amp; Co reported that <a href="https://www.mckinsey.com/business-functions/mckinsey-digital/our-insights/tech-forward/the-business-case-for-using-gpus-to-accelerate-analytics-processing">cycle times for machine learning can be 50 times faster</a> when using GPU acceleration. <br><br></p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">When using identical computers, Row64 was able to get <a href="/Gallery/ExProFiles.php">17x faster sorting functionality and 91x faster</a> our &ldquo;hybrid engine&rdquo;, which optimizes both CPU and GPU processing.&nbsp;</p>
</li>
</ul>
<p><strong><br><br></strong></p>
<h2 id="Examples" dir="ltr">Examples of GPU Spreadsheet Software</h2>
<p dir="ltr">Despite the practicality of using GPUs for spreadsheets, the reality is that virtually all examples to date have been &ldquo;hacks&rdquo; from people using GPU language to port Excel data through external code. This has primarily been done through OpenCL, which stands for Open Code Language and it represents the first and mode widely used open source GPU language.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">The team at <a href="https://streamhpc.com/blog/2016-09-19/accelerating-excel-opencl/">Stream High Performance Computing</a> put together an Excel to OpenCL integration that essentially ports Excel Data to an external DLL (which is executable machine code file), thus outsourcing the calculations to the GPU. While an impressive feat, it&rsquo;s far from perfect as it still doesn&rsquo;t work with Nvidia&rsquo;s processors, and by the team&rsquo;s own admission, has precision problems between different sets of integers.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">A team at <a href="https://prog.world/we-connect-to-excel-gpu-and-speed-up-excel-300-times/">Prog.World</a> did a similar hack, using OpenCL and a DLL file to achieve very high speed improvements with their Excel VBA functions. While very impressive on a technical level, this project is one that requires a high degree of coding experience to execute, as it actually requires the user to code the entire process.&nbsp;&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">To fill this void between powerful GPU computing and user-friendly, intuitive software, we at <a href="../">Row64</a> wrote our software from the ground up to take advantage of both the CPU and GPU. Our &ldquo;hybrid engine&rdquo; not only blows calculation and display speeds out of the water compared to everything else, but we also do so with an incredibly familiar and easy to use spreadsheet interface. No needing to learn how to code to the GPU yourself.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="Python_Spreadsheet&rdquo; dir=">What Is A Python Spreadsheet? Is It The Same As A GPU Spreadsheet?</h2>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">A Python spreadsheet is any spreadsheet for which the data manipulation is executed with Python script. A Python spreadsheet is different from a GPU spreadsheet in that while a GPU spreadsheet refers to the hardware enabled calculations a spreadsheet uses, a Python spreadsheet refers to the use of Python code in the software itself. Because they refer to different aspects, it&rsquo;s possible for a spreadsheet to be both a Python and GPU spreadsheet (such as is the case with Row64). This can give the full advantage of speed, scale and flexibility.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Because of its flexibility and efficiency working with large datasets, Python has increasingly been making its way into the world of data science and spreadsheets. A chart of Stack Overflow shows Python to be the fastest growing data science language by a large margin. Some current options like <a href="https://realpython.com/openpyxl-excel-spreadsheets-python/">openpyx</a>l allow you to run python script directly into Microsoft Excel. Others, like open source <a href="https://pyspread.gitlab.io/">pyspread</a> are natively written in Python entirely.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://lh5.googleusercontent.com/GdHv0k46BBZbYE76MlLjiO4IIXd30lWaL5GhiXPHWsU0m8CnufApQNQznu_7u3DYdhefjgiA75slyUAODFRdi4-qHAuqMJMzUhtM3VThOouoruMRPjpP999wI1mbj1Ud2UvcIQjz1LVD91w40128cJc" width="624" height="449"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Our own Row64 takes spreadsheet-style formulas and expresses them as Python code, which a user can then save, modify or even share with other users. This flexibility means entire workflows or custom functions can be programmed in Python, and then exported and loaded into any other user&rsquo;s spreadsheet, without needing to replicate code. To make matters even simpler, we&rsquo;ve coded over 250 of these Python-coded &ldquo;data science recipes&rdquo; for users to load in one click, to do some of the most commonly asked functions like time series forecasting or bar chart visualization.&nbsp;</p>
<p><strong id="docs-internal-guid-17f703a4-7fff-cf10-5b23-077ba15228ec"><br>If you want to see the power of Python and GPU Spreadsheets in action, <a href="/Download/">download our free 30-day trial</a> and download our <a href="../Gallery/ExProFiles.php">sample files of up to 100 million rows</a> to see how blazing fast our speeds really are.</strong></p><br><br><a href="/Blogs/" style="font-family:inherit;font-size:20px;">Back to the blog.</a>
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
            