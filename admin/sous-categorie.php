<?php require_once('header.php'); ?>


<?php
/*faire appele pour la fenction qui affiche tout les sous categorie*/
include_once "../fonctions/categorie.php";
$i = 0;
$result = affiche_souscat();
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Sous-catégorie</h1>
    </div>
    <div class="content-header-right">
        <a href="ajouter_sous-categorie.php" class="btn btn-primary btn-sm">Ajouter</a>
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
                                <th>Nom</th>
                                <th>Catégorie</th>
                                <th>Plus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $row) {
                                $i++;
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['nom_souscat']; ?></td>
                                    <td><?php echo $row['cat_nom']; ?></td>
                                    <td>
                                        <a href="modifie_sous-categorie.php?id=<?php echo $row['id_souscat']; ?>" class="btn btn-primary btn-xs">Modifier</a>
                                        <a href="#" class="btn btn-danger btn-xs" data-href="../fonctions/supp_sous-categorie.php?id=<?php echo $row['id_souscat']; ?>" data-toggle="modal" data-target="#confirm-delete">Supprimer</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
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
                <p>Vous êtes sûr de vouloir supprimer cette sous catégorie ?</p>
                <p style="color:red;">Attention, tous les produits de cette sous-catégorie seront supprimer</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger btn-ok">Oui</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>