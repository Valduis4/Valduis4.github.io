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
    <link rel="stylesheet" href="Login_Style.css">
    <link rel="stylesheet" href="R64_Style.css">
    <link rel="stylesheet" href="/topmenu/Top_Style.css">
    <title>Row64 - Welcome</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
  <body>
    <script src="Login_Scripts.js"></script>

    <!--##################################################################################-->
    <!--################################# TOP MENU BAR ###################################-->
    <!--##################################################################################-->

    <?php
                require"/var/www/html/topmenu/top.php";
                echo fulltop(false);
                ?>


    <!--################################# END MENU BAR ###################################-->

    
    <!--########################## INTO HEADLINES & GRAPHICS #############################-->

    <div id="ContentLayer">

      <!--#########--><div class="frame"><div class="filler" style="height:40px"></div></div>
      <div class="frame" style="background-color:#FFFFFF">
          <h1>
          <center>404 Page Not Found</center>
          </h1>
      </div>

      <!--#########--><div class="frame"><div class="filler" style="height:5px"></div></div>

      <!--#########--><div class="frame" style="height:40px;background-color:#F7F8F9"></div>

      
      <!--################################# DON'T HAVE A LOGIN? ###################################-->

      <!--#########--><div class="infoSpace" style="height:30px;background-color:#F7F8F9"></div>
      <div class="frame" style="background-color:#F7F8F9">
        <div class="tcontainer">
          <div class="titleT" >
              <center>
              <a href="/">Return To Home</a>!</center>
              <div class="C_Spacer" style="height:30px"></div>
          </div>
        </div>
      </div>

      <!--#########--><div class="infoSpace" style="height:60px;background-color:#FFFFFF"></div>

      <!--##################################################################################-->
      <!--############################### BOTTOM INFO BAR ##################################-->
      <!--##################################################################################-->

      <?php
      require"/var/www/html/bottommenu/bottom.php";
      $color = "#FFFFFF";
      echo bottom($color);
      ?>
  </body>
</html>