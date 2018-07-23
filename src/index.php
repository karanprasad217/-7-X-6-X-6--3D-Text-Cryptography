<!--DeffieHellman-->
<?php
error_reporting(0);
$sessionid = '';
//echo "<pre>";
session_id($sessionid);
session_start();
$sixty = '60';
$_SESSION['checktime1'] = time();
if (!empty($_POST['imp2'])){
$_SESSION['checktime2'] = time();
//session_start();
$care1f1 = $_SESSION['cart2'];
//print_r($care1f1);//thisone
	//echo('you are in');
if (in_array($_POST['imp2'], $care1f1)){
	//echo('Match Found');	
$_SESSION['together1'][] = $_POST['imp1'];
$_SESSION['together2'][] = $_POST['imp3'];
$_SESSION['together3'][] = $_POST['imp2'];
$_SESSION['together6'][] = $_POST['imp4'];
$_SESSION['checktime3'][] = $_SESSION['checktime2'] + $_POST['imp4'] * $sixty;
}
//print_r($_SESSION['together3']);
//print_r($_SESSION['checktime1']);
$force1 = array_combine($_SESSION['together3'],$_SESSION['together1']);
$force2 = array_combine($_SESSION['together3'],$_SESSION['together2']);
$_SESSION['together4'] = $force1;
$_SESSION['together5'] = $force2;
//print_r($_SESSION['together5']);
//print_r($_SESSION['together4']);//thisone
//print_r($_SESSION['together5']);
//print_r($_SESSION['together5']);//thisone

$_SESSION['checkmeonce3'] = array_combine($_SESSION['together3'],$_SESSION['checktime3']);}//Main area  DELICATE BRACKET 
//print_r($_SESSION['together4']);
//print_r($_SESSION['together5']);
//print_r($_SESSION['checkmeonce3']);
$new11 = $_SESSION['checkmeonce3'];
$bossy17 = array();
foreach($new11 as $kara => $bossy){
	$bossy17[] = $bossy;
	//print_r($kara);
		//print_r($bossy);
	}
//print_r($bossy17);
/*
$_SESSION['checkmeonce2'] = array();
$_SESSION['checkmeonce2'] = array_combine($_SESSION['together3'],$_SESSION['together4']);
*/
//print_r($_SESSION['checktime1']);
$_SESSION['logout'] = array();
for ($i = 0; $i < count($bossy17); $i++) {
if($_SESSION['checktime1'] >= $bossy17[$i] ){
	//print_r($bossy17[$i])."<br>";
		if($bossy17[$i] <= $_SESSION['checktime1']){
			//print_r("<br>".$bossy17[$i])."<br>";
			$main1 = array_search($bossy17[$i],$_SESSION['checkmeonce3']);
			$_SESSION['logout'][] = $main1;
			//print($_SESSION['checktime1']);
			//print_r('<br>'.$main1);
			//print_r('<br>'.$_SESSION['together4']);
			unset($_SESSION['together4'][$main1]);
			unset($_SESSION['together5'][$main1]);
			//unset($karan1[$main1]);
			//unset($karan2[$main1]);
			//print_r($_SESSION['checkmeonce2']);
			}
		
		}
}	
//session_destroy();
//wrong area
//print_r($_SESSION['logout']);
if ((isset($_POST['imp2']))&&(!in_array($_POST['imp2'], $care1f1))){
	//header('Location: http://jmp2x.com/pro12/index.php');
	echo("<pre id='notice' style='position:absolute;font-weight:bold; font-size:25px; color:red; left:74.1%; text-align:center; top:40%;'>NO SUCH USERID EXISTS!!<br>😡<br>THIS EVENT WILL BE REPORTED</pre>");
	}

if ($_POST['imp4'] != ''){
	//echo('you are in');
$key = array_search($_POST['imp4'], $_SESSION['cart4']);
//print_r($key);
//echo($_SESSION['together4'][$key]);
//echo($_SESSION['together5'][$key]);
}
//print_r($_SESSION['logout']);
?>
<?php
$useit = $_SESSION['logout'];
//print_r($useit);
$karan1 = array();
$karan2 = array();
$karan3 = array();
$karan1 = $_SESSION['together4'];
$karan2 = $_SESSION['together5'];
$karan3 = $_SESSION['cart5'];
//unset($karan1[$_SESSION['logout']]);
//unset($karan2[$_SESSION['logout']]);
//print_r($karan1);
//print_r($karan2);
//print_r($karan3);


?>
<!-- //DeffieHellman -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
%body{
	background: #00c3ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffff1c, #00c3ff);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffff1c, #00c3ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
input[type=text]{
	outline:#F00;
	color:#F00;
}
input[type=text],select{
	outline:#F00;
	font-size: 12px;
	line-height: 20px;
	font-family: Consolas,monospace;
	letter-spacing:0.2px;
	width:50%;
	text-align:center;
}
input[type=text],hover{
	outline:#F00;
}
.submit { background-color:yellow}
.smallcaps{
 font-weight:bold;
 background:#0F3;
 color:#F00;	
	}
.smallcaps2{
 font-weight:bold;
 background:#F00;
 color:#FFF;	
	}
.reset{
 background:#F00;
 color:white;	
	}
#sub:hover{
	border-bottom:solid 5px #F00;
	}
#sub178:hover{
	border-bottom:solid 5px #F00;
	}
