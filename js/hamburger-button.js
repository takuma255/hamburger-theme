/* ハンバーガーメニュー　jQuery */
$(function(){
  $('.js-hamburger').on('click',function(){
    $(this).toggleClass('is-open');
    $('.js-gnav').slideToggle(200);
  });
}); 