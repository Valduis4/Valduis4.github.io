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
        <a href="/Whitepaper/Download.php?file_name=Row64_Whitepaper.pdf" style="text-decoration:none; font-size:1.5em; color: #1189F2;">Download the PDF</a>
    </div>

    <!--#########--><div class="frame"><div class="filler" style="height:50px;"></div></div>

    <div class="frame">
        <h1 style="max-width:950px">Row64: How GPU Enabled Spreadsheets Are Unleashing The Power Of Big Data For The Everyday Analyst</h1>
    </div>

    <!--#########--><div class="frame"><div class="filler" style="height:10px;"></div></div>

    <div class="frame"><img src="./images/Vs.png" alt=""width="950"  style=""></div>

    <!--#########--><div class="frame"><div class="filler" style="height:10px;"></div></div>

    <div class="frame" >
        <div><p style="max-width:950px; font-style:italic;">Direct-to-hardware programming and low-latency optimization are delivering 1000x the
speed of traditional spreadsheets with the enhanced functionality of big data systems.</p>

<p style="max-width:950px">Spreadsheets are arguably the software that saved the personal computer. Introduced first to the
world with Visicalc, the utility of spreadsheets was so immediate and profound that Steve Jobs
singled them out as the single largest propellant for Apple’s early success.</p>

<p style="max-width:950px">Since then spreadsheet dominance has continued, with Excel topping the charts for most
popular PC program for the last 5 years. However, the functionality of Excel has begun to hit its
limits in recent years, as its legacy code simply cannot keep up with the size of modern data sets
that span from 30,000 rows to more than 1 million. Often analysts fighting against large data
sets have to turn of spreadsheet calculations entirely just so their computers can load them.
The so-called “spreadsheet lag” is a known industry truth and it’s estimated that data analysts
currently spend 80% of their time simply prepping data.</p>

<p style="max-width:950px">The result is billions of dollars lost to productivity and opportunity cost. A recent report by
Forrester estimated if data visibility were to increase even 10% for a typical Fortune 1000
company, revenue would increase by roughly $65 million. This number is only expected to
increase as mobile devices, IoT, genetic sequencing, ecommerce and financial products are both
generating new data and automating at exponential rates.</p>

<p style="max-width:950px">Companies with the adequate resources and personnel have tried to tackle their big data
problems by either turning to relational database management systems (typically querying in
SQL) or by using intermediary software such as ETL programs (Extract, Transform, Load) to
ingest and clean data before porting it to Excel in manageable quantities.</p>

<p style="max-width:950px">The problem is all of these systems are still imperfect, and often costly. Analysis software such
as SAS/STAT can cost upwards of $430 a month per user. Data dashboard services such
Tableau can cost into the thousands , and still requires analysts to learn how to query in SQL.
PowerBI, while cheaper, runs into constant bottlenecks when its data warehouses are
continuously queried by analysts.</p>

<p style="max-width:950px">Together, this barriers to entry ahve meant big data analysis has largely been in the realm of
large companies (500+ employees) locking out a majority of small and medium sized businesses
that could hugely benefit from understanding their data. In fact it’s estimated that <a href="https://go.forrester.com/blogs/hadoop-is-datas-darling-for-a-reason/" style="color: #1189F2;">73% of data is
left unused for analytics</a>—an opportunity cost estimated to be in the trillions of dollars.</p>

<p style="max-width:950px">Furthermore, existing software isn’t properly optimized for modern computing power, meaning
up to $28 billions of dollars a year spent on hardware improvements is largely wasted, as
software is leaving idle the most powerful processing units of the computer. Companies are
spending large amounts of capital to get a fractional return on their speed—simply because their
programs aren’t optimizing their extra processing power.</p>

<p style="max-width:950px; font-style:italic;">Row64 has thus emerged as the first true solution to bridge the costly mismatch between big
data needs and simple, yet powerful analytics solutions. By rethinking how data software is
coded from the ground up, Row64 combines the power and flexibility of big data systems with
the ease and familiarity of Excel—all at record-breaking speeds. In total, Row64 brings the
power of big data science to the everyday analyst.</p>

