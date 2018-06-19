<body>
<head>
<title>Enter Number</title>
</head>
<body>
<table border="4" alirn="center" border-collapse="collapse">
<tr>
<td>
<form action="" method="post" >
Enter Any Number : <input type="text" name="name" id="input1" />
<br/><br/>

<input type="submit" name="Submit" id="Button1" value="Find Factorial" />
</form>
</td>
</tr>
</table>
</body>
</body>
<?php
if($_POST['Submit']){
$number=$_POST['name'];

$fact=1;

while ($number > 0 ) {
	$fact = $fact*$number;
	$number--;
}

echo "Factorial is $fact";
}

?>