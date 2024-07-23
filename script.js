$(document).ready(function(){
    let currentSlide = 0;
    const slides = $('.slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.hide();
        slides.eq(index).show();
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    $('.next').click(nextSlide);
    $('.prev').click(prevSlide);

    showSlide(currentSlide);

    $('#menuIcon').click(function() {
        $(this).toggleClass('toggle');
        $('#menu').toggleClass('toggle');
    });
});
