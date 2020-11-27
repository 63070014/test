<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itftest.mysql.database.azure.com', 'test@itftest', 'PuiFai2023', 'test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Product'];
$price = $_POST['Price'];
$amout = $_POST['Amout'];


$sql = "INSERT INTO guestbook (Product , Price , Amout) VALUES ('$name', '$price', '$amout')";


if (mysqli_query($conn, $sql)) {
    header("Location: showtest.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>