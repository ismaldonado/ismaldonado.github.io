{/* <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-rY/jv8mMhqDabXSo+UCggqKtdmBfd3qC2/KvyTDNQ6PcUJXaxK1tMepoQda4g5vB" crossorigin="anonymous"></script> */}
function checkPosition(scroll) {
  var $link1 = $("#link-1");
  var $link2 = $("#link-2");
  var $link3 = $("#link-3");
  var $link4 = $("#link-4");
  var $link5 = $("#link-5");
  var $link6 = $("#link-6");
  if (scroll < getSectionPosition("#services")) {
    $link2.removeClass("active");
    $link1.addClass("active");
  } else if (
    scroll > getSectionPosition("#services") &&
    scroll < getSectionPosition("#gallery")
  ) {
    $link1.removeClass("active");
    $link3.removeClass("active");
    $link2.addClass("active");
  } else if (
    scroll > getSectionPosition("#gallery") &&
    scroll < getSectionPosition("#testimonials")
  ) {
    $link2.removeClass("active");
    $link4.removeClass("active");
    $link3.addClass("active");
  } else if (
    scroll > getSectionPosition("#testimonials") &&
    scroll < getSectionPosition("#pricing")
  ) {
    $link3.removeClass("active");
    $link5.removeClass("active");
    $link4.addClass("active");
  } else if (
    scroll > getSectionPosition("#pricing") &&
    scroll < getSectionPosition("#contact")
  ) {
    $link4.removeClass("active");
    $link6.removeClass("active");
    $link5.addClass("active");
  } else if (scroll > getSectionPosition("#contact")) {
    $link5.removeClass("active");
    $link6.addClass("active");
  }
}

function getSectionPosition(sectionId) {
  var p = $(sectionId).last();
  var offset = p.offset();
  return offset.top - 80;
}

$(function () {
  var $initPosition = $(window).scrollTop();
  checkPosition($initPosition);
  $(window).scroll(function () {
    var scroll = $(this).scrollTop();
    checkPosition(scroll);
  });
});