#sub2:hover{
	border-bottom:solid 5px #F00;
	}
#Decrypt:hover{
	border-bottom:solid 5px #F00;
	}
#copy:hover{
	border-bottom:solid 5px #F00;
	}
#reset:hover{
	border-bottom:solid 5px #00F;
	}
#secret:hover{
	border-color:#3F0;
	}
#message:hover{
	border-color:#3F0;
	}
</style>
<script type="text/javascript" src="final.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="overflow-x:hidden;">

<!--           CREATION OF MATRIX               -->

<form id="main" name="main" method="post">
<pre style="position:relative; margin-top:-1px;">
<u style="border-bottom:solid 2px #00FF00;">Enter the secret key</u> : <input type="text" id="secret" name="secret" spellcheck="false" style="background:#333; font-weight:bold;" placeholder="Enter Here .." autocomplete="off" />
<input class="submit" type="submit" id="sub" name="sub"/>
</pre>
</form>
<input class="submit117" type="submit" id="sub178" name="sub178" value="Highlight" style="position:absolute; top:33px; left:80px; background:#00C; color:#FFF;"/>
<img src="re.svg" width="20" height="20" id="re" style="position:absolute; left:950px; top:10px;" title="refresh" />
<p id="write" style="position:absolute; font-family: Consolas,monospace; top:7%; border:solid 1px #F00; font-size:12px; width:480px; height:48px; overflow:scroll; overflow-y:hidden;">
Secret Key entered by user : 
</p>
<p id="write2" style="position:absolute; font-family: Consolas,monospace; top:15%; border:solid 1px #F00; font-size:12px; width:480px; height:48px; overflow:scroll; overflow-y:hidden;">
ASCII value of each character : 
</p>
<p id="unique" style="position:absolute; font-family: Consolas,monospace; top:23%; border:solid 1px #F00; font-size:12px; width:480px; height:48px; overflow:scroll; overflow-y:hidden;">
Your unique set is : 
</p>
<p id="fill" style="position:absolute; font-family: Consolas,monospace; top:31%; border:solid 1px #F00; font-size:12px; width:480px; height:48px; overflow:scroll;">
Your sorted array is : 
</p>
<p id="write3" style="position:absolute; font-family: Consolas,monospace; top:39%; border:solid 1px #F00; font-size:12px; width:480px; height:48px; overflow:scroll; overflow-y:hidden;">
Your 1st digit array is : ( Column ) 
</p>
<p id="write4" style="position:absolute; font-family: Consolas,monospace; top:47%; border:solid 1px #F00; font-size:12px; width:480px; height:48px; overflow:scroll; overflow-y:hidden;">
Your 2nd digit array is : ( Rows )
</p>
<p id="write5" style="position:absolute; font-family: Consolas,monospace; top:55%; border:solid 1px #F00; font-size:12px; width:480px; height:48px; overflow:scroll; overflow-y:hidden;">
Your 3rd digit array is : ( Matrix )
</p>
<p id="subs" style="position:absolute; font-family: Consolas,monospace; top:63%; border:solid 1px #F00; font-size:12px; width:480px; height:48px; overflow:scroll; overflow-y:hidden;">
Remaining ASCII chracters are : 
</p>
<div style="position:absolute; border:solid 2px #000000; left:500px;height:auto;top:40px; width:600px; padding-left:10px; cursor:default; background-size:100px 50px;">
<pre id="matrix" style="position:absolute;text-align:justify;">
</pre>
<pre id="matrix1" style="position:relative;text-align:justify;">
<u style="border-bottom:solid 2px #00FF00; font-weight:bold;">Your Matrix</u> :
</pre>
</div>
																<!--                                    -->                                                               
                                                                
