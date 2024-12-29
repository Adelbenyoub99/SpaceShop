<?php require_once('header.php'); ?>
<?php

include_once "fonctions/rec_pays.php";
$result = affiche_pays();
$message = '';
if (isset($_POST['inscription'])) {
    include_once "fonctions/utilisateur.php";
    $message = inscriptionboutique();
}
?>

<div class="page-banner">
    <div class="inner">
        <h1>Créez votre boutique en ligne</h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <?php echo $message; ?>
                                <div class=" form-group">
                                    <label for="nom_b">Nom de la boutique :</label>
                                    <input type="text" class="form-control" id="nom_b" name="nom_b" value="<?php if (isset($_POST['nom_b'])) {
                                                                                                    echo $_POST['nom_b'];
                                                                                                } ?>">
                                </div>
                                <div class=" form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" id="email" name="email" autocomplete="email" value="<?php if (isset($_POST['email'])) {
                                                                                                        echo $_POST['email'];
                                                                                                    } ?>">
                                </div>
                                <div class=" form-group">
                                    <label for="CNI">CNI OU PC :</label>
                                    <input type="text" class="form-control" id="CNI" name="CNI">
                                </div>
                                <div class=" form-group">
                                    <label for="NUMREG">Numéro de registe :</label>
                                    <input type="text" class="form-control" id="NUMREG" name="NUMREG">
                                </div>
                                <div class=" form-group">
                                    <label for="pays">Pays :</label>
                                    <select id="pays" name="pays" class="form-control select2">
                                        <option value="">Séléctionnez</option>
                                        <?php
                                        foreach ($result as $row) {
                                        ?>
                                            <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class=" form-group">
                                    <label for="motpasse">Mot de passe :</label>
                                    <input type="password" class="form-control" id="motpasse" name="motpasse">
                                </div>
                                <div class=" form-group">
                                    <label for="cmotpasse">Confirmez le mot de passe :</label>
                                    <input type="password" class="form-control" id="cmotpasse" name="cmotpasse">
                                </div>
                                <div class="form-group">
                                    <p style="padding-left: 17px;"> Si vous avez un compte <a href="pageboutique.php"> Cliquez ici </a></p>
                                </div>
                                <div class="form-group" style="float: right;">
                                    <label for="inscription"></label>
                                    <input type="submit" class="btn btn-success" value="inscription" id="inscription" name="inscription">
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