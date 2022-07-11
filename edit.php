<?php 
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$dbname="convenience_store";
			$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
			mysqli_select_db($conn,$dbname);

			$id = $_GET['id'];  
			$name=$_GET['name'];

			$sql="UPDATE productname SET name='$name' WHERE id=$id";
			mysqli_query($conn,$sql);

			header("location:update.php");

 ?>

