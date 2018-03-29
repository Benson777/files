<?php session_start();
	$n=$_POST["firstName"];
	$_SESSION['n']=$_POST["firstName"];
//	echo $n;
//	echo"<br>";
//	echo $_SESSION['n'];

	$l=$_POST["Email"];
	$_SESSION['l']=$_POST["lastName"];
//	echo $l;
//	echo"<br>";
//	echo $_SESSION['l'];

    $p=$_POST["Message"];
	$_SESSION['l']=$_POST["Message"];
//	echo $l;
//	echo"<br>";
//	echo $_SESSION['l'];


	$o=$_POST["gender"];
	$_SESSION['o']=$_POST["gender"];
//	echo $o;
//	echo"<br>";
//	echo $_SESSION['o'];

	$t="eortega@obtjobs.orgs";
	$s="New Lead";
	$m="first name:$n last name:$l gender:$o";
	$h='From:'.$t.'\r\n Reply-To:'.$t.'r\n X-Mailer:PHP/'.phpversion();
	
	mail($t,$s,$m,$h,p$);
	
	$f=fopen('profile.txt',"w" );
	fwrite($f,$m);
	fclose($f);

	$d=array("."=>array("name"=>$n,"lastname"=>$l,"gender"=>$o));
//	print_r($d);

	$d=json_encode($d);
//	echo"<br>";
//	print_r($d);
	file_put_contents('data.json',$d);
	
//	$j=file_get_contents('data.json');
//	$j=json_decode($j,true);
//	echo"<br>";
//	print_r($j);
//	echo"<br>";
// foreach($j as $k=>$v){
//	echo"<p>".$k.":".$v["name","last name","email"]."</p>";
//		}
header("location:profile.php");
?>
