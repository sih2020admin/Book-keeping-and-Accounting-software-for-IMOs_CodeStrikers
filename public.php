
<!DOCTYPE html>
<html>
<head>
<title>Monthly</title>
</head>
<body>
	<table>
	<tr>
		<th><h1 style="margin-left:90px">CODE STRIKERS...</style></h1></th>
		<th><button onclick="window.location.href='logout.php';" style="width: 100px; height: 45px;border-radius: 10px;margin-left: 800px;background-color: red;border-color: red"><center><p>Logout</center></th>
	</tr>
</table>
<hr>
<center>
<h1>Publi Details</h1>
</form>
</center>
</body>
</html>
<center>
<?php 
$con=mysqli_connect('localhost','root','','lazyboy');
$result=mysqli_query($con,"SELECT DISTINCT `name`,`month`,`savings`,`charge`,(savings+charge)AS income,`loan`,`intrest`,(loan+intrest)AS outcome FROM transaction"); 
echo"<table border='1'>
<tr>
<th>Month</th>
<th>Name</th>
<th>Savings</th>
<th>Charge</th>
<th>Income</th>
<th>Principal</th>
<th>Intrest</th>
<th>Outcome</th>
</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row['month']."</td>";
	echo"<td>".$row['name']."</td>";
	echo"<td>".$row['savings']."</td>";
	echo"<td>".$row['charge']."</td>";
	echo"<td>".$row['income']."</td>";
	echo"<td>".$row['loan']."</td>";
	echo"<td>".$row['intrest']."</td>";
	echo"<td>".$row['outcome']."</td>";
	echo"<tr>";
}
echo"<table>";
mysqli_close($con);
 ?>
</center>