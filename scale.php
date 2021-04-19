<?php
echo"
<!DOCTYPE HTML>  
<html>
<head>
<style>
body {
   font-size: 25px;
}
input[type=submit] {
    width: 20em;  height: 2em;
}

input[type='number'],
textarea {
  font-size: 17px;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
</head>
<body>  
";

if (empty($oldweight)){
	$oldweight;
}


echo'
<h2>Convert Exam Marks out of 5</h2>
<form method="POST" action="calcScore.php">
  Exam score: <input type="number" step="0.01" name="oldScore">
  <br><br>
  What the exam was out of: <input type="number" name="oldWeight" value ='; echo $oldWeight; echo'>
  <br><br>
  <input type="submit" name="submit" value="Calculate">  
</form>

</body>
</html>
';
?>
