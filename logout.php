<?php
error_reporting(0);
session_start();
//session_destroy();
header('Location: http://localhost/pro12/index2.php');
unset($_SESSION['cart1']);
unset($_SESSION['cart2']);
unset($_SESSION['cart3']);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>