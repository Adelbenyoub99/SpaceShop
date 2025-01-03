<?php require_once('header.php'); ?>
<?php
$error_message = "";
$success_message = "";
if (!isset($_SESSION['botique'])) {
    header("location: deconnecter.php");
    exit;
}
?>
<?php
if (isset($_POST['modifie'])) {
    $valid = 1;
    if (empty($_POST['pass_c']) || empty($_POST['conpass'])) {
        $valid = 0;
        $error_message = "mot de passe vide";
    }
    if (!empty($_POST['pass_c']) && !empty($_POST['conpass'])) {
        if ($_POST['pass_c'] != $_POST['conpass']) {
            $valid = 0;
            $error_message  = "les mot de passe sont deffirant";
        }
    }
    if ($valid == 1) {
        $password = strip_tags($_POST['pass_c']);
        $statement = $pdo->prepare("UPDATE table_client SET pass_c=? WHERE id_c=?");
        $statement->execute(array(md5($password), $_SESSION['botique']['id_c']));
        $_SESSION['botique']['pass_c'] = md5($password);
        $success_message = "modifie avecc succes";
    }
}
?>
<div class="page" style="margin-bottom: 25vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">
                    <h3 class="text-center">
                        Modifier le mot de passe
                    </h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <?php
                                if ($error_message != '') {
                                    echo "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>" . $error_message . "</div>";
                                }
                                if ($success_message != '') {
                                    echo "<div class='success' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>" . $success_message . "</div>";
                                }
                                ?>
                                <div class="form-group">
                                    <label for="">Mot de passe :</label>
                                    <input type="password" class="form-control" name="pass_c">
                                </div>
                                <div class="form-group">
                                    <label for="">Confirmez le mot de passe :</label>
                                    <input type="password" class="form-control" name="conpass">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Modifier" name="modifie">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>