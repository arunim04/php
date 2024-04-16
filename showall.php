<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 $server_name="localhost";
 $username="root";
 $password="";
 $database_name="database123";
 $conn=mysqli_connect($server_name,$username,$password,$database_name);


$select="select * from `entry_details`";
$run=mysqli_query($conn,$select);
while($row=mysqli_fetch_assoc($run)){
   $fname=$row['first_name'];
   echo"$fname";
}




?>
</body>
</html>