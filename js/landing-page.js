function cycleImages() {
  var $active = $('#cycler .active, #cycler1 .active, #cycler2 .active, #cycler3 .active, #cycler4 .active');
  var $next = ($active.next().length > 0) ? $active.next() : $('#cycler img:first, #cycler1 img:first, #cycler2 img:first, #cycler3 img:first, #cycler4 img:first');
  $next.css('z-index', 2);//move the next image up the pile
  $active.fadeOut(1500, function () {//fade out the top image
    $active.css('z-index', 1).show().removeClass('active');//reset the z-index and unhide the image
    $next.css('z-index', 3).addClass('active');//make the next image the top one
  });
}

$(document).ready(function () {
// run every 7s
  setInterval('cycleImages()', 3000);
});
