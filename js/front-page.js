var activeP = 1;
$('.main-carousel').flickity({
    groupCells: 3,
    contain: true,
    accessibility: false
  });
$( ".section__missions .wp-block-button" ).click(function() {
  $( ".section__missions .wp-block-button__link--active" ).removeClass("wp-block-button__link--active");
  $(this).addClass("wp-block-button__link--active");
  $(".section__missions p").css("display", "none");
  $(".section__missions p:nth-child("+(activeP+1)+")").css("display", "block");
  if(activeP == 1)
  {
    activeP--;
  }
  else
  {
    activeP++;
  }
});