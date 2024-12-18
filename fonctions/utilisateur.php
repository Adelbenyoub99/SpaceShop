<?php

// Fonction inscription d'un client
function inscription()
{
    $pdo = pdo();
    $valid = 1;
    if (empty($_POST['nom'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Veuillez ajouter un nom<br></div>";
        return $error_message;
    }
    if (empty($_POST['prenom'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Veuillez ajouter un prénom<br></div>";
        return $error_message;
    }
    if (empty($_POST['email'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Veuillez ajouter un email<br></div>";
        return $error_message;
    } else {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $valid = 0;
            $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Erreur dans votre email<br></div>";
            return $error_message;
        } else {
            $statement = $pdo->prepare("SELECT * FROM table_client WHERE email_c=?");
            $statement->execute(array($_POST['email']));
            $total = $statement->rowCount();
            if ($total) {
                $valid = 0;
                $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Votre email existe déjà<br></div>";
                return $error_message;
            }
        }
    }
    if (empty($_POST['pays'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Veuillez sélectionner un pays<br></div>";
        return $error_message;
    }
    if (empty($_POST['motpasse']) || empty($_POST['cmotpasse'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Veuillez ajouter un mot de passe<br></div>";
        return $error_message;
    }
    if (!empty($_POST['motpasse']) && !empty($_POST['cmotpasse'])) {
        if ($_POST['motpasse'] != $_POST['cmotpasse']) {
            $valid = 0;
            $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Mot de passe différent<br></div>";
            return $error_message;
        }
    }
    if ($valid == 1) {
        $cust_datetime = date('Y-m-d h:i:s');
        $statement = $pdo->prepare("INSERT INTO table_client (
                                        nom_c,
                                        prenom_c,
                                        nom_b,
                                        email_c,
                                        id_pays,
                                        pass_c,
                                        dateins_c,
                                        post,
                                        tel_c,
                                        add_c,
                                        willaya_c,
                                        ville_c,
                                        code_postal_c,
                                        num_cni_pc,
                                        num_reg
                                    ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $statement->execute(array(
            strip_tags($_POST['nom']),
            strip_tags($_POST['prenom']),
            '',
            strip_tags($_POST['email']),
            strip_tags($_POST['pays']),
            md5($_POST['motpasse']),
            $cust_datetime,
            'client',
            '',
            '',
            '',
            '',
            '',
            '0',
            '0',
        ));


        unset($_POST['nom']);

        unset($_POST['prenom']);

        unset($_POST['email']);

        unset($_POST['add']);


        $error_message = "<div class='succes' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Vous êtes inscrit avec succès<br></div>";
        return $error_message;
    }
}

// Modifier le profil d'un utilisateur
function modifieprofil()
{
    $pdo = pdo();

    $valid = 1;

    if (empty($_POST['nom_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Votre nom<br></div>";
        return $error_message;
    }

    if (empty($_POST['prenom_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Votre prénom<br></div>";
        return $error_message;
    }


    if (empty($_POST['tel_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Votre numéro de téléphone<br></div>";
        return $error_message;
    }

    if (empty($_POST['add_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Adresse<br></div>";
        return $error_message;
    }

    if (empty($_POST['willaya_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Willaya<br></div>";
        return $error_message;
    }

    if (empty($_POST['ville_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Ville<br></div>";
        return $error_message;
    }

    if (empty($_POST['code_postal_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Code postal<br></div>";
        return $error_message;
    }

    if ($valid == 1) {

        // update data into the database
        $statement = $pdo->prepare("UPDATE table_client SET nom_c=?, prenom_c=?, tel_c=?, add_c=?, willaya_c=?, ville_c=?, code_postal_c=? WHERE id_c=?");
        $statement->execute(array(
            strip_tags($_POST['nom_c']),
            strip_tags($_POST['prenom_c']),
            strip_tags($_POST['tel_c']),
            strip_tags($_POST['add_c']),
            strip_tags($_POST['willaya_c']),
            strip_tags($_POST['ville_c']),
            strip_tags($_POST['code_postal_c']),
            $_SESSION['client']['id_c']
        ));

        $error_message = "<div class='succes' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Votre profil a été modifié avec succès<br></div>";
        return $error_message;


        $_SESSION['client']['nom_c'] = $_POST['nom_c'];
        $_SESSION['client']['prenom_c'] = $_POST['prenom_c'];
        $_SESSION['client']['tel_c'] = $_POST['tel_c'];
        $_SESSION['client']['add_c'] = $_POST['add_c'];
        $_SESSION['client']['willaya_c'] = $_POST['willaya_c'];
        $_SESSION['client']['ville_c'] = $_POST['ville_c'];
        $_SESSION['client']['code_postal_c'] = $_POST['code_postal_c'];
    }
}

// Fonctions connexion d'un utilisateur (client)
function connexion()
{
    if (empty($_POST['email']) || empty($_POST['motpass'])) {
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Email ou mot de passe<br></div>";
        return $error_message;
    } else {
        //sinon verfier dans la base de donnees
        $pdo = pdo();
        $email = strip_tags($_POST['email']);
        $motpass = strip_tags($_POST['motpass']);

        $statement = $pdo->prepare("SELECT * FROM table_client WHERE email_c=?");
        $statement->execute(array($email));
        $total = $statement->rowCount();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $row_password = $row['pass_c'];
            $pos = $row['post'];
        }
        if ($total == 0) {
            $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Erreur dans votre email ou mot de passe<br></div>";
            return $error_message;
        } else {
            //hachage MD5 
            if ($row_password != md5($motpass)) {
                $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Erreur dans votre email ou mot de passe<br></div>";
                return $error_message;
            } else {
                if ($pos == 'client') {
                    $_SESSION['client'] = $row;
                    header("location: profile.php");
                } else {
                    $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Erreur dans votre email ou mot de passe<br></div>";
                    return $error_message;
                }
            }
        }
    }
}

// Vérifier les champs
function verifievidechamp()
{
    $pdo = pdo();
    //recuppere tout les champs pour verfie si vide
    $stmt = $pdo->prepare("SELECT * 
            FROM table_client
            WHERE post=? and id_c=?
            ");
    $stmt->execute(array('client', $_SESSION['client']['id_c']));
    $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rslt as $affiche) {

        $prenom = $affiche['prenom_c'];
        $tel = $affiche['tel_c'];
        $add_c = $affiche['add_c'];
        $willaya = $affiche['willaya_c'];
        $ville = $affiche['ville_c'];
        $codepostal = $affiche['code_postal_c'];
    }

    if ($prenom == '' || $tel == '' || $add_c == '' || $willaya == '' || $ville = '') {
        $comp = '<div class="callout callout-danger"><p>Veuillez completer votre inscription</p></div>';
        return $comp;
    }
}

// Vérifier les champs
function notification()
{
    $pdo = pdo();
    //recuppere tout les champs pour verfie si vide
    $stmt = $pdo->prepare("SELECT * 
            FROM table_client
            WHERE post=? and id_c=?
            ");
    $stmt->execute(array('client', $_SESSION['client']['id_c']));
    $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rslt as $affiche) {

        $prenom = $affiche['prenom_c'];
        $tel = $affiche['tel_c'];
        $add_c = $affiche['add_c'];
        $willaya = $affiche['willaya_c'];
        $ville = $affiche['ville_c'];
        $codepostal = $affiche['code_postal_c'];
    }

    if ($prenom == '' || $tel == '' || $add_c == '' || $willaya == '' || $ville = '') {
        $comp = '<sup><i class="fa fa-circle" style="font-size: 6px; color: red; "></i>
                                        </sup>';
        return $comp;
    }
}

// Afficher tout les clients
function affiche_clients()
{
    $pdo = pdo();
    //iner join pour recupere le pays dans la table des pays
    $stmt = $pdo->prepare("SELECT * 
        FROM table_client t1  
        JOIN table_pays t2
        ON t1.id_pays = t2.country_id
        WHERE post='client'
        ");
    $stmt->execute();
    $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rslt;
}






/*================================boutique==========================================*/
// Inscription boutique
function inscriptionboutique()
{
    $pdo = pdo();
    $valid = 1;
    if (empty($_POST['nom_b'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Nom de votre boutique<br></div>";
        return $error_message;
    }
    if (empty($_POST['CNI'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>CNI de votre boutique<br></div>";
        return $error_message;
    }
    if (empty($_POST['NUMREG'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Numéro de registre de commerce<br></div>";
        return $error_message;
    }
    if (empty($_POST['email'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Email<br></div>";
        return $error_message;
    } else {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $valid = 0;
            $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Erreur dans votre email<br></div>";
            return $error_message;
        } else {
            $statement = $pdo->prepare("SELECT * FROM table_client WHERE email_c=?");
            $statement->execute(array($_POST['email']));
            $total = $statement->rowCount();
            if ($total) {
                $valid = 0;
                $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>l'Email existe déjà<br></div>";
                return $error_message;
            }
        }
    }
    if (empty($_POST['pays'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>sélectionnez un pays<br></div>";
        return $error_message;
    }
    if (empty($_POST['motpasse']) || empty($_POST['cmotpasse'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Mot de passe<br></div>";
        return $error_message;
    }
    if (!empty($_POST['motpasse']) && !empty($_POST['cmotpasse'])) {
        if ($_POST['motpasse'] != $_POST['cmotpasse']) {
            $valid = 0;
            $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>emails differents<br></div>";
            return $error_message;
        }
    }
    if ($valid == 1) {
        $cust_datetime = date('Y-m-d h:i:s');
        // bdd
        $statement = $pdo->prepare("INSERT INTO table_client (
                                        nom_c,
                                        prenom_c,
                                        nom_b,
                                        email_c,
                                        id_pays,
                                        pass_c,
                                        dateins_c,
                                        post,
                                        num_cni_pc,
                                        num_reg,
                                        tel_c,
                                        add_c,
                                        willaya_c,
                                        ville_c,
                                        code_postal_c
                                    ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $statement->execute(array(
            '',
            '',
            strip_tags($_POST['nom_b']), //nom de la boutique
            strip_tags($_POST['email']),
            strip_tags($_POST['pays']),
            md5($_POST['motpasse']),
            $cust_datetime,
            'boutique',
            strip_tags($_POST['CNI']),
            strip_tags($_POST['NUMREG']),
            '',
            '',
            '',
            '',
            '',
        ));
        unset($_POST['nom_b']);
        unset($_POST['email']);

        $error_message = "<div class='succes' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Vous êtes inscrit avec succès<br></div>";
        return $error_message;
    }
}

// Connexion boutique
function connexionboutique()
{
    if (empty($_POST['email']) || empty($_POST['motpass'])) {
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Email ou mot de passe<br></div>";
        return $error_message;
    } else {
        //sinon verfier dans la base de donnees
        $pdo = pdo();
        $email = strip_tags($_POST['email']);
        $motpass = strip_tags($_POST['motpass']);

        $statement = $pdo->prepare("SELECT * FROM table_client WHERE email_c=?");
        $statement->execute(array($email));
        $total = $statement->rowCount();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $row_password = $row['pass_c'];
            $pos = $row['post'];
        }
        if ($total == 0) {
            $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Erreur dans votre email ou mot de passe<br></div>";
            return $error_message;
        } else {
            //hachage MD5 
            if ($row_password != md5($motpass)) {
                $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Erreur dans votre email ou mot de passe<br></div>";
                return $error_message;
            } else {
                if ($pos == 'client') {
                    $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Erreur dans votre email ou mot de passe<br></div>";
                    return $error_message;
                } else {
                    $_SESSION['botique'] = $row;
                    header("location: profileboutique.php");
                }
            }
        }
    }
}

// Modifier profil boutique
function modifieprofilboutique()
{
    $pdo = pdo();

    $valid = 1;



    if (empty($_POST['nom_b'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Nom de votre boutique<br></div>";
        return $error_message;
    }

    if (empty($_POST['CNI'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Numéro de CNI<br></div>";
        return $error_message;
    }

    if (empty($_POST['NUMREG'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>NUMREG <br></div>";
        return $error_message;
    }


    if (empty($_POST['tel_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Numéro de téléphone<br></div>";
        return $error_message;
    }

    if (empty($_POST['add_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Adresse<br></div>";
        return $error_message;
    }

    if (empty($_POST['willaya_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Willaya<br></div>";
        return $error_message;
    }

    if (empty($_POST['ville_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Ville<br></div>";
        return $error_message;
    }

    if (empty($_POST['code_postal_c'])) {
        $valid = 0;
        $error_message = "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Code postal<br></div>";
        return $error_message;
    }

    if ($valid == 1) {

        // update data into the database
        $statement = $pdo->prepare("UPDATE table_client SET nom_b=?, tel_c=?, add_c=?, willaya_c=?, ville_c=?, code_postal_c=?, num_cni_pc=?,num_reg=? WHERE id_c=?");
        $statement->execute(array(

            strip_tags($_POST['nom_b']),
            strip_tags($_POST['tel_c']),
            strip_tags($_POST['add_c']),
            strip_tags($_POST['willaya_c']),
            strip_tags($_POST['ville_c']),
            strip_tags($_POST['code_postal_c']),
            strip_tags($_POST['CNI']),
            strip_tags($_POST['NUMREG']),
            $_SESSION['botique']['id_c']
        ));

        $error_message = "<div class='succes' style='padding: 10px;background:#f1f1f1;margin-bottom:20px; border-radius: 5px;'>Modification réussie<br></div>";
        return $error_message;



        $_SESSION['botique']['nom_b'] = $_POST['nom_b'];
        $_SESSION['botique']['tel_c'] = $_POST['tel_c'];
        $_SESSION['botique']['add_c'] = $_POST['add_c'];
        $_SESSION['botique']['willaya_c'] = $_POST['willaya_c'];
        $_SESSION['botique']['ville_c'] = $_POST['ville_c'];
        $_SESSION['botique']['code_postal_c'] = $_POST['code_postal_c'];
    }
}

// Afficher tout les boutiques
function affiche_boutique()
{
    $pdo = pdo();
    //iner join pour recupere le pays dans la table des pays
    $stmt = $pdo->prepare("SELECT * 
        FROM table_client t1  
        JOIN table_pays t2
        ON t1.id_pays = t2.country_id
        WHERE post='boutique'
        ");
    $stmt->execute();
    $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rslt;
}

// Vérifier les champs boutique
function verifievidechampboutique()
{
    $pdo = pdo();
    //recuppere tout les champs pour verfie si vide
    $stmt = $pdo->prepare("SELECT * 
            FROM table_client
            WHERE post=? and id_c=?
            ");
    $stmt->execute(array('boutique', $_SESSION['botique']['id_c']));
    $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rslt as $affiche) {

        $prenom = $affiche['nom_b'];
        $tel = $affiche['tel_c'];
        $add_c = $affiche['add_c'];
        $willaya = $affiche['willaya_c'];
        $ville = $affiche['ville_c'];
        $codepostal = $affiche['code_postal_c'];
    }

    if ($prenom == '' || $tel == '' || $add_c == '' || $willaya == '' || $ville = '') {
        $comp = '<div class="callout callout-danger"><p>Completez votre inscription</p></div>';
        return $comp;
    }
}

// Vérifier les champs
function notificationboutique()
{
    $pdo = pdo();
    //recuppere tout les champs pour verfie si vide
    $stmt = $pdo->prepare("SELECT * 
            FROM table_client
            WHERE post=? and id_c=?
            ");
    $stmt->execute(array('boutique', $_SESSION['botique']['id_c']));
    $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rslt as $affiche) {

        $prenom = $affiche['nom_b'];
        $tel = $affiche['tel_c'];
        $add_c = $affiche['add_c'];
        $willaya = $affiche['willaya_c'];
        $ville = $affiche['ville_c'];
        $codepostal = $affiche['code_postal_c'];
    }

    if ($prenom == '' || $tel == '' || $add_c == '' || $willaya == '' || $ville = '') {
        $comp = '<sup><i class="fa fa-circle" style="font-size: 6px; color: red; "></i>
                                        </sup>';
        return $comp;
    }
}











/**********************************fenction admin**********************************/
// Fonction connexion d'un utilisateur (admin)
function connexionadmin()
{
    if (empty($_POST['email']) || empty($_POST['motpasse'])) {
        $error_message = 'ajouter votre email ou mot de passe<br>';
        return $error_message;
    } else {
        $pdo = pdo();
        //recupere les champs dans le site
        $email = strip_tags($_POST['email']);
        $motpasse = strip_tags($_POST['motpasse']);
        //verfier email dans le site
        $statement = $pdo->prepare("SELECT * FROM tbl_user WHERE email=?");
        $statement->execute(array($email));
        $total = $statement->rowCount();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if ($total == 0) {
            $error_message = 'Erreur email<br>';
            return $error_message;
        } else {
            //si existe email verfie mot de passe      
            foreach ($result as $row) {
                $row_password = $row['password'];
            }
            if ($row_password != md5($motpasse)) {
                $error_message = 'Erreur mot de passe<br>';
                return $error_message;
            } else {
                //cree la session user et afficher l acceuill
                $_SESSION['user'] = $row;
                header("location: index.php");
            }
        }
    }
}

// Récuperer les informations de l'admin
function infoadmin()
{
    $pdo = pdo();

    $statement = $pdo->prepare("SELECT * FROM tbl_user WHERE id=?");
    $statement->execute(array($_SESSION['user']['id']));
    $statement->rowCount();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// Fonction pour modifier le profil de l'admin
function modifieprofadmin()
{
    $valid = 1;
    $pdo = pdo();
    //verfie le nom si nest pas vide
    if (empty($_POST['nom'])) {
        $valid = 0;
        $message = '<div class="callout callout-danger"><p>ajouter un nom svp</p></div>';
        return $message;
    }
    // verfie email si nest pas vide
    if (empty($_POST['email'])) {
        $valid = 0;
        $message = '<div class="callout callout-danger"><p>ajouter email svp</p></div>';
        return $message;
    } else {
        //verfie la syntaxe de email
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $valid = 0;
            $message = '<div class="callout callout-danger"><p>erreur dans votre email</p></div>';
            return $message;
        } else {
            //verfie si email existe deja
            $statement = $pdo->prepare("SELECT * FROM tbl_user WHERE id=?");
            $statement->execute(array($_SESSION['user']['id']));
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                $current_email = $row['email'];
            }
            $statement = $pdo->prepare("SELECT * FROM tbl_user WHERE email=? and email!=?");
            $statement->execute(array($_POST['email'], $current_email));
            $total = $statement->rowCount();
            if ($total) {
                $valid = 0;
                $message = '<div class="callout callout-danger"><p>l email existe deja</p></div>';
                return $message;
            }
        }
    }
    //sinon insirer dans la base de donnees
    if ($valid == 1) {
        $_SESSION['user']['nom_u'] = $_POST['nom'];
        $_SESSION['user']['email'] = $_POST['email'];
        $statement = $pdo->prepare("UPDATE tbl_user SET nom_u=?, email=?, tel_u=? WHERE id=?");
        $statement->execute(array($_POST['nom'], $_POST['email'], $_POST['tel'], $_SESSION['user']['id']));
        $message = '<div class="callout callout-success"><p>votre profile modifie avec succes</p></div>';
        return $message;
    }
}

// Fonction pour modifier le mot de passe de l'admin
function modifiepasseadmin()
{
    $pdo = pdo();
    $valid2 =  1;
    //si les champs sont vide 
    if (empty($_POST['motpasse']) || empty($_POST['conmopass'])) {
        $valid2 = 0;
        $message = '<div class="callout callout-danger"><p>Nouveau mot de passe</p></div>';
        return $message;
    }
    if (!empty($_POST['motpasse']) && !empty($_POST['conmopass'])) {
        //si les mot de passe inssirer sont differant
        if ($_POST['motpasse'] != $_POST['conmopass']) {
            $valid2 = 0;
            $message = '<div class="callout callout-danger"><p>Mots de passe différents</p></div>';
            return $message;
        }
    }
    if ($valid2 == 1) {
        //chiffre le mot de passe et sofgarder dans la variable
        $_SESSION['user']['password'] = md5($_POST['motpasse']);
        //ajouter a base de donnees
        $statement = $pdo->prepare("UPDATE tbl_user SET password=? WHERE id=?");
        $statement->execute(array(md5($_POST['motpasse']), $_SESSION['user']['id']));
        $message = '<div class="callout callout-success"><p>Mot de passe modifié</p></div>';
        return $message;
    }
}
