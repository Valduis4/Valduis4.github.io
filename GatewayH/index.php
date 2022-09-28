<?php
    
    require('/var/www/Connect.php');

    $varList = var_export($_POST);
    print "GatewayH<br><br>";
    print $varList;
    print "<br><br>";

    $fPath = "diagnostic.txt";
    if(file_exists( $fPath )) unlink( $fPath );
    $myfile = fopen($fPath, "w") or die("Unable to open file!");
    $txt = "--------------- Diagnostic: _POST --------------\n\n";
    $txt .= $varList;
    $txt .= "\n\n";

    $txt .= "---- cycle POST: ";
    $txt .= "\n\n";

    foreach($_POST as $key => $value){
      $txt .= "key: " . $key . ", value: " . $value . "\n\n";
    }


    $Email = "";
    $Legal_Agreement = 0; // int
    $Request = 0;  // int
    $Platform = "";
    $OS = "";
    $CPU = "";
    $RAM = 0;  // float
    $GPU_1 = "";
    $GPU_2 = "";
    $VRAM = 0; // float
    $Raytracing = 0; // int - 0 or 1
    $Vulkan = 0; // float
    $DirectX = "";
    $App_Version = "";

    $txt .= "---------------------------------------------:" . "\n";
    $txt .= "aaaaaaaaaaaaaaaa:" . "\n";

    if (isset($_POST['Email'])) {$Email = $_POST['Email'];}
    if (isset($_POST['Legal_Agreement'])) {$Legal_Agreement = intval($_POST['Legal_Agreement']);} // int
    if (isset($_POST['Request'])) {$Request = intval($_POST['Request']);} // int
    if (isset($_POST['Platform'])) {$Platform = $_POST['Platform'];}
    if (isset($_POST['OS'])) {$OS = $_POST['OS'];}
    if (isset($_POST['CPU'])) {$CPU = $_POST['CPU'];}
    if (isset($_POST['RAM'])) {$RAM = floatval($_POST['RAM']);} // float
    if (isset($_POST['GPU_1'])) {$GPU_1 = $_POST['GPU_1'];}
    if (isset($_POST['GPU_2'])) {$GPU_2 = $_POST['GPU_2'];}
    if (isset($_POST['VRAM'])) {$VRAM = floatval($_POST['VRAM']);} // float
    if (isset($_POST['Raytracing'])) {$Raytracing = intval($_POST['Raytracing']);} // int - 0 or 1
    if (isset($_POST['Vulkan'])) {$Vulkan = floatval($_POST['Vulkan']);}  // float
    if (isset($_POST['DirectX'])) {$DirectX = $_POST['DirectX'];}
    if (isset($_POST['App_Version'])) {$App_Version = $_POST['App_Version'];}
    if (isset($_POST['TelemAgree'])) {$TelemAgree = $_POST['TelemAgree'];}

    $txt .= "bbbbbbbbbbbbbbbbbb:" . "\n";

    try {
      
      $pdo = new PDO('mysql:host=localhost;dbname=Row64;charset=utf8', $DbConnect['user'], $DbConnect['password']);

      $txt .= "ccccccccccccccccc:" . "\n";

      $ip = $_SERVER['REMOTE_ADDR'];

      $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


      $txt .= "ip: " . Ip . "\n";

      $data = array($ip,$Email,$Legal_Agreement,$Request,$Platform,$OS,$CPU,$RAM,$GPU_1,$GPU_2,$VRAM,$Raytracing,$Vulkan,$DirectX,$App_Version,$TelemAgree);
      $result = $pdo->prepare("INSERT INTO Install (idate,Ip,Email,Legal_Agreement,Request,Platform,OS,CPU,RAM,GPU_1,GPU_2,VRAM,Raytracing,Vulkan,DirectX,App_Version,TelemAgree) values (NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


      $txt .= "eeeeeeeeeeeeeeeeeeeeeeeee:" . "\n";

      $stmt = $result->execute($data);
      $databaseErrors = $result->errorInfo();
      

      if( !empty($databaseErrors) ){  

        $errorInfo = print_r($databaseErrors, true); # true flag returns val rather than print
        $txt .= "error info: $errorInfo"; # do what you wish with this var, write to log file etc...         

         
         // $errorLogMsg will return something like: 
         // error info:  
         // Array(
         //  [0] => 42000
         //  [1] => 1064
         //  [2] => You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table bogus(field1, field2) VALUES                                                  ('bar', NULL)' at line 1
         // )
        
      }

      $txt .= "-------------------------:" . "\n";

      // if (!$stmt) {
      //     // echo "\nPDO::errorInfo():\n";
      //     // print_r($dbh->errorInfo());
      //     $txt .= "ERROR: " . var_dump($stmt->errorInfo()) . "\n\n";
      // }


      $pdo = null;

    } 
    catch (PDOException $e) {
      // print "Error!: " . $e->getMessage() . "<br/>";
      //die();
      //$txt .= "Error!: " . var_dump($e->getMessage());
      $txt .= "Error!: ";
      $txt .= "\n\n";

    }


    $txt .= "----- end file ----";
    fwrite($myfile, $txt);
    fclose($myfile);

    // require('/var/www/Connect.php');
    // if(isset($_POST["submit"])){
    //   $name = '';
    //   $email = '';
    //   $company = '';
    //   $title = '';
    //   $country = '';
    //   if (isset($_POST['name'])) {$name = $_POST['name'];}
    //   if (isset($_POST['email'])) {$email = $_POST['email'];}
    //   if (isset($_POST['company'])) {$company = $_POST['company'];}
    //   if (isset($_POST['title'])) {$title = $_POST['title'];}
    //   if (isset($_POST['country'])) {$country = $_POST['country'];}
    //   $feedback = htmlspecialchars($_POST['feedback']);
    //   // var_dump($_POST);
    //   try {
    //     $pdo = new PDO('mysql:host=localhost;dbname=Row64;charset=utf8', $DbConnect['user'], $DbConnect['password']);
    //     $ip = $_SERVER['REMOTE_ADDR'];
    //     $data = array($ip, $name, $email, $company, $title, $country, $feedback);
    //     $result = $pdo->prepare("INSERT INTO Contact (idate, Ip, name, email, company, title, country, details) values (NOW(), ?, ?, ?, ?, ?, ?, ?)");
    //     $result->execute($data);
    //     $pdo = null;

    // } catch (PDOException $e) {
    //     // print "Error!: " . $e->getMessage() . "<br/>";
    //     die();
    // }

    // }
    
?>