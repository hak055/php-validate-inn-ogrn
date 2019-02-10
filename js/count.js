/*подсчет количества введенных символов*/
$(function(){

$("#number").keyup(function count(){

number = $("#number").val().length;

$("#count").html(number);

});

});