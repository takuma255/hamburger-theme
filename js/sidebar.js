/* サイドバーメニュー　jQuery */
jQuery(function(){
  jQuery('.js-menubtn').on('click',function(){
    jQuery('body').toggleClass('is-open')
    jQuery('.js-sidebar').toggleClass('is-open')
  });
}); 