<p style="max-width:950px">To learn about how Row64 is able to achieve its record breaking speed, scale and simplicity, we
take a deep dive under the hood to explain the innovative technology behind our GPU
spreadsheets.</p>

<h2>GPU Programming: Optimizing Software For Hardware</h2>

<p style="max-width:950px">Often when we think of the most impressive computing capabilities on personal computers, we
think of games. Their intensely-detailed worlds are both expansive and hyper quick—enabling a
user to react responsively in real time with a constantly changing virtual environment.</p>

<p style="max-width:950px">Compare that with the user experience with Excel—a flat white sheet displaying simple ASCII
symbols—and it’s hard to understand why the latter has load speeds that at times are reduced to
an utter crawl.</p>

<p style="max-width:950px">The reason for this painstaking slowness is a lack of GPU optimization. Simply put, the code
behind all spreadsheet software is not properly leveraging the full value of their machine’s
processors.</p>

<p style="max-width:950px">Games—which require thousands of polygons to be rendered every second—are written to take
advantage of computer GPUs, which are highly specialized to handle heavy mathematical
computations. GPUs process large amounts of data in parallel, achieving one specific output in a
very short time.</p>

<p style="max-width:950px">Architectures of GPU are designed for highly parallel functionality, with multiple identical rows of control units, processing units
(ALUs) cache memory working in tandem for large computational tasks.</p>

<p style="max-width:950px">CPUs on the other hand are optimized to “think”, following a path where they load instructions
from memory, decode them, and then execute their respective function. A GPU would be terrible
at processing the variety of tasks a CPU has to balance, and CPUs could never approach the
speed of GPU for highly parallelized computations.</p>

<p style="max-width:950px">So why are spreadsheets (which are in essence giant graphic calculators) not using GPUs? The
answer is because writing software to GPUs requires coding at a low level, i.e. programming
directly to the hardware. For many software companies, this is extremely costly, as the process is
highly time consuming (requiring a lot of stability checks and iterations) and there are way
fewer programmers available who specialize in low-level GPU programming. As a result, legacy
companies continue to instead iterate on code that was written for CPUs way before the
incredible advancements in NVIDIA and AMD graphics cards were available.</p>

<p style="max-width:950px">By programming to the convenience of the coder, not the machine, spreadsheets are
underutilizing powerful resources— forcing tons of data through unspecialized CPUs—while
leaving largely untouched the incredible computational power of GPUs.</p>

<p style="max-width:950px">vs</p>

<p style="max-width:950px">By programming direct to the hardware via “bare-metal” programming, Row64 eliminates the decision trees and abstraction of high
level programming and smartly allocates directly to memory, CPU and GPU</p>

<p style="max-width:950px">Row64 solves this by programming everything directly to the hardware. This type of
“bare-metal” programming takes full advantage of the processing power of the GPU, while
maintaining the same easy UI for the end user. The result is that our GPU-enabled spreadsheets
(or GPU Spreadsheets), are able to achieve speeds up to 1000x faster than traditional
spreadsheets using the same exact computers.</p>

<h2 style="max-width:950px">Customized Computing: Smart Loads, Hybrid Engines and Low Latency Optimization</h2>

<p style="max-width:950px">The first step of Row64 was to create a program that enabled GPU computations to be used in
spreadsheet calculations. However, we soon realized that even faster calculations were possible
by optimizing beyond the GPU, to every component of a computer—from the SSD down to the
cache.</p>

<p style="max-width:950px">A big reason this is improved speed is the concept of low latency. Those familiar with computer
architecture are aware of the blazing fast speeds of the cache, from the fastest level of L1 down to
L3. This is largely due to the location of the cache itself, which is stored on the shortest possible
path to the CPU (often located on or right next to the CPU itself).</p>

<p style="max-width:950px">The location of memory is a crucial component of speed. Cache memory is the fastest of all types of memory often sitting adjacent to
or on top of the CPU itself.</p>

<p style="max-width:950px">Similarly the location of data on a computer’s storage system can be optimized for
improvements in speed by reducing the physical distance the data needs to travel to get to the
processors (referred to “short read” optimization). This is possible both on SSDs and physical
hard disks, via “short stroking”.</p>

