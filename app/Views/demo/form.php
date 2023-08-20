<!DOCTYPE html>
<html>
<head>
	<title>Test Form</title>
</head>
<body>
		<form method="POST" action="<?= base_url('testform') ?>">
				<label>Your Name:
					<input type="text" name="name"/>
					<?= $errors!==NULL ? $errors->first('name') : '' ?>
				</label>
				<br>
				 <label>Your Age:
					<input type="text" name="age"/>
					<?= $errors!==NULL ? $errors->first('age') : '' ?>
				</label>
				<br>
				<button type="submit"> Submit </button>
		</form>
</body>
</html>