<?php
    
    require('/var/www/database/config.php');

    $varList = var_export($_POST);
    print "GatewayT<br><br>";
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


    $Message = "";
    $Detail  = "";


    $txt .= "---------------------------------------------:" . "\n";
    $txt .= "aaaaaaaaaaaaaaaa:" . "\n";

    if (isset($_POST['Message'])) {$Message = $_POST['Message'];}
    if (isset($_POST['Detail'])) {$Detail = $_POST['Detail'];}

    echo $Message;
    $txt .= "bbbbbbbbbbbbbbbbbb:" . "\n";

    try {
      
      

      $txt .= "ccccccccccccccccc:" . "\n";

      $ip = $_SERVER['REMOTE_ADDR'];
      echo $ip;
      $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


      $txt .= "ip: " . $ip . "\n";

      $data = array($ip,$Message,$Detail);
      $stmt = $dbh->prepare("INSERT INTO Exec (idate,Ip,task,Detail) values (NOW(),?,?,?)");
      $stmt->execute($data);

      $txt .= "eeeeeeeeeeeeeeeeeeeeeeeee:" . "\n";

      //$result = $stmt->execute($data);
      //$databaseErrors = $result->errorInfo();
      echo "test";

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


      $dbh = null;

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

    echo $txt;
    echo $Message;
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