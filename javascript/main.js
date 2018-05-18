$(document).ready(function() {



    $('#menu_icon').click(function(){
      window.scrollTo(0, 0);
      $('.menu_bar').css('display', 'flex');
      $('html').css('position','fixed');
      $('#cross_img').css('display', 'flex');
      $('#menu_icon').css('display', 'none');
    });

    $('#cross_img').click(function(){
      $('.menu_bar').css('display', 'none');;
      $('html').css('position','static');
      $('#cross_img').css('display', 'none');
      $('#menu_icon').css('display', 'flex');
    });





});

//to get the font-size in px instead of vw but having font size based on screen size
var rem;
if (document.documentElement.clientWidth > 800) {
  rem = document.documentElement.clientWidth / (100/1.1);

}
else {

  // for the ipad to pick the highest font
  var with_width = document.documentElement.clientWidth / (100) * 4;
  var with_height = document.documentElement.clientHeight / (100/1.1);

  if(with_width >= with_height) {
    rem = with_width;
  }
  else {
    rem = with_height;
  }
}

//to makesure font is not too small or too big
if(rem < 14) {
  rem = 14 + "px";

}
else if (rem > 25) {
  rem = 25 + "px";
}
else {
  rem = rem + "px";
}
document.documentElement.style.fontSize = rem;


// RELOADS WEBPAGE WHEN MOBILE ORIENTATION CHANGES
    window.onorientationchange = function() {
        var orientation = window.orientation;
            switch(orientation) {
                case 0:
                case 90:
                case -90: window.location.reload();
                break; }

  }

// to have the menu bar right size on ipad
