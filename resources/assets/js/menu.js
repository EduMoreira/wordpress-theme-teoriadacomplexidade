+function($) {
    'use strict';

    var Menu = function() {
        this.heroElement = $("#banner");
        this.headerElement = $("#header");
        this.menuButton = $("#menu-button");
        this.mobileMenu = this.headerElement.find('.menu.mobile');
        this.scrollTimeout = null;

        if (this.heroElement.length) {
            $(window).scroll($.proxy(this.scrollHandler, this));
            $(window).resize($.proxy(this.resizeHandler, this));
            this.updateHeroBottomPosition();
        } else {
            this.headerElement.addClass('condensed');
        }

        this.menuButton.on('click', $.proxy(this.clickHandler, this));
        this.updateMenuSize();
    };

    Menu.prototype.clickHandler = function() {
        $("body").toggleClass("no-scroll");
        this.mobileMenu.toggleClass('open');
        this.menuButton.toggleClass('open');
    };

    Menu.prototype.updateHeroBottomPosition = function() {
        this.heroBottomPosition = this.heroElement.position().top + this.heroElement.outerHeight(true);
    };

    Menu.prototype.resizeHandler = function() {
        this.updateHeroBottomPosition();
    };

    Menu.prototype.scrollHandler = function() {
        if (!this.scrollTimeout) {
            var self = this;
            this.scrollTimeout = setTimeout(function() {
                self.scrollTimeout = null;
                self.updateMenuSize.apply(self);
            }, 200);
        }
    };

    Menu.prototype.updateMenuSize = function() {
        if ($(window).scrollTop() > this.heroBottomPosition - 152) {
            this.headerElement.addClass('condensed');
        } else {
            this.headerElement.removeClass('condensed');
        }
    };

    new Menu();
} (jQuery);