<!--                   ENCRYPTION                        --> 
<div id="rook" hidden="hidden">                                                            
<form method="post" name="main2" id="main2">
<input type="text" id="message" name="message" placeholder="Enter Plain Text / Enter Message" style="width:390px; position:absolute; left:1120px; top:6px; background:#333; font-weight:bold;" autocomplete="off"/>
<input type="submit" id="sub2" name="sub2" class="submit" value="Encrypt" style="position:absolute; right:20px; top:40px;" />
<input type="submit" id="reset" name="reset" class="reset" style="position:absolute; right:95px; top:40px;" value="Reset" />
<input type="submit" id="Decrypt" name="Decrypt" class="Decrypt" style="position:absolute; right:348px; top:40px; background:#0F0;" value="Decrypt" />
</form>
<input type="text" id="hid" name="hid" hidden="hidden" style="background:#333; font-weight:bold;" placeholder="Enter Here .."  />
<input type="text" id="sav1" name="sav1" hidden="hidden" style="background:#333; font-weight:bold;" placeholder="Enter Here .."/>
<input type="submit" id="copy" name="copy" class="copy" style="position:absolute; right:260px; top:40px; background:pink;" value="Copy Key" />
<input type="submit" id="two" name="two" style="position:absolute;right:346px;top:200px; background:#00F; color:#FFF;" value="Highlight"/>
<p id="write6" style="position:absolute; font-family: Consolas,monospace; top:8.5%; border:solid 1px #F00; font-size:12px; right:10px;width:400px; height:48px; overflow:scroll; overflow-y:hidden;"> Your Secret Message : 
</p>
<p id="write7" style="position:absolute; font-family: Consolas,monospace; top:17%; border:solid 1px #F00; font-size:12px; right:10px;width:400px; height:48px; overflow:scroll; overflow-y:hidden;"> After Grouping : 
</p>
</div>
<div id="naba" style="position:absolute; right:440px; top:60px;" hidden="hidden">
<div style="position:relative; width:160px; height:20px; border:solid 2px #000; border-bottom:solid 2px #F00; background:#00F;"><pre style="margin-top:0px; text-align:center; color:#FFF;">Your Entered Text</pre></div>
<div style="position:relative; width:160px; height:auto; border:solid 2px #000; border-top:solid 2px #F00;background:#000;-webkit-box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);
-moz-box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);
box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);"><p id="para1" style="position:relative; width:160px; height:auto; text-align:justify; word-wrap: break-word;font-family: Consolas,monospace; font-size:14px; color:#FFF; text-align:center; letter-spacing:2px;"></p></div>
<p style="position:relative;width:160px; height:auto; margin-top:10px; text-align:center; color:#F0F; font-size:24px;">▼</p>
<div style="position:relative; width:160px; height:20px; border:solid 2px #000; border-bottom:solid 2px #F00; background:#00F; margin-top:-15px; "><pre style="margin-top:0px; text-align:center; color:#FFF;">Encrypted Key</pre></div>
<div style="position:relative; width:160px; height:auto; border:solid 2px #000; border-top:solid 2px #F00;background:#000;-webkit-box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);
-moz-box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);
box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);"><p id="para2" style="position:relative; width:160px; height:auto; text-align:justify; word-wrap: break-word;font-family: Consolas,monospace; font-size:14px; color:#FFF;  text-align:center;letter-spacing:2px;"></p></div>
</div>

<div id="naba1" style="position:absolute; right:440px; top:60px;" hidden="hidden">
<div style="position:relative; width:160px; height:20px; border:solid 2px #000; border-bottom:solid 2px #F00; background:#00F;"><pre style="margin-top:0px; text-align:center; color:#FFF;">Encryted Key</pre></div>
<div style="position:relative; width:160px; height:auto; border:solid 2px #000; border-top:solid 2px #F00; background:#000;-webkit-box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);
-moz-box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);
box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);"><p id="para3" style="position:relative; width:160px; height:auto; text-align:justify; word-wrap: break-word;font-family: Consolas,monospace; font-size:14px; color:#FFF;text-align:center;letter-spacing:2px;"></p></div>
<p style="position:relative;width:160px; height:auto; margin-top:10px; text-align:center; color:#F0F; font-size:24px;">▼</p>
<div style="position:relative; width:160px; height:20px; border:solid 2px #000; border-bottom:solid 2px #F00; background:#00F; margin-top:-15px; "><pre style="margin-top:0px; text-align:center; color:#FFF;">Decrypted Key</pre></div>
<div style="position:relative; width:160px; height:auto; border:solid 2px #000; border-top:solid 2px #F00; background:#000;-webkit-box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);
-moz-box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);
box-shadow: inset 0px -8px 9px 0px rgba(255,255,255,1);"><p id="para4" style="position:relative; width:160px; height:auto; text-align:justify; word-wrap: break-word;font-family: Consolas,monospace; font-size:14px; color:#FFF;text-align:center;letter-spacing:2px;"></p></div>
</div>
<marquee style="position:absolute; bottom:1px; background:#F00; color:#FFF; font-weight:bold; border-top:solid 3px #000; left:0px;-webkit-box-shadow: 0px -3px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px -3px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px -3px 5px 0px rgba(0,0,0,0.75);" behavior="alternate"><!--Best Viewed On 1920 X 1080--><font style="background:#06F;">INTELLECTUAL PROPERTY</font></marquee>
<div id="note" style="position:absolute; bottom:31px; width:297px; height:48px; background:#000; padding-left:5px">
<p><font style="background:#0F0; color:#F00;font-family: Consolas,monospace; font-size:14px; position:absolute; top:5px;">, , </font><font style="background:#FFF; color:#000;font-family: Consolas,monospace; font-size:14px; position:absolute; top:5px; left:35px;"> Hightlights Unique Character</font></p>
<p><font style="background:#F00; color:#FFF;font-family: Consolas,monospace; font-size:14px; position:absolute; top:25px;">, , </font><font style="background:#FFF; color:#000;font-family: Consolas,monospace; font-size:14px; position:absolute; top:25px; left:35px;"> Hightlights Encryted Key Character</font></p>
</div>


<!-- Form # -->
<div id="checker" style="position:absolute; border:solid 2px #F00; width:394px; height:auto; top:30.5%; left:73.2%; background:#00F;">
<p style="font-family: Consolas,monospace; font-size:17px; font-weight:bold; border:solid 2px #F00;  height:auto; text-align:center; line-height:25px; color:#FFF;">I am a	 &nbsp;<input type="radio"  name="radio" value="Sender" autocomplete="off" spellcheck="false" />Sender <input type="radio" name="radio" value="Receiver" autocomplete="off" spellcheck="false" />Receiver</p>
</div>

