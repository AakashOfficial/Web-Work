<body>
<head>
<title>Greater Number</title>
</head>
<body>
<table border="4" alirn="center" border-collapse="collapse">
<tr>
<td>
<form action="" method="post" >
Enter First Number : <input type="text" name="i1" id="input1" />
<br/><br/>
Enter Second Number : <input type="text" name="i2" id="input1" />
<br/><br/>
Enter Third Number : <input type="text" name="i3" id="input1" />
<br/><br/>
<input type="submit" name="Submit" id="Button1" value="Find Greatest" />
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

if($number1 > $number2 ){
	if($number2 > $number3){
		echo "<script>alert('Number $number1 is Greater');</script>";
	}else{
		if($number1 > $number3)
			echo "<script>alert('Number $number1 is Greater');</script>";
	}
}else{
	if($number2 > $number3){
		echo "<script>alert('Number $number2 is Greater');</script>";
	}else{
		echo "<script>alert('Number $number3 is Greater');</script>";
		
	}
}	
?>
