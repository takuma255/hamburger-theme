/* サイドバーメニュー　jQuery */
$(function(){
  $('.js-menu').on('click',function(){
    $('body').toggleClass('is-open')
  });
}); 