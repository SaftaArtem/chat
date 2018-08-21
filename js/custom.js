$(document).ready(function(){
    $('#btn').on('click', myAJAX);
});

function myAJAX(){
    //AJAX запрос
    $.post(
        "handler",
        {
            "message": $('#input_message').val(),
            "name": $.cookie('name')
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
                    out += '<div class=" item row justify-content-center mb-5 mt-5">' +
                                '<div class="col-12">' +
                                    '<div class="row justify-content-center">' +
                                        '<div class="col-7 header_mess rad">' +
                                            '<div class="avatar">\n' +
                                                '<img src="images/ava.png" alt="ava">' +
                                            '</div>' +
                                            '<div class="name">'+key+'</div>' +
                                        '</div>' +
                                        '<div class="col-7 message rad">' +
                                            data_r[i][key] +
                                        '</div>' +
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
