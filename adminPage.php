		<!DOCTYPE html>
		<html>
		<head>
			<title>Admin Page</title>
		<style type="text/css">
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

.btn {
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
  width: 300px;
  height: 150px;
  float: left;
}

.btn:hover {
  background: #0c4e7a;
  text-decoration: none;
}


	</style>
		</head>
		<body>
			<nav>
		<ul>
 		<li><a class="active" href="#home">Admin Panel</a></li>
  		<li style="float: right;"><a href="index.html">Logout</a></li>
  		<li style="float: right;"><a href="displayUsers.php">Users</a></li>
  		<li style="float: right;"><a href="displayOrphanages.php" >Orphanages</a></li>
  		<li style="float: right;"><a href="displayQueries.php">Queries</a></li>
      <li style="float: right;"><a href="displayRequests.php">Requests</a></li>
		</ul>
			</nav>

			<div class="home" style="text-align: center;">
				<div class="btns" style="max-width: 50%;float: left;margin: 5% 0% 10% 20%;"><a href="displayUsers.php"><button class="btn">Users</button></a></div>
				<div class="btns" style="max-width: 50%;float: left;margin: 5% 10% 10% 20%;"><a href="displayOrphanages.php"><button class="btn">Orphanages</button></a></div>
				<div class="btns" style="max-width: 50%;float: left;margin: 0% 0% 10% 20%;"><a href="displayQueries.php"><button class="btn">Queries</button></a></div>
				<div class="btns" style="max-width: 50%;float: left;margin: 0% 10% 10% 20%;"><a href="displayRequests.php"><button class="btn">Requests</button></a></div>

				
			</div>

		</body>
		</html>

