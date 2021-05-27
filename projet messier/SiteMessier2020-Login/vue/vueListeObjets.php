
<h1>Liste des objets</h1>

<?php
    //Récupération de la page
    $page = $_GET["page"];
    
    switch($page){
        case 1:
            $debut = 0;
            $fin = 22;
            break;
        case 2:
            $debut = 22;
            $fin = 44;            
            break;
        case 3:
            $debut = 44;
            $fin = 66;            
            break;
        case 4:
            $debut = 66;
            $fin = 88;            
            break;
        case 5:
            $debut = 88;
            $fin = 110;            
            break;
        default:
            $debut = 0;
            $fin = 22;            
    }
?>


<div class="card">
    
<?php
for ($i = $debut; $i < $fin; $i++) {
    
    $numero = $listeObjets[$i]['numero'];
    $nom = $listeObjets[$i]['nomCommun'];
    $libelleType = $listeObjets[$i]['libelle'];
?>

    <?php echo "<a href='./?action=detail&numero=" . $numero . "'>" . $numero . "</a>"; ?>
        <?= $nom." (".$libelleType.")" ?>
        <br />
    <?php
}
?>
                
</div>

Pages 
<a href='./?action=liste&page=1'>1, </a>
<a href='./?action=liste&page=2'>2, </a>
<a href='./?action=liste&page=3'>3, </a>
<a href='./?action=liste&page=4'>4, </a>
<a href='./?action=liste&page=5'>5 </a>


