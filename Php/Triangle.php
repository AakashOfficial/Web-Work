<body>
<head>
<title>Greater Number</title>
</head>
<body>
<table border="4" alirn="center" border-collapse="collapse">
<tr>
<td>
<form action="" method="post" >
Enter First Side : <input type="text" name="i1" id="input1" />
<br/><br/>
Enter Second Side : <input type="text" name="i2" id="input1" />
<br/><br/>
Enter Third Side : <input type="text" name="i3" id="input1" />
<br/><br/>
<input type="submit" name="Submit" id="Button1" value="Find Triangle" />
</form>
</td>
</tr>
</table>
</body>
</body>
<?php
$number1=$_POST['i1'];
$number2=$_POST['i2'];
$number3=$_POST['i3'];

if($number1 == $number2 || $number1 == $number3 || $number2 == $number3)
	echo "<script>alert('Triangle Is Scalene');</script>";

if($number2 != $number1 && $number2 != $number3)
	echo "<script>alert('Trianle Is Isoscalene');</script>";

if($number3 == $number1 && $number3 == $number2)
	echo "<script>alert('Trianle Is Equilateral');</script>";
?>