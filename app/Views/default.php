<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
	<title> Home - LightWeight</title>
</head>
	<body>
	<style>
			body{
				background-color: #17202f;
				font-family: 'Roboto';
			}
			.msg{
				text-align: center;
				font-size: 36px;
				margin-top: 150px;
				color:#05e984;
			}
			.text-bottom{
				text-align: center;
				color:white;
			}
			.psubtitle{
				text-align: center;
				font-size: 16px;
				color:#05e984;
			}
			.small{
				color:white;		
				text-align: center;
			}
			.link{
				
				color: #62b28f;
			}
			.link:hover{
				color:#05e984;
			}
		</style>
	
		<div class="msg">
			<h1>LightWeight</h1>
		</div>
		<p class="psubtitle">	<?php echo get_flash('message'); ?></p>
		<p class="small">A lightweight MVC Framework</p>
		<p class="psubtitle">
			<a target="_blank" class="link" href="https://github.com/heyitsnovi/LightWeight">View Project On Github</a>
		</p>
 
		<p class="text-bottom">Memory Usage : <?php  echo $data['memory_usage']; ?> @ PHP Version : <?php echo phpversion(); ?></p>
 	
	</body>
</html>