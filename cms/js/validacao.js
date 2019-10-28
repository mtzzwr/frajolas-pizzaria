$(function() {
    $('#txt-nome').on('input', function() {
        $(this).val($(this).val().replace(/[0-9]/g,''))
    });
});

$(function() {
    $('#txt-celular').on('input', function() {
        $(this).val($(this).val().replace(/[a-zA-Z]/g,''))
    });
});

$(function() {
    $('#txt-telefone').on('input', function() {
        $(this).val($(this).val().replace(/[a-zA-Z]/g,''))
    });
});

$(function() {
    $('#txt-cpf').mask('000.000.000-00');
});

$(function() {
    $('#txt-rg').mask('00.000.000-0');
});

$(function() {
    $('#txt-telefone').mask('00 0000-0000');
});

$(function() {
    $('#txt-celular').mask('00 00000-0000');
});
