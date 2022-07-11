<?php 
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$dbname="convenience_store";
			$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
			mysqli_select_db($conn,$dbname);
			$id=$_GET['id'];
			$result=mysqli_query($conn,"SELECT * from productname WHERE id=$id");
			if(!$result){
				die(mysqli_error($conn));}
			$row=mysqli_fetch_assoc($result);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>UpdateProduct</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
			<div class="container">
			<form class="mt-4" action="edit.php">
			<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	  		<div class="mb-3">
	   		<label  class="form-label">Product Name</label>
	    	<input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
	   		<div class="form-text">Please enter Product name.</div>
	  		</div>
  			<input type="submit" class="btn btn-info text-white" value="Submit">
		</form>

		</div>
</body>
</html>