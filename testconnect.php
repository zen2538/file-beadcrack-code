<?php
$member_name = filter_input(INPUT_POST, 'member_name');
$size = filter_input(INPUT_POST, 'size');
$amount = filter_input(INPUT_POST, 'amount');
$problemtype = filter_input(INPUT_POST, 'problemtype');
$problem = filter_input(INPUT_POST, 'problem');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO register_form (member_name,member_lname,username, password,email)
values ('$member_name','$size','$amount','$problemtype','$problem')";
if ($conn->query($sql)){
header("Location: index.php");
exit();
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

else{
echo "Password should not be empty";
die();
}

else{
echo "Username should not be empty";
die();
}
?>