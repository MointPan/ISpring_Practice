import $ from 'jquery';

import './about_me.css';

import './components/slider/slider.js';

$(document).ready(function () {
    $('#next-button').click(function() {
        nextSlide();
    });

    $('#prev-button').click(function() {
        prevSlide();
    });

    $('.slide-nav-button').click(function() {
        navButtonId = $(this).index();

        if (navButtonId + 1 != slideNow) {
            translateWidth = -$('#viewport').width() * (navButtonId);
            $('#slidewrapper').css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            slideNow = navButtonId + 1;
        }
    });
});