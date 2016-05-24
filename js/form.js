$(document).ready(function(){
    $("#form").submit(function() { //устанавливаем событие отправки для формы с id=form
        var form_data = $(this).serialize(); //собераем все данные из формы
        $.ajax({
            type: "POST", //Метод отправки
            url: "../form.php",
            data: form_data,
            /*success: function() {
                //код в этом блоке выполняется при успешной отправке сообщения
                alert("Your message is sent successfully!")}*/
        });
    });
});
