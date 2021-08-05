<?php
session_start();
	require_once('../Model/db.php');
	require_once('../Model/feedbackmodel.php');
	if(isset($_POST['submit']))
	{
		$id = $_SESSION['id'];
		$progress = $_POST['progress'];

		if ($progress != "") {
			$stock = array('progress' => $progress);

        $check = updatestock($id, $stock);
        if ($check) {
            echo "Progress Submit Successfully";
            header('location: ../View/feedback.php');
        } else {
            echo "Db error";
        }
    } else {
        echo "Please Insert All Information";
    }
}

?>
