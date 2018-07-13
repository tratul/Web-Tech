<html>
<body>
	<form name="LoginPage" method="post" action="LogUser.php">
		<p>
			Username : <input type="text" name="un" value=""><br/>
			Password : <input type="password" name="ps" value=""><br/>
			<input type="submit" name="Submit"><br/><br/>
		</p>

<?php
	session_start();
	//$_SESSION['count'];
	if(isset($_SESSION['count']))
	{
		
		if($_SESSION['count']=='1')
		{
			echo "Invalid username or password\n";
		}
		else if ($_SESSION['count']=='2')
		{
			echo "You have been logged out\n";
			session_destroy(); //destroy entire session
		}
	}
	
?>
	</form>
</body>
</html>