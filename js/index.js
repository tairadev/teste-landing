$("#form-participe").submit(function(event) {
    $("input#nome").attr("disabled", "disabled");
    $("input#email").attr("disabled", "disabled");
    $("input#telefone").attr("disabled", "disabled");
    $("button#btn-enviar").attr("disabled", "disabled");

    $("button#btn-enviar").text('Enviando...');

    var nome = $("input#nome").val();
    var email = $("input#email").val();
    var telefone = $("input#telefone").val();

    $.post('enviar_email.php', { nome, email, telefone }, function(response) {
        if(response.status == 'ok') {
            $("input#nome").val('');
            $("input#email").val('');
            $("input#telefone").val('');

            $("input#nome").removeAttr("disabled");
            $("input#email").removeAttr("disabled");
            $("input#telefone").removeAttr("disabled");
            $("button#btn-enviar").removeAttr("disabled");

            $("button#btn-enviar").text('Enviar');

            $("div#alert-email").css('display', 'block');

            setTimeout(function() {
                $("div#alert-email").css('display', 'none');
            }, 7000);
        }
    });
});