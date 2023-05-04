<?php
include("ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
    echo '<script language="javascript">';
    echo 'alert("Hatalı Giriş")';  //not showing an alert box.
    echo '</script>';
echo "Giriş Hatalı .<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=index.php");
}
ob_end_flush();
?>
