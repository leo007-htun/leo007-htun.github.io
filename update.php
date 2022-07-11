<?php 

	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="convenience_store";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
	mysqli_select_db($conn,$dbname);
			
	$result=mysqli_query($conn,"SELECT * FROM productname");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
			<div class="container mt-5">
 			<h1 class="text-info">UpdateProduct</h1>

 			<?php 
			while($row=mysqli_fetch_assoc($result)){?>

 			<div class="card mt-3">
 				<div class="card-body">
    			<?php echo $row['name']; ?>
    			<a  class="ml-5"href="updateproduct.php?id=<?php echo $row['id'] ?>">
			Update</a>	
 				</div>
			</div>	
		<?php } ?>

 			</div>
</body>
</html>