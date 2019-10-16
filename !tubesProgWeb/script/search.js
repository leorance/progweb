$('document').ready(function(){
    $("#search").on('keyup', function () {
        // $("#container").load("ajax/lagu.php".$("#search").val());
        $.get('ajax/lagu.php?search=' + $('#search').val(), function (data) {
            $('#container').html(data);
        });
    });
});