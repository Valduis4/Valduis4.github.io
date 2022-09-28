<?php
    
    require('/var/www/database/config.php');


    $fPath = "diagnostic.txt";
    if(file_exists( $fPath )) unlink( $fPath );
    $myfile = fopen($fPath, "w") or die("Unable to open file!");
    $txt = "--------------- Diagnostic: _POST --------------\n\n";
    $txt .= "\n\n";

    $txt .= "---- cycle POST: ";
    $txt .= "\n\n";

    foreach($_POST as $key => $value){
      $txt .= "key: " . $key . ", value: " . $value . "\n\n";
    }


    $Email = "";
    $mdata = "";
    $edate = "";
    

    $txt .= "---------------------------------------------:" . "\n";
    $txt .= "aaaaaaaaaaaaaaaa:" . "\n";


    $txt .= "bbbbbbbbbbbbbbbbbb:" . "\n";
    $txt .= $Email . "\n";
    $txt .= $mdata . "\n";
    $txt .= $edate . "\n";
    try {
      
      

      $txt .= "ccccccccccccccccc:" . "\n";

      $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

      $data = array();
      $result = $dbh->prepare("SELECT * FROM Galllery");


      $txt .= "eeeeeeeeeeeeeeeeeeeeeeeee:" . "\n";

      $stmt = $result->execute($data);
      $Payload = $result->fetchAll();
      foreach ($Payload as $key => & $value) {
        unset($value['0']);
        unset($value['1']);
        unset($value['2']);
        unset($value['3']);
      }

      $ReturnJSON = json_encode($Payload);
      print $ReturnJSON;
      $databaseErrors = $result->errorInfo();
      

      if( !empty($databaseErrors) ){  

        $txt .= "error info: $errorInfo"; # do what you wish with this var, write to log file etc...         

         
        //  $errorLogMsg will return something like: 
        //  error info:  
        //  Array(
        //   [0] => 42000
        //   [1] => 1064
        //   [2] => You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'table bogus(field1, field2) VALUES                                                  ('bar', NULL)' at line 1
        //  )
        
      }

      $txt .= "-------------------------:" . "\n";

      if (!$stmt) {
          // echo "\nPDO::errorInfo():\n";
          // print_r($dbh->errorInfo());
          $txt .= "ERROR: " . var_dump($stmt->errorInfo()) . "\n\n";
      }


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
    
?>