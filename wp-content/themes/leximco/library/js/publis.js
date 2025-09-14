jQuery(function($) {

  // PAGE
  if (typeof pbPageEditParams == 'undefined' || pbPageEditParams['statusFlag'] != 1) {
  } else {
    $('.pbPage').addClass('pbPage--edit');
  }

  // FORM
  var param = location.search
  if (param == "?stage=0" || param == "?stage=1"){
    $("html,body").animate({scrollTop:$('#form').offset().top},0);
  }
  $('.pbCornerQueryLabelRequired').parents('tr').addClass('required');

  $('.base-p-date li').each(function(i){
    var date = $(this).text();
    $('.base-p-input').append('<div><input type="radio" name="date" id="' + (i+1) + '" value="' + date + '"><label for="' + (i+1) + '">' + date + '</label></div>');
  });
  $('.base-p-input input[type="radio"]').change(function() {
    var value = $(this).val();
    $('.base-p-input input[type="text"]').val(value);
  });
  $('.base-p-input input[type="radio"]').each(function(){
    var text = $('.base-p-input input[type="text"]').val();
    var radio = $(this).val();
    if (text == radio){
      $(this).prop('checked', true);
    }
  });  

});