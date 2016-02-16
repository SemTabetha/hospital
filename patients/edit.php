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
			<input type="text" id="species" name="species" value="<?=$patient['species']?>" required>
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
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>