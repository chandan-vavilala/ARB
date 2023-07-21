<?php
$Title = $_POST['Title'];
$Ph_no = $_POST['ContactNumber'];
$Mail = $_POST['E-Mail'];
$type = $_POST['type'];
if (!empty($Title)){
if (!empty($Ph_no)){
if (!empty($Mail)){
if (!empty($type)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "connect";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO test (`Title`,`ContactNumber`,`E-Mail`,`type`)
values ('$Title','$Ph_no','$Mail','$type')";
if ($conn->query($sql)){
echo "KUDOS , SUBSCRIPTION SUCCESSFUL.";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "select type ";
die();
}
}
else{
echo "Mail should not be empty";
die();
}
}
else{
echo " Ph_no should not be empty ";
die();
}
}
else{
echo "Name Cannot be empty ";
die();
}
?>