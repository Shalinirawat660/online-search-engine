<!DOCTYPE html>
<html>
<head>

<style>
	#search {
		height: 35px;
		width: 700px;
		border-radius: 5px;
		border: 1px solid green;
	}
	
	#submit {
		height: 40px;
		width: 130px;
		border-radius: 5px;
		border: 1px solid blue;
		background-color: white;
		color: blue;
		font-size: 18px;
		transition: background-color 0.3s ease, color 0.3s ease;
	}
	
	#submit:hover {
		background-color: red;
		color: white;
	}
	
	#submit:active {
		background-color: #ff0000;
		color: #ffffff;
		transform: translateY(2px);
	}
	#darkModeToggle:hover {
		background-color: black;
		color: white;
	}
	#darkModeToggle {
		position: absolute;
		top: 10px;
		right: 10px;
		height: 30px;
		width: 60px;
		border-radius: 5px;
		border: none;
		background-color: #ffffff;
		color: #000000;
		font-size: 14px;
	}
	#lightModeToggle:hover {
		background-color: blue;
		color: white;
	}
	#lightModeToggle {
		position: absolute;
		top: 10px;
		right: 80px;
		height: 30px;
		width: 60px;
		border-radius: 5px;
		border: none;
		background-color: #ffffff;
		color: #000000;
		font-size: 14px;
	}
	
	body {
		background-image: url('https://p2.piqsels.com/preview/1020/859/597/geometric-minimal-pastel-background.jpg');
		background-repeat: no-repeat;
		background-size: cover;
	}
	

</style>

</head>
<body>
  <button id="darkModeToggle">Dark</button>
  <button id="lightModeToggle">Light</button>
  
  <form action="result1.php" method="GET">
    <br><br><br>
    <center><img src="logo.png" width="40%"></center>
    <br>

    <center><input type="text" name="search" id="search"></center><br><br>
    <center><input type="submit" name="searchbtn" value="Search" id="submit"></center>
  </form>
  
  <script>
    var darkModeToggle = document.getElementById('darkModeToggle');
    var lightModeToggle = document.getElementById('lightModeToggle');
    var body = document.body;

    darkModeToggle.addEventListener('click', function() {
      body.style.backgroundImage = "url('https://t3.ftcdn.net/jpg/01/70/71/22/240_F_170712230_02O2yi9TQ5YfTp4VEQiIyVFn4oitKr8B.jpg')";
    });
    
    lightModeToggle.addEventListener('click', function() {
      body.style.backgroundImage = "url('https://p2.piqsels.com/preview/1020/859/597/geometric-minimal-pastel-background.jpg')";
    });
  </script>
</body>
</html>
