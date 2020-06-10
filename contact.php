<?php
$email = filter_input(INPUT_POST, 'emil');
$concern = filter_input(INPUT_POST, 'concern');

$host = "localhost";
$dbusername = "id14024548_covidinfo";
$dbpassword = "Benya12152003!";
$dbname = "id14024548_latesrcovid19info";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contact (email, information)
values ('$email','$concern')";
if ($conn->query($sql)){
 echo "<script>window.location = 'index.php';</script>";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>
