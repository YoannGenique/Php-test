<?php 
$longueur = $_POST['longueur'];
$largeur = $_POST['largeur'];
$surface = $longueur * $largeur;
echo $surface;
?>
<!-- calcul de la surface -->

<!-- l'utilisateur doit rentrer ses valeurs pour calculer -->
<form action="" method="post">
    Entrer une longueur : <input type="number" name="longueur"> <br>
    Entrer une largeur : <input type="number" name="largeur"> <br>
    <input type="submit" value="calcul">
</form>