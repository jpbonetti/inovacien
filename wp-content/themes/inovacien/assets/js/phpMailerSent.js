$(document).ready(function() {
    $('#formContato').ajaxForm(function() {
        swal('Sucesso!', 'Retornaremos seu contato o mais breve possível', 'success');
        $('#formContato').clearForm();
    });
})