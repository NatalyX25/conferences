<?php
require_once "Models/speaker.php";

$speakerObject = new Speaker();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2>Crear conferencia</h2>
            <form id="conference_form">
                <div class="form-group">
                    <input type="text" name="conference_name" id="conference_name" class="form-control" placeholder="Nombre de la conferencia">
                </div>
                <div class="form-group">
                    <input type="text" name="conference_place" id="conference_place" class="form-control" placeholder="Lugar">
                </div>
                <div class="form-group">
                    <input type="text" name="conference_date_time" id="conference_date_time" class="form-control" placeholder="Fecha y hora" data-validation="date" data-validation-format="yyyy-mm-dd">
                </div>
                <div class="form-group">
                    <textarea rows="4" cols="20" name="conference_description" id="conference_description" class="form-control" placeholder="Descripción"></textarea>
                </div>
                <div class="form-group">
                    <select id="conference_speaker" class="form-control">
                        <?php
                        $speakers = $speakerObject->getAllSpeakers();
                        echo "<option value=0>Conferencista</option>";
                        foreach ($speakers as $speaker)
                        {
                            echo "<option value='{$speaker["id"]}'>{$speaker["name"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" onclick="javascript:submitConferenceForm()" class="btn btn-success">Crear conferencia</button>
            </form>
        </div>
        <div class="col-lg-8">
            <h2>Heading</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Lugar</th>
                    <th>Fecha y hora</th>
                    <th>Conferencista</th>
                </tr>
                <tr>
                    <td>Conferencia de algo</td>
                    <td>Brinda alguna información</td>
                    <td>En algún sitio</td>
                    <td>2018-05-17 17:00</td>
                    <td>Fulano De Tal</td>
                </tr>

            </table>
        </div>
    </div>
</div>

