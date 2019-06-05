<!DOCTYPE html>
<html>
<head>
<title>UPLOAD FORM</title>
<link rel="stylesheet" href="uploadcss.css">
</head>
<body>
<h1>Book E-commerse Site</h1>
<form action="upload.php" method="post">
 <table>
   <tr>
    <th>Title</th>
	<td><input type="text" name="title" required /></td>
   </tr>
   <tr>
    <th>Author</th>
	<td><input type="text" name="author" /></td>
   </tr> 
 <tr>
    <th>Price</th>
	<td><input type="text" name="price" required /></td>
   </tr>
   <tr>
    <th>phone Number</th>
	<td><input type="text" name="phno" required /></td>
   </tr>
   <tr>
    <th></th>
	<td><input type="submit" name="UPLOAD" /></td>
   </tr>
 </table>
 <font size="5">
 <a href="home.php">🡄 back</a>
</font>
</body>
</html>