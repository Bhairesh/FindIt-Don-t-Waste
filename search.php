<?php
	include('dbConnection.php');
	$output = '';
	//Searrching 

	if(isset($_POST['search'])) {
		$searchquery = $_POST['search'];

		$query = mysqli_query($conn,"SELECT * from orphanageslist where Name LIKE '%$searchquery%' OR Address LIKE '%$searchquery%' ") or die("Could not search..!");
		//$count =  mysql_num_rows($query);
		if(!$query) {
			echo "hjghjghjgh";
			$output = 'There was no search results..!';
		}else {

			while($row = mysqli_fetch_array($query)) {
				$name = $row['Name'];
				$address = $row['Address'];
				$output .= '<div>'.$name.' '.$address.'</div>';
			}
		}

	}
	?>
	<script type="text/javascript">
		window.alert("Search results not found......!");
		window.location.href = "index.html";
	</script>
	<?php
?>


