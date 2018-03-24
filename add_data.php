<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))
{
 // variables for input data
 $titlu = $_POST['titlu'];
 $poza = $_POST['$db_file'];
 $continut = $_POST['continut'];
 $sursa = $_POST['sursa'];
 $tari = $_POST['tari'];
 $prioritate = $_POST['prioritate'];
 $data = $_POST['data'];

//
$target_dir = "/var/www/html/uploads/";
$target_file = $target_dir . uniqid() . "-" . basename($_FILES["fileToUpload"]["name"]);
$db_file = uniqid() . "-" . basename($_FILES["fileToUpload"]["name"]);
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

// // Check if file already exists | Disabled for now
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//

 $sql_query = "INSERT INTO bel(titlu,poza,continut,sursa,tari,prioritate,data) VALUES('$titlu','$poza','$continut', '$sursa','$tari','$prioritate', now())";

 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Eroare bre!! occured while inserting your data');
  </script>
  <?php
 }
}
?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bel</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="titlu" placeholder="Titlu" required /></td>
    </tr>
    <!-- <tr>
    <td><input type="file" name="btn-upload"/></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-upload" value="Upload Image"/><strong>SUBMIT</strong></td>
    </tr> -->
    <tr>
    	<td>
        Select image to upload:
    	<input type="file" name="fileToUpload" id="fileToUpload">
   		</td>
    </tr>
    <tr>
    <td><input type="text" name="continut" placeholder="Continut" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="sursa" placeholder="Sursa" required /></td>
    </tr>
    </tr>
    <tr>
    <td>
      <select name="tari">
        <option value="Albania">Albania</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Croatia">Croatia/option>
        <option value="Hungary">Hungary</option>
        <option value="Kosovo">Kosovo</option>        
        <option value="Macedonia">Macedonia</option>
        <option value="Moldova">Moldova</option>
        <option value="Montenegro">Montenegro</option>
        <option value="Romania">Romania</option>
        <option value="Serbia">Serbia</option>
        <option value="Ukraine">Ukraine</option>
      </select>
    </td>
    </tr>
    <tr>
    <td>
      <select name="prioritate">
        <option value="3">Critical</option>
        <option value="2">Medium</option>
        <option value="1">Low</option>
        <option value="0">Info</option>
      </select>
    </td>
    </tr>
    <tr>
    <td>
      <select name="jurnalismcategory">
        <option value="News">News</option>
        <option value="Investigations">Investigations</option>
        <option value="Opinion">Opinion</option>
      </select>
    </td>
    </tr>    
    <tr>
    <td><input type="date" name="data" placeholder="Data" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>TRIMITE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>