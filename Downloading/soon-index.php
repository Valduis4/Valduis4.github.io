<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, minimum-scale=1">
    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-154737984-1', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <link rel="stylesheet" href="Downloading.css">
    <title>Row64 - Coming soon!!</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Downloading/" />
  </head>
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

    <div id="ContentLayer">
    <!--#########--><div class="frame"><div class="filler" style="height:20px"></div></div>
    <div class="frame">
      <div class="tcontainer">
        <h1>
        <font style="font-size:44px;">Downloading</font>
        </h1>
      </div>
    </div>

     <!--#########--><div class="frame" style="height:30px;background-color:#FFFFFF"></div>
    
    <div class="frame" >
      <div class="tcontainer">
        <div class="titleTemp" >
           Coming Soon!
           <br><br> Thank you for your patience as we prepare to launch in January 2022. 
           <br><br> In the meantime please visit our <a href="https://forum.row64.com/" target="_blank" rel="noopener noreferrer">Forum</a> and <a href="https://www.youtube.com/channel/UCRvAcfactX9XSnzPIg5iPrw" target="_blank" rel="noopener noreferrer">Youtube Channel</a> for more information.
           <br><br> -The Row 64 Team
        </div>
      </div>
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