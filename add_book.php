<?php include 'db/db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h2>Add New Book</h2>
    <form action="submit_book.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Book Name" required><br>
        <input type="text" name="detail" placeholder="Detail"><br>
        <input type="text" name="author" placeholder="Author"><br>
        <input type="text" name="publication" placeholder="Publication"><br>

        Branch: 
        <input type="radio" name="branch" value="Other">Other
        <input type="radio" name="branch" value="BSIT">BSIT
        <input type="radio" name="branch" value="BSCS">BSCS
        <input type="radio" name="branch" value="BSSE">BSSE<br><br>

        <input type="text" name="price" placeholder="Price"><br>
        <input type="number" name="quantity" placeholder="Quantity"><br>
        <input type="file" name="photo"><br><br>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>