<?php require_once('header.php'); ?>



<?php
$message = '';
if (isset($_POST['connexion'])) {


    include_once "fonctions/utilisateur.php";
    $message = connexionboutique();
}
?>



<div id="touchslider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false">

    <!-- slider-->
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image:url(assets/uploads/vendeur.jpg">
            <div class="bs-slider-overlay"></div>
            <div class="container">

                <div class="row">

                    <div class="slide-text slide_style_right">
                        <h1 data-animation=""><a href="creeboutique.php"> Soyez vendeur chez nous</a></h1>
                        <p data-animation="animated fadeInDown">Avec SpaceShop vous pouvez créer votre boutique en ligne </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-banner">
    <div class="inner">
        <h1>Connecter-vous à votre BOUTIQUE </h1>
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
                            <div class="col-md-4">

                                <?php echo $message; ?>

                                <div class="form-group">
                                    <label for="">Email :</label>
                                    <input type="email" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="">Mot de passe :</label>
                                    <input type="password" class="form-control" name="motpass">
                                </div>
                                <div class="form-group">
                                    <p> Si vous voulez créer votre boutique en ligne <a href="creeboutique.php"> Cliquez ici </a></p>
                                </div>

                                <div class="form-group" style="float: right">
                                    <label for=""></label>
                                    <input type="submit" class="btn btn-success" value="connexion" name="connexion">
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