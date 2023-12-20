<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "myDB";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "delete from student where id=3";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Record deleted successfully</h1>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