<p style="max-width:950px">Due to the principle of low latency, processes on the CPU will be faster than processes on the
GPU if the CPU can handle the process. This means for low load tasks, the CPU may actually be
better suited than the GPU. We dub this the “CPU/GPU crossover threshold”. Tasks below this
threshold are allocated to the CPU for short distance reads, and tasks above this load level are
demanding enough to require the GPU—even if it means increasing the distance needed for the
computation. This is the core essence of our secret, the “</p><p style="max-width:950px; font-style:bold;">hybrid engine<p style="max-width:950px">” approach.</p>

<p style="max-width:950px">A look at the CPU/GPU crossover threshold shows how our hybrid engine allocates tasks to processors both by type of function and
load size</p>

<p style="max-width:950px">To take full advantage of all the components at your computer’s disposal and deploy our hybrid
engine technology, we developed a truly unique “smart load” system, that runs a full analysis on
your computer at the hardware level, and optimizes to each specific component. This ensures
that we are pushing every computer to its limit, maximizing your specific copy of Row64 to your
specific device—in stark contrast to the one-code-fits-all model of all legacy spreadsheet
software.</p>

<h2 style="max-width:950px">Bringing The Power Of Python To Excel With DataFrames</h2>

<p style="max-width:950px">A key component for how Row64 is able to deliver record breaking speed and functionality is the
optimized use of DataFrames. We like to think of DataFrames as the foundation for
spreadsheets with superpowers, because they deliver Excel-like simplicity with enhanced
flexibility and Dataframes are structured similarly to spreadsheets—with rows and columns—
however, instead of needing to be manipulated as a flat file, cell-by-cell, they can be manipulated
as entire sheets or rows. This means that rather than doing 100 individual calculations for a 2
column x 50 row spreadsheet, a DataFrame can do just two calculations, and then express each
cell as part of its respective column or row.</p>

<p style="max-width:950px">Similarities and differences between the DataFrames, Excel tabs, database tables, and a 2D Matrices.</p>

<p style="max-width:950px">In recent years, Dataframes have become popular among heavy data users (most notably in the
Pandas Python library) for their incredible speed and flexibility. The problem is that for
non-coding business analysts, programming in Python or R can be daunting and prohibitive.</p>

<p style="max-width:950px">By creating a simple and familiar UI wrapping in a DataFrame architecture, Row64 brings the
speed and power of Python based DataFrames, to a no-code Excel-style spreadsheet—with all
the benefits of GPU enabled calculations outlined above.</p>

<h2 style="max-width:950px">Financial Implications of Row64’s Increased Speed</h2>

<p style="max-width:950px">The level of speed and scale unlocked by Row64 isn’t just a marginal upgrade, it’s a step-change
function increase. By enabling analysts to tailor their workflow around data insights rather than
data limitations—Row64 has the power to fundamentally change how companies interact with
their data.</p>

<p style="max-width:950px">To understand the magnitude of this potential change, it’s worth understanding that the world’s
treasuries—the highest level of financial institutions on the planet—are wasting roughly 625
work days a year just waiting for Excel to load tasks as simple as checking their balance.</p>

<p style="max-width:950px">This is a tremendous waste of highly skilled labor hours. Business analysts are spending hours
compiling ledger data for monthly revenue summaries when they could be doing it
instantaneously. The ability to be unencumbered by data means summaries and schedules could
be created daily or even weekly with little to no time loss from the analyst side. Accounting
consultants—who often charge $400/hour and higher for their services—could see an entire
shift in their business model, once their time spent cleaning data for Excel gets reduced to zero.
In effect, virtually all analyst and consultant time could be spent on decision intelligence (not
load time).</p>

<p style="max-width:950px">The ability to scale data instantaneously doesn’t just mean an improvement on current
practices—it actually introduces entirely new revenue streams entirely. An example of this is
when for the first time ever, Row64 was able to price the entire equity options market in real
time, a feat which shifts the framework around the possibilities of high frequency trading.</p>

<p style="max-width:950px">Similarly in the hard sciences, gene sequencing has been shown to be cut from 1 ½ days to just
20 minutes when using the power of GPU computations. This means world altering outbreaks
like Covid can be sequenced and new variants identified in minutes instead of days—potentially
preventing new world outbreaks.</p>

