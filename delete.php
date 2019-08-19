<?php

include('dbConnection.php');
if(isset($_POST['delete']))
{


if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$Name = $_POST['delete'];

$sql = "DELETE from sales WHERE id = $Name" ;

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
}
?>
<html>
<head>
<title>Delete an Employee</title>
</head>
<body>

<h3>Enter the Employee Number below to delete a record</h3>

<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Employee ID</td>
<td><input name="employeeid" type="number" id="employeeid"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="Delete">
</td>
</tr>
</table>
</form>
</html>