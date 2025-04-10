<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Remove Book</title></head>
<body>
<form method="post">
    <input type="text" name="title" placeholder="Book Title to Remove" required><br>
    <input type="submit" name="remove" value="Remove Book">
</form>

<?php
if (isset($_POST['remove'])) {
    $title = $_POST['title'];
    $sql = "DELETE FROM books WHERE title='$title'";
    if ($conn->query($sql)) echo "Book removed successfully!";
    else echo "Error: " . $conn->error;
}
?>
</body>
</html>