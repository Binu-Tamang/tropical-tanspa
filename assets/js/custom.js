// banner slider
$(window).on('load resize scroll', function(){
  var winWidth = $(window).innerWidth();
  var containerWidth = $('.container').innerWidth();
  var totalSubtractedWidth = winWidth-containerWidth;
  var totalDividedWidth = totalSubtractedWidth/2;
  $('.banner-context').css('left', totalDividedWidth+"px");
})

// testimonial owl slider reviews
$('.owl-carousel.testimonial-owl').owlCarousel({
    loop: true,
      autoplay: true,
      items: 1,
    margin:20,
      stagePadding: 5,
      nav: false,
    center:false,
    responsive:{
        0:{
            items:1
        },
        800:{
            items:2
        }
    }
  })
  
  // isotope js
var grid = $(".portfolio-item").isotope({
  // options
  itemSelector: ".item",
  layoutMode: "fitRows",
});

$(".portfolio-menu ul li").click(function () {
  $(".portfolio-menu ul li").removeClass("active");
  $(this).addClass("active");
  var category = $(this).data("filter");
  grid.isotope({
    filter: category,
  });
});