<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
			<form name="Table Properties" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<th id="sort"><a class="sort_name" href="index.php?value=<?php echo $value; ?>">Name</a></th>
				<th>Species</th>
				<th>Status</th>
				<th>Gender</th>
				<th>Client</th>
				<th></th>
				<th></th>
			</form>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['client']?></td>
				<td class="center" id="edit"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center" id="delete"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>

</form>

		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>