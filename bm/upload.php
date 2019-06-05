<?php
$title=$_POST['title'];
$author=$_POST['author'];
$price=$_POST['price'];
$phno=$_POST['phno'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bmdb');
$q="INSERT INTO book(title,author,price,phno) values('$title','$author','$price',$phno)";
mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>upload</title>
</head>
<body>
<h1>Book 📖 E-commerse Site</h1>
Do You Want To Upload More Books? <a href="uploadbook.php">Click Here</a>
</body>
</html>