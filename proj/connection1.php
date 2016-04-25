<?php
$conn = mysqli_connect("localhost","etech_yuvi","xH840LZ3srQ7","etech_yuvraj");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
$sql = "SELECT name, email, message, date FROM user ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $sql);
$output = "[";
while($row = mysqli_fetch_assoc($result)) {
    if ($output != "[") {$output .= ",";}
    $output .= '{"name":"'  . $row["name"] . '",';
    $output .= '"email":"'   . $row["email"]        . '",';
    $output .= '"message":"'   . $row["message"]        . '",';
    $output .= '"date":"'. $row["date"]     . '"}';
}
$output .="]";

mysqli_close($conn);
echo $output;
//$myfile = fopen("result.json", "w") or die("Unable to open file!");
//fwrite($myfile, $output);
//fclose($myfile);
?>
