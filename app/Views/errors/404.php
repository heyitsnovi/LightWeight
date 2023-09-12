<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
	<title>Oh No! &ndash; Error 404 </title>
</head>
	<body>
		<style>
			body{
				background-color: #e9ebee;
				font-family: 'Roboto';
			}
			.msg{
				text-align: center;
				font-size: 36px;
				margin-top: 150px;
			}
			.credits{
				text-align: center;
				font-size: 10px;
			}
		</style>
		<div class="msg">
			<img src="<?= base_url('assets/sad-face.svg') ?>">
			<p>Hmmm looks like the URL you visited does not exits. Go back <a href="<?= base_url() ?>">Home</a> </p>
		</div>
		<div class="credits">Sad Icon by <a href='https://iconpacks.net/?utm_source=link-attribution&utm_content=2691'>Iconpacks</a></div>
	</body>
</html>