<?php require_once('header.php'); ?>
<?php
include_once "fonctions/rec_pays.php";
$result = affiche_pays();
$message = '';
if (isset($_POST['inscription'])) {
    include_once "fonctions/utilisateur.php";
    $message = inscription();
}
?>
<div class="page-banner">
    <div class="inner">
        <h1>Inscription</h1>
    </div>
</div>
<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="box-shadow: 1px 1px 12px rgba(0,0,0,.1); border-radius: 10px; padding-top: 10px;">
                                <?php echo $message; ?>
                                <div class="form-group">
                                    <label for="">Nom :</label>
                                    <input type="text" class="form-control" name="nom" value="<?php if (isset($_POST['nom'])) {
                                                                                                    echo $_POST['nom'];
                                                                                                } ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Prénom :</label>
                                    <input type="text" class="form-control" name="prenom" value="<?php if (isset($_POST['prenom'])) {
                                                                                                        echo $_POST['prenom'];
                                                                                                    } ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email :</label>
                                    <input type="email" class="form-control" name="email" value="<?php if (isset($_POST['email'])) {
                                                                                                        echo $_POST['email'];
                                                                                                    } ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Pays :</label>
                                    <select name="pays" class="form-control select2">
                                        <option value="">Séléctionnez</option>
                                        <!-- afficher les pays -->
                                        <?php
                                        foreach ($result as $row) {
                                        ?>
                                            <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Mot de passe :</label>
                                    <input type="password" class="form-control" name="motpasse">
                                </div>
                                <div class="form-group">
                                    <label for="">Confirmez le mot de passe :</label>
                                    <input type="password" class="form-control" name="cmotpasse">
                                </div>
                                <div class="form-group">
                                    <p style="padding-left: 17px;"> Si vous n'avez de compte <a href="connexion.php"> Cliquez ici </a></p>
                                </div>
                                <div class="form-group" style="float: right;">
                                    <label for=""></label>
                                    <input type="submit" class="btn btn-success" value="Inscription" name="inscription">
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