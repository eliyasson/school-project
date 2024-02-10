
<?php
$hn = 'localhost';
$db = 'wpeliyas';
$un = 'eliyas';
$pw = '30111993';

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
