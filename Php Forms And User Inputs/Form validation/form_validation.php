
		<html>
		<head>

			<title>User Inputs</title>


		</head>
		<body>

			<form name="myform" action="post.php" method="post">

			<em>NAME:</em><input type="text" name="username" required="required" pattern=[a_z A-z] {3,10} title="Please Enter Correct name and it Contain Letter ">
			<br><br>
			<em>PASSWORD:</em><input type="password" name="pwd" required>
			<br>
			<h4>Comments:</h4>
			 <textarea cols="30" rows="10" name="comments" required title="Without comments you can not move futher"></textarea>
			<input type="submit" value="Send">		



			
	


		</body>		
		</html>