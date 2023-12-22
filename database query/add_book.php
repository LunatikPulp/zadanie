<!-- add_book.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$genre = $_POST['genre'];
$title = $_POST['title'];
$inventory_number = $_POST['inventory_number'];
$authors = $_POST['authors'];
$year = $_POST['year'];
$publisher = $_POST['publisher'];
$place_of_publication = $_POST['place_of_publication'];
$number_of_pages = $_POST['number_of_pages'];
$price = $_POST['price'];

$sql = "INSERT INTO Books (genre, title, inventory_number, authors, year, publisher, place_of_publication, number_of_pages, price) 
        VALUES ('$genre', '$title', '$inventory_number', '$authors', '$year', '$publisher', '$place_of_publication', '$number_of_pages', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Book added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
