<?php
    //foreach.php
    
    // $var=[
    //     'hughinho',
    //     'zizinho',
    //     'luizinho'
    // ];

    // foreach ($var as $valor) {
    //     echo "<p>{$valor} | {$valor}</p>";
    // }

    $pessoa=[
        'nome'=>'fulano',
        'idade'=>'86',
        'cidade'=>'bento',
    ];

    foreach ($pessoa as $indice => $valor) {
        echo "<p><b>{$indice}:</b> {$valor}</p>";
    }
    