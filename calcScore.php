<?php
$newWeight = 5;

echo'
<html>
<style>
input[type=submit] {
    width: 20em;  height: 2em;
}

body {
	font-size: 25px;
}
</style>
<body>
';
$oldWeight = $_POST["oldWeight"];
include 'scale.php';
echo'
<form action="calcScore.php" id="redOne">
    <input type="submit" value="Reset" />
</form>';

if(!empty($_POST["oldScore"]) and !empty($_POST["oldWeight"])){
echo'
<br>
Your old score was: '; echo $_POST["oldScore"] . " / " . $_POST["oldWeight"]; 

$newScore = ($_POST["oldScore"] * $newWeight) / $_POST["oldWeight"];
$newScore = round($newScore, 2);
echo' <br>
Your new score is: '; echo $newScore ." / " . $newWeight;
}

echo'

</body>
</html>
';
?>
