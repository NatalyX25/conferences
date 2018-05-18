<?php
require_once "Models/speaker.php";
require_once "Models/conference.php";

$speakerObject = new Speaker();
$conferenceObject = new Conference();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2>Crear conferencia</h2>
            <form id="conference_form">
                <div class="form-group">
                    <input type="text" name="conference_name" id="conference_name" class="form-control" placeholder="Nombre de la conferencia"
                           data-validation="required">
                </div>
                <div class="form-group">
                    <input type="text" name="conference_place" id="conference_place" class="form-control" placeholder="Lugar"
                           data-validation="required">
                </div>
                <div class="form-group">
                    <input type="text" name="conference_date" id="conference_date" class="form-control" placeholder="Fecha"
                           data-validation="date" data-validation-format="yyyy-mm-dd">
                </div>
                <div class="form-group">
                    <textarea rows="4" cols="20" name="conference_description" id="conference_description" class="form-control"
                              placeholder="Descripción" data-validation="required"></textarea>
                </div>
                <div class="form-group">
                    <select name="conference_speaker" id="conference_speaker" class="form-control">
                        <?php
                        $speakers = $speakerObject->getAllSpeakers();
                        echo "<option value=0>Conferencista</option>";
                        foreach ($speakers as $speaker)
                        {
                            echo "<option value='{$speaker["id"]}'>{$speaker["name"]} {$speaker["last_name"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" onclick="javascript:submitConferenceForm()" class="btn btn-success">Crear conferencia</button>
            </form>
        </div>
        <div class="col-lg-8">
            <h2>Conferencias programadas</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Lugar</th>
                    <th>Fecha</th>
                    <th>Conferencista</th>
                </tr>

                <?php
                $conferences = $conferenceObject->getAllConferences();
                foreach ($conferences as $conference)
                {
                    echo "<tr>";
                    echo "<td>{$conference["title"]}</td>";
                    echo "<td>{$conference["description"]}</td>";
                    echo "<td>{$conference["place"]}</td>";
                    echo "<td>{$conference["date"]}</td>";
                    echo "<td>{$conference["speakerName"]} {$conference["last_name"]}</td>";
                    echo "</tr>";
                }
                ?>

            </table>
        </div>
    </div>
</div>

