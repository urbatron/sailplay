<?php header("Content-Type; text/html; charset=utf-8");
function get($data){
	try{
		$data = $_POST['data'];
		$DBH = new PDO("mysql:host=localhost;dbname=php;","root","");
		$STH = $DBH->prepare("INSERT INTO angular (value) VALUES ('$data')");
		$STH->execute();
	}catch(Exception $e){
			echo iconv("windows-1251","utf-8",$e->getMessage());
	}
}

if($_SERVER['REQUEST_METHOD'] = "POST" and !empty($_POST['data']) and $_POST['data']!="undefined"){
	get($_POST['data']);
	echo "good";
}else{
	echo "bad";
}
?>