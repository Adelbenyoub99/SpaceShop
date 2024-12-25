<?php require_once('header.php'); ?>

<?php
$error_message = '';
$success_message = '';
?>
<div class="page-banner">
    <div class="inner">
        <h1>Nous contacter</h1>
    </div>
</div>
<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row cform">
                    <div class="col-md-4">
                        <h3>Map</h3>
                        <iframe src="https://maps.google.com/maps?q=bejaia&t=&z=13&ie=UTF8&iwloc=&output=embed" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <legend><span class="glyphicon glyphicon-globe"></span> </legend>
                        <address>
                            BEJAIA 06000 ALGERIE
                        </address>
                        <address>
                            <strong>Téléphone :</strong><br>
                            <span>0123456789</span>
                        </address>
                        <address>
                            <strong>Email :</strong><br>
                            <a href="mailto:spaceshop@gmail.com"><span>spaceshop@gmail.com</span></a>
                        </address>
                    </div>
                    <div class="col-md-8">
                        <div class="well " style="box-shadow: 1px 1px 1px rgba(0,0,0,.2); background-color: white;">
                            <?php
                            if (isset($_POST['envoyer'])) {
                                $error_message = '';
                                $success_message = '';
                                $valid = 1;
                                if (empty($_POST['nom'])) {
                                    $valid = 0;
                                    $error_message .= 'Veuillez ajouter un nom !\n';
                                }
                                if (empty($_POST['email'])) {
                                    $valid = 0;
                                    $error_message .= 'Veuillez ajouter une adresse email !\n';
                                } else {
                                    // 
                                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                                        $valid = 0;
                                        $error_message .= 'Erreur dans votre adresse email \n';
                                    }
                                }
                                if (empty($_POST['msg'])) {
                                    $valid = 0;
                                    $error_message .= 'Veuillez ajouter un message \n';
                                }
                                if ($valid == 1) {
                                    $nom = strip_tags($_POST['nom']);
                                    $email = strip_tags($_POST['email']);
                                    $objet = strip_tags($_POST['objet']);
                                    $msg = strip_tags($_POST['msg']);
                                    $to_admin = 'spaceshop@gmail.com';
                                    $message = '
                                <html><body>
                                <table>
                                <tr>
                                <td>Name</td>
                                <td>' . $nom . '</td>
                                </tr>
                                <tr>
                                <td>Email</td>
                                <td>' . $email . '</td>
                                </tr>
                                <tr>
                                <td>Phone</td>
                                <td>' . $objet . '</td>
                                </tr>
                                <tr>
                                <td>Comment</td>
                                <td>' . nl2br($msg) . '</td>
                                </tr>
                                </table>
                                </body></html>
                                ';
                                    $headers = 'From: ' . $email . "\r\n" .
                                        'Reply-To: ' . $email . "\r\n" .
                                        'X-Mailer: PHP/' . phpversion() . "\r\n" .
                                        "MIME-Version: 1.0\r\n" .
                                        "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                    mail($to_admin, $objet, $message, $headers);
                                    $success_message = 'Votre message a été envoyer avec succès';
                                }
                            }
                            ?>
                            <?php
                            if ($error_message != '') {
                                echo "<script>alert('" . $error_message . "')</script>";
                            }
                            if ($success_message != '') {
                                echo "<script>alert('" . $success_message . "')</script>";
                            }
                            ?>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nom :</label>
                                            <input type="text" class="form-control" id="name" name="nom" placeholder="Votre nom" autocomplete="nom">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email :</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" autocomplete="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="objet">Objet :</label>
                                            <input type="text" class="form-control" id="objet" name="objet" placeholder="Objet">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="message">Message :</label>
                                            <textarea name="msg" class="form-control" id="message" rows="9" cols="25" placeholder="Votre message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="Envoyer" class="btn  pull-right" name="envoyer" style="background-color: green; color: white;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>