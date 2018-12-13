$('.carousel').carousel({
  interval: 7000
});
$('.Gold').hover(
       function(){ $(this).addClass('animated jello') },
       function(){ $(this).removeClass('animated jello') }
);
