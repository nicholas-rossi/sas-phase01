<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = 'localhost';
$dbuser = 'sally';
$dbpass = 'somePa55word';
$dbname = 'salamanders';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection succeeded 
if(mysqli_connect_errno()) {
  $msg = "Database connection failed: ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}
// 2. Perform database query
$query = "SELECT * FROM salamanders";
$result_set = mysqli_query($connection, $query);
// 3. Use returned data (if any)
while($salamander = mysqli_fetch_assoc($result_set)) {
  echo $salamander["menu_name"] . "<br />";
}
// 4. Release returned data
mysqli_free_result($result_set);
// 5. Close database connection
mysqli_close($connection);

?>