<!-- Sender -->
<div id="sender" style="position:absolute; border:solid 2px #000; width:394px; height:auto; top:40.5%; left:73.2%; padding-bottom:20px; background:#CCC;" hidden="hidden">
<form name="main3" id="main3" method="post">
<p style="font-family: Consolas,monospace; font-size:17px; font-weight:bold; border:solid 2px #000;  height:auto; text-align:center; line-height:25px;"><b style="color:#FFF;">	↡</b> Enter the <i style="font-size:18px; color:#00F;">UserId</i> of the receiver <b style="color:#FFF;">↡</b></p>
<input type="text" name="imp2" style="width:99%; margin-top:-15px;outline:#F00; background:#333; font-weight:bold; color:#FFF;" id="imp18" autocomplete="off" spellcheck="false" required="required" placeholder="Enter here ...."/>
<p style="font-family: Consolas,monospace; font-size:17px; font-weight:bold; border:solid 2px #000;  height:auto; text-align:center; line-height:25px;"><b style="color:#FFF;">↡</b> Enter the Secret Key to be sent <b style="color:#FFF;">↡</b></p>
<input type="text" name="imp1" autocomplete="off" spellcheck="false" style="width:99%; margin-top:-15px;outline:#F00; background:#333; font-weight:bold; color:#FFF;" id="imp17" required="required" placeholder="Enter here ...." />
<p style="font-family: Consolas,monospace; font-size:17px; font-weight:bold; border:solid 2px #000;  height:auto; text-align:center; line-height:25px;"><b style="color:#FFF;">↡</b> Enter the <i style="font-size:18px; color:#00F;">Encrypted Key</i> to be sent <b style="color:#FFF;">↡</b></p>
<input type="text" name="imp3" style="width:99%; margin-top:-15px;outline:#F00; background:#333;font-weight:bold; color:#FFF;" id="imp19" autocomplete="off" spellcheck="false" required="required" placeholder="Enter here ...." />
<p style="font-family: Consolas,monospace; font-size:17px; font-weight:bold; border:solid 2px #000;  height:auto; text-align:center; line-height:25px;"><b style="color:#FFF;">↡</b> For how long will the secret key be valid ?(in minutes) <b style="color:#FFF;">↡</b></p>
<input type="text" name="imp4" style="width:99%; margin-top:-15px;outline:#F00; background:#333;font-weight:bold; color:#FFF;" id="imp20" autocomplete="off" spellcheck="false" required="required" placeholder="Enter here ...." />
<input type="submit" value="Send" name="send1" style="position:relative; left:37%; margin-top:15px; width:100px; border:solid 2px #000;" />
<button formaction="logout1.php" style="width:57px; height:23px; border:solid 3px #000; right:40%;top:102%; position:absolute;">Reset</button>
</form>
</div>
<p id="test" style=" position:absolute;top:70%;"></p>

<!-- Receiver -->
<div id="receiver" style="position:absolute; border:solid 2px #000; width:394px; height:auto; top:40.5%; left:73.2%; padding-bottom:5px;background:#CCC;" hidden="hidden">
<p style="font-family: Consolas,monospace; font-size:17px; font-weight:bold; border:solid 2px #000;  height:auto; text-align:center; line-height:25px;"><b style="color:#FFF;">↡</b> Enter Your Private Key <b style="color:#FFF;">↡</b></p>
<form method="post" name="main4" id="main4">
<input type="text" name="imp4" style="width:99%; margin-top:-15px;outline:#F00; background:#333; font-weight:bold; color:#FFF;" id="imp21" autocomplete="off" spellcheck="false" required="required" placeholder="Enter here ...."/>
<input id="verify" type="submit" value="Verify" style="border:solid 3px #000;position:relative; left:43.5%; margin-top:6px;"/>
<button formaction="logout1.php" style="width:57px; height:23px; border:solid 3px #000; right:43%;top:102%; position:absolute;">Reset</button>
</form>
<p style="font-family: Consolas,monospace; font-size:17px; font-weight:bold; border:solid 2px #000;  height:auto; text-align:center; line-height:30px;">Your Secret Key is : <p id="key1" style="font-family: Consolas,monospace;width:394px;font-size:30px; color:blue; margin-top:-20px; text-align:center; margin-top:10px;"><br /></p></p>
<p style="font-family: Consolas,monospace; font-size:17px; font-weight:bold; border:solid 2px #000;  height:auto; text-align:center; line-height:30px;">Your Encrypted Message is : <p id="key2" style="font-family: Consolas,monospace;width:394px;font-size:30px; color:blue; margin-top:-20px; text-align:center; margin-top:10px;"><br /></p></p>
</div>
<script>
var newr1= <?php echo json_encode($karan1); ?>;
var newr2= <?php echo json_encode($karan2); ?>;
var newr3= <?php echo json_encode($karan3); ?>;

var karan1 = JSON.stringify(newr1);
var karan2 = JSON.stringify(newr2);
var karan3 = JSON.stringify(newr3);
//$('#test').text(karan1);
var json1 = JSON.parse(karan1);
var json2 = JSON.parse(karan2);
var json3 = JSON.parse(karan3);

