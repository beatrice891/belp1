<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bel</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="7"><a href="add_data.php">Add data here.</a></th>
    </tr>
    <th>Titlu</th>
    <th>Poza</th>
    <th>Continut</th>
    <th>Sursa</th>
    <th>Tari</th>
    <th>Prioritate</th>
    <th>Data</th>
    
    <?php
 $sql_query = "SELECT * FROM bel";
 $result_set = mysqli_query($con, $sql_query);
 while($row = mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><?php echo $row[7]; ?></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>