<?php require_once('header.php'); ?>

<?php
include_once "fonctions/statistique.php";
include_once "fonctions/rec_pays.php";
$resultpays = affiche_pays();

$message = '';
?>
<?php /*modifie profile*/
if (isset($_POST['modifie'])) {
    include_once "fonctions/utilisateur.php";
    $message = modifieprofilboutique();
}
?>
<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <a href="boutique/produit.php">
                        <div class="">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3><?php echo nombreproduitboutique(); ?></h3>
                                    <p>Produits</p>
                                </div>
                                <div class="icon">
                                    <i class="ionicons ion-android-cart"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?php echo chiffreboutique() . ' DA'; ?></h3>
                                <p>Profit</p>
                            </div>
                            <div class="icon">
                                <i class="ionicons ion-android-cart"></i>
                            </div>
                        </div>
                    </div>
                    <a href="boutique/commande.php">
                        <!-- ./col -->
                        <div class="">
                            <!-- small box -->
                            <div class="small-box bg-maroon">
                                <div class="inner">
                                    <h3><?php echo nombredemandeboutique() ?></h3>
                                    <p>Commandes</p>
                                </div>
                                <div class="icon">
                                    <i class="ionicons ion-clipboard"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="boutique/vente.php">
                        <!-- ./col -->
                        <div class="">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3><?php echo nombreventboutique(); ?></h3>
                                    <p>Ventes</p>
                                </div>
                                <div class="icon">
                                    <i class="ionicons ion-android-checkbox-outline"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- ./col -->
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <div class="user-content">
                        <h3>
                            Modfier le profil <a href="modifie_mpboutique.php"><button class="btn ">Modifier le mot de passe</button></a>
                        </h3>
                        <?php echo $message; ?>
                        <form action="" method="post">
                            <div class=" form-group">
                                <label for="nom_b">Nom de la boutique :</label>
                                <input type="text" class="form-control" id="nom_b" name="nom_b" value="<?php echo $_SESSION['botique']['nom_b']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="CNI">CNI où PC :</label>
                                <input type="text" class="form-control" id="CNI" name="CNI" value="<?php echo $_SESSION['botique']['num_cni_pc']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="NUMREG">Numéro de registre :</label>
                                <input type="text" class="form-control" id="NUMREG" name="NUMREG" value="<?php echo $_SESSION['botique']['num_reg']; ?>">
                            </div>
                            <div class=" form-group">
                                <label for="email">Email :</label>
                                <input type="text" class="form-control" id="email" name="email" autocomplete="email" value="<?php echo $_SESSION['botique']['email_c']; ?>" disabled>
                            </div>
                            <div class=" form-group">
                                <label for="tel_c">Téléphone :</label>
                                <input type="text" class="form-control" id="tel_c" name="tel_c" value="<?php echo $_SESSION['botique']['tel_c']; ?>">
                            </div>
                            <div class=" form-group">
                                <label for="add_c">Adresse :</label>
                                <textarea class="form-control" id="add_c" name="add_c" cols="30" rows="10" style="height:70px;"><?php echo $_SESSION['botique']['add_c']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="id_pays">Pays :</label>
                                <select id="id_pays" name="id_pays" class="form-control " disabled>
                                    <?php
                                    foreach ($resultpays as $row) {
                                    ?>
                                        <option value="<?php echo $row['country_id']; ?>" <?php if ($row['country_id'] == $_SESSION['botique']['id_pays']) {
                                                                                                echo 'selected';
                                                                                            } ?>><?php echo $row['country_name']; ?></option>

                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class=" form-group">
                                <label for="willaya_c">Wilaya :</label>
                                <input type="text" class="form-control" id="willaya_c" name="willaya_c" value="<?php echo $_SESSION['botique']['willaya_c']; ?>">
                            </div>
                            <div class=" form-group">
                                <label for="ville_c">Ville :</label>
                                <input type="text" class="form-control" id="ville_c" name="ville_c" value="<?php echo $_SESSION['botique']['ville_c']; ?>">
                            </div>
                            <div class=" form-group">
                                <label for="code_postal_c">Code postal :</label>
                                <input type="text" class="form-control" id="code_postal_c" name="code_postal_c" value="<?php echo $_SESSION['botique']['code_postal_c']; ?>">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Modifier" name="modifie">
                        </form>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

<?php require_once('footer.php'); ?>