$('#verify').click(function(event){
	event.preventDefault();
	var keys = [];
	for(var k in json3) keys.push(k);
	//alert(keys);
	//var userid = json3['EmOePkakDm'];
	//alert(userid);
	var thay = $('#imp21').val();
	//alert(thay);
	var n = keys.includes(thay);
	//alert(n);
	if(n == true){
    //alert('you are in');
	var userid = json3[thay];
	//alert(json2[userid]);
	//alert(json1[userid]);
	$('#key2').text(json2[userid]);
	$('#key1').text(json1[userid]);
//var karan3 = JSON.parse(karan1);
//JSON.stringify(newr2);
}
});
</script>
<!-- XXXXXX --->
<script>
$("input[name$='radio']").click(function() {
	var value199517 = $(this).val();
	var killbill1 = 'Sender';
	var killbill2 = 'Receiver';
	if(killbill1==value199517){
		$('#sender').fadeIn(1000);
		$('#receiver').fadeOut(1000);
		}
	if(killbill2==value199517){
		$('#receiver').fadeIn(1000);
		$('#sender').fadeOut(1000);
		$('#notice').fadeOut(1000);
		}
	
	});

</script>
<script>
$('#Decrypt').click(function(index) {
	if($("input[name='message']").val().length == ''){
		event.preventDefault();
		alert('Input Text First');
		return false;
		}
	event.preventDefault();
	$('#write6').empty();
	$('#write7').empty();
	var secr = 'Your Encrypted Key :';
	var secr1 = 'After Grouping :';
	document.getElementById('write6').innerHTML += secr;
	document.getElementById('write7').innerHTML += secr1;
	$('#naba').fadeOut(1000);
	$('#naba1').fadeIn(1000);
});
</script>


<script>
$('#reset').click(function(index) {
	event.preventDefault();
	$('#write6').empty();
	$('#write7').empty();
	$('#para1').empty();
	$('#para2').empty();
	$('#para3').empty();
	$('#para4').empty();
	$('#naba').fadeOut(1000);
	var secr = 'Your Plain Text :';
	var secr1 = 'After Grouping :';
	var secr2 = 'Your Secret Key :';
	document.getElementById('write6').innerHTML += secr;
	document.getElementById('write7').innerHTML += secr1;
});
</script>

