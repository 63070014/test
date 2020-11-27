<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itftest.mysql.database.azure.com', 'test@itftest', 'PuiFai2023', 'test', 3306);
if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "DELETE FROM guestbook WHERE id = $id";
if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn)