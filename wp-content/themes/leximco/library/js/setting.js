jQuery(document).ready(function($){


	// ページの先頭へボタン
	// hide #back-top first
	$("#pageTopLink").hide();
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 200) {
				$('#pageTopLink').fadeIn();
			} else {
				$('#pageTopLink').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#pageTopLink a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

jQuery(function($) {
var nav    = $('#contents'),
    offset = nav.offset();

	$(window).scroll(function () {
	  //if($(window).scrollTop() > offset.top) {
		if ($(this).scrollTop() > 100) {
	    //nav.addClass('fixed');
		$("#globalNavHeader").addClass('headerMin');
		$("#globalNavHeader").removeClass('headerMax');

		$("#leadTxt").addClass('leadMin');
		$("#leadTxt").removeClass('leadMax');
	  } else {
	    //nav.removeClass('fixed');
		$("#globalNavHeader").addClass('headerMax');
		$("#globalNavHeader").removeClass('headerMin');

		$("#leadTxt").addClass('leadMax');
		$("#leadTxt").removeClass('leadMin');
  }
});
});

$(window).on("scroll", function(){
    $("#globalHeader,#globalHeader_page,#first-view").css("left", -$(window).scrollLeft());
});



$(window).on('scroll', function (){
	$('.animateCont').remove('isAnimate');
	var elem = $('.animateCont');
	elem.each(function () {
		var elemOffset = $(this).offset().top;
		var scrollPos = $(window).scrollTop();
		var wh = $(window).height();

		//if(scrollPos > elemOffset - wh + (wh / 6) ){
		if(scrollPos > elemOffset - wh + (wh / 6) ){
			$(this).addClass('isAnimate');
			//$(this).css('background-position','100% top');
		}
		if(scrollPos == 0 ){
			$(this).removeClass('isAnimate');
		}
	});

	$('.animateCont2').remove('isAnimate');
	var elem = $('.animateCont2');
	elem.each(function () {
		var elemOffset = $(this).offset().top;
		var scrollPos = $(window).scrollTop();
		var wh = $(window).height();

		//if(scrollPos > elemOffset - wh + (wh / 6) ){
		if(scrollPos > elemOffset - wh + (wh / 6) ){
			$(this).addClass('isAnimate');
			//$(this).css('background-position','100% top');
		}
		if(scrollPos == 0 ){
			$(this).removeClass('isAnimate');
		}
	});

	$('.animateCont3').remove('isAnimate');
	var elem = $('.animateCont3');
	elem.each(function () {
		var elemOffset = $(this).offset().top;
		var scrollPos = $(window).scrollTop();
		var wh = $(window).height();

		//if(scrollPos > elemOffset - wh + (wh / 6) ){
		if(scrollPos > elemOffset - wh + (wh / 6) ){
			$(this).addClass('isAnimate');
			//$(this).css('background-position','100% top');
		}
		if(scrollPos == 0 ){
			$(this).removeClass('isAnimate');
		}
	});
});


	//セミナー各項目表示制御
    $(".fukidasipop").hide();
    $(".popTxt").click(function(){
        $(this).next(".fukidasipop").slideToggle();
        if ($(this).attr('class') == ('popTxt close')){
            $(this).addClass("open");
			$(this).removeClass("close");
        }else{
			$(this).addClass("close");
			$(this).removeClass("open");
        }
    });



//FAQ本文表示制御
$(function() {
	//FAQ本文表示・非表示
    $(".answerTxt").hide();

	setTimeout(function(){
    $(".displaySet").click(function(){
        if ($(this).attr('class') == ('displaySet hyouji')) {
			// FAQ非表示
			$(this).removeClass('hyouji').next(".answerTxt").slideUp('fast');
			$(this).addClass('hihyouji');
			$(this).html("<p><img src='"+ window.siteUrl +"/library/images/pageImg/faq_btn_display.png' alt='回答表示' class='btnImg'></p>");
        }else if ($(this).attr('class') == ('displaySet hihyouji')) {
			// 表示しているFAQを閉じる
			$('.displaySet').removeClass('hyouji');
			$('.displaySet').addClass('hihyouji');
			$(".answerTxt").hide();
			$('.displaySet').html("<p><img src='"+ window.siteUrl +"/library/images/pageImg/faq_btn_display.png' alt='回答表示' class='btnImg'></p>");
            // FAQ表示
			$(this).addClass('hyouji').next(".answerTxt").slideDown('fast');
			$(this).removeClass('hihyouji');
			$(this).html("<p><img src='"+ window.siteUrl +"/library/images/pageImg/faq_btn_hidden.png' alt='回答非表示' class='btnImg'></p>");
        }
    });
	},0)
});


});


