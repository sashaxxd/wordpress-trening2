/**
 меню
 */
$(document).ready(function()
{

    $("#wb_ResponsiveMenu ul li a").click(function(event)
    {
        $("#wb_ResponsiveMenu input").prop("checked", false);
    });



});

/**
 плавное открытие меню
 */
$(document).ready(function(){

    $( "#ResponsiveMenu-title" ).click(function(e) {
        e.preventDefault();
        $(".ResponsiveMenu").slideToggle(400);



        $(this).toggleClass('m_close ');//добавляемм класс закрытия меню
        $('#ResponsiveMenu-icon').toggle();//Перекллючам иконку меню
    });



});


