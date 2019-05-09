<?php
$find = array("gaythri","buddhika","gamage");
$replace = array("g******i","b******a","g****e");

if(isset($_POST["user_input"]) && !empty($_POST["user_input"])){
	$user_input = $_PoST["user_input"];
	$user_input_new = str_replace($find,$replace,$user_input);
	
	echo $user_input_new;
}
?>

<hr>

<form action = "WordCensoring1.php" mathod = "POST">
	<textarea = "user_input" rows = "6" cols = "30"></textarea><br><br>
	<input type ="submit" value = "submit">
</form>	