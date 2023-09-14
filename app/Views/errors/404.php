<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
	<title>Oh No! - Error 404 </title>
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
			.credits{
				 
				color:white;
				text-align:center;
			}
			.msg-inner{
				color:white;
			}
			.img-emoji{
				width:100px;
				height:100px;
			}
		</style>
		<div class="msg">
			<img src="<?= base_url('assets/sad-emoji.svg') ?>" class="img-emoji">
			<p class="msg-inner">Hmmm looks like the URL you visited does not exits. Go back <a class="link" href="<?= base_url() ?>">Home</a> </p>
		</div>
		<div class="credits">Sad Icon by <a class="link" href='https://worldvectorlogo.com/logo/facebook-reaction-sad'>WorldVectorLogo</a></div>
	</body>
</html>