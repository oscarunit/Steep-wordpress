
/*Carousel*/
$('.main-carousel').flickity({
    groupCells: 3,
    contain: true,
    accessibility: false
  });

//Déclration des variables
var activeP = 1;

//Au click sur un bouton de la section missions changé le contenu
$( ".section__missions .wp-block-button" ).click(function() {//attend le click
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