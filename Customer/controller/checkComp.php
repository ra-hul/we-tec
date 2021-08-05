<?php


	
	/*if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];
	

		if($name == ""){
			echo "null submission";
		}else{
			echo "Sir!!!! Your feeback will be taken care";
		}

	}else{
		echo "invalid request";
	}
?>*/



	
	/*if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];
	

		if($name == ""){
			echo "null submission";
		}else{
			echo "Sir!!!! Your feeback will be taken care";
		}

	}else{
		echo "invalid request";
	}
?>*/
    require_once('../model/webtech.php');
	require_once('../model/complain.php');

	
	if($_POST['submit'])
{
    $name = $_POST['myname'];
    $proCategory = $_POST['category'];
	$product = $_POST['product'];

    #$sPrice = $_POST['sellingPrice'];

    if($name == '' || $proCategory == '' || $product== '')
    {
        echo "Null Submission";
    }
    else
    {
       /* $displayable = "No";
        if(isset($_POST['check']))
        {
            global $displayable;
            $displayable = "Yes";
        }	*/

		#print_r($productDetails);
        $productDetails = array('myname' => $name, 'product' => $product, 'category' => $proCategory);
        $connection = getConnection();
        $check = insertProduct($productDetails);
        if($check)
        {
            echo "Your Complain will be taken care!!!";
        }
        else
        {
            echo "Error occured!";
        }

    }
}
?>