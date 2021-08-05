
<!--  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>
    <fieldset>
        <table width='100%' >
            <tr>
            <td>
                    <img src="download.png" alt="Image unavailable" height='100px' width='100px'/>
                </td> 
                <td align='right'>
                    <nav>
                        <h2>ABC Pharmacy</h2>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
      <table width='100%' >
          <tr>
             <h1 align="center">Emergency contact</h1>
          </tr>
      </table>
      </fieldset>
      <fieldset>
        

        <form method="post" action="payment.php">
            <fieldset align="center">
            <legend>Payment Method</legend>
    
                <select name="select">
                        <option value="bKash" selected>bKash</option>
                        <option value="Nagad">Nagad</option>
                        <option value="Rocket">Rocket</option>
                        <option value="VISA Card">VISA Card </option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="Master Card">Master Card</option>
                        <option value="Sure Cash">Sure Cash</option>
                    </select>
    
      
        <br>
        <input type="submit" name="submit" value="Submit">
        
    </fieldset>


    </form>

      </fieldset>
      
      
        
      
   
    <fieldset>
        <center>
            <label>
                A sister concern of ABC Pharmacy
            </label>
        </center>
    </fieldset>
</body>
</html>

-->

<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
            <?php include 'head.php';?>

			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<ul>
                <?php include 'item.php';?>


				</ul>
			</td>
			<td colspan="2">
				<form method="post" action="../controller/payment.php" onsubmit="return validateform()">
                <script type="text/javascript" src="paymentscript.js"></script>

                    <fieldset align="center">
                  <!--  <legend>Payment Method</legend>
                    <fieldset align="center">-->
                    <h1 id="head">Payment Policy</h1>

					<legend>Payment</legend>
                    <legend>Category</legend>

			        <input type="text" name="category" id="category"  value="" onkeyup="CategoryValidate()"> <br>
            
					<legend>Name</legend>

					<input type="text" name="myname" id="myname"  value="" onkeyup="NameValidation()"> <br>

                    <legend>Method</legend>

					<input type="text" name="method" id="method"  value="" onkeyup="MethodValidate()"> <br>

                    <legend>Amount</legend>

					<input type="text" name="amount" id="amount" value="" onkeyup="AmountValidate()"> <br>
			        <input type="checkbox" name="check"> Display
			
			<hr>
            
            
              
                <br>
               <!-- <input type="submit" name="submit" value="Submit" onclick="NameValidation(); CategoryValidate(); MethodValidate(); AmountValidate()";>-->
               <input type="submit" name="submit" value="Submit">

            </fieldset>
			</td>
		</tr>
    
		<tr height = "50px">
			<td colspan="3">
            <?php include 'foot.php';?>

			</td>
		</tr>
	</table>
</body>
</html>

<?php

	}else{
		echo "Please do Registration before login in";
		header('location: registration.php');
	}

?>