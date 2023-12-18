<?php
    header('Access-Control-Allow-Origin: http://localhost:3000');

    $type = $_POST['type'];
    $value = $_POST['value'];
    
    $segitiga = 126673;
    $lenSeg = strlen($segitiga);

    $ganjil = 11;

    $prima = 11;
    $primaStatus = true;
    
    if($type == 'segitiga') {
        echo("Using Dummy Data => <br>Segitiga : " . $segitiga . "<br>Length Segitiga : " . $lenSeg . "<br>");
        for($i = 0; $i < $lenSeg; $i++) {
            for($j = 0; $j <= $i; $j++) {
                echo("0");
            }
            echo("<br>");
        }
    } else if($type == 'ganjil') {
        echo("Using Dummy Data => Ganjil : ". $ganjil . "<br>");
        for($i = 0; $i <= $ganjil; $i++) {
            if($i % 2 != 0) {
                echo($i . " ");
            }
        }
    } else if($type == 'prima') {
        echo("Using Dummy Data => Prima : ". $prima . "<br>");
        if($prima >= 2) {
            for($i = 2; $i < $prima; $i++) {
                if($prima % $i == 0) {
                    $primaStatus = false;
                    echo("Bilangan ini Tidak Prima");
                    break;
                }
                if($i == $prima-2) {
                    echo("Bilangan ini Prima");
                    break;
                }
            }
        } else {
            echo("Invalid Input");
        }
    }
?>