<script>
$('#re').click(function() {
    location.reload();
});
</script>
<script type="text/javascript">
var awex1 = [];
var awex2 = [];
var awex3 = [];
var awex4 = [];
var awex5 = [];
var awex6 = [];
var awex7 = [];
var matrix = [];
var exmat = [];
var ascii = ['☺','☻','♥','♦','♣','♠','•','◘','○','◙','♂','♀','♪','♫','☼','►','◄','↕','‼','¶','§','▬','↨','↑','↓','→','←','∟','↔','▲','▼',' ','!','"','#','$','%','&',"'",'(',')','*','+',',','-','.','/','0','1','2','3','4','5','6','7','8','9',':',';','<','=','>','?','@','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',"[",'\\',"]",'^','_','`','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','{','|','}','~','⌂','Ç','ü','é','â','ä','à','å','ç','ê','ë','è','ï','î','ì','Ä','Å','É','æ','Æ','ô','ö','ò','û','ù','ÿ','Ö','Ü','¢','£','¥','₧','ƒ','á','í','ó','ú','ñ','Ñ','ª','º','¿','⌐','¬','½','¼','¡','«','»','░','▒','▓','│','┤','╡','╢','╖','╕','╣','║','╗','╝','╜','╛','┐','└','┴','┬','├','─','┼','╞','╟','╚','╔','╩','╦','╠','═','╬','╧','╨','╤','╥','╙','╘','╒','╓','╫','╪','┘','┌','█','▄','▌','▐','▀','α','ß','Γ','π','Σ','σ','µ','τ','Φ','Θ','Ω','δ','∞','φ','ε','∩','≡','±','≥','≤','⌠','⌡','÷','≈','°','∙','·','√','ⁿ'];
//alert(ascii.length);
    $(function () {
		$("#sub").click(function () {
			$("#rook").fadeIn(1000);
			var length17 = $("input[name='secret']").val().length;
			if(length17=='0'){
				$("#rook").hide();
				}
			var sec = $("input[name='secret']").val();
			var res = sec.split("");
			var unique = [];
				$.each(res, function(i, el){
    				if($.inArray(el, unique) === -1) unique.push(el);
				});
			if(Array.isArray(unique)){
				//alert(unique);
				};
			//alert(res);
			
			if(($('#secret').val()) != ''){
				event.preventDefault();
					$.ajax({
  type: 'POST',
  url: 'http://jmp2x.com/pro12/index.php',
  data: sec,
  success : function() {
                $("#write").append(sec);
				var newarr=[];
				var length = '3';
				for (var i = 0, j = unique.length; i < j; i++) {
					
					var charCode = unique[i].charCodeAt(0);
					
				    newarr[i] = charCode;
					//alert(charCode);
					
					
//alert(res);

}


//alert(newarr); //show array without zero
//$("#write2").append(newarr[0]);
Number.prototype.pad = function(size) {
  var s = String(this);
  while (s.length < (size || 2)) {s = "0" + s;}
  return s;
}

var nene1= []
for (var j=newarr.length; j--;) {
 	var jacky = (newarr[j]).pad(3);
	nene1[j] = jacky;   
}

var array3 = ascii.filter(function(obj) { return unique.indexOf(obj) == -1; });
document.getElementById('subs').append(array3);
window.unique=unique;
//alert(unique);

//*************************************
//for(i=0, j=unique.length; i<j; i++){
//var regex = new RegExp("("+unique[i]+")","g");
//$("#matrix:contains('"+unique[i]+"')").html(function(_, html) {
//   return html.replace(regex, '<span class="smallcaps">$1</span>');
   
//});
//alert(quazi[i]);
//}
//************************************


//alert(ascii.length);
//alert(array3.length);
//alert(unique.length);
////alert(length17);
//alert(nene1); // show array with zero

for (var me = 0, me1 = nene1.length; me < me1; me++) {
	var joc1 = +nene1[me][0] + +length17;
	awex1[me] = joc1;
	var joc2 = +nene1[me][1] + +length17;
	awex2[me] = joc2;
	var joc3 = +nene1[me][2] + +length17;
	awex3[me] = joc3;
	//var joc4 = joc1+joc2+joc3;
	//alert(joc3);
	//alert(awex1);
	}
	//alert(awex3);
	
	for (var me3 = 0, me4 = awex1.length; me3 < me4; me3++) {
		var joc4 = awex1[me3].toString();
		awex4[me3] = joc4.slice(-1);
		 if(awex4[me3]>=6){
			 awex4[me3] = awex4[me3] - 5;
			 //return true;
			 }
		}
	for (var me5 = 0, me6 = awex2.length; me5 < me6; me5++) {
		var joc5 = awex2[me5].toString();
		awex5[me5] = joc5.slice(-1);
		 if(awex5[me5]>=6){
			 awex5[me5] = awex5[me5] - 5;
			// return true;
			 }
		}
	for (var me7 = 0, me8 = awex3.length; me7 < me8; me7++) {
		var joc6 = awex3[me7].toString();
		awex6[me7] = joc6.slice(-1);
		 if(awex6[me7]>=7){
			 awex6[me7] = awex6[me7] - 6;
			// return true;
			 }
		}
	for ( var me9 = 0, me10 = awex6.length; me9 < me10; me9++){ 
		//var ja17 = ja17[mat, rw, col];
		var joc7 = (awex6[me9]+' '+awex5[me9]+' '+ awex4[me9]).toString();
		awex7[me9] = joc7;
		}
document.getElementById('fill').append(awex7);
document.getElementById('write3').append(awex4);
document.getElementById('write4').append(awex5);
document.getElementById('write5').append(awex6);
document.getElementById('unique').append(unique);
document.getElementById('write2').append(nene1);
//alert(awex4);
//alert(awex5);
//alert(awex6);
var blank = ' ';
for(var i=0; i<7; i++) {
	matrix[i] = [];
	
	for(var j=0; j<6; j++) {
    	matrix[i][j] = [];
		
    for(var k=0; k<6; k++) {
        matrix[i][j][k] = '';
		
    }
	
  }
  
}
//matrix[0][0][0]='16';
//matrix[0][5][5]='22';
//matrix[0][5][2]='2';
//matrix[1][0][0]='19';
//matrix[1][5][5]='23';
//matrix[2][0][0]='21';
//matrix[2][5][5]='22';
//matrix[3][0][0]='21';
//matrix[3][5][5]='22';
//matrix[4][0][0]='21';
//matrix[4][5][5]='22';
//matrix[5][0][0]='21';
//matrix[5][5][5]='22';
//matrix[6][0][0]='21';
//matrix[6][5][5]='22';
var auu=0;
for(me11 = 0; me11 < awex6.length; me11++){
	var mat1 = awex6[me11];
	var row1 = awex5[me11];
	var col1 = awex4[me11];
		if(matrix[mat1][row1][col1] ==''){
			matrix[mat1][row1][col1] = unique[me11];
		}
		else{
		  	exmat[auu]=unique[me11];
			auu++;
		}
	}


var array4=array3.concat(exmat);

//alert(exmat);
var z=0;
for(var i=0; i<7; i++) {
	for(var j=0; j<6; j++) {
    	for(var k=0; k<6; k++) {
       	 if(matrix[i][j][k] == ''){
			 matrix[i][j][k] = array4[z];
			 z++
		 }
		
    }
	
  }
  
}


//alert(array3);
	
//document.getElementById('matrix').append(matrix);

for(var i=0; i<7; i++) {
	var ty = 1;
	document.getElementById('matrix').innerHTML +='<position:absolute;font style="font-family:Consolas,monospace; font-size:12px;margin-top:30px; margin-left:155px; font-weight:bold; background:white; border:solid 1px #000;">Matrix number </font>'+'<font style="color:#F00; font-family: Consolas,monospace; font-size:12px;line-height:16.5px;">'+(+i+ty)+' ► ►'+'<br><br><br><br><br>'+'</font>';
//document.write('<pre>'+matrix[i] + '<br>'+'</pre>');
for(var j=0; j<6; j++) {
document.getElementById('matrix1').innerHTML += '<pre style="color:blue; font-weight:bold; position:relative; text-align:justify; margin-top:-15px; margin-left:300px;">'+matrix[i][j] + '<br>'+'</pre>';
}
}


//alert(matrix);
window.matrix = matrix;

            }
			
			
		
			
			
			
			
});

 
alert (loveyou);
				 }
		    if(($('#secret').val()) == ''){
				event.preventDefault();
				alert('Enter value first');
			}
		});
	});




</script>

