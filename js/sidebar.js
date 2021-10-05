/* サイドバーメニュー　jQuery */
$(function(){
  $('.js-menubtn').on('click',function(){
    $('body').toggleClass('is-open')
    $('.js-sidebar').toggleClass('is-open')
  });
}); 