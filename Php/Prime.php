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

<input type="submit" name="Submit" id="Button1" value="Find Prime" />
</form>
</td>
</tr>
</table>
</body>
</body>
<?php
if($_POST['Submit']){
$number=$_POST['name'];
$num = $number - 1;

while ($num < $number )  
{  
    $num--;	
    $rem =$number % $num; 
    while($rem == 0){
		echo "$number is Not a Prime Number";
		$rem++;
	}
}
echo "$number is A Prime Number" ;
}
?>