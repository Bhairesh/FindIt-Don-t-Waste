<?php
/*
$to = "8553963618@vtext.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: bhairesh11@gmail.com" . "rn" . "";

mail($to,$subject,$txt);

*/ 
if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
 if (
 isset( $_REQUEST['phoneNumber'], $_REQUEST['carrier'], $_REQUEST['smsMessage'] ) &&
  !empty( $_REQUEST['phoneNumber'] ) &&
  !empty( $_REQUEST['carrier'] )
 ) {
  $message = wordwrap( $_REQUEST['smsMessage'], 70 );
  $to = $_REQUEST['phoneNumber'] . '@' . $_REQUEST['carrier'];
  $result = @mail( $to, '', $message );
  print 'Message was sent to ' . $to;
 } else {
  print 'Not all information was submitted.';
 }
}

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
 width: 600px;
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

       <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" /><br><br>

              <input type="text" name="carrier" id="carrier" placeholder="carrier name" /><br><br>

       <textarea name="smsMessage" id="smsMessage" cols="45" rows="15"></textarea><br><br>
 
     <input type="submit" name="sendMessage" id="sendMessage" value="Send Message" /><br><br>
     <a href="displayRequests.php">Go back...</a>
     </form>
  </div>
 </body>
</html>