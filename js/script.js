var $ = jQuery.noConflict();

$(document).ready(function($) {
	"use strict";

    /*-------------------------------------------------*/
    /* =   Smooth scroll
    /*-------------------------------------------------*/

    //Get Sections top position
    function getTargetTop(elem){

        //gets the id of the section header
        //from the navigation's href e.g. ("#html")
        var id = elem.attr("href");

        //Height of the navigation
        var offset = 60;

        //Gets the distance from the top and
        //subtracts the height of the nav.
        return $(id).offset().top - offset;
    }

    //Smooth scroll when user click link that starts with #

    var elemHref = $('.navbar-nav a[href^="#"]');

    elemHref.click(function(event) {
        //gets the distance from the top of the
        //section refenced in the href.
        var target = getTargetTop($(this));

        //scrolls to that section.
        $('html, body').animate({scrollTop:target}, 500);

        //prevent the browser from jumping down to section.
        event.preventDefault();
    });

    //Pulling sections from main nav.
    var sections = [];//$('.navbar-right a[href^="#"]');

    // Go through each section to see if it's at the top.
    // if it is add an active class
    function checkSectionSelected(scrolledTo){

        //How close the top has to be to the section.
        var threshold = 100;

        var i;

        for (i = 0; i < sections.length; i++) {

            //get next nav item
            var section = $(sections[i]);

            //get the distance from top
            var target = getTargetTop(section);

            //Check if section is at the top of the page.
            if (scrolledTo > target - threshold && scrolledTo < target + threshold) {

                //remove all selected elements
                sections.removeClass("active");

                //add current selected element.
                section.addClass("active");
            }

        }
    }

    //Check if page is already scrolled to a section.
    checkSectionSelected($(window).scrollTop());

    $(window).scroll(function(){
        checkSectionSelected($(window).scrollTop());
    });

    /* ---------------------------------------------------------------------- */
    /*	Contact Map
    /* ---------------------------------------------------------------------- */
    var contact = {"lat":"-8.1276157", "lon":"112.6798475"}; //Change a map coordinate here!

    try {
        var mapContainer = $('#map');
        mapContainer.gmap3({
            action: 'addMarker',
            latLng: [contact.lat, contact.lon],
            map:{
                center: [contact.lat, contact.lon],
                zoom: 14
                },
            },
            {action: 'setOptions', args:[{scrollwheel:true}]}
        );
    } catch(err) {
        console.log(err);
    }

    /* ---------------------------------------------------------------------- */
    /*  Preload Image
    /* ---------------------------------------------------------------------- */
    var cl = cloudinary.Cloudinary.new({cloud_name: "duy7bgnk8"}); 
    cl.responsive();

    /* ---------------------------------------------------------------------- */
    /*  Auto Close Navbar
    /* ---------------------------------------------------------------------- */
    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });
});