<script>
var matrix;
$(function () {
		$("#sub2").click(function () {
			var length18 = $("input[name='message']").val().length;
			var sec18 = $("input[name='message']").val();
			
			localStorage.setItem("jaca17",sec18);
			$('#hid').val(sec18);
			var suck = document.getElementById('write6');
			//alert(sec18);
			//window.sec18 = sec18;
			if(($('#message').val()) != ''){
				event.preventDefault();
					$.ajax({
						type: 'get',
  						url: 'http://jmp2x.com/pro12/index.php',
						success : function() {
							$("#write6").append(sec18);
							alert(data);
							}
						
					});
				
				}
		});
});
$("#sub2").click(function () {
	//alert(matrix);
	if($("input[name='message']").val().length == ''){
		event.preventDefault();
		alert('Input Text First');
		return false;
		}
	$("#naba1").fadeOut(1000);
	$("#naba").fadeIn(1000);
	
	var sec19 = $("input[name='message']").val();
	var parr = (sec19.match(/.{1,1}/g));
	if(((parr.length)%2)!=0){
		parr.push("$");
		var dol = "$";
		var res = sec19.concat(dol);
	}
	else{
		res = sec19;
		}
		var sec20 = (res.match(/.{1,2}/g));
		//alert(parr.length);
	var sec21 = sec20.toString();
	$("#write7").append(sec21);
	$("#para1").append(sec19);
	//alert(parr);
	//alert(sec19);
	//alert(res);
	//alert(sec20);
	//alert(sec21);
	var mat3=[];
	var row3=[];
	var col3=[];
	var z;
	
		for(var i=0 ; i<7 ;i++)
		{
			for(var j=0 ; j<6 ;j++)
			{
				for(var k=0 ; k<6 ;k++)
				{
					for(z=0;z<parr.length;z++)
					{
						if(matrix[i][j][k]==parr[z])
						{
							mat3[z]=i;         // it store matrix no. of all the plaintext character
							row3[z]=j;			// it store the row no. of all the plaintext charcter
							col3[z]=k;			// it stores the column no. of all the plaintext character
						//alert(i);
						//z++;
						}
					//alert(i);
					}
				}
			}
		}
	
	//alert(mat3);		// mat3 is array of matrix no. of plaintext character
	//alert(row3);		//row3 is array of row no. of plaintext character
	//alert(col3);		//col3 is array of column no. of plaintext character
	
	var firstm=[];
	var firstr=[];
	var firstc=[];
	var l=(parr.length)/2 ;			<!--REMINDER : have to change parr array to make it even length-->
	var inx=0;
	for(var z=0;z<l;z++){				
	
	firstm[z] = (mat3[inx]+mat3[inx+1])%7;
	firstr[z] = (row3[inx]+row3[inx+1])%6;
	firstc[z] = (col3[inx]+col3[inx+1])%6;
	inx+=2;
	
	}
	
	//alert(firstm);
	//alert(firstr);
	//alert(firstc);
	
	
	

	
	
	
	
	
	//alert(firstm);
	//alert(firstr);
	//alert(firstc);
	var secondm = [];
	var secondr = [];
	var secondc = [];
	var inc=1;
	for(var z=0;z<l;z++){				
	
	secondm[z] = (firstm[z]+mat3[inc])%7;
	secondr[z] = (firstr[z]+row3[inc])%6;
	secondc[z] = (firstc[z]+col3[inc])%6;
	inc+=2;
	
	}
	
	//alert(secondm);
	//alert(secondr);
	//alert(secondc);
	
	var fchar = [];
	var schar = [];
	for(var loo = 0; loo < firstm.length; loo++){
	var mat11 = firstm[loo];
	var row11 = firstr[loo];
	var col11 = firstc[loo];
	var mat12 = secondm[loo];
	var row12 = secondr[loo];
	var col12 = secondc[loo];
	
			fchar[loo] = matrix[mat11][row11][col11];
			schar[loo] = matrix[mat12][row12][col12];
			
		
	}
	
	//alert(fchar.length);
	//alert(schar.length);
	
	
	
	var fs;
	var fs1='';
//alert(parr.length);
	for(var no=0;no<fchar.length;no++)
	{
	fs=fchar[no]+schar[no];
	fs1=fs1+fs;
	}
	//alert(fs1);
	var nudy = fs1.toString();
	//alert(nudy);
	
	$("#sav1").val(nudy);
	var sd1 = $("#sav1").val();
	$("#para2").text(sd1);
	//alert(sd1);
	var megh = sd1.split("");
	window.megh = megh;
	
	
	
	});//sub2 click end





















