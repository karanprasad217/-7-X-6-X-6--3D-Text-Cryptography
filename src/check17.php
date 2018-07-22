<?php
echo "<pre>";
if($_POST['name1']!=''){
session_start();
$checktime = time();
$_SESSION['checkmeonce'] = $_POST['name1'];
echo $checktime."<br>" ;
echo $_SESSION['checkmeonce'];
}
echo $_SESSION['checkmeonce'];
echo session_id();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="final.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="post">
Enter a name for me : <input type="text" name="name1" id="name1" />
<input type="submit" name="sub1" value="Send"/>

</form>
<script>
document.onkeydown = fkey;
document.onkeypress = fkey;
document.onkeyup = fkey;

var wasPressed = false;

function fkey(e){
        e = e || window.event;
       if( wasPressed ) return; 

        if (e.keyCode == 116) {
             window.location.href = 'http://localhost/pro12/check17.php';
            wasPressed = true;
        }
 }
</script>
</body>
</html>