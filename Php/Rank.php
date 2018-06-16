<body>
<head>
<title>Rank Teller</title>
</head>
<body>
<table border="4" align="center" border-collapse="collapse">
<tr>
<td>
<form action="" method="post" >
Enter Marks : <input type="text" name="inp" id="input1" />

<input type="submit" name="Submit" id="Button1" value="Find Rank" />

</form>
</td>
</tr>
</table>
</body>
</body>

<?php
$marks=$_POST['inp'];

if($marks>80)
	echo "<script>alert('Honours');</script>";
else if($marks>60)
	echo "<script>alert('First Division');</script>";
else if($marks>50)
	echo "<script>alert('Second Division');</script>";
else if($marks>40)
	echo "<script>alert('Third Division');</script>";
else
	echo "<script>alert('Fail');</script>";
?>
