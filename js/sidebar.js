/* サイドバーメニュー　jQuery */
$(function(){
  $('.js-menubtn').on('click',function(){
    $('.js-sidebar').toggleClass('is-open')
  });
}); 