<?php

// On appelle a ce fichier via le footer 
// On utilise une requet jquery dans le footer pour recuperer les sous categories en fonction de la categorie selectionnee
include 'BDD.php';
if ($_POST['id']) {
	$pdo = pdo();
	$id = $_POST['id'];
	$stmt = $pdo->prepare("SELECT * FROM table_souscat WHERE id_cat=?");
	$stmt->execute(array($id));
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?><option value="">Sélectionnez une sous-catégorie</option><?php
																	foreach ($result as $row) {
																	?>
		<option value="<?php echo $row['id_souscat']; ?>"><?php echo $row['nom_souscat']; ?></option>
<?php
																	}
																}
