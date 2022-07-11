<?php 
	
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$dbname="convenience_store";
			$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
			mysqli_select_db($conn,$dbname);

		if(isset($_POST['name']) && $_POST['name']!=null)
		{
			$name=$_POST['name'];
			$sql="INSERT into productname (name)VALUES
				('$name')";
			mysqli_query($conn,$sql);

			echo "Insert Successful";
		}
		if(empty($_POST['name']))
		{	
			echo "No Data Found!";
		}
 ?>