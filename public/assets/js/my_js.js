$('#form-contact').submit(function(e) {
    e.preventDefault();

    var name = $("#name").val();
    var email = $("#email").val();
    var service = $("#service").val();
    var subject = $("#subject").val();
    var description = $("#description").val();
    
    $.ajax({
        type:'POST',
        url: "/contact/store",
        data: {
            name: name,
            email: email,
            service: service,
            subject: subject,
            description: description
        },
        dataType: "json",
        success: (response) => {
            $("#name").val("");
            $("#email").val("");
            $("#service").val("Selecionar Serviço");
            $("#subject").val("");
            $("#description").val("");

            $('#sucess-message').show();
        },
        error: function(response, data){
            $('#error-message').show()
        }
    });      
});    