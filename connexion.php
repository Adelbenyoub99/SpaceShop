<?php require_once('header.php'); ?>
<?php
$message = '';
if (isset($_POST['connexion'])) {
    include_once "fonctions/utilisateur.php";
    $message = connexion();
}
?>

<div class="page-banner">
    <div class="inner">
        <h1>Connexion</h1>
    </div>
</div>
<div class="page" style="margin-bottom: 5vh; ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="box-shadow: 3px 3px 10px rgba(0,0,0,.5); border-radius: 10px; padding-top: 10px;">
                                <?php echo $message; ?>
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" id="email" name="email" autocomplete="email">
                                </div>
                                <div class="form-group">
                                    <label for="motpass">Mot de passe :</label>
                                    <input type="password" class="form-control" id="motpass" name="motpass">
                                </div>
                                <div class="form-group">
                                    <p> Si vous n'avez pas de compte <a href="inscription.php"> Cliquez ici </a></p>
                                </div>
                                <div class="form-group" style="float: right;">
                                    <label for="connexion"></label>
                                    <input type="submit" class="btn btn-success" value="connexion" id="connexion" name="connexion">
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