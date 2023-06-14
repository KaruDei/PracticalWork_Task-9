import './bootstrap';

$(document).ready(function() {
    $('#loadAllComments').click(function(e) {
        e.preventDefault(); // Предотвращаем переход по ссылке по умолчанию
        
        // Выполняем AJAX-запрос
        $.ajax({
            url: $(this).attr('href'), // URL-адрес для загрузки всех комментариев
            type: 'GET', // Метод запроса
            dataType: 'html', // Тип данных, ожидаемых от сервера (html)
            success: function(response) {
                // Обновляем содержимое списка комментариев
                $('#commentsList').html(response);
            },
            error: function() {
                // Обработка ошибок
                alert('Произошла ошибка при загрузке комментариев.');
            }
        });
    });
});