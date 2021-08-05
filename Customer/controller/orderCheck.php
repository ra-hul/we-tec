<?php
	
	require_once('../model/webtech.php');
	require_once('../model/orderModel.php');
    $connection = getConnection();

	if($_POST['save'])
	{
		$name = $_POST['name'];
		$bPrice = $_POST['buyingPrice'];
        $sMethod = $_POST['ship'];
        $sAddress = $_POST['sadd'];



		#$sPrice = $_POST['sellingPrice'];

		if($name == '' || $bPrice == '' || $sMethod =='' || $sAddress =='')
		{
			echo "Null Submission";
		}
		else
		{
			$displayable = "No";
			if(isset($_POST['check']))
			{
				global $displayable;
				$displayable = "Yes";
			}	
			$productDetails = array('cid' => $name, 'o_value' => $bPrice, 'ship_method' => $sMethod, 'ship_address' =>$sAddress);
            #print_r($productDetails);
			#$connection = getConnection();
			$check = insertProduct($productDetails);
			if($check)
			{
				echo "Order placed successfully!!!!!!!!!!";
			}
			else
			{
				echo "Error occured!";
			}

		}
	}
?>