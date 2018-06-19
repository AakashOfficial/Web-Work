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

<input type="submit" name="Submit" id="Button1" value="Find Fibonacci" />
</form>
</td>
</tr>
</table>
</body>
</body>
<?php
if($_POST['Submit']){
$number=$_POST['name'];
$num1=0;
$num2=0;
$num3=1;
$num4=0;
echo $num2.' '.$num3.' ';
while ($num4 < $number )  
{  
    $num4 = $num2 + $num3;  
    echo $num4.' ';  
    $num2 = $num3;  
    $num3 = $num4;    
}
}
?>