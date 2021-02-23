




$(document).ready(function(){

	$(".jsbtn").attr('href', 'javascript:void(0);');
	var windowWidth = false;
	var menuBooleam = false;

	function menuCtrl(){
		var $wScllTop = $(window).scrollTop()
		var $logoOffset = $("#openMenu").offset();
		var $logoTop = $logoOffset.top;
		//alert($wScllTop)
		if( $wScllTop <= $logoTop){
			$(".redbg").removeClass("roll");
			$(".logo").css("opacity","0");
			if(windowWidth == false){
				$(".mainMenu a").css("color","#000");
				//alert($wScllTop)
			}else{
				$(".mainMenu a").css("color","#FFF");
				
			}
			if(menuBooleam == false){
				$(".menuBar .wBar").css("background-color","#000");
			}else{
				$(".menuBar .wBar").css("background-color","#FFF");
			}
		}else{
			$(".redbg").addClass("roll");
			$(".logo").css("opacity","1");
			$(".mainMenu a").css("color","#FFF");
			$(".menuBar .wBar").css("background-color","#FFF");
		}
		
		if(menuBooleam == true){
			$(".mainMenu").addClass("use");
			$(".menuSwitch").addClass("use");
			$(".redbg").addClass("roll");
			$(".logo").css("opacity","1");
		}else{
			$(".mainMenu").removeClass("use");
			$(".menuSwitch").removeClass("use");
		}
	}
	menuCtrl()
	function wWidthCtrl(){
		var $wWidth = $(window).width();
		if( $wWidth >= "700" ) {
			windowWidth = false;
    	}else{
			windowWidth = true;
		}
	}
	wWidthCtrl()
	$(".menuOpen").click(function(){
		if( menuBooleam == false){
				menuBooleam = true;
			}else{
				menuBooleam = false;
			}
		menuCtrl();
	});

	$(window).resize(function() {
	
		menuBooleam = false;
		wWidthCtrl();
		menuCtrl();
    });

	$(window).scroll(function () {
		menuBooleam = false;
		menuCtrl();		
	});
	

	$('[displacement]').each(function (idx, item) {
		var $item = $(item);
		var $offset = $item.offset();
		var $top = $offset.top;
		$item.wrap("<span></span>");
		$item.parent().css({"position":"relative","display":"block",});
		function run(){
			var winCenter = $(window).scrollTop()+$(window).height()*0.5;
			var elemCen = $top+$item.height()*0.5;
			var move = (elemCen-winCenter)*-0.2;
			$item.parent().css({"top":move,})
		}
		run();
		$(window).scroll(function () {
			run();
    	});
	});
	$('[displacement2]').each(function (idx, item) {
		var $item = $(item);
		var $offset = $item.offset();
		var $top = $offset.top;
		$item.wrap("<span></span>");
		$item.parent().css({"position":"relative","display":"block",});
		function run(){
			var winCenter = $(window).scrollTop()+$(window).height()*0.5;
			var elemCen = $top+$item.height()*0.5;
			var move 
			if((elemCen-winCenter)*0.15 <= $(window).height()*0.25){
				move = (elemCen-winCenter)*0.15
			}else{
				move = $(window).height()*0.25
			}
			$item.parent().css({"top":move,})
		}
		run();
		$(window).scroll(function () {
			run();
    	});
	});
	$('[displacement3]').each(function (idx, item) {
		var $item = $(item);
		var $offset = $item.offset();
		var $top = $offset.top;
		$item.wrap("<span></span>");
		$item.parent().css({"position":"relative","display":"block",});
		function run(){
			var winCenter = $(window).scrollTop()+$(window).height()*0.5;
			var elemCen = $top+$item.height()*0.5;
			var move = (elemCen-winCenter)*0.05;
			$item.parent().css({"top":move,})
		}
		run();
		$(window).scroll(function () {
			run();
    	});
	});
	$('[displacement4]').each(function (idx, item) {
		var $item = $(item);
		var $offset = $item.offset();
		var $top = $offset.top;
		$item.wrap("<span></span>");
		$item.parent().css({"position":"relative","display":"block",});
		function run(){
			var winCenter = $(window).scrollTop()+$(window).height()*0.5;
			var elemCen = $top+$item.height()*0.5;
			var move = (elemCen-winCenter)*-0.1;
			$item.parent().css({"top":move,})
		}
		run();
		$(window).scroll(function () {
			run();
    	});
	});

});

