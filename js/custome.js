$('.menu-icon').click(function(){
    console.log('okay');
    $(this).toggleClass("change-open");
    $('.menu nav ul').toggleClass("menu-open");
});