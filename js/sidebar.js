/* サイドバーメニュー　jQuery */
$(function(){
  $('.js-menu').on('click',function(){
    $('body').addClass('is-open')
  });
  $('.js-close').on('click',function(){
    $('body').removeClass('is-open')
  });
}); 