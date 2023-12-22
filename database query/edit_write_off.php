<!-- edit_write_off.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$write_off_id = $_POST['write_off_id'];
$new_write_off_date = $_POST['write_off_date'];
$new_reason = $_POST['reason'];

$sql = "UPDATE WriteOffs SET write_off_date='$new_write_off_date', reason='$new_reason' WHERE id='$write_off_id'";

if ($conn->query($sql) === TRUE) {
    echo "Ну круто че";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
