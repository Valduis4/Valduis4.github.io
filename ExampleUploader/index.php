
<!DOCTYPE html><?php 
$err = $err2 = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["name"]))){
        $err = "Please enter a name.";
    } else{
        $name = trim($_POST["name"]);
    }

    if(empty(trim($_POST["Title"]))){
        $err = "Please enter a Title.";
    } else{
        $Desc = trim($_POST["Title"]);
    }

    mkdir("/var/www/html/Uploads/".$name);
    $target_dir = "/var/www/html/Uploads/".$name."/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if( $imageFileType != "png") {
        echo "Sorry, only PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
    $uploadOk2 = 1;
    $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload2"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $imgURL = "https://Row64.com/Uploads/" . $name . "/" .basename( $_FILES["fileToUpload"]["name"]);
    $DownUrl = "/Uploads" . "/" . $name . "/" .basename( $_FILES["fileToUpload2"]["name"]);
    require("/var/www/database/config.php");

    $data=array($imgURL,$Desc,$DownUrl);

    $stmt = $dbh->prepare("INSERT INTO Galllery (Imgurl,Descr,Download) VALUES (?,?,?)");
    $stmt->execute($data);
}
?>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <label for="name" >One word for folder i.e. apple, in it you upload apple.png and apple.r64:</label><br>
    <div class="C_Spacer" style="height:8px"></div>
    <input type="text" id="name" name="name" value=""  style="<?php if(empty($err)){
        echo 'border: 1px solid #D9D9D9;';
    } else{
    echo 'border: 1px solid #D30000;';
    }?>"><br>
    <?php
    if(!empty($err)){
    echo '<div class="alert alert-danger">' . $err . '</div>';
    }
    ?>
    <div class="C_Spacer" style="height:24px"></div>

    <label for="Title" >Title: 15 Char max</label><br>
    <div class="C_Spacer" style="height:8px"></div>
    <input type="text" id="Title" name="Title" value=""  style="<?php if(empty($err)){
        echo 'border: 1px solid #D9D9D9;';
    } else{
    echo 'border: 1px solid #D30000;';
    }?>"><br>
    <?php
    if(!empty($err)){
    echo '<div class="alert alert-danger">' . $err . '</div>';
    }
    ?>
    <div class="C_Spacer" style="height:24px"></div>
    <label for="fileToUpload"> Images must be 200x115 .png's</label>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <label for="fielToUpload2"> .r64 file</label>
  <input type="file" name="fileToUpload2" id="fileToUpload">
  <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>