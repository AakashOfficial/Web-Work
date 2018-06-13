<body>
<head>
<title>Greater Number</title>
</head>
<body>
<table border="4" alirn="center" border-collapse="collapse">
<tr>
<td>
<form action="" method="post" >
Enter Any Character : <input type="text" name="i1" id="input1" />

<br/><br/>
<input type="submit" name="Submit" id="Button1" value="Find Character" />

</form>
</td>
</tr>
</table>
</body>
</body>
<?php
$number1=$_POST['i1'];

if($number1 == 'a' || $number1 == 'b' || $number1 == 'c' || $number1 == 'd' || $number1 == 'e' || $number1 == 'f' || $number1 == 'g' || $number1 == 'h' || $number1 == 'i' || $number1 == 'j' || $number1 == 'k' || $number1 == 'l' || $number1 == 'm' || $number1 == 'n' || $number1 == 'o' || $number1 == 'p' || $number1 == 'q' || $number1 == 'r' || $number1 == 's' || $number1 == 't' || $number1 == 'u' || $number1 == 'v' || $number1 == 'w' || $number1 == 'x' || $number1 == 'y' || $number1 == 'z')
	echo "<script>alert('$number1 Is  a Small Letter');</script>";

if($number1 == 'A' || $number1 == 'B' || $number1 == 'C' || $number1 == 'D' || $number1 == 'E' || $number1 == 'F' || $number1 == 'G' || $number1 == 'H' || $number1 == 'I' || $number1 == 'J' || $number1 == 'K' || $number1 == 'L' || $number1 == 'M' || $number1 == 'N' || $number1 == 'O' || $number1 == 'P' || $number1 == 'Q' || $number1 == 'R' || $number1 == 'S' || $number1 == 'T' || $number1 == 'U' || $number1 == 'V' || $number1 == 'W' || $number1 == 'X' || $number1 == 'Y' || $number1 == 'Z')
	echo "<script>alert('$number1 is a Capital Letter');</script>";

if($number1 == 0 || $number1 == 1 || $number1 == 2 || $number1 == 3 || $number1 == 4 || $number1 == 5 || $number1 == 6 || $number1 == 7 || $number1 == 8 || $number1 == 9)
	echo "<script>alert('$number1 is a Number');</script>";


?>