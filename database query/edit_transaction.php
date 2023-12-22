<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$transaction_id = $_POST['transaction_id'];
$issue_date = $_POST['issue_date'];
$return_date = $_POST['return_date'];

$sql = "UPDATE Transactions SET issue_date='$issue_date', return_date='$return_date' WHERE id=$transaction_id";

if ($conn->query($sql) === TRUE) {
    echo "Легендарно";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
