<?php
/**
 * Created by PhpStorm.
 * User: dillonbrowne
 * Date: 4/9/18
 * Time: 5:20 PM
 */
require_once('guestbook-db.php');

$sql = "SELECT * FROM commentd";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row['fullname'];
        $comm = $row[$comCol];
        ?>
        <div class="card shadow text-center">
            <div class="card-header">
                <h2><? print_r($name); ?>s</h2>
            </div>
            <div class="card-body">
                <? echo $comm; ?>
            </div>
        </div>


        <?php

    }
} else {
    echo "0 results";
}

$conn->close();

?>