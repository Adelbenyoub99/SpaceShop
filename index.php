<?php require_once('header.php'); ?>
<div id="touchslider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false">
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image:url(assets/uploads/slider01.jpeg">
            <div class="bs-slider-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="">Vente de matériels électroménagers</h1>
                        <p data-animation="animated fadeInDown">Trouvez le matériel électroménager dont vous avez besoins</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('assets/uploads/slider02.jpg');">
            <div class="bs-slider-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="">Vente de matériels informatique</h1>
                        <p data-animation="animated fadeInDown">Trouvez le matériel informatique dont vous avez besoins</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item " style="background-image:url('assets/uploads/sport.jpg');">
            <div class="bs-slider-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="">Vente d'articles de Sport et Loisir</h1>
                        <p data-animation="animated fadeInDown">Trouvez les articles de sport et loisir dont vous avez besoins</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider gauche -->
    <a class="left carousel-control" href="#touchslider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <!-- Slider droit -->
    <a class="right carousel-control" href="#touchslider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="item">
                    <div class="photo"><img src="assets/uploads/service03.png" width="150px" alt=""></div>
                    <h3>Livraison</h3>
                    <p>
                        Livraison à domicile
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="photo"><img src="assets/uploads/service04.png" width="150px" alt=""></div>
                    <h3>Garantie</h3>
                    <p>
                        Garantie sur tout matériels Acheter
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="photo"><img src="assets/uploads/service05.png" width="150px" alt=""></div>
                    <h3>Disponibilité</h3>
                    <p>
                        Disponible 24/24 et 7/7
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item">
                    <div class="photo"><img src="assets/uploads/service06.png" width="150px" alt=""></div>
                    <h3>Service après-vente </h3>
                    <p>
                        Service après-vente
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>