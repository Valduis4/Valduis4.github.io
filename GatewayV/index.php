
<?php
    
    require('/var/www/database/config.php');



    $fPath = "diagnostic.txt";
    if(file_exists( $fPath )) unlink( $fPath );
    $myfile = fopen($fPath, "w") or die("Unable to open file!");
    $txt = "--------------- Diagnostic: _GET --------------\n\n";
    $txt .= "\n\n";

    $txt .= "---- cycle GET: ";
    $txt .= "\n\n";


    $Email = "";
    $mdata = "";
    $edate = "";

    $txt .= "---------------------------------------------:" . "\n";
    $txt .= "PRE var get:" . "\n";

    if (isset($_POST['Email'])) {$Email = $_POST['Email'];}else{ $txt .= 'empty' . "\n";}


    $txt .= "Variables:" . "\n";
    $txt .= $Email . "\n";

    try {
      
      

      $txt .= "PRE Select stament:" . "\n";

      $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );


      $data = array($Email);
      $stmt = $dbh->prepare("SELECT * FROM Users WHERE email = ?");


      $txt .= "SELECT mid:" . "\n";

      $stmt->execute($data);
      $databaseErrors = $stmt->errorInfo();
      
      $results = $stmt->fetch();
      $expire = $results['UpgradeExpire'];
      $version1 = $results['UpgradeType'];

      if($version1 = "Plus Monthly"){
            $version = 2;
      }elseif($version1 = "Plus Yearly"){
            $version = 2;
      }elseif($version1 = "Pro Monthly"){
            $version = 3;
      }elseif($version1 = "Pro Yearly"){
            $version = 3;
      }elseif($version1 = "Enterprise"){
            $version = 4;
      }else{
            $version = 1;
      }

      echo $version;
      //echo "edate: " . $edate . "\n";
      $txt .= "mdata: " . $expire . "\n";
      $txt .= "edate: " . $version . "\n";
      $_SERVER['mdata'] = $expire;
      $_SERVER['edate'] = $version;

      if(!empty($expire)){
      setcookie("edate", $expire);
      } else {
            setcookie("edate","2022-01-01 00:00:00");
      }

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