<p style="max-width:950px">Beyond calculations, the ability to do search and drill down functions has enabled security
agencies like the NSA to immediately parse through security logs as big as half a terabyte,
finding crucial information like hacker IP addresses in just a couple seconds.</p>

<p style="max-width:950px">The limitless nature of GPU enabled data analysis in essence isn’t a new model of a car, but the
actual creation of a modern combustion engine itself. We believe that with this new data toolset,
Row64 could help propel us to a new era of responsive data-based, decision intelligence.</p>

<h2 style="max-width:950px">Seeing Is Understanding: How Row64’s Next Generation Data Visualizations Translate Speed Into Intelligence</h2>

<p style="max-width:950px">The lasting impact of the printing press wasn’t the speed with which it helped ink hit paper, but
the speed with which those printed words distributed new information to the masses.</p>

<p style="max-width:950px">Similarly, the power of Row64 doesn't come just from the speed with which it can sort and
analyze data, but the insight which that data analysis provides. By doing away with the time
needed to prepare data, we are opening up a new frontier of hyper-responsive, real-time data
visualization tools, showcasing everything from real time geo-plotting, to animated time series
and bar chart racing.</p>

<p style="max-width:950px">These visualizations are highly efficient at communicating information—so much so that a study
by the Wharton School of Business found that data visualization <a href="https://www.amanet.org/articles/using-visual-language-to-create-the-case-for-change/" style="color: #1189F2;">could shorten meetings by up
to 24%</a>. With visual information processed roughly 60,000 times faster than text, effective data
visualization tools can increase understanding of everything from communicable disease spread
to trends in ecommerce.</p>

<p style="max-width:950px">By harnessing the same hybrid engine from our GPU Spreadsheets, Row64 is able to deliver data
visualizations that operate at a speed and scale not possible with popular data visualization tools
such as Plotly, Power BI or Tableau.</p>

<p style="max-width:950px">This figure shows identical files that map all 1,930 zip codes in Texas. Row64 is able to zoom in and out in realtime, where QGIS
takes up to 7.5 seconds each time the user wants to scroll in or out.</p>

<p style="max-width:950px">By creating a simple to use program that can quickly ingest, sort and then visualize data, Row64
is delivering a truly end-to-end upgrade for every facet of the modern analyst’s needs.</p>

<h2 style="max-width:950px">Row64 Speed and Scale Records</h2>

<p style="max-width:950px">The best way to understand just how fast Row64 is to directly compare the blazing fast speed to
the competition. We outline a few of the most relevant benchmarks below.</p>

<p style="max-width:950px;display: list-item;">Opening Files (12x faster). Row64 can open a 108 million line flat file in 10.4
seconds1. In Anatella, opening the same sized files takes 2 minutes 3 seconds.
Microsoft Excel cannot even load file sizes this big (cap is 1 million rows).</p>

<p style="max-width:950px;display:list-item;">Sorting (17x faster) . Excel takes 2.55 seconds to sort a 900k row spreadsheet. Row64
did the same computation in 0.15 seconds2.</p>

<p style="max-width:950px;display:list-item;">Filter (7x faster). Sorting the same 900k row file, Row64 was able to complete the task
in 0.17 seconds, 7x faster than DataBricks.</p>

<p style="max-width:950px;display:list-item;">Real Time Equity Market Pricing (1154x faster). Row64 was able to price 1
million Options from the equity market in 0.26 seconds3. This is 1154x times faster
than the industry target of 5 minutes.</p>

<p style="max-width:950px;display:list-item;">1 Billion Load Scale (First Ever). While Excel has a 1 million row limit, Row64 can
open a record breaking 1 billion rows, the first spreadsheet software that can handle
this load scale. We’ve tested load and scroll functionality at this scale on computers as
old as the 2013 ThinkPad.</p>

<p style="max-width:950px">The level of speed and scale unlocked by Row64 is beyond a marginal upgrade. It’s a stepchange
function that could fundamentally change paradigms in how analysts must shape their workflow
around data. By handing over supercomputer-like ability to everyday data analysts, we hope to
unlock a new frontier in big data and software.<p></div>
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