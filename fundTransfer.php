<?php

?>
<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
   <style type="text/css">
   	body {
 margin: 0;
 padding: 3em 0;
 color: #fff;
background-color: grey;
 font-family: Georgia, Times New Roman, serif;
}
 
#container {
 width: 300px;
 background: #fff;
 color: #555;
 border: 3px solid #ccc;
 -webkit-border-radius: 10px;
 -moz-border-radius: 10px;
 -ms-border-radius: 10px;
 border-radius: 10px;
 border-top: 3px solid #ddd;
 padding: 1em 2em;
 margin: 0 auto;
 -webkit-box-shadow: 3px 7px 5px #000;
 -moz-box-shadow: 3px 7px 5px #000;
 -ms-box-shadow: 3px 7px 5px #000;
 box-shadow: 3px 7px 5px #000;
}
 
ul {
 list-style: none;
 padding: 0;
}
 
ul > li {
 padding: 0.12em 1em
}
 
label {
 display: block;
 float: left;
 width: 130px;
}
 
input, textarea {
 font-family: Georgia, Serif;
}
   </style>
  </head>
  <body>
   <div id="container">
   	
    <form action="" method="post">


From:&nbsp&nbsp<input type="number" name="cardnum" placeholder="Account Number"><br><br>
	To:&nbsp &nbsp &nbsp &nbsp	<input type="number" name="cardnum" placeholder="Account Number"><br><br>
  IFSC:&nbsp&nbsp&nbsp<input type="number" name="ifsc" placeholder="IFSC"><br><br>
		Amout:<input type="number" name="amount" placeholder="Enter the Amount"><br><br>
     <input type="submit" name="transfer" id="transfer" value="Send Money" /><br><br>

     		<a href="index.html">Go back...</a>
     </form>
  </div>
 </body>
</html>
