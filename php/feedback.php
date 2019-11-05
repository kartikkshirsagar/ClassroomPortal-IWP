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
$questioncode = $_POST['questioncode'];
$rating = $_POST['rating'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO Ratings (College ID, Subject, Question Code, Rating)
VALUES ($id, $subject, $questioncode,$rating)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>
