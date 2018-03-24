<?php
include_once 'dbconfig.php';
$msg = "";
if(isset($_POST['btn-save']))
{
 // variables for input data
 $target = "uploads/" .basename($_FILES['poza']['name']);
 $titlu = $_POST['titlu'];
 $poza = $_FILES['poza']['name'];
 $continut = $_POST['continut'];
 $sursa = $_POST['sursa'];
 $tari = $_POST['tari'];
 $prioritate = $_POST['prioritate'];
 $data = $_POST['data'];
      if(move_uploaded_file($_FILES['poza']['tmp_name'], $target)){
        $msg = "Image uploaded with success.";
      }else{
         $msg = "There was a problem uploading image.";
      }
 //mysql_query("INSERT INTO users (first, last, whenadded) VALUES ('$first', '$last', now())"; 
 // sql query for inserting data into database
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
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
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
    <form method="post" action="index.php" enctype="multipart/form-data">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="titlu" placeholder="Titlu" required /></td>
    </tr>
    <tr>
      <td>Select image to upload:</td>
    </tr>
    <tr>
      <td><input type="file" name="poza"></td>
    </tr>
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