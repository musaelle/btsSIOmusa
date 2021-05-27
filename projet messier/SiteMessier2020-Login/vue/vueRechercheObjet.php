
<h1>Recherche d'objets</h1>

<form action="./?action=recherche&critere=<?= $critere ?>" method="POST">


    <?php
    switch ($critere) {
        case "numero":
    ?>
            Recherche par numero : <br />
            <input type="text" name="numeroObj" placeholder="numero" value="<?= $numeroObj ?>" /><br />
    <?php
            break;
    }
    ?>
    <br /><br />
    <input type="submit" value="Rechercher" />

</form>
