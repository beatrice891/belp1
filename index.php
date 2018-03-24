<?php
include_once 'dbconfig.php';
// include_once 'search.php';
?>
<!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bel</title>
<link rel="stylesheet" href="custom.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<center>
    <nav>
        <ul>
            <li><a href="#">All</a></li>
            <li><a href="#">Albania</a></li>
            <li><a href="#">Bosnia and Herzegovina</a></li>
            <li><a href="#">Bulgaria</a></li>
            <li><a href="#">Croatia</a></li>
            <li><a href="#">Hungary</a></li>
            <li><a href="#">Kosovo</a></li>
            <li><a href="#">Macedonia</a></li>
            <li><a href="#">Moldova</a></li>
            <li><a href="#">Montenegro</a></li>
            <li><a href="#">Romania</a></li>
            <li><a href="#">Serbia</a></li>
            <li><a href="#">Ukraine</a></li>    
        </ul>
    </nav>
    <header>
        <div class="hottopics"><p><bold>H</bold>ot topic</p></div>
        <img src="" class="logo"/>
        <!-- <button type="button">Search...<?php ?></button> -->
    </header>

<div id="body">
 <div id="content">
    <form action="search.php" method="GET">
        <input type="text" name="query" placeholder="Search..." />
        <!-- <input type="submit" value="Search" /> -->
    </form>

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