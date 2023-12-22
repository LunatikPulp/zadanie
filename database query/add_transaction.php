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
$student_id = $_POST['student_id'];
$issue_date = $_POST['issue_date'];
$return_date = $_POST['return_date']; // Удостоверьтесь, что это поле присутствует в вашей форме

$sql = "INSERT INTO Transactions (book_id, student_id, issue_date, return_date) VALUES ('$book_id', '$student_id', '$issue_date', '$return_date')";

if ($conn->query($sql) === TRUE) {
    echo "Харош";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
