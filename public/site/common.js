$(document).ready(function () {
  $(".back").on("click", function () {
    $(this)
      .closest('details')
        .removeAttr('open')

  });

  $('.bar_icon').click(function () {
      $(this).toggleClass('close_menu')
  });
});
//


// $('.close__menu').click(function () {
//   $(this).css('display', 'none');
//   $('.open__menu').css('display', 'block');
// })