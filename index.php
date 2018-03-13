<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 13.03.18
 * Time: 21:03
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Background</title>
</head>
<? require_once 'functions.php';                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
colorForm();
if (!empty($_POST["bgcolor"])) {
    setcookie("bgcolor",$_POST["bgcolor"]);
    if ($_COOKIE["bgcolor"]!==$_POST["bgcolor"]) {
        echo "<meta http-equiv='refresh' content='0'>";
    }
}
    ?>
<body style="background-color: <?=$_COOKIE["bgcolor"] ?>;">

</body>

</html>
