<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if($conn->query("DELETE FROM produse WHERE id = {$_GET['id']}" )) {
        	echo 'Succes';
    } else {
        echo 'Eroare';
    }

}
?>
<table>
<?
	include("sql.php");
	$date = $conn->query("SELECT * FROM `produse` inner join categorie on produse.id_cat = categorie.id_cat");
	$rows = [];
	while ( $row = mysqli_fetch_assoc($date) ){
		?>
		<tr>
			<td style="border:1px solid black;"><?= $row['denumire'] ?></td>
			<td style="border:1px solid black;"><?= $row['pret'] ?></td>
			<td style="border:1px solid black;"><?= $row['denumire_cat'] ?></td>
			<td style="border:1px solid black;"><a href="index.php?page=edit_prod&id=<?=$row['id']?>">edit</a></td>
			<td style="border:1px solid black;"><a  onclick="return confirm('doriti sa stergeti?')" href="index.php?page=list&id=<?=$row['id']?>&action=delete">delete</a></td>

		</tr>
	<?}?>
</table>