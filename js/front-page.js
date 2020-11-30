
/*Carousel*/
$('.main-carousel').flickity({
    groupCells: 3,
    contain: true,
    accessibility: false
});


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
