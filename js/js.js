var marginY = 0;
var tujuan = 0;
var speed = 5;
var scroller = null;

function initScroll(elementId){

  tujuan = document.getElementById(elementId).offsetTop;

  scroller = setTimeout(function(){
    initScroll(elementId);
  }, 1);

  marginY = marginY + speed;

  if(marginY >= tujuan){
    clearTimeout(scroller);
  }
  window.scroll(0, marginY);
}
