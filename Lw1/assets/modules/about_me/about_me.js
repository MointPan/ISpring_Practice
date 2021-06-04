import $ from 'jquery';

import './about_me.css';

import Slider from './components/slider/slider.js';

$(document).ready(() => {
    $('.slider').each((i, obj) => {
        //Create new "slider" object for each slider on the page
        const slider = new Slider($(obj));
        slider.init();
    })
});