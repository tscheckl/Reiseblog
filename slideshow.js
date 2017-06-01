'use strict';

$(function() {

    //cache DOM elements
    var $slider = $('#slider');
    var $slideContainer = $('.slides', $slider);
    var $slides = $('.slide', $slider);
    var $slide = $('#slider .slide');
    var $prevslide = $('#prevslide');
    var $nextslide = $('#nextslide');

    //settings for slider
    var width = parseInt($slide.css('width'));
    var animationSpeed = 1000;
    var pause = 3000;
    var currentSlide = 1;

    var interval;
     

    function startSlider() {
        interval = setInterval(function() { 
            $slideContainer.animate({'margin-left': '-='+width+'px'}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });
        }, pause);
    }
    
    function pauseSlider() {
        clearInterval(interval);
    }
    
    function nextSlide(){
         //Automatisches Weiterlaufen wird angehalten
        pauseSlider();

        //manuelle Animation (s. Startslider Funktion)
        $slideContainer.animate({'margin-left': '-='+width+'px'}, animationSpeed, function() {
                if (++currentSlide === $slides.length) {
                    currentSlide = 1;
                    $slideContainer.css('margin-left', 0);
                }
            });

        //Automatisches Weiterlaufen wird fortgesetzt
        startSlider();
    }                

    function prevSlide(){
        
        //Automatisches Weiterlaufen wird angehalten
        pauseSlider();

        //wenn ein Bild vor dem Aktuellen existiert, Animation 1 Bild zurück
        if (--currentSlide !== 0) {
            $slideContainer.animate({'margin-left': '+='+width+'px'}, animationSpeed, function() {


            });
        }
        else{
        //Ansonsten Jump auf das letzte Bild, $slides.length-2 um dynamisch und unabhängig von der Anzahl der Bilder 
            $slideContainer.animate({'margin-left': '-='+width*($slides.length-2)+'px'}, animationSpeed, function() {
                currentSlide = $slides.length-1;

            });

        }

        //Automatisches Weiterlaufen wird fortgesetzt
        startSlider();
    }

    $slideContainer
        .on('mouseenter', pauseSlider)
        .on('mouseleave', startSlider)
        .on('swipeleft', nextSlide)
        .on('swiperight', prevSlide);
        
   
    //Button für das nächste Bild wird geklickt
    $nextslide.click(function(){
        nextSlide()        
    });
    
    
    //Button für das vorherige Bild wird geklickt
    $prevslide.click(function(){
        prevSlide();
    });

    startSlider();

    
});