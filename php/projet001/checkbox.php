<?php $aDev = 150;

$parfums = [
    'Tomate' => 4,
    'Mangue' => 5,
    'orange' => 3
];

$cornets = [
    'Pots' => 2,
    'Cornets' => 3
];

$supplements = [
    'Chocolat' => 1,
    'Chantille' => 0.5
];

?>
<?php require 'header.php' ?>



<form action="./checkbox.php" method="GET">

    <h3>Fruits</h3>
    <div class="checkbox">
        <?php foreach($parfums as $parfum => $prix): ?>
            <label>
                <input type="checkbox" name="parfum[]" value="<?=$parfum?>" >
                <?= $parfum ?> - <?= $prix . '$' ?>
            </label> <br />
        <?php endforeach ?>
    </div>
    <input type="submit" name="button" class="btn btn-primary" value="Suivant" >


    <h3>Cornets</h3>
    <div class="form-group">
        <input type="radio" name="fruit" value="tomate"> Tomate <br />
        <input type="radio" name="fruit" value="mangue"> Mangue <br />
        <input type="radio" name="fruit" value="orange"> Orange <br />
    </div>

    <h3>Supplements</h3>
    <div class="form-group">
        <input type="checkbox" name="fruit" value="tomate"> Tomate <br />
        <input type="checkbox" name="fruit" value="mangue"> Mangue <br />
        <input type="checkbox" name="fruit" value="orange"> Orange <br />
    </div>
    <button type="submit" class="btn btn-primary">Calculer</button>
</form>


<?php require 'footer.php' ?>