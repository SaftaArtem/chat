$(function () {
    $.removeCookie('name');
    console.log($.cookie('name'));
    if($.cookie('name') != '') {
        console.log("empty");
    } else {
        console.log($.cookie('name'));
    }
});