<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>" required>
		</div>
		<div>
			<label for="name">Species:</label>
			<select name="speciess" required>
				<option value="">Select your species</option>
<?php 
foreach ( $species as $specie ):?>
<option><?= $specie['name']?></option>
<?php endforeach;?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status" required><?=$patient['status']?></textarea>
		</div>
		<div>
			<label for="name">Gender:</label>
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female  
		</div> 
		<div>
			<label for="name">Client:</label>

			<select name="clientt" >
					<option value="">Select your client</option>
<?php 
foreach ( $clients as $client ):?>
<option><?= $client['name']?></option>
<?php endforeach;?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>