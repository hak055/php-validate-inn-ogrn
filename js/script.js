function getdetails(){
    var name = $('#number').val();
    
    $.ajax({
        type: "POST",
        url: "details.php",
        data: {fname:name}
    }).done(function( result )
        {
            $("#msg").html(result);
        });
}