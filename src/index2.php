<?php
error_reporting(0);
echo("<pre style='font-weight:bold;'>");
$sessionid = '';
//echo "<pre>";
session_id($sessionid);
session_start();
if (!empty($_POST['name2']))
{
	echo("<center style='background:#000; color:#FFF; font-size:16px;'>Your One Time Security key is : "."<text style='font-size:20px; color:#F00;'>".$_POST['name3']."</text>"."</center>");
	//echo($_POST['name2']);
	$_SESSION['cart1'][] = $_POST['name1'];
	$_SESSION['cart2'][] = $_POST['name2'];
	$_SESSION['cart3'][] = $_POST['name3'];
	//$_SESSION['cart2']=array();
	//array_push($_SESSION['cart1'],$_POST['name1'],$_POST['name2']);
	//array_push($_SESSION['cart2'],$_SESSION['cart1']);
	//print_r($_SESSION['cart1']) ;
	//	print_r($_SESSION['cart2']) ;
	
}
	print_r(array_unique($_SESSION['cart1'])) ;
	print_r(array_unique($_SESSION['cart2'])) ;
	print_r(array_unique($_SESSION['cart3'])) ;
	$macho = array_combine($_SESSION['cart2'],$_SESSION['cart3']);
	$macho2 = array_combine($_SESSION['cart3'],$_SESSION['cart2']);
	//print_r($macho);
	//$key = array_search('i4HTebdz1T', $macho);
	//echo($key);
	$_SESSION['cart4'] = $macho;
	$_SESSION['cart5'] = $macho2;
	print_r($_SESSION['cart4']);
	print_r($_SESSION['cart5']);
	
	$letsdovalidation = $_SESSION['cart2'];
	print_r($letsdovalidation);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="final.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div style="position:absolute; border:solid 2px #000; padding:10px; height:220px; padding-top:10px; left:38%; top:30%; border-top:solid 20px #000;">
<text style="position:absolute;font-family: Consolas,monospace; font-size:16px; font-weight:bold; top:-20px; color:#FFF;left:27%;"> User Registration </text>
<!--<pre>I am awesome</pre>-->
<form method="post" id="subs" name="subs">
Enter your Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="name1" name="name1" type="text" spellcheck="false" autocomplete="off" /><br />
Enter your custom userID : <input id="name2" name="name2" type="text" spellcheck="false" autocomplete="off"/><br />
Your One Time Secret Key : <input id="name3" name="name3" type="text" spellcheck="false" autocomplete="off" value="<?php echo GRS() ?>" /><br />
<center><input id="doit" type="submit" style="border:solid 3px #000;"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button formaction="logout.php" style="width:57px; height:23px; border:solid 3px #000;">Reset</button></center>


</form>
<div id="tele" style=" position:absolute;font-family: Consolas,monospace;background:#F00; color:#FFF; font-size:16px; top:0%; left:0%; width:100%; text-align:center;" hidden="hidden"><text style="font-family: Consolas,monospace;font-size:17px;" id="paa1"></text></div>
</div>
<?php
function GRS($len = 10) {
    $set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $length = strlen($set);
    $rand = '';
    for ($i = 0; $i < $len; $i++) {
        $rand .= $set[rand(0, $length - 1)];
    }
    return $rand;
}

?>
<script>
var letsdovali = <?php echo json_encode($letsdovalidation);?>;
$('#doit').click(function(event){
var input = $('#name2').val();
var check1 = $('#name1').val();
var neat = letsdovali.includes(input);
var note1 = 'Enter Your Name';
var note2 = 'Choose your USERID';
var note3 = 'USERID ALREADY EXISTS!!';
var check1 = $('#name1').val();
	
if ((neat == false) && (input != '') && (check1 != '')){
	event.preventDefault();
	$("form[name='subs']").submit();
}
if (neat == true){
	event.preventDefault();
	$('#tele').show();
	$('#paa1').text(note3);
}
});
	
</script>
<script>
$('#doit').click(function(event){
event.preventDefault();
var input = $('#name2').val();
var check1 = $('#name1').val();
var note1 = 'Enter Your Name';
var note2 = 'Choose your USERID';
if(check1==''){
	event.preventDefault();
		$('#tele').show();
		$('#paa1').text(note1);
		
		}
if(input==''){
	event.preventDefault();
		$('#tele').show();
		$('#paa1').text(note2);
		}
	
	});
</script>
<script>
document.onkeydown = fkey;
document.onkeypress = fkey;
document.onkeyup = fkey;

var wasPressed = false;

function fkey(e){
        e = e || window.event;
       if( wasPressed ) return; 

        if (e.code === 'F5') {
             window.location.href = 'http://jmp2x.com/pro12/index2.php';
            wasPressed = true;
        }
 }
</script>
</body>
</html>
