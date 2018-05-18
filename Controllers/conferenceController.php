<?php

require_once "../Form/ConferenceForm.php";
require_once "../Models/conference.php";

$conferenceData = new ConferenceForm($_POST);
$validateForm = $conferenceData->validate();

if (!$validateForm){
    echo 'No se pudo agregar, revise la información ingresada';
}

if ($validateForm){
    $conferenceObject = new Conference();
    if (!$conferenceObject->saveNewConference($_POST)){
        echo 'No se pudo agregar, revise la información ingresada';
    }
    echo '¡Conferencia creada con éxito!';
}
