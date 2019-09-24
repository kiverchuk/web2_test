<?
if(!empty($_POST['denumire']) and !empty($_POST['pret'])and !empty($_POST['categorie']) and !empty($_POST['categorie'])) {
	$name = $_POST['denumire'];
	$pret = $_POST['pret'];
	$categorie = $_POST['categorie'];
	include("sql.php");
	$conn->query("INSERT INTO `produse` (denumire,pret,id_cat) Values('".$name."','".$pret."',".$categorie.")");
	?>
	Adaugare succes!
	<?
} else {
?>
<form action="" method="post">
	Denumire <input type="text" name="denumire">
	<br>
	pret
	<input type="number" name="pret" step="0.01">
	<br>
	<select name="categorie">
		<?
		include("sql.php");
			$date = $conn->query("SELECT * FROM categorie");
			while ( $row = mysqli_fetch_assoc(($date) ) ){;
				?><option value=" <?=$row['id'] ?>"><?=$row['denumire'] ?></option>
			
		<? } ?>
	</select>
	<br>
	<input type="submit">
</form>

<?}?>
