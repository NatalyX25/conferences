
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

$("#conference_form").submit(function(e){
    return false;
});

$.validate({
    lang: 'es'
});