$(function () {
		$("#Decrypt").click(function () {
			event.preventDefault();
			var dec = $("input[name='message']").val();
	var parr1 = (dec.match(/.{1,1}/g));
	var res;
	if(((parr1.length)%2)!=0){
		parr1.push("$");
		var dol = "$";
		res = dec.concat(dol);
	}
	else{
		res = dec;
		}
	$('#para3').text(dec);
	//document.getElementById('write6').innerHTML += dec;
	$('#write6').append(dec);
	var dec1 = (res.match(/.{1,2}/g));
	var dec2 = dec1.toString();
	$("#write7").append(dec2);
	//alert(parr);
	//alert(sec19);
	//alert(parr);
	//alert(res);
	//alert(sec20);
	//alert(sec21);
	var dmat3=[];
	var drow3=[];
	var dcol3=[];
	var dz;
	
		for(var i=0 ; i<7 ;i++)
		{
			for(var j=0 ; j<6 ;j++)
			{
				for(var k=0 ; k<6 ;k++)
				{
					for(dz=0;dz<parr1.length;dz++)
					{
						if(matrix[i][j][k]==parr1[dz])
						{
							dmat3[dz]=i;         // it store matrix no. of all the encrypted character
							drow3[dz]=j;			// it store the row no. of all the encrypted charcter
							dcol3[dz]=k;			// it stores the column no. of all the encrypted character
						//alert(i);
						//z++;
						}
					//alert(i);
					}
				}
			}
		}
	
	//alert(mat3);		// mat3 is array of matrix no. of plaintext character
	//alert(row3);		//row3 is array of row no. of plaintext character
	//alert(col3);		//col3 is array of column no. of plaintext character
	
	var dfirstm=[];
	var dfirstr=[];
	var dfirstc=[];
	var dl=(parr1.length)/2;					
	var dinx=0;
	for(var z=0;z<dl;z++)
	{				
		dfirstm[z] = (dmat3[dinx+1]-dmat3[dinx])%7;
		dfirstr[z] = (drow3[dinx+1]-drow3[dinx])%6;
		dfirstc[z] = (dcol3[dinx+1]-dcol3[dinx])%6;
		if(dfirstm[z]<0){
        dfirstm[z] +=7;
        }
		if(dfirstr[z]<0){
        dfirstr[z] +=6;
        }
		if(dfirstc[z]<0){
        dfirstc[z] +=6;
        }
		dinx+=2;
	
	}
	
	//alert(firstm);
	//alert(firstr);
	//alert(firstc);
	var dsecondm = [];
	var dsecondr = [];
	var dsecondc = [];
	var dinc=0;
	for(var z=0;z<dl;z++)
	{				
		dsecondm[z] = (dmat3[dinc]-dfirstm[z])%7;
		dsecondr[z] = (drow3[dinc]-dfirstr[z])%6;
		dsecondc[z] = (dcol3[dinc]-dfirstc[z])%6;
		if(dsecondm[z]<0){
        dsecondm[z] +=7;
        }
		if(dsecondr[z]<0){
        dsecondr[z] +=6;
        }
		if(dsecondc[z]<0){
        dsecondc[z] +=6;
        }
		dinc+=2;
	
	}
	
	//alert(secondm);
	//alert(secondr);
	//alert(secondc);
	
	var dfchar = [];
	var dschar = [];
	for(var loo = 0; loo < dfirstm.length; loo++){
	var dmat11 = dfirstm[loo];
	var drow11 = dfirstr[loo];
	var dcol11 = dfirstc[loo];
	var dmat12 = dsecondm[loo];
	var drow12 = dsecondr[loo];
	var dcol12 = dsecondc[loo];
	
			dfchar[loo] = matrix[dmat11][drow11][dcol11];
			dschar[loo] = matrix[dmat12][drow12][dcol12];
			
		
	}
	//alert(parr.length);
	//alert(dfchar);
	//alert(dschar);
	
	
	
	
	
	var dfs;
	var dfs1='';
//alert(parr.length);
	for(var no=0;no<dfchar.length;no++)
	{
	dfs=dschar[no]+dfchar[no];
	dfs1=dfs1+dfs;
	}
	//var sec18= $(this).prev(this);
	var jaca = localStorage.getItem("jaca17");
	
	//alert(jaca); //without $
	//alert(dfs1);  //with $
	var neqw = dfs1[dfs1.length -1];
	//alert(neqw);
	var doll = '$';
	if(jaca==dfs1){
		var dfinal = dfs1;
		}
		if((jaca!=dfs1)&&(neqw==doll)){
			var dfinal = dfs1.slice(0,-1);
			}
	//if(jaca!=dfs1){
		//var dfinal = dfs1;
		//}
	else{
		var dfinal = dfs1;
	}
			
	
	$('#para4').append(dfinal);
	// JavaScript Document
	//alert(dfinal);
			
		});
});
</script>

<script>
$('#copy').click(function(index) {
	var eno = $("#para2").text();
	if (eno==''){
	alert('Not Applicable');
	}
	$('#message').val(eno);
	
	});(index)
</script>


<script>
var unique;
$('#sub178').click(function(index) {
for(i=0, j=unique.length; i<j; i++){
var regex = new RegExp("("+','+unique[i]+','+'|'+','+unique[i]+'|'+unique[i]+','+")","g");
//alert(regex);
$('#matrix1')[0].innerHTML = $('#matrix1')[0].innerHTML.replace(regex, '<span class="smallcaps">$1</span>');
//html.replace(regex, '<span class="smallcaps">$1</span>');
//alert(quazi[i]);
//$('.itemize > div > p:eq(0)')
}
   
});(index)
//************************************

//alert(unique);
</script>
<script>
var megh;
$('#two').click(function(index) {
for(i=0, j=megh.length; i<j; i++){
var regex = new RegExp("("+','+megh[i]+','+'|'+','+megh[i]+'|'+megh[i]+','+")","g");
//alert(regex);
$('#matrix1')[0].innerHTML = $('#matrix1')[0].innerHTML.replace(regex, '<span class="smallcaps2">$1</span>');
//html.replace(regex, '<span class="smallcaps">$1</span>');
//alert(quazi[i]);
//$('.itemize > div > p:eq(0)')
}
   
});(index)
//************************************
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
             window.location.href = 'http://jmp2x.com/pro12/index.php';
            wasPressed = true;
        }
 }
</script>
</body>
</html>
