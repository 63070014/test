<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itftest.mysql.database.azure.com', 'test@itftest', 'PuiFai2023', 'test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price = $_POST['Price'];
$Amout = $_POST['Amout'];
$Total = $_POST['Price']*$_POST['Amout']


$sql = "INSERT INTO guestbook (Product , Price , Amout) VALUES ('$Product', '$Price', '$Amout')";


if (mysqli_query($conn, $sql)) {
    header("Location: showtest.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
