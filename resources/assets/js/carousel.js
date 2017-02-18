+function($) {
    'use strict';

    var carousel = function(element) {
        var self = this;
        this.element = element;


        this.replaceImages();

        $(function() {
            self.normalizeHeight();

            self.element.on('swipeleft', $.proxy(self.swipeleftHandler, self));
            self.element.on('swiperight', $.proxy(self.swiperightHandler, self));

            $(window).on('resize', $.proxy(self.resizeHandler, self));
        });
    };

    carousel.prototype.resizeHandler = function() {
        this.replaceImages();
        this.normalizeHeight();
    };

    carousel.prototype.normalizeHeight = function() {
        var maxHeight = 0;
        var items = this.element.find('.item');

        items.css('height', '');

        if ($(window).width() < 480) {
            items.each(function() {
                var itemHeight = $(this).height();
                if (itemHeight > maxHeight) {
                    maxHeight = itemHeight;
                }
            })
        }

        items.each(function() {
            if (maxHeight == 0) {
                $(this).css('height', '');
            } else {
                $(this).height(maxHeight);
            }
        });
    };

    carousel.prototype.replaceImages = function() {
        if ($(window).width() > 480) {
            if (!this.element.hasClass('desktop-images')) {
                this.element.toggleClass('desktop-images');
                this.element.find('img').each(function() {
                    var image = $(this);
                    image.attr('src', image.data('desktop-src'));
                });
            }
        } else {
            if (this.element.hasClass('desktop-images')) {
                this.element.toggleClass('desktop-images');
                this.element.find('img').each(function() {
                    var image = $(this);
                    image.attr('src', image.data('mobile-src'));
                });
            }
        }
    };

    carousel.prototype.swipeleftHandler = function(event) {
        this.element.carousel('next');
    };

    carousel.prototype.swiperightHandler = function(event) {
        this.element.carousel('prev');
    };

    $('.carousel').each(function() {
        new carousel($(this));
    });

} (jQuery);