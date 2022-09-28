<?php session_start();?>
<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="../topmenu/Top_Style.css">
    <link rel="stylesheet" href="Login_Style.css">
    <link rel="stylesheet" href="flex.css">
    <title>Row64 - Gallery</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="canonical" href="https://row64.com/Gallery/" />
  </head>
  <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21279632.js"></script>
<!-- End of HubSpot Embed Code -->
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


    <?php
      require('/var/www/database/config.php');
      $stmt = $dbh->prepare("SELECT * FROM Galllery");
      $stmt->execute($data);
      $Payload = $stmt->fetchAll();
      foreach ($Payload as $key => & $value) {
        unset($value['0']);
        unset($value['1']);
        unset($value['2']);
        unset($value['3']);
      }
      $TNBItems = count($Payload);
      $NBRow = $TNBItems/4;
      $TNBRows = floor($NBRow);
      $ExtraCards = ($NBRow-$TNBRows)*4;
      $NB = 0;

      for ($x = 0; $x < $TNBRows; $x++) {
        echo "<div class=\"flex-container\" style=\"height:fit-content;flex-wrap:wrap;\">";
        for ($y = 0; $y < 4; $y++){
          echo "<div style=\"--width: 200px\"><a href=\"". $Payload[$NB]['Download'] ."\"><div class=\"ar-image\">
          <div class=\"article-image\" style=\"--background: url('". $Payload[$NB]['Imgurl'] ."')\"><p>". $Payload[$NB]['Descr'] ."</p></div></div></a></div>";
          $NB ++;
        }
        echo "</div>";
      }

      if($ExtraCards != 0){
        echo "<div class=\"flex-container\" style=\"height:fit-content;flex-wrap:wrap;\">";
        for ($z = 0; $z < $ExtraCards; $z++){
          echo "<div style=\"--width: 200px\"><a href=\"". $Payload[$NB]['Download'] ."\"><div class=\"ar-image\">
          <div class=\"article-image\" style=\"--background: url('". $Payload[$NB]['Imgurl'] ."')\"><p>". $Payload[$NB]['Descr'] ."</p></div></div></a></div>";
          $NB ++;
        }
        echo "</div>";
      }
    ?>
 


    <div class="frame" ><div class="tBox" ><div class="dLine"></div></div></div>

    <div id="ContentLayer">
    <!--#########--><div class="frame"><div class="filler" style="height:20px"></div></div>
    <div class="frame">
      <div class="tcontainer">
        <h1 style="height:30px;">
        <font style="font-size:34px;">Scientific Charting</font>
        </h1>
        <div style="height:2px;width:830px;background-color:grey;"></div>
      </div>
    </div>

     <!--#########--><div class="frame" style="height:30px;background-color:#FFFFFF"></div>
    
    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 200px"><a href="./Scientific_Charting/Density_Chart.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Density.jpg')"><p>Density Plot</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Line_Plot.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_LinePlot.jpg')"><p>Line Plot</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Surface_Chart.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Surface.jpg')"><p>Surface Chart</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Heat_Map.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Heatmap.jpg')"><p>Heat Map</p></div></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 200px"><a href="./Scientific_Charting/Radar.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Radar.jpg')"><p>Radar</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Horizontal_Bar.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_HBar.jpg')"><p>Horizontal Bar</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Bubble_Plot.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Bubble.jpg')"><p>Bubble Plot</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Word_Cloud.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Wordmap.jpg')"><p>Word Cloud</p></div></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 200px"><a href="./Scientific_Charting/Cloropleth.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Cloropath.jpg')"><p>Cloropleth</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Tree_Map.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Treemap.jpg')"><p>Tree Map</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Bar_Chart.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Bar.jpg')"><p>Bar Chart</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Scientific_Charting/Stream_Chart.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_SC/Thumbnails/SC_Stream.jpg')"><p>Stream Graph</p></div></div></a></div>
    </div>
    <!-- <?php
      // for ($x = 0; $x < $TNBRows; $x++) {
      //   echo "<div class=\"flex-container\" style=\"height:fit-content;flex-wrap:wrap;\">";
      //   for ($y = 0; $y < 4; $y++){
      //     echo "<div style=\"--width: 200px\"><a href=\"". $Payload[$NB]['Download'] ."\"><div class=\"ar-image\">
      //     <div class=\"article-image\" style=\"--background: url('". $Payload[$NB]['Imgurl'] ."')\"><p>". $Payload[$NB]['Descr'] ."</p></div></div></a></div>";
      //     $NB ++;
      //   }
      //   echo "</div>";
      // }

      // if($ExtraCards != 0){
      //   echo "<div class=\"flex-container\" style=\"height:fit-content;flex-wrap:wrap;\">";
      //   for ($z = 0; $z < $ExtraCards; $z++){
      //     echo "<div style=\"--width: 200px\"><a href=\"". $Payload[$NB]['Download'] ."\"><div class=\"ar-image\">
      //     <div class=\"article-image\" style=\"--background: url('". $Payload[$NB]['Imgurl'] ."')\"><p>". $Payload[$NB]['Descr'] ."</p></div></div></a></div>";
      //     $NB ++;
      //   }
      //   echo "</div>";
      // }
    ?> -->

    <!--#########--><div class="frame"><div class="filler" style="height:20px"></div></div>
    <div class="frame">
      <div class="tcontainer">
        <h1 style="height:30px;font-size:34px;">
        Presentation Charting
        </h1>
        <div style="height:2px;width:830px;background-color:grey;"></div>
      </div>
    </div>

     <!--#########--><div class="frame" style="height:30px;background-color:#FFFFFF"></div>
    
    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 200px"><a href="./Presentation_Charting/Flat_Bar.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_PR/Thumbnails/PC_BarFlat.jpg')"><p>Flat Bar</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Presentation_Charting/Zoom_Pie.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_PR/Thumbnails/PC_PieZoom.jpg')"><p>Zoom Pie</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Presentation_Charting/Red_Pie.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_PR/Thumbnails/PC_PieRed.jpg')"><p>Red Pie</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Presentation_Charting/Geo_Volcanos.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_PR/Thumbnails/PC_Volcano.jpg')"><p>Geo Volcanos</p></div></div></a></div>
    </div>

    <div class="flex-container" style="height:fit-content;flex-wrap:wrap;">
      <div style="--width: 200px"><a href="./Presentation_Charting/Blue_Globe.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_PR/Thumbnails/PC_BlueGlobe.jpg')"><p>Blue Globe</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Presentation_Charting/Purple_Pie.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_PR/Thumbnails/PC_PiePurple.jpg')"><p>Purple Pie</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Presentation_Charting/Metal_Bar.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_PR/Thumbnails/PC_BarMetal.jpg')"><p>Metal Bar</p></div></div></a></div>
      <div style="--width: 200px"><a href="./Presentation_Charting/Europe.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/Section_PR/Thumbnails/PC_Europe.jpg')"><p>Europe</p></div></div></a></div>
    </div>

    <!--<div class="flex-container" >
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
    </div>-->

    <!--<div class="frame"><div class="filler" style="height:20px"></div></div>
    <div class="frame">
      <div class="tcontainer">
        <h1 style="height:30px;">
        <font style="font-size:34px;">Notebook</font>
        </h1>
        <div style="height:2px;width:830px;background-color:grey;"></div>
      </div>
    </div>

     <div class="frame" style="height:30px;background-color:#FFFFFF"></div>
    
    <div class="flex-container" >
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
    </div>

    <div class="frame"><div class="filler" style="height:20px"></div></div>
    <div class="frame">
      <div class="tcontainer">
        <h1 style="height:30px;">
        <font style="font-size:34px;">Spreadsheet</font>
        </h1>
        <div style="height:2px;width:830px;background-color:grey;"></div>
      </div>
    </div>

     <div class="frame" style="height:30px;background-color:#FFFFFF"></div>
    
    <div class="flex-container" >
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Color Theme Pie</p></div></div></a></div>
    </div>

    <div class="frame"><div class="filler" style="height:20px"></div></div>
    <div class="frame">
      <div class="tcontainer">
        <h1 style="height:30px;">
        <font style="font-size:34px;">Videos</font>
        </h1>
        <div style="height:2px;width:830px;background-color:grey;"></div>
      </div>
    </div>

     <div class="frame" style="height:30px;background-color:#FFFFFF"></div>
    
     <div class="flex-container" >
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=osrlt4PCBM0"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/osrlt4PCBM0/maxresdefault.jpg')"><p>GPU Data Visualization</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=iNCSHVQsyx0"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/iNCSHVQsyx0/maxresdefault.jpg')"><p>GPU Financial Modeling</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=rGB_vOOjXnM"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/rGB_vOOjXnM/maxresdefault.jpg')"><p>GPU Charting</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=jIQlUp8-13Q"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/jIQlUp8-13Q/maxresdefault.jpg')"><p>GPU Spreadsheet</p></div></div></a></div>
    </div>

    <div class="flex-container" >
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=E0WgA3I-8Wk"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/E0WgA3I-8Wk/maxresdefault.jpg')"><p>Python Training Environment</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=W-0BAH_D6T4"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/W-0BAH_D6T4/maxresdefault.jpg')"><p>Visual IDE & Notebook</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=nS6rtiECYTo"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/nS6rtiECYTo/maxresdefault.jpg')"><p>Import Excel To Dataframe</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=WtQcAiMeA2c"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/WtQcAiMeA2c/maxresdefault.jpg')"><p>3D Object Picker</p></div></div></a></div>
    </div>

    <div class="flex-container" >
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=XZgtw8MgWLM"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/XZgtw8MgWLM/maxresdefault.jpg')"><p>Bar Chart UI Options</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=0cw2WDLIzK0"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/0cw2WDLIzK0/maxresdefault.jpg')"><p>Copy Paste Formatting</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=m5xT0_uc60I"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/m5xT0_uc60I/maxresdefault.jpg')"><p>Dataframes Call Dataframes</p></div></div></a></div>
      <div style="--width: 197.5px"><a href="https://www.youtube.com/watch?v=GcAeeULQozg"><div class="ar-image"><div class="article-image" style="--background: url('https://i3.ytimg.com/vi/GcAeeULQozg/maxresdefault.jpg')"><p>Datashader Heatmap And Sprites</p></div></div></a></div>
    </div>-->


    <!--<div class="flex-container" >
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Video</p></div></div></a></div>
      <div style="--width: 592.5px;"><a href=""><div class="textdownload"><h6>Image Library</h6><p>Analysis With Pictures And Geo</p></div></a></div>
    </div>

    <div class="flex-container" >
      <div style="--width: 197.5px"><a href="./sample.php"><div class="ar-image"><div class="article-image" style="--background: url('./images/sample.png')"><p>Video</p></div></div></a></div>
      <div style="--width: 592.5px;"><a href=""><div class="textdownload"><h6>3D Object Library</h6><p>3D Object Display</p></div></a></div>
    </div>-->

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