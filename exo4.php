<h2>Exercice 4</h2>

<p>Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur</p>

<?php
$a=1;

while($a <= 10){
    echo 'la variable est égale à ' . $a . '<br>';
    $a+= ($a/2);
}

?>