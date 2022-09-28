<?php
    
    require('/var/www/database/config.php');

    function encryptDecrypt($input) {
        $key = 'ROW';
        $inputLen = strlen($input);
        $keyLen = strlen($key);

        if ($inputLen <= $keyLen) {
            return $input ^ $key;
        }

        for ($i = 0; $i < $inputLen; ++$i) {
            $input[$i] = $input[$i] ^ $key[$i % $keyLen];
        }
        return $input;
    }

    function binToStr($input)
    {
        if (!is_string($input))
            return false;
        $chunks = str_split($input,8);
        $ret = '';
        foreach ($chunks as $chunk)
        {
            $temp = base_convert($chunk, 2, 16);
            $ret .= pack('H*',str_repeat("0", 2 - strlen($temp)) . $temp);
        }
        return $ret;
    }

    //$varList = var_export($_GET);

    $fPath = "diagnostic.txt";
    if(file_exists( $fPath )) unlink( $fPath );
    $myfile = fopen($fPath, "w") or die("Unable to open file!");
    $txt = "--------------- Diagnostic: _GET --------------\n\n";
    //$txt .= $varList;
    $txt .= "\n\n";

    $txt .= "---- cycle GET: ";
    $txt .= "\n\n";

    foreach($_GET as $key => $value){
      $txt .= "key: " . $key . ", value: " . $value . "\n\n";
    }


    $Email = "";
    $Username = "";
    $password1 = "";
    $login_err = "";

    $txt .= "---------------------------------------------:" . "\n";
    $txt .= "aaaaaaaaaaaaaaaa:" . "\n";

    if (isset($_POST['Email'])) {$Email = $_POST['Email'];}else{ $txt .= 'empty';}
    if (isset($_GET['Username'])) {$Username = $_GET['Username'];} else{ $txt .= 'empty';}
    if (isset($_POST['password'])) {$password1 = $_POST['password'];} else{ $txt .= 'empty';}

    $txt .= "bbbbbbbbbbbbbbbbbb:" . "\n";
    $txt .= $Email . "\n";
    $txt .= $password1 . "\n";
    $password3 = binToStr($password1);
    $password = encryptDecrypt($password3);
    //$password = substr_replace($password2 ,"", -1);
    //$password = binToStr($password1);
    $txt .= $password . "\n";
    try {
      
      

      $txt .= "ccccccccccccccccc:" . "\n";

      $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
      $email_test = array($Email);
      $stmt=$dbh->prepare("SELECT password FROM Users WHERE email = ? LIMIT 1");
      $stmt->execute($email_test);
      $stmtid=$dbh->prepare("SELECT * FROM Users WHERE email = ?");
      $stmtid->execute($email_test);
      $idresult = $stmtid->fetch();
      $id = $idresult['company'];
      $uid = $idresult['uid'];
      if($stmt->rowCount() > 0){
            $result = $stmt->fetch();
            $result1 = $result['password'];
            if(password_verify($password,$result1)){
                //last login update here   
                $stmt = $dbh->prepare("UPDATE Users SET LastLogin = LOCALTIMESTAMP() WHERE email = ?");
                $stmt->execute($email_test);
                $_SESSION["loggedin"] = true;
                $_SESSION["company"] = $id;
                $_SESSION["email"] = $Email;
            } else{
                $login_err = "Incorrect username or password";
            }
      } else{
            $login_err = "Incorrect username or password";
      }

      echo $_SESSION["company"];
      if(empty($login_err)){
        setcookie("login", $uid);
      } else {
        setcookie("login", "-1");
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