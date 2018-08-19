<?php

  function hack($string, $key) {
    $letters = str_split($string);

    $combos = array_unique($letters);
    $lastres = $letters;
    $i = 1;
    $sortie = false; 
    
    while ($i < count($letters) || $sortie) {
        $newres = array();
        foreach ($lastres as $r) {
            foreach ($letters as $let) {
                $new = $r . $let;
                if (!in_array($new, $newres)) {
                    $newres[] = $new;
                    
                    if ($key == $new) {
                        echo $new . "\r";
                        echo $i;
                        $sortie = true;
                    }
                    
                }

            }
        }

        $lastres = $newres;
        
        $i++;

    }

    //return $combos;
}

hack("abcdefghijklmnopqrstuvwxyz123456789", "mdp2teste");

?>
