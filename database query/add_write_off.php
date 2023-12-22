<!-- add_write_off.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$book_id = $_POST['book_id'];
$write_off_date = $_POST['write_off_date'];
$reason = $_POST['reason']; // Добавлено новое поле "reason"

$sql = "INSERT INTO WriteOffs (book_id, write_off_date, reason) VALUES ('$book_id', '$write_off_date', '$reason')";

if ($conn->query($sql) === TRUE) {
    echo "Лучший";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
