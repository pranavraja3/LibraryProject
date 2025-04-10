<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>View Books</title></head>
<body>
<h2>All Books</h2>
<table border="1" cellpadding="10">
<tr><th>ID</th><th>Title</th><th>Author</th></tr>

<?php
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['author']."</td></tr>";
}
?>
</table>
</body>
</html>