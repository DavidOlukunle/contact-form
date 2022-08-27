<?php
$conn=mysqli_connect('localhost','David','password','contactForm');

?>
<html lang="en">
  <head>
  	<title>View all messages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="mt-5 text-center text-primary  ">All messages</div>

<div class="container pt-5">
	<table class="table table-condensed table-dark table-hover table-bordered">
		<tbody>
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>About</th>
		<th>Message</th>
	</tr>
	</tbody>

<?php

$query="SELECT * from user_message ";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
  $name=$row['name'];
  $email=$row['email'];
  $about=$row['About'];
  $message=$row['message'];


echo "<tr>";
echo "<td>$name</td>";
echo "<td>$email</td>";
echo "<td>$about</td>";
echo "<td>$message</td>";
echo "<tr>";


}
?>
</table>
</div>
</body>
</html>