<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bmdb');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Purchase Book</title>
<link rel="stylesheet" href="purchase.css">
</head>
<body>
<h1 align="center">Book 📖 E-commerse Site</h1>
<form action="delete.php" method="post">
<table align="center" border="1">
<tr>
<font size="1">
 <th>Book ID</th>
 <th>Title</th>
 <th>Author</th>
 <th>Price</th>
 <th>Contact</th>
 <th>Select To delete</th>
</font>
</tr>
  <?php
  for($i=1;$i<=$num;$i++)
  {
	  $row=mysqli_fetch_array($result);
  ?>
  <tr align="center">
  <td><?php echo $row['bookid']?></td>
  <td><?php echo $row['title'] ?></td>
  <td><?php echo $row['author'] ?></td>
  <td><?php echo $row['price'] ?></td>
  <td><?php echo $row['phno'] ?></td>
  <td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="b<?php echo $i; ?>"/></td>
  </tr>
  <?php
  }
  ?>
  </table>
  <font size="5">
  <input type="submit" value="Delete"></input><br>
  <a href="home.php">🡄 back</a>
  </font>
  </body>
  </html>
  
  
  