<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
	<title> Home </title>
</head>
	<body>
		<style>
			body{
				background-color: #e9ebee;
				font-family: 'Raleway';
			}
			.msg{
				text-align: center;
				font-size: 36px;
				margin-top: 150px;
			}
			.text-bottom{
				text-align: center;
			}
		</style>
		<div class="msg">
			<h1>LightWeight</h1>
		</div>
 
		<p class="text-bottom">Memory Usage : <?php  echo $data['memory_usage']; ?> @ PHP Version : <?php echo phpversion(); ?></p>
 	
	</body>
</html>