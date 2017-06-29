<html>
  <head>
	<title>Password test, page 2</title>

	 <link href="jap.css" rel="stylesheet" type="text/css" />
	 <div id="wrapper">
	 <div id="header" style="margin:0 1px">
		<div id="nav" style="	background:#06a;padding:10px 20px;text-align:right;color:#f6dde3;"><a href="index.php">Check In</a> | <a href="validate_login.php">Buy Ticket</a> | <a href="index.php">Log out</a> </div>
		<br>
		<br>
	</div>
  <head>


  <body>
 
	<?php 
			 $name  = $_POST['realname'];
		 $pass  = $_POST['mypassword']; 

		 $myFile = "login.txt";
		 $fh = fopen($myFile, 'r');
		 $data = fgets($fh);
		 fclose($fh);

		 echo $data;

		 print "<br>";

		 $text = explode(":",$data);


		 echo $text[0];
	 
		 //print out an HTML line break
		 print "<br>";

		 //echo the split password
		 echo $text[1];

		 //assign the data to variables
		 $good_name = $text[0];
		 $good_pass = $text[1];

		 //print out an HTML line break
		 print "<br>";

		 //compare the strings
		 if( $name === $good_name && $pass === $good_pass){
			echo "That is the correct log-in information";
			header("Location:ticket.php");
			//next page now to book tickets
		 }else{
			echo "That is not the correct log-in information.";
		 }
	  ?>	
		<br>
		</div>
		<footer style="width: 100%;padding: 12px 20px;margin: 8px 0;background:#0040ff;color: white">
		<p>powered by<a target="_blank" href="https://www.jambopay.com">jamboPay</a></p>
	</footer>
  </body>
</html>