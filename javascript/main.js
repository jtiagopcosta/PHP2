/*mensagens de erro/ok*/
$('.close').click(function() {
$(this).parent().fadeOut(1000);
});


/* aba para abertura de logout*/
$('.username').click(function() {
    $("#logout").fadeIn(1000);
    });

$('.logout').click(function() {
    $("#logout").fadeOut(1000);
    });

/* configurações*/

$('.nomeperfil').click(function() {
    $("#nome").fadeIn(1000);
    });

$('.fechanome').click(function() {
    $("#nome").fadeOut(1000);
    });


$('.senhaperfil').click(function() {
    $("#senha").fadeIn(1000);
    });

$('.fechasenha').click(function() {
    $("#senha").fadeOut(1000);
    });
