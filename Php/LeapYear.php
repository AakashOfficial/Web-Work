<body>
<head>
<title>Greater Number</title>
</head>
<body>
<table border="4" alirn="center" border-collapse="collapse">
<tr>
<td>
<form action="" method="post" >
Enter Any Year : <input type="text" name="i" id="input1" />

<br/><br/>
<input type="submit" name="Submit" id="Button1" value="Find Number" />

</form>
</td>
</tr>
</table>
</body>
</body>
<?php
$number=$_POST['i'];

if(($number % 4) == 0)
	echo "<script>alert('$number is Leap Year');</script>";
else
	echo "<script>alert('$number is Not Leap Year');</script>";


?>