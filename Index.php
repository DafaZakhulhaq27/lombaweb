<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/animate.css">
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/basic-jquery-slider.js"></script>


</head>
<body>
  <div class="header">
    <div class="head-item">
        <a href="#aboutus"><div class="item"><h3 class="text-item">About Us</h3></div></a>
        <a href="#galeri"><div class="item"><h3 class="text-item">Galeri</h3></div></a>
        <a href="#cerita"><div class="item"><h3 class="text-item">Cerita Kita</h3></div></a>
        <a href="#beranda"><div class="item"><h3 class="text-item">Beranda</h3></div></a>
    </div>
  </div>
  <div id="home">

      <div class="start">
        <h1> MULAI MENJELAJAH </h1>
      </div>


  </div>


<?php
include('include/beranda.php') ;
include('include/cerita.php') ;
include('include/galeri.php') ;
include('include/aboutus.php') ;
?>




<script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('#tuts-slider').bjqs({
          'animation' : 'slide',
          'width' : 900,
          'height' : 250,
          'showMarkers' :false,
          nextText: '<i class="icon-chevron-right">next</i>',
        prevText: '<i class="icon-chevron-left">prev</i>',
        });
    });
</script>


</body>
</html>
<script>

var mainbottom = $('#home').offset().top + $('#home').height();

// on scroll,
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    var stop = Math.round($(window).scrollTop());

    if (stop > mainbottom) {

      $('.header').addClass('past-main') && $('.item').addClass('past-main') && $('.imaging').addClass('animated fadeInRight') && $('.title').addClass('animated fadeInDown') && $('.describ').addClass('animated fadeInLeft')  ;
    } else {
        $('.header').removeClass('past-main') && $('.item').removeClass('past-main') && $('.imaging').addClass('animated fadeInRight') && $('.title').addClass('animated fadeInDown') && $('.describ').addClass('animated fadeInLeft')  ;
    }

});

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

var $title = $('.title');
var $win = $(window);

$win.on('scroll', function(){
  var top = $win.scrollTop() / 3;
  $title.css('animate', 'ease-out('+top+'deg)')
});

  var ypos,home;
  function parralex(){
    ypos = window.pageYOffset;
    home = document.getElementById('home');
    home.style.top = ypos * .8 +"px";
  }
  window.addEventListener('scroll',parralex);
</script>
