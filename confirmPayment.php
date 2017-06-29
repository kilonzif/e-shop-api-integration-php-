<html>
  <head>
	<title>Confirm Payment</title>
   <link href="jap.css" rel="stylesheet" type="text/css" />
   <div id="wrapper">
   <div id="header" style="margin:0 1px">
    <div id="nav"><a href="index.php">Check In</a> | <a href="validate_login.php">Buy Ticket</a> | <a href="index.php">Log out</a> </div>
   
  </div>
  <br>
  <br>
  <head>

  <body>
    <p><b>Ticket Details</b></p><br>


  <table border="1" style="color: black;border: 2px solid #e7e7e7; width: 100%; align-content: center">
    <thead>Customer Details</thead>

    <tbody>
		
  <?php
          $ticketNumber=$_POST['Number'];
          $total;
          echo "$ticketNumber";

          if ($_POST["ticketType"] =="normal") {
            echo "normal";
            $total=$ticketNumber * 1000;
}
elseif ( $_POST["ticketType"] === "vip" ) {

   $total=$ticketNumber * 2000;
}
elseif ($_POST["ticketType"] ==="vvip") {

   $total=$ticketNumber * 3000;
}
else{
  echo "nothing selected";
}

?>
       <tr>
          <td> Ticket Type </td>
          <td>#<?php echo $_POST['ticketType']?></td>
          
       </tr>

        <tr>
          <td> Nu# </td>
          <td><?php echo $_POST['Number'] ?></td>
          
       </tr>

        <tr>
          <td> amount# </td>
          <td><?php echo $total ?></td>
          
       </tr>


<?php
?>
</tbody>

</table>
<br>

    <center><form action="complete.php" method="post">
       <input type="submit" name="completeTrans" value="completeTrans">
       <input type="submit" name="cancelTrans" value="cancelTrans">
    </form>
    </center>
    <article>
       <?php
           if (isset($_POST['completeTrans'])) {
               echo "This happens if you click hello";
           }
           if (isset($_POST['cancelTrans'])) {
               echo "This happens if you click goodBye";
           }
        ?>

        </article>
        </div>
        <footer style="width: 100%;padding: 12px 20px;margin: 8px 0;background:#0040ff;color: white">
    <p>powered by<a target="_blank" href="https://www.jambopay.com">jamboPay</a></p>
  </footer>
  </body>
</html>