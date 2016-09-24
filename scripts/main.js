$(document).ready(function(){

  // INVESTORS SLIDER

  if ( $('body').is('#home') ) {
    $('.investors-slider').slick({
  	infinite: true,
  	slidesToShow: 6,
  	slidesToScroll: 1,
  	autoplay: true,
  	autoplaySpeed: 2000,

  	prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
  	nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',

  	responsive: [
      {
        breakpoint: 768,
        settings: {
  		slidesToShow: 4,
        }
      },
      {
        breakpoint: 480,
        settings: {
  		slidesToShow: 3,
        }
      }
    ]
    });

    // Moving next button before the previous button -- backwards due to float-right styling
    if ($('button.slick-next')) {
    	$('button.slick-next').insertBefore('button.slick-prev');
    }

  }

  // Serializing form values
	$( "#contact_form" ).on( "submit", function( event ) {
	  event.preventDefault();
	  console.log( $( this ).serialize() );
	});


});