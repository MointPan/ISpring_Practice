import $ from 'jquery';
import './slider.css';

export default class Slider {
    constructor(object) {
        //Slider compomemts
        this._master = $(object);
        this._viewport = $(object.children()[0]);
        this._wrapper = $(this._viewport.children()[0]);
        this._prev_button = $(this._viewport.children()[1]);
        this._next_button = $(this._viewport.children()[2]);
        this._nav_buttons = $(this._viewport.children()[3]).children();

        //Slider parameters 
        this._slideNow = 1;
        this._slideCount = this._wrapper.children().length;
        this._slideInterval = 2000;
        this._navButtonId = 0;
    }

    init() {
        this._listenPrevNextButtonsEvents();
        this._listenNavButtonsEvents();
    }

    _listenPrevNextButtonsEvents() {
        this._next_button.click(this._nextSlide.bind(this));
        this._prev_button.click(this._prevSlide.bind(this));
    }

    _nextSlide() {
        let translateWidth;
        if (this._slideNow == this._slideCount || this._slideNow <= 0 || this._slideNow > this._slideCount) {
            this._wrapper.css('transform', 'translate(0, 0)');
            this._slideNow = 1;
        } else {
            translateWidth = -this._viewport.width() * (this._slideNow);
            this._wrapper.css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            this._slideNow++;
        }
    }

    _prevSlide() {
        let translateWidth
        if (this._slideNow == 1 || this._slideNow <= 0 || this._slideNow > this._slideCount) {
            translateWidth = -this._viewport.width() * (this._slideCount - 1);
            _wrapper.css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            this._slideNow = this._slideCount;
        } else {
            translateWidth = -this._viewport.width() * (this._slideNow - 2);
            this._wrapper.css({
                'transform': 'translate(' + translateWidth + 'px, 0)',
                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
            });
            this._slideNow--;
        }
    }

    _listenNavButtonsEvents() {
        const that = this;
        const Clicked = function() {
            let translateWidth;
            that._navButtonId = $(this).index();
            if (that._navButtonId + 1 != that._slideNow) {
                translateWidth = -that._viewport.width() * (that._navButtonId);
                that._wrapper.css({
                    'transform': 'translate(' + translateWidth + 'px, 0)',
                    '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
                    '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
                });
            that._slideNow = that._navButtonId + 1;
            }
        }
        this._nav_buttons.click(Clicked);
    }
}

