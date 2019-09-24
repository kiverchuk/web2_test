<?
if(!empty($_POST['denumire']) ) {
	$name = $_POST['denumire'];
	$result = $conn->query("INSERT INTO `categorie` (denumire) Values('".$name."')");
	?>
	Adaugare succes!
	<?
} else {
?>
<form action="" method="post">
	Nume categorie: <input type="text" name="denumire">
	<br>
	
	<input type="submit">
</form>

<?}?>
