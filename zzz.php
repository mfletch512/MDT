<?php

  $mName = $_GET['name'];

  $NOTE = $_GET['note'];
?>
<head>
<link rel="stylesheet" type="text/css" href="matt.css"/>
</head>
<body>

<p><font>You entered name:</font> <strong><?php echo $mName; ?></strong></text></p>

<p><em><u><?php echo $NOTE;  ?></em></u></p>

<p>
<div>
<a href="http://www.golfwrx.com">
<img src="http://wpmedia.golfwrx.com/wp-content/uploads/2012/02/clubhead_banksy-600x375.jpg"><a/>
</div>
</p>

<p><h3><u><?php echo "wowowowowow"; ?></h3></u></p>
<div style= "width: 65px; height: 75px; border: 1px dashed purple">hello world</div>

<p>
<?php

    $link = mysqli_connect("localhost","root","fletch0","hopefully_last") or die("Error " . mysqli_error($link));

if ($link) {
  echo('Connected Successfully');
}
else{
  die('sorry' . mysql_error());
}

$result = mysqli_query($link ,"SELECT * FROM people");

$rows = mysqli_fetch_array($result, "SELECT * FROM people");

echo "<table border = '1' bgcolor=green>";
echo "<th bgcolor = #126666> ID</th>" . "<th bgcolor = #654321>NAME</th>" . "<th bgcolor = $246899>NOTE</th>"; 
while($rows = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo '<td>' .  $rows['ID'] . '</td>' . '<td>' . $rows['NAME'] . '</td><td>' . $rows['NOTE'] . '</td>';
    echo "</tr>";
 }
echo "</table>";

mysqli_close($link);

?>
</p>

</body>