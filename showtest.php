<html>
<head>
<title>ITF Test</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itftest.mysql.database.azure.com', 'test@itftest', 'PuiFai2023', 'test', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
    <div class="form">
        <p class="ex1"><h1><center>econ</center></h1></p>
    </div>
  <table width="800" border="1" class="table table-pink table-hover table-striped" class="center" >
    <thead class="thead-pink">
    <tr bgcolor="pink" class="active">
      <th width="200"> <div align="center">ชื่อสินค้า</div></th>
      <th width="200"> <div align="center">ราคาต่อหน่วย</div></th>
      <th width="200"> <div align="center">จำนวน</div></th>
      <th width="200"> <div align="center">ราคาทั้งหมด</div></th>
      <th width="200"> <div align="center">การจัดการ</div></th>
    </tr>
     </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
    $sum = 0
?>
  <tr>
    <td><center><?php echo $Result['Product'];?></center></td>
    <td><center><?php echo $Result['Price'];?></center></td>
    <td><center><?php echo $Result['Amout'];?></center></td>
    <td><center><?php echo $sum = $Result['Price'] * $Result['Amout'];?></center></td>
    <td><center><a href="delete.html"><input type="submit" value="Delete"  class="btn btn-danger"></a></center></td>

<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
