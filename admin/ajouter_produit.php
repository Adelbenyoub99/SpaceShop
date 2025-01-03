<?php require_once('header.php'); ?>

<?php
$message = '';

include_once "../fonctions/categorie.php";
                $i=0;
                $result=affiche_categorie();


if(isset($_POST['ajouter'])) {

include_once "../fonctions/produit.php";
                $message=ajouter_produit();
 
}
?>


<section class="content-header">
	<div class="content-header-left">
		<h1>Ajouter un produit </h1>
	</div>
	<div class="content-header-right">
		<a href="produit.php" class="btn btn-primary btn-sm">Afficher tout</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php 
			echo $message;
			?>

			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"> Catégorie </label>
							<div class="col-sm-4">
								<select name="id_cat" class="form-control select2 cat">
									<option value="">Séléctionnez une catégorie</option>

									<?php
									foreach ($result as $row) {
										?>
										<option value="<?php echo $row['id_categorie']; ?>"><?php echo $row['cat_nom']; ?></option>
										<?php
									}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Sous-catégorie </label>
							<div class="col-sm-4">
								<select name="idsous_cat" class="form-control select2 sous-cat">
									<option value="">Séléctionnez une sous-catégorie</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Nom du produit </label>
							<div class="col-sm-4">
								<input type="text" name="nom_pro" class="form-control">
							</div>
						</div>	

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Ancien prix <br><span style="font-size:10px;font-weight:normal;">(DA)</span></label>
							<div class="col-sm-4">
								<input type="text" name="anc_prix" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Prix <br><span style="font-size:10px;font-weight:normal;">(DA)</span></label>
							<div class="col-sm-4">
								<input type="text" name="prix" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Quantité </label>
							<div class="col-sm-4">
								<input type="text" name="quant" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Photo </label>
							<div class="col-sm-4" >
								<input type="file" name="p_photo">
							</div>
						</div>

                        <!--dans youtube -->
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Autres photos</label>
							<div class="col-sm-4" style="padding-top:4px;">
								<table id="ProductTable" style="width:100%;">
			                        <tbody>
			                            <tr>
			                                <td>
			                                    <div class="upload-btn">
			                                        <input type="file" name="photo[]" style="margin-bottom:5px;">
			                                    </div>
			                                </td>
			                                <td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>
			                            </tr>
			                        </tbody>
			                    </table>
							</div>

							<div class="col-sm-2">
			                    <input type="button" id="btnAddNew" value="plus" style="margin-top: 5px;margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
			                </div>

						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Informations </label>
							<div class="col-sm-8">
								<textarea name="pro_info" class="form-control" cols="30" rows="10" id="editor1"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Description</label>
							<div class="col-sm-8">
								<textarea name="pro_descr" class="form-control" cols="30" rows="10" id="editor2"></textarea>
							</div>
						</div>
				
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Actifs</label>
							<div class="col-sm-8">
								<select name="acti_pro" class="form-control" style="width:auto;">
									<option value="1">Oui</option>
									<option value="0">Non</option>
									
								</select> 
							</div>
						</div>

						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="ajouter">Ajouter</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php require_once('footer.php'); ?>