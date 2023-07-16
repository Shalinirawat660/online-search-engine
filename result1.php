<!DOCTYPE html>
<html>
<head>

<style>
	#searchfield
	{
		width: 500px;
		height: 35px;
		border-radius: 5px;
		background-color: white;
		background-color: white;
		border: 1px solid green;
	}
	#gobtn
	{
		width: 100px;
		height: 38px;
		font-size: 18px;
		border-radius: 5px;
		background-color: white;
		border: 1px solid green;
	}
	#gobtn:hover
	{
		color: white;
		background-color: green;
	}
	a
	{
		color: blue;
		font-size: 20px;
		text-decoration: none;
	}
</style>

</head>
<body>

<form action="" method="GET">
<table border="0" width="100%" bgcolor="#f2f2f2">
	<tr>
		<td width="10%">
			<a href = "maven.php"><img src="logo.png" width="110%"></a>
		</td>
		<td>
			<input type="text" name="" id="searchfield">
			<input type="submit" name="" value="Go!" id="gobtn">
		</td>
	</tr>
</table>

<table border="0" cellpadding="5" style="margin-left:100px;">

<tr>

<?php
include("connection.php");

if(isset($_GET['searchbtn']))
{
	$search = $_GET['search'];
	
	if($search == "")
	{
		echo "<center><img src='OIP.jpeg' width='200px'></center>";
		exit();
	}
	$query = "select * from add_website where website_keywords like '%$search%' limit 0,5";
	$data = mysqli_query($conn,$query);
	
	if(mysqli_num_rows($data)<1)
	{
		echo "<center>No result found</center>";
		exit();
	}
	echo "<a href='#' style='margin-left:105px;'>More Images for $search</a>";
	
	while($row = mysqli_fetch_array($data))
	{
		echo 	"
					
							<td>
								<img src='$row[4]' width='200px'>
							</td>
						
				";
	}
}
?>
</tr>
</table>
<table border="0" width="">
<?php 
$query1 = "select * from add_website where website_keywords like '%$search%'";
$data1 = mysqli_query($conn,$query);
while($row1 = mysqli_fetch_array($data1))
{
	echo "
	<tr>
		<td>

	<font size='4' color='#0000cc'> <b><u><a href='$row1[1]'>$row1[0]</a></u></b> </font><br>";
	echo "<font size='3' color='#006400'> $row1[1] </font><br>";
	echo "<font size='3' color='#666666'> $row1[3] </font><br><br>

	</td>
	</tr>
	";
}
?>
</table>
</body>
</html>
