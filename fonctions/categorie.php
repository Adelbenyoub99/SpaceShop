<?php

/******************************Catégories*********************************/
/* Fonction pour afficher les catégories admin*/
function affiche_categorie()
{
    $pdo = pdo();
    $stmt = $pdo->prepare("SELECT * FROM table_cat ORDER BY id_categorie DESC");
    $stmt->execute();
    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rs;
}

// Fonction pour afficher une catégorie avec id donner
function affiche_lacategorie()
{
    $pdo = pdo();
    $stmt = $pdo->prepare("SELECT * FROM table_cat WHERE id_categorie=?");
    $stmt->execute(array($_REQUEST['id']));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// Fonction pour vérfier si l'id existe dans la base de donnes
function verifieid_categorie()
{
    $pdo = pdo();
    // si il na pas envoyer un id
    if (!isset($_REQUEST['id'])) {
        header('location: ../fonctions/deconnecteradmin.php');
        exit;
    } else {
        // si il a envoyer mais il n existe pas dans la base de donnees
        $stmt = $pdo->prepare("SELECT * FROM table_cat WHERE id_categorie=?");
        $stmt->execute(array($_REQUEST['id']));
        $total = $stmt->rowCount();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($total == 0) {
            header('location: ../fonctions/deconnecteradmin.php');
            exit;
        }
    }
}

// Fonction pour ajouter la catégorie
function ajouter_categorie()
{
    $pdo = pdo();
    $valid = 1;
    // si le nom est vide
    if (empty($_POST['nom_cat'])) {
        $valid = 0;
        $message = '<div class="callout callout-danger"><p>Ajoutez une catégorie</p></div>';
        return $message;
    } else {
        // si la categorie existe deja
        $stmt = $pdo->prepare("SELECT * FROM table_cat WHERE cat_nom=?");
        $stmt->execute(array($_POST['nom_cat']));
        $total = $stmt->rowCount();
        if ($total) {
            $valid = 0;
            $message = '<div class="callout callout-danger"><p>Cette catégorie existe déjà</p></div>';
            return $message;
        }
    }
    // sinon insérer la categorie dans la base de donnes
    if ($valid == 1) {
        $stmt = $pdo->prepare("INSERT INTO table_cat (cat_nom,aff_ach) VALUES (?,?)");
        $stmt->execute(array($_POST['nom_cat'], $_POST['cacher']));
        $message = '<div class="callout callout-success"><p>Catégorie ajoutée avec succès</p></div>';
        return $message;
    }
}

// Fonction pour modifier une catégorie
function modifier_categorie()
{
    $pdo = pdo();
    $valid = 1;
    if (empty($_POST['nom_cat'])) {
        $valid = 0;
        $message = '<div class="callout callout-danger"><p>Ajoutez une catégorie</p></div>';
        return $message;
    } else {
        // si existe déjà
        $stmt = $pdo->prepare("SELECT * FROM table_cat WHERE id_categorie=?");
        $stmt->execute(array($_REQUEST['id']));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $nom_catdansBDD = $row['cat_nom'];
        }
        $stmt = $pdo->prepare("SELECT * FROM table_cat WHERE cat_nom=? and cat_nom!=?");
        $stmt->execute(array($_POST['nom_cat'], $nom_catdansBDD));
        $total = $stmt->rowCount();
        if ($total) {
            $valid = 0;
            $message = '<div class="callout callout-danger"><p>Cette catégorie existe déjà</p></div>';
            return $message;
        }
    }

    if ($valid == 1) {
        // modifier la catégorie
        $stmt = $pdo->prepare("UPDATE table_cat SET cat_nom=?,aff_ach=? WHERE id_categorie=?");
        $stmt->execute(array($_POST['nom_cat'], $_POST['cacher'], $_REQUEST['id']));
        $message = '<div class="callout callout-success"><p>Catégorie modifié avec succès</p></div>';
        return $message;
    }
}



/*======================Sous catégorie===============================*/

// Fonction pour afficher toutes les sous catégories
function affiche_souscat()
{
    $pdo = pdo();
    $i = 0;
    $stmt = $pdo->prepare("SELECT * 
        FROM table_souscat t1
        JOIN table_cat t2
        ON t1.id_cat = t2.id_categorie
        ORDER BY t1.id_souscat DESC");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// Fonction pour afficher une sous catégorie avec id de la sous catégorie
function affiche_lasouscategorie()
{
    $pdo = pdo();
    $statement = $pdo->prepare("SELECT * FROM table_souscat WHERE id_souscat=?");
    $statement->execute(array($_REQUEST['id']));
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

// Fonction pour afficher une sous categorie avec id de la categorie par ordre alphabetique
function affiche_lassouscategoriede_lacat($cat)
{
    $pdo = pdo();
    $statement = $pdo->prepare("SELECT * FROM table_souscat WHERE id_cat = ? ORDER BY nom_souscat ASC");
    $statement->execute(array($cat));
    $resultsc = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $resultsc;
}

// Fonction pour vérfier si l'id de la sous catégorie existe dans la base de donnes
function verifieid_souscategorie()
{
    $pdo = pdo();
    // si il na pas envoyer un id
    if (!isset($_REQUEST['id'])) {
        header('location: ../fonctions/deconnecteradmin.php');
        exit;
    } else {
        // id existe ajouter a la base de donnees
        $statement = $pdo->prepare("SELECT * FROM table_souscat WHERE id_souscat=?");
        $statement->execute(array($_REQUEST['id']));
        $total = $statement->rowCount();
        if ($total == 0) {
            header('location: ../fonctions/deconnecteradmin.php');
            exit;
        }
    }
}

//ajouter une sous categorie
function ajouter_souscat()
{
    $pdo = pdo();
    $valid = 1;
    //si il na pas selectionnee une categorie
    if (empty($_POST['id_categ'])) {
        $valid = 0;
        $message = '<div class="callout callout-danger"><p>Sélectionnez une catégorie</p></div>';
        return $message;
    }
    //si le champ de la sous categorie est vide
    if (empty($_POST['sous_cat'])) {
        $valid = 0;
        $message = '<div class="callout callout-danger"><p>Ajoutez une sous-catégorie</p></div>';
        return $message;
    }
    //sinon il ajoute a la base de donnees
    if ($valid == 1) {
        $stmt = $pdo->prepare("INSERT INTO table_souscat (nom_souscat,id_cat) VALUES (?,?)");
        $stmt->execute(array($_POST['sous_cat'], $_POST['id_categ']));
        $message = '<div class="callout callout-success"><p>Sous-catégorie ajoutée avec succès</p></div>';
        return $message;
    }
}

//modifie sous categorie
function modifie_souscat()
{
    $pdo = pdo();
    $valid = 1;
    // si il n a pas selectionnee la categorie
    if (empty($_POST['id_categ'])) {
        $valid = 0;
        $message = '<div class="callout callout-danger"><p>Sélectionnez une catégorie</p></div>';
        return $message;
    }
    //si le champe de sous categorie est vide 
    if (empty($_POST['sous_cat'])) {
        $valid = 0;
        $message = '<div class="callout callout-danger"><p>Ajoutez une sous-catégorie</p></div>';
        return $message;
    }
    //sinon update la base de donnees
    if ($valid == 1) {
        $stmt = $pdo->prepare("UPDATE table_souscat SET nom_souscat=?,id_cat=? WHERE id_souscat=?");
        $stmt->execute(array($_POST['sous_cat'], $_POST['id_categ'], $_REQUEST['id']));
        $message = '<div class="callout callout-success"><p>Sous-catégorie modifiée avec succès</p></div>';
        return $message;
    }
}
