<?


if(!empty($_POST['id']) and !empty($_POST['pret']) and !empty($_POST['categorie'])) {
	$result = mysqli_query($conn, "SELECT * FROM produse WHERE id = {$_GET['id']}");
	$prosud = mysqli_fetch_assoc($result);

?>
	<form action="" method="post">
		Denumire <input type="text" name="denumire" value>
		<br>
		pret
		<input type="number" name="pret" step="0.01">
		<br>
		<select multiple name="categorie[]">
			<?
				$date = $conn->query("SELECT * FROM categorie");
				while ( $row = mysqli_fetch_assoc(($date) ) ){;
					?><option value=" <?=$row['id'] ?>"><?=$row['denumire'] ?></option>
				
			<? } ?>
		</select>
		<br>
		<input type="submit">
	</form>

<?
} else {
?>


<?}?>
