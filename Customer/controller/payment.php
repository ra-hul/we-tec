<?php
/*if(isset($_POST['select'])){
$selected_item = $_POST['select'];
echo "Dear Sir you your category is :" .$selected_item;
echo "<br>";

}

if(isset($_POST['submit'])){

    $name 		= $_POST['myname'];


    if($name == ""){
        echo "null submission";
    }else{
        echo "Your desired product is: " .$name;
    }

}else{
    echo "invalid request";
}*/
	
#require_once('../model/paymentMethodDB.php');
require_once('../model/webtech.php');

require_once('../model/payment.php');
if($_POST['submit'])
{
    $name = $_POST['myname'];
    $proCategory = $_POST['category'];
    $methodPolicy = $_POST['method'];
    $amount       = $_POST['amount'];
    #$sPrice = $_POST['sellingPrice'];

    if($name == '' || $proCategory == '' || $methodPolicy == '' || $amount == '')
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
        $productDetails = array('myname' => $name, 'category' => $proCategory, 'method' => $methodPolicy, 'amount' => $amount, 'displayable' => $displayable);
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
?>







