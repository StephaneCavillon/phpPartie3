<h2>Exercice 7</h2>

<p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>

<?php
$a=1;
while($a<=100){
    echo $a . '<br>';
    echo 'On tient le bon bout...' . '<br>';
    $a+=15;
}

echo $a;
echo 'C\'est bon !!'

?>