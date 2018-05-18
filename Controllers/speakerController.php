<?php

require_once "../Form/SpeakerForm.php";
require_once "../Models/speaker.php";

$speakerData = new speakerForm($_POST);
$validateForm = $speakerData->validate();

if (!$validateForm){
    echo 'No se pudo agregar, revise la información ingresada';
}

if ($validateForm){
    $speakerObject = new speaker();
    if (!$speakerObject->saveNewspeaker($_POST)){
        echo 'No se pudo agregar, revise la información ingresada';
    }
    echo '¡Conferencista creado con éxito!';
}