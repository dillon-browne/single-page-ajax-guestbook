<?php
/**
 * Created by PhpStorm.
 * User: dillonbrowne
 * Date: 4/9/18
 * Time: 5:15 PM
 */

$servername = "localhost";
$username = "homestead";
$password = "secret";
$dbname = "guestbook";

$nameCol = 'fullname';
$comCol = 'comments';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}