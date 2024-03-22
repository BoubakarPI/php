<?php $aDev = 150;

$erreur = null;
$succes = null;
$value = null;

if (isset($_GET['chiffre'])) {
    if ($_GET['chiffre'] < $aDev) {
        $erreur = "Désolé votre chiffre est trop petit";
    } elseif ($_GET['chiffre'] > $aDev) {
        $erreur = "Désolé votre chiffre est trop grand";
    } else {
        $succes = "Bravo ! Vous avez trouvé le bon chiffre <strong>$aDev</strong>";
    }
    $value = (int)$_GET['chiffre'];
}

?>
<?php require 'header.php' ?>

<?php if ($erreur): ?>
<div class="alert alert-danger">
    <?= $erreur ?>
</div>
<?php elseif ($succes): ?>
<div class="alert alert-success">
    <?= $succes ?>
</div>

<?php endif ?>
<form action="./deviner.php" method="GET">
    <div class="form-group">
        <input type="number" name="chiffre" class="form-control" value="<?= $value ?>" placeholder="Tester votre chance"> <br />
    </div>
    <button type="submit" class="btn btn-primary">Deviner</button>
</form>


<?php require 'footer.php' ?>