<h2>Exercice 5</h2>

<p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>

<?php
for($a=1; $a <= 15;$a++){
    if($a==15){
        echo $a . ' On y est !';
    }else{
        echo $a;
        echo ' on y arrive presque...' . '<br>';
    }
}

?>