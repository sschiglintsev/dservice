function call() {

    var msg = $('#formx').serialize();
    var r = $("#region").val();
    var k = $("#courier").val();
    var d = $("#date_from").val();

    if (r==0 || k==0 || d=="") {
        return alert('Не все поля выбраны');
    }

    $.ajax({
        type: 'POST',
        url: './includes/add_date.php',
        cache: false,
        data: msg,
        success: function(data) {
            $('#results').html(data);
        },
        beforeSend: function(data) {
            $('#results').html('<p>Ожидание данных...</p>');
        },
        dataType:"html",
        error:  function(data){
            $('#results').html('<p>Возникла неизвестная ошибка. Пожалуйста, попробуйте чуть позже...</p>');
        }

    });

}