<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "assignment";

$conn =mysql_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " .mysql_connect_error());
} 
echo "Connected successfully";
echo"<br>";

$sql = "SELECT * FROM ContactInfo
ORDER BY id DESC
LIMIT 5";

$result= mysql_query($conn,$sql) or die(mysql_error());
while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
	echo $row['id'] ." ". $row['Name']." ".$row['Email']." ".$row['Message']." ". $row['Date'] ;
echo"<br>";
}
if (mysql_query($conn,$sql)) {
    echo"<br>". "successful";
} else {
    echo "Error: " . "<br>" . mysql_error($conn);
}

mysql_close($conn);
?>
