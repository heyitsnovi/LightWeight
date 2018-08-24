<form method="POST" action="<?php echo base_url('submitformtest'); ?>">
	
	
	<label>
		Firstname
		<input type="text" name="firstname" value="" placeholder="First Name" />
	</label>
	<p style="color:red;"><?php echo field_error('firstname'); ?></p>


	<label>
		Lastname
		<input type="text" name="lastname" value=""  placeholder="Last Name" />
	</label>
	<p style="color:red;"><?php echo field_error('lastname'); ?></p>

	<label>Gender
	<select name="gender">
		<option value="">-Select-</option>
		<option value="male">Male</option>
		<option value="female">Female</option>
	</select>
	</label>
	<p style="color:red;"><?php echo field_error('gender'); ?></p>

	<br>
	<h3>Array Field Check</h3>

	<?php for($i=0; $i<=5; $i++): ?>

	<label>Hobby # <?php echo $i + 1; ?>
		<input type="text" name="hobby[]" placeholder="Enter hobby">
		<p style="color:red;"><?php echo field_error('hobby.'.$i); ?></p>
	</label>

	<br>

	<?php endfor; ?>

	<button type="submit">
		Submit
	</button>
	
</form>