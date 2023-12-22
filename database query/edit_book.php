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
$title = $_POST['title'];
$genre = $_POST['genre'];
$inventory_number = $_POST['inventory_number'];
$authors = $_POST['authors'];
$year = $_POST['year'];
$publisher = $_POST['publisher'];
$place_of_publication = $_POST['place_of_publication'];
$number_of_pages = $_POST['number_of_pages'];
$price = $_POST['price'];

$sql = "UPDATE Books SET title='$title', genre='$genre', inventory_number='$inventory_number', 
        authors='$authors', year='$year', publisher='$publisher', 
        place_of_publication='$place_of_publication', number_of_pages='$number_of_pages', 
        price='$price' WHERE id=$book_id";

if ($conn->query($sql) === TRUE) {
    echo "Молодчик";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
