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
    #require_once('../model/feedbackDB.php');
	/*require_once('../model/webtech.php');

	require_once('../model/feedback.php');
	if($_POST['submit'])
	{
		$name = $_POST['myname'];
		#$proCategory = $_POST['category'];
		#$sPrice = $_POST['sellingPrice'];

		if($name == '')
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
			$productDetails = array('myname' => $name,'displayable' => $displayable);
			$connection = getConnection();
			$check = insertProduct($productDetails);
			if($check)
			{
				echo "Your request will be taken care!!!";
			}
			else
			{
				echo "Error occured!";
			}

		}
	}
?>*/

require_once('../model/webtech.php');

#require_once('../model/foreign.php');
require_once('../model/feedback.php');

if($_POST['submit'])
{
    $name = $_POST['myname'];
    $proCategory = $_POST['category'];
    #$sPrice = $_POST['sellingPrice'];

    if($name == '' || $proCategory == '')
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
        $productDetails = array('myname' => $name, 'category' => $proCategory, 'displayable' => $displayable);
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






