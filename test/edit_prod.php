<?
if( !empty($_GET['id']) ) {
	$result = mysqli_query($conn, "SELECT * FROM produse WHERE id = {$_GET['id']}");
	$produs = mysqli_fetch_assoc($result);

	if(!empty($_POST['denumire'])) {
		$result = mysqli_query($conn, "SELECT * FROM produse");
		if(mysqli_query($conn, "UPDATE produse SET denumire = '{$_POST['denumire']}', pret = {$_POST['pret']}, id_cat = {$_POST['categorie']} WHERE id = {$_GET['id']}")) {
			echo 'Succes';
		} else {
			echo 'Error';
		}
	}else{
		
	

?>
	<form action="" method="post">
		Denumire <input type="text" name="denumire" value="<?=$produs['denumire']?>">
		<br>
		pret
		<input type="number" name="pret" step="0.01" value="<?=$produs['pret']?>">
		<br>
		<select multiple name="categorie">
			<?
				$date = $conn->query("SELECT * FROM categorie");
				while ( $row = mysqli_fetch_assoc(($date) ) ){
					?><option value="<?=$row['id_cat'] ?>" <?= $row['id_cat'] == $produs['id_cat']? 'selected':'' ?>><?=$row['denumire_cat'] ?></option>
					<?var_dump( $row['id_cat'] . $produs['id'])?>
			<? } ?>
		</select>
		<br>
		<input type="submit">
	</form>

<?
}}
?>
