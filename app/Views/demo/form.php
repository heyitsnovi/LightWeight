<!DOCTYPE html>
<html>
<head>
	<title><?= $page_title ?></title>
</head>
<body>
		<form method="POST" action="<?= base_url('testform') ?>">
				<label>Your Name:
					<input type="text" name="name" value="<?= input_value('name') ?>" />
					<?= $errors!==NULL ? $errors->first('name') : '' ?>
				</label>
				<br>
				 <label>Your Age:
					<input type="text" name="age"  value="<?= input_value('age') ?>"/>
					<?= $errors!==NULL ? $errors->first('age') : '' ?>
				</label>
				<br>
				<button type="submit"> Submit </button>
		</form>
	</body>
</html>