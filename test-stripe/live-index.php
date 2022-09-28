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
    <link rel="stylesheet" href="R64_Style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
        <title>Subscribe Row 64</title>
    <link rel="shortcut icon" href="./images/favicon.ico">
</head>
<body>
 
    

        <div class="frame" style="background-color:#FFFFFF">
            <div class="C_Parent" >
                <div class="C_Outer" >
                    <div class="C_FormBox"style="height:90px">
                        <div class="C_Edge"></div>
                        <div class="C_Center">
                            <div class="C_Spacer" style="height:30px"></div>
            
            <form name="test" id="test" action="/create-checkout-session.php" method="POST">
                <?php
                    if($_SESSION['action'] =="plusmonth"){ 
                        echo '<input type="hidden" name="lookup_key" value="price_1K45ahJfOTHGXotw2An1115c" />';
                    }
                    else if($_SESSION['action'] =="plusyear"){ 
                        echo '<input type="hidden" name="lookup_key" value="price_1K45acJfOTHGXotwkLmLT0cJ" />';
                    }
                    else if($_SESSION['action'] =="promonth"){ 
                        echo '<input type="hidden" name="lookup_key" value="price_1K45aXJfOTHGXotwfH2OZ9dd" />';
                    }
                    else if($_SESSION['action'] =="proyear"){ 
                        echo '<input type="hidden" name="lookup_key" value="price_1K45aQJfOTHGXotwvUgIenZP" />';
                    }
                    echo '<input type="hidden" name="email_key" value="'.$_SESSION['email'].'" />';
                ?>
                <input type="hidden" id="checkout-and-portal-button"  value="Checkout"></input>
            </form>
            <script>
            document.test.submit();
            </script>
            <div class="C_Spacer" style="height:30px"></div>
                        </div>
                        <div class="C_Edge"></div>
                    </div>
                </div>
            </div>
        </div>

      
</body>
</html>