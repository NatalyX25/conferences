<?php
require_once "Models/speaker.php";

$speakerObject = new Speaker();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h2>Crear conferencista</h2>
            <form id="speaker_form">
                <div class="form-group">
                    <input type="text" name="speaker_name" id="speaker_name" class="form-control" placeholder="Nombres"
                           data-validation="required">
                </div>
                <div class="form-group">
                    <input type="text" name="speaker_last_name" id="speaker_last_name" class="form-control" placeholder="Apellidos"
                           data-validation="required">
                </div>
                <div class="form-group">
                    <input type="text" name="speaker_phone_number" id="speaker_phone_number" class="form-control" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <input type="text" name="speaker_email" id="speaker_email" class="form-control" placeholder="Correo electrónico"
                           data-validation="email">
                </div>
                <div class="form-group">
                    <input type="text" name="speaker_organization" id="speaker_organization" class="form-control" placeholder="Organización"
                           data-validation="required">
                </div>
                <div class="form-group">
                    <textarea rows="4" cols="20" name="speaker_cv_resume" id="speaker_cv_resume" class="form-control" placeholder="CvLAC"></textarea>
                </div>
                <button type="submit" onclick="javascript:submitSpeakerForm()" class="btn btn-success">Crear conferencista</button>
            </form>
        </div>
        <div class="col-lg-8">
            <h2>Conferencistas registrados</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo electrónico</th>
                    <th>Organización</th>
                    <th>CvLAC</th>
                </tr>

                <?php
                $speakers = $speakerObject->getAllSpeakers();
                foreach ($speakers as $speaker)
                {
                    echo "<tr>";
                    echo "<td>{$speaker["name"]} {$speaker["last_name"]}</td>";
                    echo "<td>{$speaker["phone_number"]}</td>";
                    echo "<td>{$speaker["email"]}</td>";
                    echo "<td>{$speaker["organization"]}</td>";
                    echo "<td>{$speaker["cv_resume"]} </td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/general.js"></script>
</body>
</html>

