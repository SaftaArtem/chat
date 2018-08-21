$(document).ready(function(){
    $('#btn').on('click', myAJAX);
    $('#main_btn').on('click', function () {
        if ($( '#sidebar' ).hasClass( "hide" )) {
            $('#sidebar').removeClass('hide');
        } else {
            $('#sidebar').addClass('hide');
        }
    });


});

function myAJAX(){
    //AJAX запрос
    $.post(
        "handler",
        {
            "message": $('#input_message').val(),
        },
        function(data){
            console.log(data);
            $('#input_message').val('');
        }
    );
}
function get_message_chat() {
    $.post(
        "all",
        {},
        function(data){
            var data_r = JSON.parse(data),
                out='';
            for( var i = 0; i < data_r.length; i++ ) {
                for(var key in data_r[i]){
                    console.log(key);
                    out += '<div class="row">\n' +
                                '<div class="card message-card m-1">' +
                                    '<div class="card-body p-2">' +
                                        '<span>'+key+'</span>'+
                                        '<span class="mx-2">'+
                                            data_r[i][key] +
                                        '</span>' +
                                        ' <span class="float-right mx-1"><small>14:13<i class="fas fa-eye fa-fw" style="color:#e64980"></i></small></span>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                }
                $('.chat-mess').html(out);
            }
        }
    );
    // $("html,body").animate({"scrollTop":3000},3000);
}
$(".chat-mess").everyTime(2000, 'refresh', function() {
    get_message_chat();
});
