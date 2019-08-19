<?php

$conn = mysqli_connect('localhost','root','','finditdb');

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
else{
	$_PHP_SELF ;
}

$sql = 'SELECT * FROM orphanageslist';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
/*	
if(isset($_POST[""])){
    $check = getimagesize($_FILES["Image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['Image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        $insert = "INSERT into orphanageslist (Image) VALUES ('$imgContent')";
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
       		 } 
   		}else{
       		echo "Please select an image file to upload.";
    }
}*/

//-----------Update------------------


if(isset($_POST['update']))
{
		$uid = $_POST['Uid'];
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$website = $_POST['Website'];
		$phone = $_POST['Phone'];
		$address = $_POST['Address'];

 $sql = "UPDATE orphanageslist SET Name='$name', Email='$email', Website='$website', Phone='$phone', Address='$address' WHERE ID='$uid'";

if(mysqli_query($conn,$sql))
			{
				?>
				<script>
				alert('Record Updated...');
  			    window.location='displayOrphanages.php'
  			    </script>
				<?php
			}
			else
			{
				 die('Error: ' . mysqli_error($conn));
				?>
				<script>
				alert('Error Updating record...');

        		window.location='displayOrphanages.php'
        		</script>
				<?php
			}
		}
?>
<html>
<head>
	<title>Displaying Orphanages</title>
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

	<!--Upload Image-->

<!--	<div style="text-align: center;">
		<h3>Add Image of an Orphanage</h3>
		<form action="upload.php" method="post" enctype="multipart/form-data"> Select Image to upload:
        	<input type="file" name="Image"/>
        	<input type="submit" name="submit" value="UPLOAD"/>
    	</form>
	</div>-->


	<div class="" > </div>
	<h1>ORPHANAGES</h1>
	<table class="data-table" style="max-width: 90%">
		<br>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Website</th>		
				<th>Phone</th>
				<th>Address</th>
			</tr>
		</thead>

		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
		
			echo '<tr>
					<td>'.$row['ID'].'</td>
					<td>'.$row['Name'].'</td>
					<td>'.$row['Email'].'</td>
					<td>'.$row['Website'].'</td>
					<td>'.$row['Phone'].'</td>
					<td>'.$row['Address'].'</td>
				</tr>';	
		}
		?>  
		</tbody>
		
	</table>
	<div style="margin: 10px 37% ;width: ">
		<form action="<?php $_PHP_SELF ?>" method="post" name="myform" style="max-width: 90%;"></br>					
    		<input type="text" name="Name" placeholder="Orphanage Name" required style="margin-top:5px;width:250px;height: 35px;">
    		<input type="text" name="Email" placeholder="Email" required style="margin-top:5px;width:250px;height: 35px;">
    		<input type="text" name="Website" placeholder="Website" style="margin-top:5px;width:250px;height: 35px;"><br>
    		<input type="text" name="Phone" placeholder="Phone number" id="numloc" required style="margin-top:5px;width:250px;height: 35px;">
    		<input type="text" name="Address" placeholder="Address..." required style="margin-top:5px;width:250px;height: 35px;">
    		<input type="submit"  value="Add Orphanage" name="add" style="margin-left: 25%; margin-top: 20px; " class="addbtn"><br>
    		<input type="text" name="Uid" style="margin-left: 6%;text-align: center;	 margin-top: 20px; width: 300px; " placeholder="Enter the ID to Update"><br>
    		<input type="submit" name="update" value="Update" style="margin-left: 35%; margin-top: 20px; " class="updatebtn" onclick="">
    	</form>

    	<hr style="border-style: groove;width:100%; margin-top: 20px;text-align: center;">

<?php
	
	$conn = mysqli_connect('localhost','root','','finditdb');


// data insert code starts here.
if(isset($_POST['add']))
{
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$website = $_POST['Website'];
	$phone = $_POST['Phone'];
	$address = $_POST['Address'];
	
	$res= "INSERT INTO orphanageslist (Name,Email,Website,Phone,Address) VALUES ('$name','$email','$website','$phone','$address')";


	if(mysqli_query($conn,$res))
	{
		?>
		<script>
		alert('Record inserted...');
        window.location='displayOrphanages.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error inserting record...');
        window.location='displayOrphanages.php'
        </script>
		<?php
	}
}
// data insert code ends here.

?>
				
<?php

//$conn = mysqli_connect('localhost','root','','finditdb');

if(isset($_POST['delete']))
{


if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$Id = $_POST['id'];

$sql = "DELETE from orphanageslist WHERE id = $Id" ;

$retval = mysqli_query( $conn, $sql);
if(! $retval )
{
  //die('Could not delete data: ' . mysql_error());
  echo "Could not delete entered id...!";
}
else
{
		?>
		<script>
		alert('Record Deleted...');
        window.location='displayOrphanages.php'
        </script>
		<?php
}
}
?>
	<form method="POST" action="<?php $_PHP_SELF ?>">
		<input name="id" type="number" id="employeeid" style="margin-left: 6%;text-align: center;	 margin-top: 20px; width: 300px; " placeholder="Enter the ID to delete">
		<input name="delete" type="submit" id="delete" value="Delete" class="deletebtn" value="Delete" style="margin-left: 35%; margin-top: 20px; ">
	</form>
	

	</div>
</body>
</html>