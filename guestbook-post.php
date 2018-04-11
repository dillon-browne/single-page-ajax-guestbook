<?php

require_once('guestbook-db.php');
$name = $_POST['name'];

$sql = "INSERT INTO commentd ($nameCol, $comCol)
VALUES ('$name', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>