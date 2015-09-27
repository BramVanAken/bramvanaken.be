<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Bram Van Aken</title>
<style>
/* https://github.com/alvarotrigo/fullPage.js - MIT licensed - Copyright (C) 2013 alvarotrigo.com - A project by Alvaro Trigo */
.fp-enabled body,html.fp-enabled{margin:0;padding:0;overflow:hidden;-webkit-tap-highlight-color:transparent}
#superContainer{height:100%;position:relative;-ms-touch-action:none;touch-action:none}
.fp-section{position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;height:100%}
.fp-slide{float:left}
.fp-slide,.fp-slidesContainer{height:100%;display:block}
.fp-slides{z-index:1;height:100%;overflow:hidden;position:relative;-webkit-transition:all .3s ease-out;transition:all .3s ease-out}
.fp-section.fp-table,.fp-slide.fp-table{display:table;table-layout:fixed;width:100%;height:100%}
.fp-tableCell{display:table-cell;vertical-align:middle;width:100%;height:100%}
.fp-slidesContainer{float:left;position:relative}
.fp-controlArrow{position:absolute;z-index:4;top:50%;cursor:pointer;width:0;height:0;border-style:solid;margin-top:-38px}
.fp-controlArrow.fp-prev{left:15px;width:0;border-width:38.5px 34px 38.5px 0;border-color:transparent #4d90fe transparent transparent}
.fp-controlArrow.fp-next{right:15px;border-width:38.5px 0 38.5px 34px;border-color:transparent transparent transparent #4d90fe}
.fp-scrollable{overflow:scroll}
.fp-notransition{-webkit-transition:none!important;transition:none!important}
#fp-nav{position:fixed;z-index:100;margin-top:-32px;top:50%;opacity:1}
#fp-nav.right{right:17px}
#fp-nav.left{left:17px}
.fp-slidesNav{position:absolute;z-index:4;left:50%;opacity:1}
.fp-slidesNav.bottom{bottom:17px}
.fp-slidesNav.top{top:17px}
#fp-nav ul,.fp-slidesNav ul{margin:0;padding:0}
#fp-nav ul li,.fp-slidesNav ul li{display:block;width:14px;height:13px;margin:7px;position:relative}
.fp-slidesNav ul li{display:inline-block}
#fp-nav ul li a,.fp-slidesNav ul li a{display:block;position:relative;z-index:1;width:100%;height:100%;cursor:pointer;text-decoration:none}
#fp-nav ul li a.active span,#fp-nav ul li:hover a.active span,.fp-slidesNav ul li a.active span,.fp-slidesNav ul li:hover a.active span{height:12px;width:12px;margin:-6px 0 0 -6px;border-radius:100%}
#fp-nav ul li a span,.fp-slidesNav ul li a span{border-radius:50%;position:absolute;z-index:1;height:4px;width:4px;border:0;background:#333;left:50%;top:50%;margin:-2px 0 0 -2px;-webkit-transition:all .1s ease-in-out;-moz-transition:all .1s ease-in-out;-o-transition:all .1s ease-in-out;transition:all .1s ease-in-out}
#fp-nav ul li .fp-tooltip{position:absolute;top:-2px;color:#fff;font-size:14px;font-family:arial,helvetica,sans-serif;white-space:nowrap;max-width:220px;overflow:hidden;display:block;opacity:0;width:0}
#fp-nav ul li:hover .fp-tooltip,#fp-nav.fp-show-active a.active+.fp-tooltip{-webkit-transition:opacity .2s ease-in;transition:opacity .2s ease-in;width:auto;opacity:1}
#fp-nav ul li .fp-tooltip.right{right:20px}
#fp-nav ul li .fp-tooltip.left{left:20px}
blockquote,body,dd,div,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,input,li,ol,p,pre,td,textarea,th,ul{margin:0;padding:0}
a{text-decoration:none}
table{border-spacing:0}
abbr,acronym,fieldset,img{border:0}
address,caption,cite,code,dfn,em,strong,th,var{font-weight:400;font-style:normal}
strong{font-weight:700}
ol,ul{list-style:none;margin:0;padding:0}
caption,th{text-align:left}
h1,h2,h3,h4,h5,h6{font-weight:400;font-size:100%;color:#444}
q:after,q:before{content:''}
body{font-family:arial,helvetica;color:#F2F2F2}
h1{font-size:6em}
h2{font-size:4em}
h3{font-size:3em}
p{font-size:2em}
.content{position:relative;top:50%;transform:translateY(-50%);text-align:center}
#section0{background-color:#2EBE21}
#section0 h1{color:#fff}
#section0 p{color:#fff;opacity:1}
#section1{background-color:#eee}
#section1 h2,#section1 h3{color:#4d90fe}
#section1 p{color:#4d90fe;opacity:.6}
#section2{background-color:#2C3E50}
#section2 h2{color:#F2F2F2}
#section2 p{opacity:.6}
/* CUSTOM CODE BEGINS HERE */
#slide3{background:#333}
#slide5{background:#333}
input.button{font-size:1em;width:100px;padding:5px 20px;background:#fff;color:#222;border:0}
textarea.form{height:auto}
.form{display:inline-block;width:75%;max-width:350px;height:24px;padding:6px 12px;margin-bottom:10px;line-height:1.4;color:#555;vertical-align:middle;border:1px solid #ccc;box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}
.form:focus{border-color:#fff;outline:0;box-shadow:inset 0 2px 2px rgba(0,0,0,.075),0 0 12px rgba(255,255,255,.6)}
.error{display:block;color:#fff}
.cf:after{content:"";display:block;clear:both}
.cf2:after{display:inline-block}
.valign{vertical-align:middle}
.github{width:160px;height:84px;margin:0 auto;border-radius:12px;border:5px solid #4d90fe;position:relative}
.github a{position:absolute;width:100%;height:100%;top:0;left:0;text-decoration:none;padding-top:10px;color:#222}
dt,dd{line-height:1.1em;margin-bottom:8px;color:#fff}
dt{border-right:none}
dl{width:508px;margin:25px auto;text-align:left}
dt{width:200px;float:left;text-align:right}
dd{width:300px;float:right}
dd a{color:#ddd}
span.dl{background:#4d90fe;padding:8px;display:inline-block}
img{border:0}
/* Scroll down indicator */
.arrow,.arrow:after{-webkit-transform:rotate(360deg);border-width:3em 3em 0;width:0;height:0;border-style:solid}
.arrow-wrap{position:absolute;z-index:1;left:50%;top:300%;margin-left:-5em;width:10em;height:10em;padding:4em 2em;font-size:.5em;display:block}
.arrow{float:left;position:relative;border-color:#fff transparent transparent}
.arrow:after{content:'';position:absolute;top:-3.3em;left:-3em;border-color:#2EBE21 transparent transparent}
/* Responsive design */
@media(max-device-width:600px),(max-width:660px){
dt,dd{background:#4d90fe}
dl{width:85%}
dt{width:28%;text-align:left}
dd{width:70%}
img{max-width:85%;height:auto}
.image a{margin:0}
.fp-controlArrow.fp-prev{left:5px;border-width:18.5px 14px 18.5px 0}
.fp-controlArrow.fp-next{right:5px;border-width:18.5px 0 18.5px 14px}
section,ul,li a{box-sizing:border-box}}
</style>
</head>
<body>
<div id="fullpage">
	<div class="section " id="section0">
		<div class="content">
			<h1>Hi,</h1>
			<p>I'm Bram.</p>
			<a class="arrow-wrap" href="#projects">
				<span class="arrow"></span>
			</a>
		</div>
	</div>
	<div class="section" id="section1">
		<div class="slide" id="slide1">
			<div class="content">
				<h2>Projects</h2>
				<p>&nbsp;</p>
				<div class="github">
					<a href="//github.com/BramVanAken"><img class="valign" src="data/img-github.png" alt="GitHub" width="64" height="64" />&nbsp; GitHub</a>
				</div>
			</div>
		</div>
		<div class="slide" id="slide2">
			<div class="content">
				<h3>E2R Architecten</h3>
				<dl class="cf">
					<dt><span class="dl">Link</span></dt>
					<dd><span class="dl"><a href="http://e2r-architecten.be/">E2R-architecten.be</a></span></dd>
					<dt><span class="dl">Code</span></dt>
					<dd><span class="dl">HTML5/CSS3</span></dd>
					<dt><span class="dl">Scripting</span></dt>
					<dd><span class="dl">PHP/JavaScript</span></dd>
					<dt><span class="dl">Database</span></dt>
					<dd><span class="dl">SQLite (PDO)</span></dd>
					<dt><span class="dl">Images</span></dt>
					<dd><span class="dl">Image upload script with auto thumbnail generation, slideshow with SlidesJS</span></dd>			
				</dl>
			</div>
		</div>
		<div class="slide" id="slide3">
			<div class="content">
				<a href="http://e2r-architecten.be/"><img src="data/img-e2r.png" alt="E2R Architecten website" height="544" /></a>
			</div>
		</div>
		<div class="slide" id="slide4">
			<div class="content">
				<h3>Dsign-ontwerp</h3>
				<dl class="cf">
					<dt><span class="dl">Code</span></dt>
					<dd><span class="dl">HTML5/CSS3</span></dd>
					<dt><span class="dl">Scripting</span></dt>
					<dd><span class="dl">PHP/JavaScript</span></dd>
					<dt><span class="dl">Images</span></dt>
					<dd><span class="dl">Image gallery with Lightbox</span></dd>			
				</dl>
			</div>
		</div>
		<div class="slide" id="slide5">
			<div class="content">
				<a href="dsign/index.html"><img src="data/img-dsign.png" alt="D-sign ontwerp website" height="660" /></a> <!-- height 723 -->
			</div>
		</div>
	</div>
	<div class="section" id="section2">
		<div class="content">
			<h2>Contact</h2>
			<p>&nbsp;</p>
			<?php
			$email = $_POST['email'];
			$comments = $_POST['comments'];
			if (($_POST) && ($comments != '') && (filter_var($email, FILTER_VALIDATE_EMAIL))) {
				$comments .= "\n\n\nIP address: ".$_SERVER['REMOTE_ADDR'];
				mail("bramvanaken@gmail.com", "Bramvanaken.be Contact from $email", $comments, "From: $email");
				echo "Email successfully sent";
			} else {?>
				<form method="post">
					<input type="email" class="form" placeholder="email address" name="email" id="email" size="32" value="<?php echo $email;?>" />
					<span class="error"><?php if (($_POST) && (!filter_var($email, FILTER_VALIDATE_EMAIL))) {echo "Invalid e-mail address";}?></span>
					<br />
				    <textarea name="comments" class="form" placeholder="contents" id="comments" rows="4" cols="26"><?php echo $comments;?></textarea>
				    <span class="error"><?php if (($_POST) && ($comments == '')) {echo "Contents cannot be empty";}?></span>
				    <br />
				    <input class="button" type="submit" id="submit" name="sumbit" value="Submit" />
				</form>
			<?php }?>
		</div>
	</div>
</div>

<script>(function(n,m,C,v,e){"function"===typeof define&&define.amd?define(function(){n.fullpage=v(m,C);return n.fullpage}):"object"===typeof exports?module.exports=v(m,C):n.fullpage=v(m,C)})(this,window,document,function(n,m,C){function v(a,b){for(var c in b)b.hasOwnProperty(c)&&null!==c&&(a.style[c]=b[c]);return a}function e(a,b){b=b||m;return b.querySelector(a)}function p(a,b){b=b||m;return b.querySelectorAll(a)}function q(a){for(var b=0;a=a.previousSibling;)3==a.nodeType&&/^\s*$/.test(a.data)||b++;return b}
function sa(a,b){a.style.display="undefined"!==typeof b?b?"block":"none":"block"==a.style.display?"none":"block";return a}function w(a,b){return!!a.className.match(new RegExp("(\\s|^)"+b+"(\\s|$)"))}function B(a,b){a&&w(a,b)&&(a.className=a.className.replace(new RegExp("(\\s|^)"+b+"(\\s|$)"),""))}function t(a,b){a&&!w(a,b)&&(a.className+=" "+b)}function I(a,b){return a&&(b(a)?a:I(a.parentNode,b))}function R(){return"innerHeight"in n?n.innerHeight:m.documentElement.offsetHeight}function J(a){a.preventDefault?
a.preventDefault():a.returnValue=!1}function z(a){var b={};return a&&"[object Function]"===b.toString.call(a)}function K(a,b,c){b=b.split(" ");for(var d=0,e=b.length;d<e;d++)m.addEventListener?a.addEventListener(b[d],c,!1):a.attachEvent(b[d],c,!1)}function ea(a,b,c,d){var e=Ra(a),k=b-e,g=0;S=!0;var l=function(){if(S){var m=b;g+=20;m=Math.easeInOutCubic(g,e,k,c);ta(a,m);g<c?setTimeout(l,20):"undefined"!==typeof d&&d()}else g<c&&d()};l()}function fa(){var a=m.documentElement;return(n.pageYOffset||a.scrollTop)-
(a.clientTop||0)}function ua(a){for(a=a.nextSibling;a&&1!=a.nodeType;)a=a.nextSibling;return a}function va(a){for(a=a.previousSibling;a&&1!=a.nodeType;)a=a.previousSibling;return a}function Ra(a){return a.self!=n&&w(a,"fp-slides")?a.scrollLeft:!d.autoScrolling||d.scrollBar?fa():a.offsetTop}function ta(a,b){!d.autoScrolling||d.scrollBar||a.self!=n&&w(a,"fp-slides")?a.self!=n&&w(a,"fp-slides")?a.scrollLeft=b:a.scrollTo(0,b):a.style.top=b+"px"}function wa(a,b){T("autoScrolling",a,b);var c=e(".fp-section.active");
d.autoScrolling&&!d.scrollBar?(v(m.body,{overflow:"hidden",height:"100%"}),v(m.getElementsByTagName("html")[0],{overflow:"hidden",height:"100%"}),ga(d.recordHistory,"internal"),v(r,{"-ms-touch-action":"none","touch-action":"none"}),c&&L(c.offsetTop)):(v(m.body,{overflow:"visible",height:"100%"}),v(m.getElementsByTagName("html")[0],{overflow:"visible",height:"100%"}),ga(!1,"internal"),v(r,{"-ms-touch-action":"","touch-action":""}),L(0),c=U(c.offsetTop),c.element.scrollTo(0,c.options))}function ga(a,
b){T("recordHistory",a,b)}function M(a,b){T("scrollingSpeed",a,b)}function V(){var a=va(e(".fp-section.active"));a&&A(a,null,!0)}function ha(){var a=ua(e(".fp-section.active"));a&&A(a,null,!1)}function W(a,b){var c=xa(a);"undefined"!==typeof b?ia(a,b):c&&A(c)}function X(){ya("next")}function Y(){ya("prev")}function za(a){if(!w(r,"fp-destroyed")){u=!0;Aa=R();for(var b=p(".fp-section"),c=0;c<b.length;++c){var f=b[c],h=e(".fp-slides",f),f=p(".fp-slide",f);h&&1<f.length&&N(h,e(".fp-slide.active",h))}b=
e(".fp-section.active");q(b)&&L(b.offsetTop);u=!1;z(d.afterResize)&&a&&d.afterResize.call(r);z(d.afterReBuild)&&!a&&d.afterReBuild.call(r)}}function Sa(){var a=m.createElement("div");a.setAttribute("id","fp-nav");var b=m.createElement("ul");a.appendChild(b);m.body.appendChild(a);x=e("#fp-nav");x.style.color=d.navigationColor;t(x,d.navigationPosition);d.showActiveTooltip&&t(x,"fp-show-active");a="";for(b=0;b<p(".fp-section").length;b++){var c="";d.anchors.length&&(c=d.anchors[b]);a=a+'<li><a href="#'+
c+'"><span></span></a>';c=d.navigationTooltips[b];typeof c!==C&&""!==c&&(a+='<div class="fp-tooltip '+d.navigationPosition+'">'+c+"</div>");a+="</li>"}b=e("ul",x);b.innerHTML+=a;a=p(".fp-slidesNav a");for(b=0;b<a.length;b++)K(a[b],"click onclick touchstart",function(a){a=n.event||a||a.originalEvent;J(a);a=q(this.parentNode);A(p(".fp-section")[a],null,!1)})}function Ta(){var a;if(!d.autoScrolling||d.scrollBar){for(var b=fa(),c=0,f=Math.abs(b-p(".fp-section")[0].offsetTop),h=p(".fp-section"),k=0;k<
h.length;++k){var g=Math.abs(b-h[k].offsetTop);g<f&&(c=k,f=g)}a=p(".fp-section")[c]}if(!d.autoScrolling||d.scrollBar){if(!w(a,"active")){ja=!0;b=e(".fp-section.active");c=q(b)+1;f=Ba(a);h=a.getAttribute("data-anchor");k=q(a)+1;if(g=e(".fp-slide.active",a))var l=g.getAttribute("data-anchor"),m=q(g);E&&(B(b,"active"),t(a,"active"),z(d.onLeave)&&d.onLeave.call(b,c,k,f),z(d.afterLoad)&&d.afterLoad.call(a,h,k),Z(h,0),d.anchors.length&&(F=h,ka(m,l,h,k)));clearTimeout(Ca);Ca=setTimeout(function(){ja=!1},
100)}d.fitToSection&&(clearTimeout(Da),Da=setTimeout(function(){if(E&&!d.autoScrolling||d.scrollBar)q(e(".fp-section.active"))==q(a)&&(u=!0),A(a),u=!1},1E3))}}function aa(a){"down"==a?ha():V()}function Ua(a){var b=n.event||b||b.originalEvent;la(b)&&(d.autoScrolling&&J(a),a=e(".fp-section.active"),a=p(".fp-slides",a),E&&!G&&(b=Ea(b),O=b.y,ba=b.x,a&&Math.abs(ca-ba)>Math.abs(P-O)?Math.abs(ca-ba)>("innerWidth"in n?n.innerWidth:m.documentElement.offsetWidth)/100*d.touchSensitivity&&(ca>ba?X():Y()):d.autoScrolling&&
Math.abs(P-O)>R()/100*d.touchSensitivity&&(P>O?aa("down"):O>P&&aa("up"))))}function la(a){return"undefined"===typeof a.pointerType||"mouse"!=a.pointerType}function Va(a){var b=n.event||b||b.originalEvent;d.fitToSection&&(S=!1);la(b)&&(a=Ea(b),P=a.y,ca=a.x)}function Fa(a,b){for(var c=0,d=a.slice(Math.max(a.length-b,1)),e=0;e<d.length;e++)c+=d[e];return Math.ceil(c/b)}function Wa(a){var b=(new Date).getTime();if(d.autoScrolling){a=n.event||a||a.originalEvent;var c=a.wheelDelta||-a.deltaY||-a.detail,
f=Math.max(-1,Math.min(1,c));149<H.length&&H.shift();H.push(Math.abs(c));d.scrollBar&&J(a);a=b-Ga;Ga=b;200<a&&(H=[]);E&&(b=Fa(H,10),a=Fa(H,70),b>=a&&(0>f?aa("down"):aa("up")));return!1}d.fitToSection&&(S=!1)}function ya(a){var b=e(".fp-section.active");if((b=e(".fp-slides",b))&&!G){var c=e(".fp-slide.active",b),f=null,f="prev"===a?va(c):ua(c);if(!f){if(!d.loopHorizontal)return;for(var f=c.parentNode.firstChild,h=[];f;f=f.nextSibling)1==f.nodeType&&f!=c&&h.push(f);f="prev"===a?h[h.length-1]:h[0]}G=
!0;N(b,f)}}function A(a,b,c){if(null!==a&&(b={element:a,callback:b,isMovementUp:c,dtop:a.offsetTop,yMovement:Ba(a),anchorLink:a.getAttribute("data-anchor"),sectionIndex:q(a),activeSlide:e(".fp-slide.active",a),activeSection:e(".fp-section.active"),leavingSection:q(e(".fp-section.active"))+1,localIsResizing:u},!(q(b.activeSection)==b.sectionIndex&&!u||d.scrollBar&&fa()===b.dtop))){if(b.activeSlide)var f=b.activeSlide.getAttribute("data-anchor"),h=q(b.activeSlide);c=p(".fp-section");for(var k=0;k<c.length;k++)B(c[k],
"active");t(a,"active");E=!1;ka(h,f,b.anchorLink,b.sectionIndex);z(d.onLeave)&&!b.localIsResizing&&d.onLeave.call(b.activeSection,b.leavingSection,b.sectionIndex+1,b.yMovement);Xa(b);F=b.anchorLink;Z(b.anchorLink,b.sectionIndex)}}function Xa(a){if(d.css3&&d.autoScrolling&&!d.scrollBar)Ha("translate3d(0px, -"+a.dtop+"px, 0px)",!0),d.scrollingSpeed?setTimeout(function(){ma(a)},d.scrollingSpeed):ma(a);else{var b=U(a.dtop);ea(b.element,b.options,d.scrollingSpeed,function(){ma(a)})}}function U(a){var b=
{};d.autoScrolling&&!d.scrollBar?(b.options=-a,b.element=e(".fullpage-wrapper")):(b.options=a,b.element=n);return b}function ma(a){z(d.afterLoad)&&!a.localIsResizing&&d.afterLoad.call(a.element,a.anchorLink,a.sectionIndex+1);E=!0;z(a.callback)&&a.callback.call(this)}function Ya(){var a=n.location.hash.replace("#","").split("/"),b=a[0],a=a[1];b&&ia(b,a)}function Za(a){var b=this;b.self==n&&(b=a.target||a.srcElement);w(b,"fp-prev")?Y():X()}function Ia(){if(!ja){var a=n.location.hash.replace("#","").split("/"),
b=a[0],a=a[1];if(b.length){var c="undefined"===typeof F,d="undefined"===typeof F&&"undefined"===typeof a&&!G;(b&&b!==F&&!c||d||!G&&na!=a)&&ia(b,a)}}}function N(a,b){var c=q(b),f=I(a,function(a){return w(a,"fp-section")}),h=q(f),k=f.getAttribute("data-anchor"),g=e(".fp-slidesNav",f),l=Ja(b),m=u;if(d.onSlideLeave){var n=e(".fp-slide.active",f),r=q(n),v;v=r==c?"none":r>c?"left":"right";m||"none"===v||z(d.onSlideLeave)&&d.onSlideLeave.call(n,k,h+1,r,v)}n=p(".fp-slide",f);for(r=0;r<n.length;r++)B(n[r],
"active");t(b,"active");!d.loopHorizontal&&d.controlArrows&&(sa(e(".fp-controlArrow.fp-prev",f),0!==c),sa(e(".fp-controlArrow.fp-next",f),!b.is(":last-child")));w(f,"active")&&ka(c,l,k,h);var x=function(){m||z(d.afterSlideLoad)&&d.afterSlideLoad.call(b,k,h+1,l,c);G=!1};d.css3?(f="translate3d(-"+Math.round(b.offsetLeft)+"px, 0px, 0px)",n=e(".fp-slidesContainer",a),Ka(n,0<d.scrollingSpeed),La(n,f),setTimeout(function(){x()},d.scrollingSpeed,d.easing)):ea(a,Math.round(b.offsetLeft),d.scrollingSpeed,
function(){x()});d.slidesNavigation&&(B(e(".active",g),"active"),g=p("li",g)[c],g=e("a",g),t(g,"active"))}function $a(){if(oa){if("text"!==m.activeElement.getAttribute("type")){var a=R();Math.abs(a-pa)>20*Math.max(pa,a)/100&&(za(!0),pa=a)}}else clearTimeout(Ma),Ma=setTimeout(function(){za(!0)},350)}function Ka(a){var b="all "+d.scrollingSpeed+"ms "+d.easingcss3;B(a,"fp-notransition");v(a,{"-webkit-transition":b,transition:b});return a}function Z(a,b){if(d.menu){var c=e(d.menu);c&&(B(e(".active",c),
"active"),t(e('[data-menuanchor="'+a+'"]',c),"active"))}d.navigation&&(B(e(".active",x),"active"),a?t(e('a[href="#'+a+'"]',x),"active"):(c=p("li",x)[b],t(e("a",c),"active")))}function Ba(a){var b=q(e(".fp-section.active"));a=q(a);return b==a?"none":b>a?"up":"down"}function Ha(a,b){b?Ka(r):t(r,"fp-notransition");La(r,a);setTimeout(function(){B(r,"fp-notransition")},10)}function xa(a){var b=e('.fp-section[data-anchor="'+a+'"]');b||(b=p(".fp-section")[a-1]);return b}function ia(a,b){var c=xa(a);"undefined"===
typeof b&&(b=0);a===F||w(c,"active")?Na(c,b):A(c,function(){Na(c,b)})}function Na(a,b){if("undefined"!==typeof b){var c=e(".fp-slides",a),d;d=e(".fp-slides",a);var h=e('.fp-slide[data-anchor="'+b+'"]',d);d&&!h&&(h=p(".fp-slide",d)[b]);(d=h)&&N(c,d)}}function ka(a,b,c,e){e="";d.anchors.length&&(a?("undefined"!==typeof c&&(e=c),"undefined"===typeof b&&(b=a),na=b,Oa(e+"/"+b)):("undefined"!==typeof a&&(na=b),Oa(c)));qa()}function Oa(a){if(d.recordHistory)location.hash=a;else if(oa||ra)history.replaceState(C,
C,"#"+a);else{var b=n.location.href.split("#")[0];n.location.replace(b+"#"+a)}}function Ja(a){var b=a.getAttribute("data-anchor");a=q(a);b||(b=a);return b}function qa(a){a=e(".fp-section.active");var b=e(".fp-slide.active",a),c=a.getAttribute("data-anchor");a=q(a);a=String(a);d.anchors.length&&(a=c);b&&(b=Ja(b),a=a+"-"+b);a=a.replace("/","-").replace("#","");m.body.className=m.body.className.replace(RegExp("\\b\\s?fp-viewing-[^\\s]+\\b","g"),"");t(m.body,"fp-viewing-"+a)}function da(a,b,c,d,e){a.addEventListener?
(a.addEventListener(c,b,!1),"undefined"!==typeof e&&a.addEventListener(e,b,!1)):a.attachEvent(d,b)}function Ea(a){var b=[];b.y="undefined"!==typeof a.pageY&&(a.pageY||a.pageX)?a.pageY:a.touches[0].pageY;b.x="undefined"!==typeof a.pageX&&(a.pageY||a.pageX)?a.pageX:a.touches[0].pageX;ra&&la(a)&&(b.y=a.touches[0].pageY,b.x=a.touches[0].pageX);return b}function Pa(a,b){M(0,"internal");"undefined"!==typeof b&&(u=!0);var c=I(a,function(a){return w(a,"fp-slides")});N(c,a);"undefined"!==typeof b&&(u=!1);
M(Q.scrollingSpeed,"internal")}function L(a){d.scrollBar?(a=U(a),ta(a.element,a.options,0)):d.css3?Ha("translate3d(0px, -"+a+"px, 0px)",!1):r.style.top=-a+"px"}function La(a,b){v(a,{"-webkit-transform":b,"-moz-transform":b,"-ms-transform":b,transform:b})}function T(a,b,c){d[a]=b;"internal"!==c&&(Q[a]=b)}var d,G=!1,oa=navigator.userAgent.match(/(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/),ra="ontouchstart"in n||0<navigator.msMaxTouchPoints||
navigator.maxTouchPoints,Aa=R(),u=!1,F,na,E=!0,H=[],x,S,Q,r;Math.easeInOutCubic=function(a,b,c,d){return 1>(a/=d/2)?c/2*a*a*a+b:c/2*((a-=2)*a*a+2)+b};var Ca,Da,ja=!1,P=0,ca=0,O=0,ba=0,Ga=(new Date).getTime();m.addEventListener?n.addEventListener("hashchange",Ia,!1):n.attachEvent("onhashchange",Ia);var Qa;m.onkeydown=function(a){clearTimeout(Qa);var b=m.activeElement.tagName;if("SELECT"!==b&&"INPUT"!==b&&d.keyboardScrolling&&d.autoScrolling){a=n.event||a||a.originalEvent;for(var c=a.charCode||a.keyCode,
b=[40,38,32,33,34],e=0;e<b.length;e++)b[e]==c&&J(a);var h=a.shiftKey;Qa=setTimeout(function(){switch(c){case 38:case 33:V();break;case 32:if(h){V();break}case 40:case 34:ha();break;case 36:W(1);break;case 35:W(p(".fp-section").length);break;case 37:Y();break;case 39:X()}},150)}};null!==e(".fp-slidesNav a")&&K(e(".fp-slidesNav a"),"click onclick touchstart",function(a){J(a);a=I(this,function(a){return w(e1,"fp-section")});a=e(".fp-slides",a);var b=I(this,function(a){return"li"===a.tagName}),b=q(b),
b=p(".fp-slide",a)[b];N(a,b)});var pa=Aa,Ma;return{initialize:function(a,b){var c={menu:!1,anchors:[],navigation:!1,navigationPosition:"right",navigationColor:"#000",navigationTooltips:[],showActiveTooltip:!1,slidesNavigation:!1,slidesNavPosition:"bottom",scrollBar:!1,css3:!0,scrollingSpeed:700,autoScrolling:!0,fitToSection:!0,easingcss3:"ease",loopHorizontal:!0,touchSensitivity:5,keyboardScrolling:!0,recordHistory:!0,controlArrows:!0,sectionSelector:".section",slideSelector:".slide",afterLoad:null,
onLeave:null,afterRender:null,afterResize:null,afterReBuild:null,afterSlideLoad:null,onSlideLeave:null},f=b;"object"!==typeof f&&(f={});for(var h in f)c.hasOwnProperty(h)&&(c[h]=f[h]);d=c;c=d;if(null===c||"object"!==typeof c)Q=c;else{var f=c.constructor(),k;for(k in c)c.hasOwnProperty(k)&&(f[k]=c[k]);Q=f}r=e(a);B(r,"fp-destroyed");for(k=0;k<d.anchors.length;k++)c=d.anchors[k],(m.getElementById("#"+c)||p('[name="'+c+'"]').length)&&console&&console.error&&console.error("fullPage: data-anchor tags can not have the same value as any `id` element on the site (or `name` element for IE).");
if(d.css3){k=d;var c=m.createElement("p"),g,f={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};m.body.insertBefore(c,null);for(var l in f)c.style[l]!==C&&(c.style[l]="translate3d(1px,1px,1px)",g=n.getComputedStyle(c).getPropertyValue(f[l]));m.body.removeChild(c);k.css3=g!==C&&0<g.length&&"none"!==g}null!==r?(v(r,{height:"100%",position:"relative"}),t(r,"fullpage-wrapper"),t(e("html"),"fp-enabled")):console&&
console.error&&console.error("fullPage: Error! Fullpage.js needs to be initialized with a selector. For example: fullpage('#fullpage');");da(e(".fullpage-wrapper"),Wa,"mousewheel","onmousewheel","wheel");if(oa||ra)g=e(".fullpage-wrapper"),m.addEventListener&&(l=n.PointerEvent?{down:"pointerdown",move:"pointermove"}:{down:"MSPointerDown",move:"MSPointerMove"},g.removeEventListener("touchstart"),g.removeEventListener(l.down),g.removeEventListener("touchmove"),g.removeEventListener(l.move),K(g,"touchstart "+
l.down,Va),K(g,"touchmove "+l.move,Ua));da(n,$a,"resize","onresize");da(n,Ta,"scroll","onscroll","onscroll");l=p(d.sectionSelector);for(g=0;g<l.length;++g)t(l[g],"fp-section");l=p(d.slideSelector);for(g=0;g<l.length;++g)t(l[g],"fp-slide");d.navigation&&Sa();l=p(".fp-section");for(g=0;g<l.length;g++)if(f=g,c=l[g],k=p(".fp-slide",c),h=k.length,f||null!==e(".fp-section.active")||t(c,"active"),"undefined"!==typeof d.anchors[f]&&(c.setAttribute("data-anchor",d.anchors[f]),w(c,"active")&&Z(d.anchors[f],
f)),0<h){var y=100*h,f=100/h;c.innerHTML='<div class="fp-slides"><div class="fp-slidesContainer">'+c.innerHTML+"</div></div>";k=p(".fp-slide",c);e(".fp-slidesContainer",c).style.width=y+"%";if(d.controlArrows&&1<h){var y=c,u=m.createElement("div");u.className="fp-controlArrow fp-prev";var D=m.createElement("div");D.className="fp-controlArrow fp-next";var A=e(".fp-slides",y);A.parentNode.appendChild(u);A.parentNode.appendChild(D);d.loopHorizontal||(e(".fp-controlArrow.fp-prev",y).style.display="none")}if(d.slidesNavigation){y=
c;u=m.createElement("div");u.className="fp-slidesNav";D=m.createElement("ul");u.appendChild(D);y.appendChild(u);y=e(".fp-slidesNav",y);u=e("ul",y);t(y,d.slidesNavPosition);D="";for(A=0;A<h;A++)D+='<li><a href="#"><span></span></a></li>';u.innerHTML+=D;h="-"+y.offsetWidth/2+"px";y.style["margin-left"]=h;h=p("li",y)[0];t(e("a",h),"active")}for(h=0;h<k.length;h++)k[h].style.width=f+"%";c=e(".fp-slide.active",c);null!==typeof c?t(k[0],"active"):Pa(c)}g=p(".fp-controlArrow");for(l=0;l<g.length;l++)K(g[l],
"click onclick touchstart",Za);wa(d.autoScrolling,"internal");g=e(".fp-section.active");l=e(".fp-slide.active",g);k=q(e(".fp-section.active"));l&&(0!==k||0===k&&0!==q(l))&&Pa(l);d.navigation&&(x.style["margin-top"]="-"+x.offsetHeight/2+"px",l=p("li",x)[q(e(".fp-section.active"))],t(e("a",l),"active"));l=e(".fp-section.active");z(d.afterLoad)&&d.afterLoad.call(l,l.getAttribute("data-anchor"),q(l)+1);z(d.afterRender)&&d.afterRender.call(r);l=n.location.hash.replace("#","").split("/")[0];l.length&&(k=
e('[data-anchor="'+l+'"]'),!d.animateAnchor&&k.length&&(d.autoScrolling?L(k.offsetTop):(L(0),qa(l),c=U(k.offsetTop),ea(c.element,c.options,0)),Z(l,null),z(d.afterLoad)&&d.afterLoad.call(k,l,q(k)+1),B(g,"active"),t(k,"active")));qa();da(m,Ya,"DOMContentLoaded","DOMContentLoaded","DOMContentLoaded")},moveSectionUp:V,moveSectionDown:ha,moveTo:W,silentMoveTo:function(a,b){M(0,"internal");W(a,b);M(Q.scrollingSpeed,"internal")},moveSlideRight:X,moveSlideLeft:Y,setAutoScrolling:wa,setFitToSection:function(a,
b){T("fitToSection",a,b)},setKeyboardScrolling:function(a){d.keyboardScrolling=a},setRecordHistory:ga,setScrollingSpeed:M}});</script>
<script>
fullpage.initialize('#fullpage', {
	anchors: ['home', 'projects', 'contact', '4thpage', 'lastPage'],
	menu: '#menu',
	css3:true
});
</script>
</body>
</html>