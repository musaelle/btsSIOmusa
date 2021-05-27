
<h1><?= $unObjet[0]['numero']; ?></h1>


<p id="principal">
    <img src="photos/<?= $laPhoto ?>" alt="photo de l'objet" />
    <br />
    <br />    
    <?= "Nom : ". $unObjet[0]['nomCommun']; ?>    <br />
    <?= "Constellation : ". $unObjet[0]['constellation']; ?>    <br />
    <?= "Type d'objet : ". $unObjet[0]['libelle']; ?>    <br />
    <?= "Période de visibilité : ". $unObjet[0]['periodeVisibilite']; ?>    <br />
    <?= "Magnitude : ". $unObjet[0]['magnitude']; ?>    <br />
    <?= "Diamètre apparent : ". $unObjet[0]['diametreApparent']; ?>        <br />
</p>