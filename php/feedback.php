<!DOCTYPE html>
<html>
<body>

<?php

$servername = "localhost";
$username = "kartikkshirsagar";
$password = "kartik";
$dbname = "kartikkshirsagar";
$id = $_POST['ID'];
$subject = $_POST['subject'];
$mrating = $_POST['mrating'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO Ratings (College ID, Subject, Mean Rating)
VALUES ($id, $subject,$mrating)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>
