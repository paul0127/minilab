$(document).ready(function(){
$("body").append(" <div viewW></div>");
$("[viewW]").css({"width":"100vw",});
$(".jsbtn").attr('href', 'javascript:void(0);');

$(".align").before("<span line><span>");
$(".topMenu").after("<div sMenu></div>")
$(".topMenu").append("<div mask></div>")
$(".topMenu [mask]").css({"position":"absolute","width":"100%","height":"100%","background-color":"#FFF"})

$("[sMenu]").append($(".topMenu .align").clone());
$("[sMenu] .align").addClass("centerAlign")
$(".topMenu").after("<div copyMenu></div>")
$("[copyMenu]").append($(".topMenu").clone());


$(".sMenuBtn").click(function(){
	$("[sMenu]").addClass("use")
});
	
$('.topBtn a').each(function (idx, item) {
	var $item = $(item);
	$item.mouseover(function(){
		var $itemX = $item.offset().left
		var $itemW = $item.width()
    	$item.parent('.topBtn').addClass('use')
		$("[line]").css({"left":$itemX,"opacity":"1","width":$itemW,})
	});
	$item.mouseout(function(){
    	$item.parent('.topBtn').removeClass('use')
		$("[line]").css({"left":"50%","opacity":"0","width":"0",})
	});
});


function frameResize(){
	var rMenuW = $("#rightMenu").width()
	$("#allMask").css({"width":$(window).width()-rMenuW})
	var bnCut = $("#topLogo").height() + $(".topMenu").height()
	$("#mainBn").css({"height":$(window).height()-bnCut})
} 
frameResize();

function menuPosition(){
	var setBn = $("#mainBn").length
	if(setBn > 0){
		var menuTop = $("#mainBn").offset().top + $("#mainBn").height();
		var scrTop = $(window).scrollTop()
		$("[copyMenu]").css({"position":"absolute","top":menuTop,"width":$(".topMenu").width(),"z-index":"999"})
		$("[copyMenu] [mask]").css({"display":"none"})
		
		if(scrTop >= menuTop){
			$("[copyMenu]").css({"position":"fixed","top":"0",})
			$(".align").addClass("down")
			$(".topMenu .logo").css({"opacity":"1",})
		
		}else{
			$("[copyMenu]").css({"position":"absolute","top":menuTop,})
			$(".align").removeClass("down")
			$(".topMenu .logo").css({"opacity":"0",})
		}
	}else{
		$("[copyMenu]").css({"position":"fixed","top":"0","width":$(".topMenu").width(),"z-index":"999"})
		$("[copyMenu] [mask]").css({"display":"none"})
		$(".align").addClass("down")
		$(".topMenu .logo").css({"opacity":"1",})
	}
}
menuPosition();


infoBoxResize()
function infoBoxResize(){
	var $picH = $(".product .picsBox").height();
	var $boxAH = $(".product .infoBox .boxA").height();
	var $boxBH = $(".product .infoBox .boxB").height();
	var $infoH = $boxAH + $boxBH
	var newWindowW = $("[viewW]").width();
	if( newWindowW > 850){
		if( $picH > $infoH){
			$(".product .infoBox").css({"height":$picH,})
		}else{
			$(".product .infoBox").css({"height":"auto",})
		}
	}else{
		$(".product .infoBox").css({"height":"auto",})
	}
};


$(window).resize(function() {	
	frameResize();
	menuPosition();
	$("[sMenu]").removeClass("use")
	infoBoxResize()
});

$(window).scroll(function () {
	menuPosition();	
	$("[sMenu]").removeClass("use")	
});


$(".qaBox li").each(function (idx, item) {
	var $item = $(item);
	$item.children("a.question").click(function(){
		$item.children("p.answer").slideToggle();
	});
});

$(".reply > a").each(function (idx, item) {
	var $item = $(item);
	$item.click(function(){
		$item.next(".textbox").toggle();
	});
});

$(".creator .infoBtn").each(function (idx, item) {
	var $item = $(item);
	$item.click(function(){
		$item.next(".maskInfo").slideToggle();
	});
});

});/*** END $(document).ready END ****/

window.onload = function () {

bannerResize()
function bannerResize(){
	var bBox = $("#inBanner").height()/$("#inBanner").width()
	var bHeight = $("#inBanner img.centerAlign").height()/$("#inBanner img.centerAlign").width()
	if(bHeight>bBox){
		$("#inBanner img.centerAlign").css({"height":"auto","width":"100%","opacity":"0.95",})
	}else{
		$("#inBanner img.centerAlign").css({"height":"100%","width":"auto","opacity":"0.95",})
	}
}
function productGroup(){
	if( $('.group1').is(':hidden') && $('.group2').is(':hidden') && $('.group3').is(':hidden') ){
		   $('.group1').css({"display":"block"})
	}
}
productGroup()
function upPicImgResize(){
	$(".upPic img").each(function (idx, item) {
		var $item = $(item);
		var proportion = $item.height()/$item.width()
		if( proportion > 0.66 ){
			   $item.css({"width":"auto","height":"100%"})
		}
	})
}
upPicImgResize()

$(window).resize(function() {
	bannerResize()
});

};/*** END window.onload END ****/


var $nowNo = 1
function qandaSwitch(no){
	var $switchNo = no
	if($switchNo != $nowNo){
		$(".qanda .qaSelect a").removeClass("use")
		$(".qanda .qaBox").slideUp()
		switch($switchNo){
			case 1:
				$(".qanda .qaSelect a.qGroup1").addClass("use")
				$(".qanda .qaBox.qGroup1").slideDown()
    			break;
			case 2:
				$(".qanda .qaSelect a.qGroup2").addClass("use")
				$(".qanda .qaBox.qGroup2").slideDown()
    			break;
			case 3:
				$(".qanda .qaSelect a.qGroup3").addClass("use")
				$(".qanda .qaBox.qGroup3").slideDown()
    			break;
		}
		$nowNo = $switchNo
	}
}

function introductionSwitch(no){
	var $switchNo = no
	$("#introduction .contents > div").css({"display":"none"})
	switch($switchNo){
		case 1:
			$("#introduction .contents div.group1").css({"display":"block"})
   			break;
		case 2:
			$("#introduction .contents div.group2").css({"display":"block"})
   			break;
		case 3:
			$("#introduction .contents div.group3").css({"display":"block"})
   			break;
	}
}