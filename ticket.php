<!Doctype>
<!DOCTYPE html>
<html>
<head>

	<title>Order Tickets</title>
	<div id="wrapper">
	 <link href="jap.css" rel="stylesheet" type="text/css" />
	 <div id="header" style="margin:0 1px">
		<div id="nav"><a href="index.php">Check In</a> | <a href="validate_login.php">Buy Ticket</a> | <a href="index.php">Log out</a> </div>
		
	</div>
</head>
<body>
<br><br>
<center><h1><b>Ticket Details</b></h1></center><br>

	<FORM ACTION=confirmPayment.php METHOD=POST>
	    <label for="ticketType">Type of Ticket:</label> <br>
      <select name="ticketType" style="width: 100%;padding: 16px 20px;border-radius: 4px;background-color: #f1f1f1;">
        <option selected="selected" value="normal" name="normal">NORMAL</option>
        <option value="vip" name="vip">VIP</option>
        <option value="vvip" name="vvip">VVIP</option>
      </select>
      <br>
	   Number of tickets: <INPUT TYPE=text NAME="Number"><br>
	  <center><P><INPUT TYPE=SUBMIT NAME='submit' VALUE="submit"></center>


		</FORM>
</div>
<footer style="width: 100%;padding: 12px 20px;margin: 8px 0;background:#0040ff;color: white">
		<p>powered by<a target="_blank" href="https://www.jambopay.com">jamboPay</a></p>
	</footer>
</body>
</html>