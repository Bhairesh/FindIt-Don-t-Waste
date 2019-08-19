<?php
		 include('dbConnection.php');

?>
<?php
		 $sql = 'SELECT * FROM users';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn,$query));
}

//---------Insertion---------------

/*		if(mysqli_connect_errno()){
			die('Cannot connect to database' . mysqli_connect_errno());
		} else {

		/*	$uid = $_POST['Uid'];
			$password = $_POST['Psword'];
			$name = $_POST['Name'];
			$email = $_POST['Email'];
			$phone = $_POST['Phone'];
			$address = $_POST['Address']; 

			$insert = "INSERT INTO users ('ID','Password') VALUES ('$uid','$password')";
			$result = mysqli_query($conn,$insert);
				var_dump($result);  

			if(isset($_POST['submit']))
			{
				

			}
}*/

// data insert code starts here.
if(isset($_POST['add']))
{
			$uid = $_POST['Uid'];
			$password = $_POST['Psword'];
			$name = $_POST['Name'];
			$email = $_POST['Email'];
			$phone = $_POST['Phone'];
			$address = $_POST['Address']; 
	
	$res= "INSERT INTO users (ID,Name,Password,Email,Phone,Address) VALUES ('$uid','$name','$password','$email','$phone','$address')";


	if(mysqli_query($conn,$res))
	{
		?>
		<script>
		alert('Record inserted...');
        window.location='displayUsers.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error inserting record...');
        window.location='displayUsers.php'
        </script>
		<?php
	}
}
// data insert code ends here.
?>

<?php

// Data updation

$sql = 'SELECT * FROM users';
		
$query = mysqli_query($conn, $sql);
if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn,$query));
}

if(isset($_POST['update']))
{
//	$uid = $_POST['Uid'];
//	if($uid == $id)	
//	{
			$uid = $_POST['Uid'];
			$password = $_POST['Psword'];
			$name = $_POST['Name'];
			$email = $_POST['Email'];
			$phone = $_POST['Phone'];
			$address = $_POST['Address']; 

 $sql = "UPDATE users SET Name='$name', Password='$password', Email='$email', Phone='$phone', Address='$address' WHERE ID='$uid'";
/*
if (!mysql_query($sql))
  {
    die('Error: ' . mysql_error($conn));
  }
echo "working.....";
mysql_close($conn);

}  */
if(mysqli_query($conn,$sql))
			{
				?>
				<script>
				alert('Record Updated...');
  			    window.location='displayUsers.php'
  			    </script>
				<?php
			}
			else
			{
				 die('Error: ' . mysqli_error($conn));
				?>
				<script>
				alert('Error Updating record...');

        		window.location='displayUsers.php'
        		</script>
				<?php
			}
		}

?>
<html>
<head>
	<title>Displaying Users</title>
	<script type="text/javascript">
		
	</script>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		.addbtn, .updatebtn, .deletebtn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  font-family: Courier New;
  color: #ffffff;
  font-size: 17px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.addbtn:hover {
  background: #0c4e7a;
  text-decoration: none;
}
.updatebtn:hover {
	 background: #0c4e7a;
  text-decoration: none;
	}

	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}
	</style>
</head>
<body style="background-color: #f3f3f3;">
	<nav>
	<ul>
 		<li><a class="active" href="adminPage.php">Admin Panel</a></li>
  		<li style="float: right;"><a href="LogOut.php">Logout</a></li>
  		<li style="float: right;"><a href="displayUsers.php">Users</a></li>
  		<li style="float: right;"><a href="displayOrphanages.php" >Orphanages</a></li>
  		<li style="float: right;"><a href="displayQueries.php">Queries</a></li>
  		<li style="float: right;"><a href="displayRequests.php">Requests</a></li>
		</ul>
	</nav>
	<h1>Users</h1>
	<table class="data-table">
		<br>	
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Password</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
			</tr>
		</thead>

		<tbody>
		<?php
		
		while($row = mysqli_fetch_array($query))
		{
		
			echo '<tr>
					<td>'.$row['ID'].'</td>
					<td>'.$row['Name'].'</td>
					<td>'.$row['Password'].'</td>
					<td>'.$row['Email'].'</td>
					<td>'.$row['Phone'].'</td>
					<td>'.$row['Address'].'</td>
				</tr>';
			
		}
		?>
		</tbody>
		
	</table>
	<div style="margin: 10px 24% ;max-width: ">
		<form action="<?php $_PHP_SELF ?>" method="POST" name="myform"></br>			
			<input type="text" name="Uid" placeholder="User ID" required style="margin-left: 13%;">		
    		<input type="text" name="Name" placeholder="User Name" required style="">
    		<input type="text" name="Psword" placeholder="Password" required><br><br>
    		<input type="text" name="Email" placeholder="Email" required style="margin-left: 13%;">
    		<input type="text" name="Phone" placeholder="Phone number" required style="">
    		<input type="text" name="Address" placeholder="Address..." required>
    		<input type="submit" name="add" value="Add User" style="margin-left: 40.5%; margin-top: 20px; " class="addbtn">	<br>
    		<input type="submit" name="update" value="Update" style="margin-left: 42%; margin-top: 20px; " class="updatebtn">
       	</form>
       		<hr style="border-style: groove;width:100%;text-align: center;">

	<?php

	//<!--  Deletion -->

		if(isset($_POST['delete']))
			{
				if(!$conn )
					{
  						die('Could not connect: ' . mysql_error());
					}

				$uid = $_POST['uid'];

				$sql = "DELETE from users WHERE ID = $uid" ;

				$retval = mysqli_query($conn,$sql);
				if(!$retval )
				{
  					die('Could not delete data: ' . mysql_error());
				} else {
						?>
							<script>
							alert('Record Deleted...');
      					    window.location='displayUsers.php'
        					</script>
						<?php
				}
			}
		
	?>
	<form method="post" action="<?php $_PHP_SELF ?>">
		<input name="uid" type="number" id="uid" style="margin-left: 28%;text-align: center;margin-top: 20px; width: 300px; " placeholder="Enter the ID to delete">
		<input name="delete" type="submit" id="delete" value="Delete" class="deletebtn" value="Delete" style="margin-left: 42%; margin-top: 20px; ">	
	</form>

	</div>
</body>
</html> 		