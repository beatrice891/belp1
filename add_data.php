<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $titlu = $_POST['titlu'];
 $poza = $_POST['poza'];
 $continut = $_POST['continut'];
 $sursa = $_POST['sursa'];
 // $tari = $_POST['tari'];
 // $prioritate = $_POST['prioritate'];
 iyhjiyh

 // sql query for inserting data into database
 $sql_query = "INSERT INTO bel(titlu,poza,continut,sursa) VALUES('$titlu','$poza','$continut', '$sursa')";

 
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
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="titlu" placeholder="Titlu" required /></td>
    </tr>
    <tr>
    <td><input type="file" name="btn-upload"/></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-upload" value="Upload Image"/><strong>SUBMIT</strong></td>
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
        <option value="Franta">Franta</option>
        <option value="Italia">Italia</option>
        <option value="Marea Britanie">Marea Britanie</option>
      </select>
    </td>
    </tr>
    <tr>
    <td>
      <select name="prioritate">
        <option value="critic">Critic</option>
        <option value="mediu">Mediu</option>
        <option value="prioritate_medie">Prioritate Medie</option>
        <option value="prioritate_scazuta">Prioritate Scazuta</option>
      </select>
    </td>
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