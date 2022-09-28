<?php session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        $_SESSION["ReURL"] = "/Blogs/CreatePost.php";
        echo '<script type="text/javascript">window.location = "/Login"</script>';
        exit;
    }else{
        $email = trim($_SESSION['email']);
        $email_test = array($email);
        require("/var/www/database/config.php");
        $stmt = $dbh->prepare("SELECT cid FROM Users WHERE email = ?");
        $stmt->execute($email_test);
        $results = $stmt->fetch();
        $cid = $results['cid'];
        if($cid != 1){
            echo '<script type="text/javascript">window.location = "/Blogs"</script>';
            exit;
        }
    }
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
    <link rel="stylesheet" href="MainStyle.css?2">
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

    <script src="./tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#Blog',
        plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'template', 'help'
        ],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
        menu: {
        favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
        },
        menubar: 'favs file edit view insert format tools table help',
        content_css: 'css/content.css'
    });
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
        
        // Processing form data when form is submitted
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $Title = trim($_POST["Title"]);
            $URLTitle1 = str_replace(' ', '_', $Title);
            $URLTitle2 = str_replace('?', '', $URLTitle1);
            $URLTitle3 = str_replace('.', '', $URLTitle2);
            $URLTitle = str_replace(',', '', $URLTitle3);
            $img = trim($_POST["URL"]);
            $Desc = trim($_POST["Desc"]);
            $Load = $_POST["Blog"];
            $TagsP = $_POST["Tags"];
            $Author = $_POST["Author"];

            $filename = "/var/www/html/Blogs/Posts/". $URLTitle . ".php";
            echo $filename;
            $NewBlog = fopen($filename,"w");
            $Contents = "<?php session_start();
            ?>
            <!DOCTYPE html>
            
            <html lang=\"en-US\">
              <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 maximum-scale=1, minimum-scale=1\">
                <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-22XVR023RP\"></script>
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
                <img height=\"1\" width=\"1\" 
                src=\"https://www.facebook.com/tr?id=1170404306856125&ev=PageView
                &noscript=1\"/>
                </noscript>
                <!-- End Facebook Pixel Code -->
                <script src=\"https://www.googleoptimize.com/optimize.js?id=OPT-5L6WRXR\"></script>
                <meta charset=\"utf-8\">
                <meta property=\"og:title\" content=\"Row64 — " . $Title . "\">
                <meta property=\"og:type\" content=\"website\" />
                <meta property=\"og:description\" content=\"". $Desc ."\">
                <meta property=\"og:image\" content=" . $img . ">
                <meta property=\"og:url\" content=\"https://row64.com/Blogs/Posts/". $URLTitle . ".php\">
                <meta name=\"twitter:card\" content=\"summary_large_image\">
                <meta name=\"twitter:site\" content=\"@row64software\">
                
                <title>Row64 - ". $Title ."</title>
                <meta name=\"description\" content=\"". $Desc ."\">
                <link rel=\"shortcut icon\" href=\"/images/favicon.ico\">
            
                <link rel=\"stylesheet\" href=\"Bottom.css?1\">
                <link rel=\"stylesheet\" href=\"/topmenu/Top_Style.css?3\">
                <link rel=\"stylesheet\" href=\"MainStyle.css?2\">
                <link rel=\"canonical\" href=\"https://row64.com/Blogs/Posts/". $URLTitle . "\" />
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
            <script type=\"text/javascript\" id=\"hs-script-loader\" async defer src=\"//js.hs-scripts.com/21279632.js\"></script>
            <!-- End of HubSpot Embed Code -->
            <script type=\"text/javascript\"> _linkedin_partner_id = \"3680242\"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script><script type=\"text/javascript\"> (function(l) { if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])}; window.lintrk.q=[]} var s = document.getElementsByTagName(\"script\")[0]; var b = document.createElement(\"script\"); b.type = \"text/javascript\";b.async = true; b.src = \"https://snap.licdn.com/li.lms-analytics/insight.min.js\"; s.parentNode.insertBefore(b, s);})(window.lintrk); </script> <noscript> <img height=\"1\" width=\"1\" style=\"display:none;\" alt=\"\" src=\"https://px.ads.linkedin.com/collect/?pid=3680242&fmt=gif\" /> </noscript>
            
            <body>
                <script src=\"../Blogs.js?1\"></script>
                <script>
                    window.lintrk('track', { conversion_id: 6399338 });
                </script>
            
                <!--##################################################################################-->
                <!--################################# TOP MENU BAR ###################################-->
                <!--##################################################################################-->
            
                <?php
                    require\"/var/www/html/topmenu/top.php\";
                    echo fulltop(false);
                ?>
            
                <!--################################# END MENU BAR ###################################-->

                <div class=\"frame\">
                    <h1>
                        ". $Title ."
                    </h1>
                </div>

                <div class=\"frame\">
                    <img src=\"". $img . "\" alt=\"\" width=\"100%\" height=\"\" loading=\"lazy\" style=\"max-width:950px\">
                </div>

                <div style=\"height:30px;\"></div>

                <div class=\"frame\">
                    <div class=\"BlueCard\" style=\"text-align:unset\">
                        <div  style=\"height:30px\"></div>
                            ". $Load ."<br><br><a href=\"/Blogs/\" style=\"font-family:inherit;font-size:20px;\">Back to the blog.</a>
                    </div>
                </div>

                
                <!--##################################################################################-->
                <!--############################### BOTTOM INFO BAR ##################################-->
                <!--##################################################################################-->
                
                <?php
                    require\"/var/www/html/bottommenu/bottom.php\";
                    echo bottom('#F7F8F9');
                ?>
            </body>
            <noscript>
                <img src=\"https://ws.zoominfo.com/pixel/629a3d6c7915ca008f06ebf7\" width=\"1\" height=\"1\" style=\"display: none;\" alt=\"websights\"/>
            </noscript>
            </html>
            ";
            fwrite($NewBlog , $Contents);
            fclose($NewBlog);

            $fullURL = "/Blogs/Posts/". $URLTitle . ".php";

            $data = array($Title,$img,$Desc,$fullURL,$Author,$TagsP);
            require "/var/www/database/config.php";
            $stmt = $dbh->prepare("INSERT INTO Blogs (Title,IURL,Descr,URL,Author,Tags) VALUES (?,?,?,?,?,?)");
            $stmt->execute($data);

            echo '<script type="text/javascript">window.location = "/Blogs/Posts/'. $URLTitle .'.php"</script>';
        }
    ?>

    <div class="frame">
        <h1>
            Create A Blog Post
        </h1>
    </div>

    <div style="height:30px;"></div>

    <div class="frame">
        <div class="BlueCard">
        <div  style="height:30px"></div>
            <div class="frame" style="background-color:unset">
                <div style="background-color:#FFFFFF;border-radius: 10px;box-shadow: 5px 5px 10px grey;margin-bottom: 15px;width:100%;max-width:750px;">
                    <form id="BlogPost" method="POST">
                        <div  style="height:10px"></div>
                        <label for="Title" >Title:</label><br>
                        <div  style="height:8px"></div>
                        <input type="text" id="Title" name="Title" value="<?php echo htmlspecialchars($_POST["Title"]);?>"  style=""><br>
                        <div  style="height:24px"></div>
                        
                        <label for="img">Image URL:</label><br>
                        <div  style="height:8px"></div>
                        <input type="text" id="URL" name="URL" value="<?php echo htmlspecialchars($_POST["URL"]);?>"  style=""><br>
                        <div  style="height:24px"></div>

                        <label for="Desc">Short Description:</label><br>
                        <div style="height:8px"></div>
                        <textarea id="Desc" name="Desc"><?php echo htmlspecialchars($_POST["Desc"]);?></textarea>
                        <div  style="height:24px"></div>

                        <label for="Desc">Tags:</label><br>
                        <div style="height:8px"></div>
                        <textarea id="Tags" name="Tags"><?php echo htmlspecialchars($_POST["Tags"]);?></textarea>
                        <div  style="height:24px"></div>

                        <label for="Title" >Author:</label><br>
                        <div  style="height:8px"></div>
                        <input type="Author" id="Author" name="Author" value="<?php echo htmlspecialchars($_POST["Author"]);?>"  style=""><br>
                        <div  style="height:24px"></div>

                        <label for="img">Blog:</label><br>
                        <div  style="height:8px"></div>
                        <textarea id="Blog" name="Blog"><?php echo htmlspecialchars($_POST["Blog"]);?></textarea>

                        <div  style="height:34px"></div>
                        <input type="submit" name="submit" value="Post">
                        <div  style="height:30px"></div>

                    </form>
                </div>
            </div>
            <div  style="height:30px"></div>
            <a href="/Blogs/">Blogs</a>
            <div  style="height:30px"></div>
        </div>
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