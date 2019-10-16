$(function() {
    $('#txt-nome').on('keyup', function() {
        $(this).val($(this).val().replace(/[0-9]/g,''))
    });
});

$(function() {
    $('#txt-celular').on('keyup', function() {
        $(this).val($(this).val().replace(/[a-zA-Z]/g,''))
    });
});

$(function() {
    $('#txt-telefone').on('keyup', function() {
        $(this).val($(this).val().replace(/[a-zA-Z]/g,''))
    });
});

$(function() {
    $('#txt-profissao').on('keyup', function() {
        $(this).val($(this).val().replace(/[0-9]/g,''))
    });
});

// máscaras
$(function() {
    $('#txt-telefone').mask('00 0000-0000');
});

$(function() {
    $('#txt-celular').mask('00 00000-0000');
});



