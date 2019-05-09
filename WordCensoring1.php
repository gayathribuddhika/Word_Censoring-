<?php

if(isset($_POST["user_input"]) && !empty($_POST["user_input"])){
	echo $user_input = $_PoST["user_input"];
}
?>

<hr>

<form action = "WordCensoring1.php" mathod = "POST">
	<textarea = "user_input" rows = "6" cols = "30"></textarea><br><br>
	<input type ="submit" value = "submit">
</form>	