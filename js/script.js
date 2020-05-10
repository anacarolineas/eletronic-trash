window.sr = ScrollReveal();
sr.reveal('.navbar', {
    duration: 3000,
    origin: 'bottom'
});

sr.reveal('.showcase-left', {
    duration: 2000,
    origin: 'left',
    distance: '300px'
});

sr.reveal('.showcase-rigth', {
    duration: 2000,
    origin: 'rigth',
    distance: '300px'
});

sr.reveal('.showcase-top', {
    duration: 3000,
    origin: 'top',
});

$(function() {
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 800);
    });
});

