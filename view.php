<?php
	if($_SERVER['REQUEST_METHOD'] = "POST" and !empty($_POST['data']) and $_POST['data']!="undefined"){
	$text = $_POST['data'];
	file_put_contents('text.txt',$text);
	
}
if(file_exists('text.txt')){
	$script = file_get_contents('text.txt');
	echo $script;

}

?>
