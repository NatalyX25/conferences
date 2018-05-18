
function submitConferenceForm() {
    var url = "Controllers/conferenceController.php";

    $.ajax({
        type: "POST",
        url: url,
        data: $("#conference_form").serialize(),
        success: function(data)
        {
            alert(data);
        }
    });

}

function submitSpeakerForm() {
    var url = "Controllers/speakerController.php";

    $.ajax({
        type: "POST",
        url: url,
        data: $("#speaker_form").serialize(),
        success: function(data)
        {
            alert(data);
        }
    });

}

$("#conference_form").submit(function(e){
    return false;
});

$("#speaker_form").submit(function(e){
    return false;
});

$.validate({
    lang: 'es'
});