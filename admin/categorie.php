<?php require_once('header.php'); ?>

<?php 
include_once "../fonctions/categorie.php";
$i=0;
$rs=affiche_categorie();
?>


<section class="content-header">
	<div class="content-header-left">
		<h1>Liste des catégories</h1>
	</div>
	<div class="content-header-right">
		<a href="ajouter_categorie.php" class="btn btn-primary btn-sm">Ajouter</a>
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
                     <th>Catégorie</th>
                     <th>Cacher</th>
                     <th>Plus</th>
                 </tr>
             </thead>

             <tbody>
               <?php
               foreach ($rs as $row) {
                $i++;
                ?>
                <tr>
                   <td><?php echo $i; ?></td>
                   <td><?php echo $row['cat_nom']; ?></td>
                   <td>
                    <?php 
                    if($row['aff_ach'] == 1) {
                        echo 'afficher';
                    } else {
                        echo 'cacher';
                    }
                    ?>
                </td>
                <td>
                   <a href="modifie_categorie.php?id=<?php echo $row['id_categorie']; ?>" class="btn btn-primary btn-xs">Modifier</a>
                   <a href="#" class="btn btn-danger btn-xs" data-href="../fonctions/supp_categorie.php?id=<?php echo $row['id_categorie']; ?>" data-toggle="modal" data-target="#confirm-delete">Supprimer</a>
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


<!-- modal -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Vous êtes sur de vouloir supprimer cette catégorie ?</p>
                <p style="color:red;">Attention toute les sous-catégories et les produits de cette catégorie vont être supprimer</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger btn-ok">Oui</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>