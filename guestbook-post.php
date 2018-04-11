<?php

require_once('guestbook-db.php');
$name = $_POST['name'];
$comm = $_POST['comm'];

$sql = "INSERT INTO commentd ($nameCol, $comCol)
VALUES ('$name', '$comm')";

if ($conn->query($sql) === TRUE) {
    ?>
    <div class="card shadow text-center">
        <div class="card-header">
            <h3><?php print_r($name); ?></h3>
        </div>
        <div class="card-body">
            <p><?php print_r($comm); ?></p>
        </div>
    </div>


<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>