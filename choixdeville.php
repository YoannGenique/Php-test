<form action="" method="post">
    <select name="ville">
        <option value=" ">...</option>
        <option value="paris">Paris</option>
        <option value="londre">Londre</option>
        <option value="madrid">Madrid</option> <br>
        <input type="submit" value="valider">
    </select>
</form>


<?php

        if (empty($_POST)){
            echo "Choisir une Ville";
        }
        else {
        $ville_choisi = $_POST['ville'];
    switch ($ville_choisi){
        default:
        echo "";
        break;
        case"paris":
        echo "mon pays est la France";
        break;
        case "londre":
        echo "mon pays est l'angleterre";
        break;
        case "madrid":
        echo "mon pays est l'espagne";
        break;
            }

    }

?>