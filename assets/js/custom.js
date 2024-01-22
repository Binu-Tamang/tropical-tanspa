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
  
  // nav and tab vertical
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();