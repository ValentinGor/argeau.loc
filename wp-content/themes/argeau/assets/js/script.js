// Плавный скролл
$(document).ready(function(){
    $("#scroll__bot").on("click","a", function () {
        let id  = $(this).attr('href');
        let top = $(id).offset().top;

        //анимируем переход 1000 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
    $("#menu").on("click","a", function () {
        let id  = $(this).attr('href');
        let top = $(id).offset().top;

        //анимируем переход 1000 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });
});

// Menu
document.getElementById('menu_toggle').onclick = function (e){
    e.preventDefault();
    this.classList.toggle('active');
    document.getElementById('menu').classList.toggle('active');
    document.getElementById('menu_toggle_sticky').classList.toggle('active');
}

document.getElementById('menu_toggle_sticky').onclick = function (e){
    e.preventDefault();
    this.classList.toggle('active');
    document.getElementById('menu').classList.toggle('active');
    document.getElementById('menu_toggle').classList.toggle('active');
}

// Прилипающий хедер
$(window).scroll(function(){
    if ( $(this).scrollTop() > 150 ) {
        $('.sticky__header').addClass('fix');
    } else {
        $('.sticky__header').removeClass('fix');
    }
})