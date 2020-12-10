<h2>Exercice 6</h2>

<p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>

<?php
for($i=20; $i>=0; $i--){
    if($i==0){
        echo $i;
        echo ' c\'est bon !';
    } else {
        echo $i;
        echo ' C\'est presque bon...' . '<br>';
    }
}

?>