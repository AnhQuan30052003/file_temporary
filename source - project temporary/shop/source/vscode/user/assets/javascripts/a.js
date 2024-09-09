// Code phần header
$(function() {
  if (!$('.tai-khoan').length) return
  
  $('.khung-lenh').on({
    click: function() {
      $('.khung-an').removeClass('translate-hidden')
    },
    mouseleave: function() {
      $('.khung-an').addClass('translate-hidden')
    }
  })
})