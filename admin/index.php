<?php require_once('header.php'); ?>

<?php
 //faire appelle au fichier statistique.php pour utiliser ces fenction
include_once "../fonctions/statistique.php"
?>

<section class="content-header">
	<h1>Accueil</h1>
</section>
<section class="content">
  <div class="row">
    <!-- afficher le nombre de commande -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-maroon">
        <div class="inner">
          <h3><?php echo nombredemande(); ?></h3>
          <p>Commandes</p>
        </div>
        <div class="icon">
          <i class="ionicons ion-clipboard"></i>
        </div>
      </div>
    </div>
    <!-- afficher le nombre de vente -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo nombrevent(); ?></h3>
          <p>Ventes</p>
        </div>
        <div class="icon">
          <i class="ionicons ion-android-checkbox-outline"></i>
        </div>
      </div>
    </div>
    <!-- afficher le chiffre d affire -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php echo chiffre().' DA'; ?></h3>
          <p>Chiffre d'affaire</p>
        </div>
        <div class="icon">
          <i class="ionicons ion-android-cart"></i>
        </div>
      </div>
    </div>
    <!-- afficher le nombre de produit -->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3><?php echo  nombreproduit(); ?></h3>
          <p>Produits</p>
        </div>
        <div class="icon">
          <i class="ionicons ion-android-cart"></i>
        </div>
      </div>
    </div>
    <!-- afficher le nombre d'utilisateur-->
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
         <h3><?php echo nombreclient(); ?></h3>
         <p>Clients</p>
       </div>
       <div class="icon">
         <i class="ionicons ion-person-stalker"></i>
       </div>
     </div>
   </div>
   <!-- afficher le nombre de boutique-->
   <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-black">
      <div class="inner">
        <h3><?php echo nombreboutique(); ?></h3>
        <p>Boutiques</p>
      </div>
      <div class="icon">
        <i class="ionicons ion-person-stalker"></i>
      </div>
    </div>
  </div>
  <!-- afficher le nombre de categorie-->
  <div class="col-lg-3 col-xs-6">
    <div class="small-box bg-olive">
      <div class="inner">
       <h3><?php echo nombrecategorie(); ?></h3>
       <p>Catégories</p>
     </div>
     <div class="icon">
       <i class="ionicons ion-arrow-up-b"></i>
     </div>
   </div>
 </div>
 <!-- afficher le nombre de sous categorie-->
 <div class="col-lg-3 col-xs-6">
  <div class="small-box bg-maroon">
    <div class="inner">
     <h3><?php echo nombresouscategorie(); ?></h3>
     <p>Sous-catégories</p>
   </div>
   <div class="icon">
     <i class="ionicons ion-arrow-down-b"></i>
   </div>
 </div>
</div>
</div>
</section>
<?php require_once('footer.php'); ?>