<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Add Book</title></head>
<body>
<form method="post">
    <input type="text" name="title" placeholder="Book Title" required><br>
    <input type="text" name="author" placeholder="Author" required><br>
    <input type="submit" name="submit" value="Add Book">
</form>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $sql = "INSERT INTO books (title, author) VALUES ('$title', '$author')";
    if ($conn->query($sql)) echo "Book added successfully!";
    else echo "Error: " . $conn->error;
}
?>
</body>
</html>