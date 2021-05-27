
<h1>Résultat de la recherche</h1>

<?php
    if($lesObjets){
?>
        <div class="card">
            <?php
                    
                for($i = 0; $i < count($lesObjets); $i++){
                    $numero = $lesObjets[$i]['numero'];
                    $nom = $lesObjets[$i]['nomCommun'];
                    $libelleType = $lesObjets[$i]['libelle'];
            ?>
                    <div class="descrCard"><?php echo "<a href='./?action=detail&numero=" . $numero . "'>" . $numero . "</a>"; ?>
                        <?= $nom." (".$libelleType.")" ?>
                        <br />
                    </div>     
<?php
                }
    }
    else{
?>
        <div class="card">
            <div class="descrCard"><?php echo "Objet non référencé !"; ?>
                <br />
            </div>
<?php
    }
?>