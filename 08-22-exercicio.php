<?php

    echo "Looping com FOR: ";
    for ($i = 1; $i < 6; $i++) {
        echo "<h$i> Título h$i </h$i>";
    }

    echo "<br><hr>";



    // COMANDO WHILE - normalmente utilizado para elementos indeterminados
    $i = 1;

    echo "Looping com WHILE: ";
    while ($i < 6 ) {
        echo "<h$i> Título h$i </h$i>";
        $i++;
    }

    ?>