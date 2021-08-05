<?php

$a = file_get_contents("../Model/users.json");

$aa = json_decode($a, true);

$p = $aa['fav'];
$pass = $aa['password'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'publicHeader.php'; ?>

    <fieldset>
        <legend>Security Question</legend>
        <form action="../Controller/checkforget.php" method="post" name="forget" onsubmit="return verify();">
            <label for="ans"> What's your favourite color? </label>
            <br>
            <br>
            <input type="text" name="ans" id="" placeholder="Write your answer here">
            <br>
            <br>
            <input type="submit" value="Confirm">
            <h4 id="warning"></h4>



        </form>


    </fieldset>

    <br>

    <script>
        function verify() {
            const logans = document.forget.ans.value;
            const ans = "<?php echo $p; ?>".replace(" ", "");

            if (logans == ans) {
                document.querySelector("#warning").innerHTML = "Your Password is: <?php echo $pass; ?> ";
                return false;
            }

            if (logans != ans) {
                document.querySelector("#warning").innerHTML = logans;
                document.querySelector("#warning").innerHTML = "Security Verification Failed";
                return false;
            }


        }
    </script>
    <?php include 'publicFooter.php'; ?>

</body>

</html>