<!-------------------------------------------------header.php----------------------------------------------->
<!doctype html>
<html lang="zh-TW">

<head>

<meta charset="utf-8"/>
<!--
<link rel="shortcut icon" href="http://www.cheers.com.tw/favicon.ico" type="image/x-icon">
-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
<title>匠。原創</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<!--fb og-->
<meta property="og:title" content="">
<meta property="og:type" content="website"/>
<meta property="og:url" content="">
<meta property="og:image" content="">
<meta content="zh_TW" property="og:locale">
<meta property="og:description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="scripts/common.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous">
</script>
<script type="text/javascript" src="scripts/hammer.min.js"></script>
<script type="text/javascript" src="scripts/sliderr.js"></script>


<script>

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

});/*** END $(document).ready END ****/

window.onload = function () {

bannerResize()
function bannerResize(){
	var bBox = $("#inBanner").height()/$("#inBanner").width()
	var bHeight = $("#inBanner img.centerAlign").height()/$("#inBanner img.centerAlign").width()
	if(bHeight>bBox){
		$("#inBanner img.centerAlign").css({"height":"auto","width":"100%",})
	}else{
		$("#inBanner img.centerAlign").css({"height":"100%","width":"auto",})
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





</script>

</head>
<body>
<div class="alert" style="position:fixed; top:40%; color:#ff3300; font-size:5em; z-index:99999;"></div>
<div id="allMask">
<span id="top"></span>

	<div id="rightMenu">
    	<div class="rtBtn">
        	<a href="signin.php"><img src="imgs/icon1.svg"></a>
            <a href="member_favorites.php"><img src="imgs/icon2.svg"></a>
            <a href="shop_step1.php"><img src="imgs/icon3.svg"></a>
            <a href="member_message.php"><img src="imgs/icon4.svg"></a>
        </div>
        <div class="rbBtn">
        	<a href="https://www.facebook.com/Gundam54321" target="_blank"><img src="imgs/icon5.svg"></a>
            <a href="https://www.instagram.com/explore/locations/545925210/taiwan/new-taipei-city/?hl=zh-tw" target="_blank"><img src="imgs/icon6.svg"></a>
            <a href="https://www.youtube.com/channel/UCPBkvbvRkuqcdu3q7K6nVFA" target="_blank"><img src="imgs/icon7.svg"></a>
            <a href="#"><img src="imgs/icon8.svg"></a>
            <a href="#top" class="smooth"><img src="imgs/icon9.svg"></a>
        </div>
    </div>