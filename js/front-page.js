document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#splide1', {
    perPage    : 3,
		breakpoints: {
			600: {
				perPage: 1,
			}
		}
  } ).mount();

  new Splide( '#splide2', {
    perPage    : 3,
		breakpoints: {
			600: {
				perPage: 1,
			}
		}
	} ).mount();
} );


$( ".section__missions .wp-block-button:nth-child(1)" ).click(function() {//attend le click
  $( ".section__missions .wp-block-button__link--active" ).removeClass("wp-block-button__link--active");
  $(this).addClass("wp-block-button__link--active");
  $(".section__missions p").css("display", "none");
  $(".section__missions .wp-block-group__inner-container p:nth-child(1)").css("display", "block");
});


$( ".section__missions .wp-block-button:nth-child(2)" ).click(function() {//attend le click
  $( ".section__missions .wp-block-button__link--active" ).removeClass("wp-block-button__link--active");
  $(this).addClass("wp-block-button__link--active");
  $(".section__missions p").css("display", "none");
  $(".section__missions .wp-block-group__inner-container p:nth-child(2)").css("display", "block");
});
