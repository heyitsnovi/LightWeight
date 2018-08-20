<?php
use App\Url;
use App\Sessionizer;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Test</title>
</head>
<body>
 
<form action="<?php echo Url::base_url('submit-testform'); ?>" method="POST">

	<label>FirstName</label>
	<input type="text" name="firstname"/>
	 <?php echo(Sessionizer::form_errors('firstname'));?>
	<br> 
	<label>LastName</label>
	<input type="text" name="lastname"/>
 	<?php echo(Sessionizer::form_errors('lastname'));?>
 	<br>
 	<hr>
 

 	<?php for($i=0;$i<3;$i++):?>

	 	<label>Hobbies</label>
	 	<input type="text" name="hobbies[]">
	 	<?php echo(Sessionizer::form_errors('hobbies.'.$i));?>
	 	<br>
 	<?php endfor;?>
 	 
	<button type="submit">Submit</button>
	
</form>

</body>
</html>