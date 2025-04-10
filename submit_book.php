<?php
include 'db/db_connect.php';

$name = $_POST['name'];
$detail = $_POST['detail'];
$author = $_POST['author'];
$publication = $_POST['publication'];
$branch = $_POST['branch'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$photo = $_FILES['photo']['name'];
$target = "book_photo/" . basename($photo);
move_uploaded_file($_FILES['photo']['tmp_name'], $target);

$sql = "INSERT INTO books (name, detail, author, publication, branch, price, quantity, photo)
        VALUES ('$name', '$detail', '$author', '$publication', '$branch', '$price', '$quantity', '$photo')";

if ($conn->query($sql) === TRUE) {
    echo "Book added successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>