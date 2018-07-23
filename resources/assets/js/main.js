global.$ = global.jQuery = require('jquery');
import 'bootstrap';

jQuery( document ).ready(function($) {
    $('.carousel').carousel({
        interval: 3500
    })
    $('#hero-slider').on('slide.bs.carousel', function (event) {
      // console.log(event.from); from the last slider 
      //console.log(event.to); to the next slider
    });


    $('#sidebar-menu li').on('click', function(e){
        e.preventDefault();
    });


    
});
