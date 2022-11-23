<?php
$dir = 'sqlite:identifier.sqlite';
$dbh  = new PDO($dir) or die("cannot open the database");
$query =  "SELECT * FROM login WHERE usuario = '" . $nombre . "' and password = '" . $pass . "'";
foreach ($dbh->query($query) as $row)
{
    echo $row[0];
}
$dbh = null; //This is how you close a PDO connection
?>
