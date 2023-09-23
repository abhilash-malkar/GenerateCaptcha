<?php
    session_start();
    if($_REQUEST){
        if(isset($_POST['captcha'])){
            if (($_POST['captcha']) != ($_SESSION['captcha'])) {
                echo "Wrong Captcha";
            }else{
                echo "Correct Captcha";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Captcha</title>
</head>
<body>
    <form action="" method="post">
        <img src="tool/showCaptcha.php" alt="">
        <br>    
        <input type="text" name="captcha">
        <input type="submit" value="Verify">
    </form>
    
</body>
</html>