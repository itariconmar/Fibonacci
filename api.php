<?php

$index = $_REQUEST['index'];

if($index){

    $serie  = [0,1];
 
    for($i=2;$i<=$index;$i++)
    {
        $serie[] = $serie[$i-1]+$serie[$i-2];
    }

    echo $serie[$index];

}else{

    $datos = ['error' => true, 'mssg' => 'Need the index'];
    echo json_encode($datos);

}

