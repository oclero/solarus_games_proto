var emplaceFooter = function() {
  var footerHeight =  $('.footer').outerHeight();
  var stickFooterPush = $('.push').height(footerHeight);
  $('.wrapper').css('margin-bottom', -footerHeight + 'px');
};

$(document).ready(function(){

    // parallax scrolling for backgrounds
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object
        $bgobj.css('background-position', 'center top');

        $(window).scroll(function() {
            var speed = $bgobj.data('speed');
            if(speed == 0) {
              speed = 1;
            }
            var yPos = $(window).scrollTop() / speed;
            var position = 'center ' + yPos + 'px';
            $bgobj.css('background-position', position);
        });
    });

    $(window).resize(function(){
      // TODO improve performance
      replaceFooter();
    });
    emplaceFooter();
});
