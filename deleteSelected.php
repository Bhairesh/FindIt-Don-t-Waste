

<?php
include('dbConnection.php');
if(isset($_POST['delete']))
{


if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$ID = $_POST['id'];

$sql = "DELETE from sales WHERE id = $ID" ;

mysql_select_db('finditdb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
}
else
{
	$_PHP_SELF;

}
?>
