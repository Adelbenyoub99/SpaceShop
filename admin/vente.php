<?php require_once('header.php'); ?>

<?php

$error_message = "";
$success_message = '';

if($error_message != '') {
    echo "<script>alert('".$error_message."')</script>";
}
if($success_message != '') {
    echo "<script>alert('".$success_message."')</script>";
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Liste des ventes</h1>
	</div>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-hover table-striped">
			<thead>
			    <tr>
			        <th>#</th>
                    <th>Client</th>
			        <th>Produit</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Action</th>
			    </tr>
			</thead>
            <tbody>

            	<?php
            	$i=0;
            	$statement = $pdo->prepare("SELECT * FROM tbl_vente WHERE idboutique = 0 ORDER by id DESC");
            	$statement->execute();
            	$result = $statement->fetchAll(PDO::FETCH_ASSOC);

            	foreach ($result as $row) {
            		$i++;
            		?>
					<tr>
	                    <td><?php echo $i; ?></td>
	                    <td>

                            <?php
                           $statement1 = $pdo->prepare("SELECT * FROM table_client WHERE id_c=?");
                           $statement1->execute(array($row['id_client']));
                           $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                           foreach ($result1 as $row1) {
                                echo '<b>nom:</b> '.$row1['nom_c'].' <br>';
                                echo '<b>prenom:</b> '.$row1['prenom_c'].' <br>';
                                echo '<b>email:</b> '.$row1['email_c'].' <br>';
                           }
                           ?>
                        </td>
                        <td>

                           <?php
                           $statement1 = $pdo->prepare("SELECT * FROM table_produit WHERE p_id=?");
                           $statement1->execute(array($row['id_produit']));
                           $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                           foreach ($result1 as $row1) {
                                echo '<b>produit:</b> '.$row1['p_nom'].' <br>';
                                echo '<b>prix:</b> '.$row1['p_prix'].' DA <br>';
                                echo '<br><br>';
                           }
                           ?>

                        </td>
                        <td><?php echo $row['quantite']; ?></td>
                        <td><?php echo $row1['p_prix']*$row['quantite'].' DA'; ?></td>
                        <td><?php echo $row['date_vente']; ?></td>
	                    <td>
                            <a href="#" class="btn btn-danger btn-xs" data-href="../fonctions/supp_vente.php?idc=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete" style="width:100%;">Supprimer</a>
	                    </td>
	                </tr>
            		<?php
            	        }
            	    ?>
            </tbody>
          </table>
        </div>
      </div>
</section>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>
            <div class="modal-body">
               Vous êtes sûr de vouloir supprimer ?
            </div>
            <div class="modal-footer">

                <a class="btn btn-danger btn-ok">Oui</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>