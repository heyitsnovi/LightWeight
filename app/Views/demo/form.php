<?php
	$options = array(
	''				=>'',	
	'small'         => 'Small Shirt',
	'med'           => 'Medium Shirt',
	'large'         => 'Large Shirt',
	'xlarge'        => 'Extra Large Shirt',
);
?>
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
				<?php
					echo form_dropdown('shirts', $options, anti_xss($_POST['shirts']));
					echo $errors!==NULL ? $errors->first('shirts') : '';
				?>
				<button type="submit"> Submit </button>
		</form>
	</body>
</html>