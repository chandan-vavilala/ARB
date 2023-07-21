<?php
$Title = $_POST['Title'];
$Ph_no = $_POST['ContactNumber'];
$Mail = $_POST['E-Mail'];
$Query = $_POST['Query'];
if (!empty($Title)){
if (!empty($Ph_no)){
if (!empty($Mail)){
if (!empty($Query)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ticket";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO query (`Name`,`Mobile_num`,`E-Mail`,`Query`)
values ('$Title','$Ph_no','$Mail','$Query')";
if ($conn->query($sql)){
echo "YOUR QUERY HAS BEEN SUBMMITED SUCESSFULLY , AND WE WILL GET BACK TO YOU SOON .";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo " Please Write Your Query ";
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