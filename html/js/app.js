$(function () {
  $(".main-img__bg img:not(:first-child)").hide();
  setInterval(function () {
    $(".main-img__bg img:first-child").fadeOut("slow").next("img").fadeIn("slow").end().appendTo(".main-img__bg");
  }, 3000);
});
