<?php
if($_POST['Submit'])
$number1=$_POST['inp'];

if($number1 == 'a' || $number1 == 'b' || $number1 == 'c' || $number1 == 'd' || $number1 == 'e' || $number1 == 'f' || $number1 == 'g' || $number1 == 'h' || $number1 == 'i' || $number1 == 'j' || $number1 == 'k' || $number1 == 'l' || $number1 == 'm' || $number1 == 'n' || $number1 == 'o' || $number1 == 'p' || $number1 == 'q' || $number1 == 'r' || $number1 == 's' || $number1 == 't' || $number1 == 'u' || $number1 == 'v' || $number1 == 'w' || $number1 == 'x' || $number1 == 'y' || $number1 == 'z')
{$number=strtoupper($number1);}
else
{$number=strtolower($number1);}

?>

<body>
<head>
<title>Greater Number</title>
</head>
<body>
<table border="4" alirn="center" border-collapse="collapse">
<tr>
<td>
<form action="" method="post" >
Enter Any Alphabet : <input type="text" name="inp" id="input1" />

<br/><br/>
Reverse : <input type="text" name="outp" id="input1" value="<?php echo $number; ?>" />
<br/><br/>

<input type="submit" name="Submit" id="Button1" value="Reverse" />

</form>
</td>
</tr>
</table>
</body>
</body>
