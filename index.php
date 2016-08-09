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
.fp-section{position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
.fp-slide{float:left}
.fp-slide,.fp-slidesContainer{height:100%;display:block}
.fp-slides{z-index:1;height:100%;overflow:hidden;position:relative;-webkit-transition:all .3s ease-out;transition:all .3s ease-out}
.fp-section.fp-table,.fp-slide.fp-table{display:table;table-layout:fixed;width:100%}
.fp-tableCell{display:table-cell;vertical-align:middle;width:100%;height:100%}
.fp-slidesContainer{float:left;position:relative}
.fp-controlArrow{-webkit-user-select:none;-moz-user-select:none;-khtml-user-select:none;-ms-user-select:none;position:absolute;z-index:4;top:50%;cursor:pointer;width:0;height:0;border-style:solid;margin-top:-38px;-webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.fp-controlArrow.fp-prev{left:15px;width:0;border-width:38.5px 34px 38.5px 0;border-color:transparent #4d90fe transparent transparent}
.fp-controlArrow.fp-next{right:15px;border-width:38.5px 0 38.5px 34px;border-color:transparent transparent transparent #4d90fe}
.fp-scrollable{overflow:scroll}
.fp-notransition{-webkit-transition:none!important;transition:none!important}
#fp-nav{position:fixed;z-index:100;margin-top:-32px;top:50%;opacity:1;-webkit-transform:translate3d(0,0,0)}
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
#fp-nav ul li:hover a span,.fp-slidesNav ul li:hover a span{width:10px;height:10px;margin:-5px 0 0 -5px}
#fp-nav ul li .fp-tooltip{position:absolute;top:-2px;color:#fff;font-size:14px;font-family:arial,helvetica,sans-serif;white-space:nowrap;max-width:220px;overflow:hidden;display:block;opacity:0;width:0;cursor:pointer}
#fp-nav ul li:hover .fp-tooltip,#fp-nav.fp-show-active a.active+.fp-tooltip{-webkit-transition:opacity .2s ease-in;transition:opacity .2s ease-in;width:auto;opacity:1}
#fp-nav ul li .fp-tooltip.right{right:20px}
#fp-nav ul li .fp-tooltip.left{left:20px}
.fp-auto-height .fp-slide,.fp-auto-height .fp-tableCell,.fp-auto-height.fp-section{height:auto!important}
/* CUSTOM */
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
body{font-family:'Open Sans',sans-serif;color:#F2F2F2}
h1{font-size:6em}
h2{font-size:4em}
h3{font-size:3em}
p{font-size:2em}
.content{position:relative;text-align:center}
#section0{background-color:#2EBE21}
#section0 h1{color:#fff}
#section0 p{color:#fff;opacity:1}
#section1{background-color:#eee}
#section1 h2,#section1 h3{color:#4d90fe}
#section1 p{color:#4d90fe;opacity:.6}
#section2{background-color:#2C3E50}
#section2 h2{color:#F2F2F2}
#section2 p{opacity:.6}
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
.github{width:160px;height:84px;margin:0 auto;border-radius:12px;border:3px solid #4d90fe;position:relative}
.github a{position:absolute;width:100%;height:100%;top:0;left:0;text-decoration:none;padding-top:10px;color:#222}
dt,dd{line-height:1.1em;margin-bottom:8px;color:#fff}
dt{border-right:none}
dl{width:508px;margin:25px auto;text-align:left}
dt{width:190px;float:left;text-align:right}
dd{width:310px;float:right}
dd a{color:#ddd}
span.dl{background:#4d90fe;padding:8px;display:inline-block}
img{border:0}
/* Scroll down indicator */
.arrow,.arrow:after{-webkit-transform:rotate(360deg);border-width:3em 3em 0;width:0;height:0;border-style:solid}
.arrow-wrap{position:absolute;z-index:1;left:50%;top:250%;margin-left:-5em;width:10em;height:10em;padding:4em 2em;font-size:.5em;display:block}
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
	<div class="section" id="section0">
		<div class="content">
			<h1>Hi,</h1>
			<p>I'm Bram.</p>
			<a class="arrow-wrap" href="#projects">
				<span class="arrow"></span>
			</a>
		</div>
	</div>

	<div class="section" id="section1">
		<div class="slide" data-anchor="main" id="slide1">
			<div class="content">
				<h2>Projects</h2>
				<p>&nbsp;</p>
				<div class="github">
					<a href="https://github.com/BramVanAken"><img class="valign" src="data/img-github.png" alt="GitHub" width="64" height="64" />&nbsp; GitHub</a>
				</div>
			</div>
		</div>
		<div class="slide" data-anchor="e2r-info" id="slide2">
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
		<div class="slide" data-anchor="e2r-picture" id="slide3">
			<div class="content">
				<a href="http://e2r-architecten.be/"><img src="data/img-e2r.png" alt="E2R Architecten website" height="544" /></a>
			</div>
		</div>
		<div class="slide" data-anchor="dsign-info" id="slide4">
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
		<div class="slide" data-anchor="dsign-picture" id="slide5">
			<div class="content">
				<a href="dsign/index.html"><img src="data/img-dsign.png" alt="D-sign ontwerp website" height="660" /></a><!-- height 723 -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>/* fullPage 2.7.7 - https://github.com/alvarotrigo/fullPage.js - MIT licensed - Copyright (C) 2015 alvarotrigo.com - A project by Alvaro Trigo */
!function(e,n){"use strict";"function"==typeof define&&define.amd?define(["jquery"],function(o){return n(o,e,e.document,e.Math)}):"undefined"!=typeof exports?module.exports=n(require("jquery"),e,e.document,e.Math):n(jQuery,e,e.document,e.Math)}("undefined"!=typeof window?window:this,function(e,n,o,t,i){"use strict";var l,a="fullpage-wrapper",r="."+a,s="fp-scrollable",c="."+s,f=".slimScrollBar",d=".slimScrollRail",u="fp-responsive",p="fp-notransition",h="fp-destroyed",v="fp-enabled",m="fp-viewing",g="active",S="."+g,w=".section",y="fp-section",x="."+y,b=x+S,T=x+":first",C=x+":last",k="fp-tableCell",A="."+k,B="fp-auto-height",M="fp-normal-scroll",L="fp-nav",E="#"+L,R="fp-tooltip",F="."+R,H="fp-show-active",q=".slide",O="fp-slide",z="."+O,D=z+S,I="fp-slides",P="."+I,V="fp-slidesContainer",W="."+V,Y="fp-table",U="fp-slidesNav",X="."+U,N=X+" a",K="fp-controlArrow",j="."+K,Q="fp-prev",G="."+Q,J=K+" "+Q,Z=j+G,$="fp-next",_="."+$,ee=K+" "+$,ne=j+_,oe=e(n),te=e(o);e.fn.fullpage=function(s){function c(){s.css3&&(s.css3=mn()),s.scrollBar=s.scrollBar||s.hybrid,d(),K(),Hn.setAllowScrolling(!0),Wn=oe.height(),Hn.setAutoScrolling(s.autoScrolling,"internal");var n=e(b).find(D);n.length&&(0!==e(b).index(x)||0===e(b).index(x)&&0!==n.index())&&Tn(n),je(),vn(),oe.on("load",function(){Fe()})}function f(){oe.on("scroll",ce).on("hashchange",He).blur(Ve).resize(Ke),Vn.mousedown(De).mouseup(Ie),te.keydown(qe).keyup(ze).on("click touchstart",E+" a",We).on("click touchstart",N,Ye).on("click",F,Oe),e(x).on("click touchstart",j,Pe),s.normalScrollElements&&(te.on("mouseenter",s.normalScrollElements,function(){Hn.setMouseWheelScrolling(!1)}),te.on("mouseleave",s.normalScrollElements,function(){Hn.setMouseWheelScrolling(!0)}))}function d(){s.anchors.length||(s.anchors=e(s.sectionSelector+"[data-anchor]").map(function(){return e(this).data("anchor").toString()}).get()),s.navigationTooltips.length||(s.navigationTooltips=e(s.sectionSelector+"[data-tooltip]").map(function(){return e(this).data("tooltip").toString()}).get())}function K(){Vn.css({height:"100%",position:"relative"}),Vn.addClass(a),e("html").addClass(v),Vn.removeClass(h),ie(),e(x).each(function(n){var o=e(this),t=o.find(z),i=t.length;$(o,n),_(o,n),i>0?G(o,t,i):s.verticalCentered&&tn(o)}),s.fixedElements&&s.css3&&e(s.fixedElements).appendTo(Fn),s.navigation&&ae(),s.scrollOverflow?("complete"===o.readyState&&re(),oe.on("load",re)):se()}function G(n,o,t){var i=100*t,l=100/t;o.wrapAll('<div class="'+V+'" />'),o.parent().wrap('<div class="'+I+'" />'),n.find(W).css("width",i+"%"),t>1&&(s.controlArrows&&le(n),s.slidesNavigation&&dn(n,t)),o.each(function(n){e(this).css("width",l+"%"),s.verticalCentered&&tn(e(this))});var a=n.find(D);a.length&&(0!==e(b).index(x)||0===e(b).index(x)&&0!==a.index())?Tn(a):o.eq(0).addClass(g)}function $(n,o){o||0!==e(b).length||n.addClass(g),n.css("height",Wn+"px"),s.paddingTop&&n.css("padding-top",s.paddingTop),s.paddingBottom&&n.css("padding-bottom",s.paddingBottom),"undefined"!=typeof s.sectionsColor[o]&&n.css("background-color",s.sectionsColor[o]),"undefined"!=typeof s.anchors[o]&&n.attr("data-anchor",s.anchors[o])}function _(n,o){"undefined"!=typeof s.anchors[o]&&n.hasClass(g)&&_e(s.anchors[o],o),s.menu&&s.css3&&e(s.menu).closest(r).length&&e(s.menu).appendTo(Fn)}function ie(){e(s.sectionSelector).each(function(){e(this).addClass(y)}),e(s.slideSelector).each(function(){e(this).addClass(O)})}function le(e){e.find(P).after('<div class="'+J+'"></div><div class="'+ee+'"></div>'),"#fff"!=s.controlArrowColor&&(e.find(ne).css("border-color","transparent transparent transparent "+s.controlArrowColor),e.find(Z).css("border-color","transparent "+s.controlArrowColor+" transparent transparent")),s.loopHorizontal||e.find(Z).hide()}function ae(){Fn.append('<div id="'+L+'"><ul></ul></div>');var n=e(E);n.addClass(function(){return s.showActiveTooltip?H+" "+s.navigationPosition:s.navigationPosition});for(var o=0;o<e(x).length;o++){var t="";s.anchors.length&&(t=s.anchors[o]);var i='<li><a href="#'+t+'"><span></span></a>',l=s.navigationTooltips[o];"undefined"!=typeof l&&""!==l&&(i+='<div class="'+R+" "+s.navigationPosition+'">'+l+"</div>"),i+="</li>",n.find("ul").append(i)}e(E).css("margin-top","-"+e(E).height()/2+"px"),e(E).find("li").eq(e(b).index(x)).find("a").addClass(g)}function re(){e(x).each(function(){var n=e(this).find(z);n.length?n.each(function(){on(e(this))}):on(e(this))}),se()}function se(){var n=e(b);n.addClass("completely"),s.scrollOverflowHandler.afterRender&&s.scrollOverflowHandler.afterRender(n),Me(n),Le(n),e.isFunction(s.afterLoad)&&s.afterLoad.call(n,n.data("anchor"),n.index(x)+1),e.isFunction(s.afterRender)&&s.afterRender.call(Vn)}function ce(){var n;if(!s.autoScrolling||s.scrollBar){for(var t=oe.scrollTop(),i=de(t),l=0,a=t+oe.height()/2,r=o.querySelectorAll(x),c=0;c<r.length;++c){var f=r[c];f.offsetTop<=a&&(l=c)}if(fe(i)&&(e(b).hasClass("completely")||e(b).addClass("completely").siblings().removeClass("completely")),n=e(r).eq(l),!n.hasClass(g)){eo=!0;var d=e(b),u=d.index(x)+1,p=en(n),h=n.data("anchor"),v=n.index(x)+1,m=n.find(D);if(m.length)var S=m.data("anchor"),w=m.index();Xn&&(n.addClass(g).siblings().removeClass(g),e.isFunction(s.onLeave)&&s.onLeave.call(d,u,v,p),e.isFunction(s.afterLoad)&&s.afterLoad.call(n,h,v),Me(n),_e(h,v-1),s.anchors.length&&(qn=h,un(w,S,h,v))),clearTimeout(Jn),Jn=setTimeout(function(){eo=!1},100)}s.fitToSection&&(clearTimeout(Zn),Zn=setTimeout(function(){Xn&&s.fitToSection&&(e(b).is(n)&&requestAnimFrame(function(){Yn=!0}),be(n),requestAnimFrame(function(){Yn=!1}))},s.fitToSectionDelay))}}function fe(n){var o=e(b).position().top,t=o+oe.height();return"up"==n?t>=oe.scrollTop()+oe.height():o<=oe.scrollTop()}function de(e){var n=e>no?"down":"up";return no=e,n}function ue(e,n){if(Kn.m[e]){var o,t;if("down"==e?(o="bottom",t=Hn.moveSectionDown):(o="top",t=Hn.moveSectionUp),n.length>0){if(!s.scrollOverflowHandler.isScrolled(o,n))return!0;t()}else t()}}function pe(n){var o=n.originalEvent;if(!he(n.target)&&ve(o)){s.autoScrolling&&n.preventDefault();var i=e(b),l=s.scrollOverflowHandler.scrollable(i);if(Xn&&!Dn){var a=bn(o);io=a.y,lo=a.x,i.find(P).length&&t.abs(to-lo)>t.abs(oo-io)?t.abs(to-lo)>oe.outerWidth()/100*s.touchSensitivity&&(to>lo?Kn.m.right&&Hn.moveSlideRight():Kn.m.left&&Hn.moveSlideLeft()):s.autoScrolling&&t.abs(oo-io)>oe.height()/100*s.touchSensitivity&&(oo>io?ue("down",l):io>oo&&ue("up",l))}}}function he(n,o){o=o||0;var t=e(n).parent();return o<s.normalScrollElementTouchThreshold&&t.is(s.normalScrollElements)?!0:o==s.normalScrollElementTouchThreshold?!1:he(t,++o)}function ve(e){return"undefined"==typeof e.pointerType||"mouse"!=e.pointerType}function me(e){var n=e.originalEvent;if(s.fitToSection&&Rn.stop(),ve(n)){var o=bn(n);oo=o.y,to=o.x}}function ge(e,n){for(var o=0,i=e.slice(t.max(e.length-n,1)),l=0;l<i.length;l++)o+=i[l];return t.ceil(o/n)}function Se(o){var i=(new Date).getTime(),l=e(".completely").hasClass(M);if(s.autoScrolling&&!zn&&!l){o=o||n.event;var a=o.wheelDelta||-o.deltaY||-o.detail,r=t.max(-1,t.min(1,a)),c="undefined"!=typeof o.wheelDeltaX||"undefined"!=typeof o.deltaX,f=t.abs(o.wheelDeltaX)<t.abs(o.wheelDelta)||t.abs(o.deltaX)<t.abs(o.deltaY)||!c;Nn.length>149&&Nn.shift(),Nn.push(t.abs(a)),s.scrollBar&&(o.preventDefault?o.preventDefault():o.returnValue=!1);var d=e(b),u=s.scrollOverflowHandler.scrollable(d),p=i-ao;if(ao=i,p>200&&(Nn=[]),Xn){var h=ge(Nn,10),v=ge(Nn,70),m=h>=v;m&&f&&(0>r?ue("down",u):ue("up",u))}return!1}s.fitToSection&&Rn.stop()}function we(n,o){var t="undefined"==typeof o?e(b):o,i=t.find(P),l=i.find(z).length;if(!(!i.length||Dn||2>l)){var a=i.find(D),r=null;if(r="prev"===n?a.prev(z):a.next(z),!r.length){if(!s.loopHorizontal)return;r="prev"===n?a.siblings(":last"):a.siblings(":first")}Dn=!0,Ne(i,r)}}function ye(){e(D).each(function(){Tn(e(this),"internal")})}function xe(e,n){var o=e.top;return e.top>ro&&(o=o-Wn+n.outerHeight()),ro=o,o}function be(n,o,t){requestAnimFrame(function(){var i=n.position();if("undefined"!=typeof i){var l=xe(i,n),a={element:n,callback:o,isMovementUp:t,dest:i,dtop:l,yMovement:en(n),anchorLink:n.data("anchor"),sectionIndex:n.index(x),activeSlide:n.find(D),activeSection:e(b),leavingSection:e(b).index(x)+1,localIsResizing:Yn};if(!(a.activeSection.is(n)&&!Yn||s.scrollBar&&oe.scrollTop()===a.dtop&&!n.hasClass(B))){if(a.activeSlide.length)var r=a.activeSlide.data("anchor"),c=a.activeSlide.index();s.autoScrolling&&s.continuousVertical&&"undefined"!=typeof a.isMovementUp&&(!a.isMovementUp&&"up"==a.yMovement||a.isMovementUp&&"down"==a.yMovement)&&(a=ke(a)),(!e.isFunction(s.onLeave)||a.localIsResizing||s.onLeave.call(a.activeSection,a.leavingSection,a.sectionIndex+1,a.yMovement)!==!1)&&(Ee(a.activeSection),n.addClass(g).siblings().removeClass(g),Me(n),Xn=!1,un(c,r,a.anchorLink,a.sectionIndex),Te(a),qn=a.anchorLink,_e(a.anchorLink,a.sectionIndex))}}})}function Te(n){if(s.css3&&s.autoScrolling&&!s.scrollBar){var o="translate3d(0px, -"+n.dtop+"px, 0px)";an(o,!0),s.scrollingSpeed?Qn=setTimeout(function(){Be(n)},s.scrollingSpeed):Be(n)}else{var t=Ce(n);e(t.element).animate(t.options,s.scrollingSpeed,s.easing).promise().done(function(){s.scrollBar?setTimeout(function(){Be(n)},30):Be(n)})}}function Ce(e){var n={};return s.autoScrolling&&!s.scrollBar?(n.options={top:-e.dtop},n.element=r):(n.options={scrollTop:e.dtop},n.element="html, body"),n}function ke(n){return n.isMovementUp?e(b).before(n.activeSection.nextAll(x)):e(b).after(n.activeSection.prevAll(x).get().reverse()),Cn(e(b).position().top),ye(),n.wrapAroundElements=n.activeSection,n.dest=n.element.position(),n.dtop=n.dest.top,n.yMovement=en(n.element),n}function Ae(n){n.wrapAroundElements&&n.wrapAroundElements.length&&(n.isMovementUp?e(T).before(n.wrapAroundElements):e(C).after(n.wrapAroundElements),Cn(e(b).position().top),ye())}function Be(n){Ae(n),n.element.find(".fp-scrollable").mouseover(),e.isFunction(s.afterLoad)&&!n.localIsResizing&&s.afterLoad.call(n.element,n.anchorLink,n.sectionIndex+1),Le(n.element),n.element.addClass("completely").siblings().removeClass("completely"),Xn=!0,e.isFunction(n.callback)&&n.callback.call(this)}function Me(n){var n=Re(n);n.find("img[data-src], source[data-src], audio[data-src]").each(function(){e(this).attr("src",e(this).data("src")),e(this).removeAttr("data-src"),e(this).is("source")&&e(this).closest("video").get(0).load()})}function Le(n){var n=Re(n);n.find("video, audio").each(function(){var n=e(this).get(0);n.hasAttribute("autoplay")&&"function"==typeof n.play&&n.play()})}function Ee(n){var n=Re(n);n.find("video, audio").each(function(){var n=e(this).get(0);n.hasAttribute("data-ignore")||"function"!=typeof n.pause||n.pause()})}function Re(n){var o=n.find(D);return o.length&&(n=e(o)),n}function Fe(){var e=n.location.hash.replace("#","").split("/"),o=e[0],t=e[1];o&&(s.animateAnchor?cn(o,t):Hn.silentMoveTo(o,t))}function He(){if(!eo&&!s.lockAnchors){var e=n.location.hash.replace("#","").split("/"),o=e[0],t=e[1],i="undefined"==typeof qn,l="undefined"==typeof qn&&"undefined"==typeof t&&!Dn;o.length&&(o&&o!==qn&&!i||l||!Dn&&On!=t)&&cn(o,t)}}function qe(n){clearTimeout($n);var o=e(":focus");if(!o.is("textarea")&&!o.is("input")&&!o.is("select")&&s.keyboardScrolling&&s.autoScrolling){var t=n.which,i=[40,38,32,33,34];e.inArray(t,i)>-1&&n.preventDefault(),zn=n.ctrlKey,$n=setTimeout(function(){Ue(n)},150)}}function Oe(){e(this).prev().trigger("click")}function ze(e){Un&&(zn=e.ctrlKey)}function De(e){2==e.which&&(so=e.pageY,Vn.on("mousemove",Xe))}function Ie(e){2==e.which&&Vn.off("mousemove")}function Pe(){var n=e(this).closest(x);e(this).hasClass(Q)?Kn.m.left&&Hn.moveSlideLeft(n):Kn.m.right&&Hn.moveSlideRight(n)}function Ve(){Un=!1,zn=!1}function We(n){n.preventDefault();var o=e(this).parent().index();be(e(x).eq(o))}function Ye(n){n.preventDefault();var o=e(this).closest(x).find(P),t=o.find(z).eq(e(this).closest("li").index());Ne(o,t)}function Ue(n){var o=n.shiftKey;switch(n.which){case 38:case 33:Kn.k.up&&Hn.moveSectionUp();break;case 32:if(o&&Kn.k.up){Hn.moveSectionUp();break}case 40:case 34:Kn.k.down&&Hn.moveSectionDown();break;case 36:Kn.k.up&&Hn.moveTo(1);break;case 35:Kn.k.down&&Hn.moveTo(e(x).length);break;case 37:Kn.k.left&&Hn.moveSlideLeft();break;case 39:Kn.k.right&&Hn.moveSlideRight();break;default:return}}function Xe(e){Xn&&(e.pageY<so?Hn.moveSectionUp():e.pageY>so&&Hn.moveSectionDown()),so=e.pageY}function Ne(n,o){var i=o.position(),l=o.index(),a=n.closest(x),r=a.index(x),c=a.data("anchor"),f=a.find(X),d=hn(o),u=a.find(D),p=Yn;if(s.onSlideLeave){var h=u.index(),v=nn(h,l);if(!p&&"none"!==v&&e.isFunction(s.onSlideLeave)&&s.onSlideLeave.call(u,c,r+1,h,v,l)===!1)return void(Dn=!1)}Ee(u),o.addClass(g).siblings().removeClass(g),p||Me(o),!s.loopHorizontal&&s.controlArrows&&(a.find(Z).toggle(0!==l),a.find(ne).toggle(!o.is(":last-child"))),a.hasClass(g)&&un(l,d,c,r);var m=function(){p||e.isFunction(s.afterSlideLoad)&&s.afterSlideLoad.call(o,c,r+1,d,l),Le(o),Dn=!1};if(s.css3){var w="translate3d(-"+t.round(i.left)+"px, 0px, 0px)";Qe(n.find(W),s.scrollingSpeed>0).css(kn(w)),Gn=setTimeout(function(){m()},s.scrollingSpeed,s.easing)}else n.animate({scrollLeft:t.round(i.left)},s.scrollingSpeed,s.easing,function(){m()});f.find(S).removeClass(g),f.find("li").eq(l).find("a").addClass(g)}function Ke(){if(je(),In){var n=e(o.activeElement);if(!n.is("textarea")&&!n.is("input")&&!n.is("select")){var i=oe.height();t.abs(i-co)>20*t.max(co,i)/100&&(Hn.reBuild(!0),co=i)}}else clearTimeout(jn),jn=setTimeout(function(){Hn.reBuild(!0)},350)}function je(){var e=s.responsive||s.responsiveWidth,n=s.responsiveHeight,o=e&&oe.outerWidth()<e,t=n&&oe.height()<n;e&&n?Hn.setResponsive(o||t):e?Hn.setResponsive(o):n&&Hn.setResponsive(t)}function Qe(e){var n="all "+s.scrollingSpeed+"ms "+s.easingcss3;return e.removeClass(p),e.css({"-webkit-transition":n,transition:n})}function Ge(e){return e.addClass(p)}function Je(e,n){var o=825,i=900;if(o>e||i>n){var l=100*e/o,a=100*n/i,r=t.min(l,a),s=r.toFixed(2);Fn.css("font-size",s+"%")}else Fn.css("font-size","100%")}function Ze(n,o){s.navigation&&(e(E).find(S).removeClass(g),n?e(E).find('a[href="#'+n+'"]').addClass(g):e(E).find("li").eq(o).find("a").addClass(g))}function $e(n){s.menu&&(e(s.menu).find(S).removeClass(g),e(s.menu).find('[data-menuanchor="'+n+'"]').addClass(g))}function _e(e,n){$e(e),Ze(e,n)}function en(n){var o=e(b).index(x),t=n.index(x);return o==t?"none":o>t?"up":"down"}function nn(e,n){return e==n?"none":e>n?"left":"right"}function on(e){e.css("overflow","hidden");var n,o=s.scrollOverflowHandler,t=o.wrapContent(),i=e.closest(x),l=o.scrollable(e);l.length?n=o.scrollHeight(e):(n=e.get(0).scrollHeight,s.verticalCentered&&(n=e.find(A).get(0).scrollHeight));var a=Wn-parseInt(i.css("padding-bottom"))-parseInt(i.css("padding-top"));n>a?l.length?o.update(e,a):(s.verticalCentered?e.find(A).wrapInner(t):e.wrapInner(t),o.create(e,a)):o.remove(e),e.css("overflow","")}function tn(e){e.addClass(Y).wrapInner('<div class="'+k+'" style="height:'+ln(e)+'px;" />')}function ln(e){var n=Wn;if(s.paddingTop||s.paddingBottom){var o=e;o.hasClass(y)||(o=e.closest(x));var t=parseInt(o.css("padding-top"))+parseInt(o.css("padding-bottom"));n=Wn-t}return n}function an(e,n){n?Qe(Vn):Ge(Vn),Vn.css(kn(e)),setTimeout(function(){Vn.removeClass(p)},10)}function rn(n){var o=Vn.find(x+'[data-anchor="'+n+'"]');return o.length||(o=e(x).eq(n-1)),o}function sn(e,n){var o=n.find(P),t=o.find(z+'[data-anchor="'+e+'"]');return t.length||(t=o.find(z).eq(e)),t}function cn(e,n){var o=rn(e);"undefined"==typeof n&&(n=0),e===qn||o.hasClass(g)?fn(o,n):be(o,function(){fn(o,n)})}function fn(e,n){if("undefined"!=typeof n){var o=e.find(P),t=sn(n,e);t.length&&Ne(o,t)}}function dn(e,n){e.append('<div class="'+U+'"><ul></ul></div>');var o=e.find(X);o.addClass(s.slidesNavPosition);for(var t=0;n>t;t++)o.find("ul").append('<li><a href="#"><span></span></a></li>');o.css("margin-left","-"+o.width()/2+"px"),o.find("li").first().find("a").addClass(g)}function un(e,n,o,t){var i="";s.anchors.length&&!s.lockAnchors&&(e?("undefined"!=typeof o&&(i=o),"undefined"==typeof n&&(n=e),On=n,pn(i+"/"+n)):"undefined"!=typeof e?(On=n,pn(o)):pn(o)),vn()}function pn(e){if(s.recordHistory)location.hash=e;else if(In||Pn)n.history.replaceState(i,i,"#"+e);else{var o=n.location.href.split("#")[0];n.location.replace(o+"#"+e)}}function hn(e){var n=e.data("anchor"),o=e.index();return"undefined"==typeof n&&(n=o),n}function vn(){var n=e(b),o=n.find(D),t=hn(n),i=hn(o),l=(n.index(x),String(t));o.length&&(l=l+"-"+i),l=l.replace("/","-").replace("#","");var a=new RegExp("\\b\\s?"+m+"-[^\\s]+\\b","g");Fn[0].className=Fn[0].className.replace(a,""),Fn.addClass(m+"-"+l)}function mn(){var e,t=o.createElement("p"),l={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};o.body.insertBefore(t,null);for(var a in l)t.style[a]!==i&&(t.style[a]="translate3d(1px,1px,1px)",e=n.getComputedStyle(t).getPropertyValue(l[a]));return o.body.removeChild(t),e!==i&&e.length>0&&"none"!==e}function gn(){o.addEventListener?(o.removeEventListener("mousewheel",Se,!1),o.removeEventListener("wheel",Se,!1),o.removeEventListener("MozMousePixelScroll",Se,!1)):o.detachEvent("onmousewheel",Se)}function Sn(){var e,t="";n.addEventListener?e="addEventListener":(e="attachEvent",t="on");var l="onwheel"in o.createElement("div")?"wheel":o.onmousewheel!==i?"mousewheel":"DOMMouseScroll";"DOMMouseScroll"==l?o[e](t+"MozMousePixelScroll",Se,!1):o[e](t+l,Se,!1)}function wn(){if(In||Pn){var n=xn();e(r).off("touchstart "+n.down).on("touchstart "+n.down,me),e(r).off("touchmove "+n.move).on("touchmove "+n.move,pe)}}function yn(){if(In||Pn){var n=xn();e(r).off("touchstart "+n.down),e(r).off("touchmove "+n.move)}}function xn(){var e;return e=n.PointerEvent?{down:"pointerdown",move:"pointermove"}:{down:"MSPointerDown",move:"MSPointerMove"}}function bn(e){var n=[];return n.y="undefined"!=typeof e.pageY&&(e.pageY||e.pageX)?e.pageY:e.touches[0].pageY,n.x="undefined"!=typeof e.pageX&&(e.pageY||e.pageX)?e.pageX:e.touches[0].pageX,Pn&&ve(e)&&s.scrollBar&&(n.y=e.touches[0].pageY,n.x=e.touches[0].pageX),n}function Tn(e,n){Hn.setScrollingSpeed(0,"internal"),"undefined"!=typeof n&&(Yn=!0),Ne(e.closest(P),e),"undefined"!=typeof n&&(Yn=!1),Hn.setScrollingSpeed(_n.scrollingSpeed,"internal")}function Cn(e){if(s.scrollBar)Vn.scrollTop(e);else if(s.css3){var n="translate3d(0px, -"+e+"px, 0px)";an(n,!1)}else Vn.css("top",-e)}function kn(e){return{"-webkit-transform":e,"-moz-transform":e,"-ms-transform":e,transform:e}}function An(e,n,o){switch(n){case"up":Kn[o].up=e;break;case"down":Kn[o].down=e;break;case"left":Kn[o].left=e;break;case"right":Kn[o].right=e;break;case"all":"m"==o?Hn.setAllowScrolling(e):Hn.setKeyboardScrolling(e)}}function Bn(){Cn(0),e(E+", "+X+", "+j).remove(),e(x).css({height:"","background-color":"",padding:""}),e(z).css({width:""}),Vn.css({height:"",position:"","-ms-touch-action":"","touch-action":""}),Rn.css({overflow:"",height:""}),e("html").removeClass(v),e.each(Fn.get(0).className.split(/\s+/),function(e,n){0===n.indexOf(m)&&Fn.removeClass(n)}),e(x+", "+z).each(function(){s.scrollOverflowHandler.remove(e(this)),e(this).removeClass(Y+" "+g)}),Ge(Vn),Vn.find(A+", "+W+", "+P).each(function(){e(this).replaceWith(this.childNodes)}),Rn.scrollTop(0);var n=[y,O,V];e.each(n,function(n,o){e("."+o).removeClass(o)})}function Mn(e,n,o){s[e]=n,"internal"!==o&&(_n[e]=n)}function Ln(){s.continuousVertical&&(s.loopTop||s.loopBottom)&&(s.continuousVertical=!1,En("warn","Option `loopTop/loopBottom` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled")),s.scrollBar&&s.scrollOverflow&&En("warn","Option `scrollBar` is mutually exclusive with `scrollOverflow`. Sections with scrollOverflow might not work well in Firefox"),s.continuousVertical&&s.scrollBar&&(s.continuousVertical=!1,En("warn","Option `scrollBar` is mutually exclusive with `continuousVertical`; `continuousVertical` disabled")),e.each(s.anchors,function(n,o){(e("#"+o).length||e('[name="'+o+'"]').length)&&En("error","data-anchor tags can not have the same value as any `id` element on the site (or `name` element for IE).")})}function En(e,n){console&&console[e]&&console[e]("fullPage: "+n)}var Rn=e("html, body"),Fn=e("body"),Hn=e.fn.fullpage;s=e.extend({menu:!1,anchors:[],lockAnchors:!1,navigation:!1,navigationPosition:"right",navigationTooltips:[],showActiveTooltip:!1,slidesNavigation:!1,slidesNavPosition:"bottom",scrollBar:!1,hybrid:!1,css3:!0,scrollingSpeed:700,autoScrolling:!0,fitToSection:!0,fitToSectionDelay:1e3,easing:"easeInOutCubic",easingcss3:"ease",loopBottom:!1,loopTop:!1,loopHorizontal:!0,continuousVertical:!1,normalScrollElements:null,scrollOverflow:!1,scrollOverflowHandler:l,touchSensitivity:5,normalScrollElementTouchThreshold:5,keyboardScrolling:!0,animateAnchor:!0,recordHistory:!0,controlArrows:!0,controlArrowColor:"#fff",verticalCentered:!0,resize:!1,sectionsColor:[],paddingTop:0,paddingBottom:0,fixedElements:null,responsive:0,responsiveWidth:0,responsiveHeight:0,sectionSelector:w,slideSelector:q,afterLoad:null,onLeave:null,afterRender:null,afterResize:null,afterReBuild:null,afterSlideLoad:null,onSlideLeave:null},s),Ln(),e.extend(e.easing,{easeInOutCubic:function(e,n,o,t,i){return(n/=i/2)<1?t/2*n*n*n+o:t/2*((n-=2)*n*n+2)+o}}),e.extend(e.easing,{easeInQuart:function(e,n,o,t,i){return t*(n/=i)*n*n*n+o}}),Hn.setAutoScrolling=function(n,o){Mn("autoScrolling",n,o);var t=e(b);s.autoScrolling&&!s.scrollBar?(Rn.css({overflow:"hidden",height:"100%"}),Hn.setRecordHistory(_n.recordHistory,"internal"),Vn.css({"-ms-touch-action":"none","touch-action":"none"}),t.length&&Cn(t.position().top)):(Rn.css({overflow:"visible",height:"initial"}),Hn.setRecordHistory(!1,"internal"),Vn.css({"-ms-touch-action":"","touch-action":""}),Cn(0),t.length&&Rn.scrollTop(t.position().top))},Hn.setRecordHistory=function(e,n){Mn("recordHistory",e,n)},Hn.setScrollingSpeed=function(e,n){Mn("scrollingSpeed",e,n)},Hn.setFitToSection=function(e,n){Mn("fitToSection",e,n)},Hn.setLockAnchors=function(e){s.lockAnchors=e},Hn.setMouseWheelScrolling=function(e){e?Sn():gn()},Hn.setAllowScrolling=function(n,o){"undefined"!=typeof o?(o=o.replace(/ /g,"").split(","),e.each(o,function(e,o){An(n,o,"m")})):n?(Hn.setMouseWheelScrolling(!0),wn()):(Hn.setMouseWheelScrolling(!1),yn())},Hn.setKeyboardScrolling=function(n,o){"undefined"!=typeof o?(o=o.replace(/ /g,"").split(","),e.each(o,function(e,o){An(n,o,"k")})):s.keyboardScrolling=n},Hn.moveSectionUp=function(){var n=e(b).prev(x);n.length||!s.loopTop&&!s.continuousVertical||(n=e(x).last()),n.length&&be(n,null,!0)},Hn.moveSectionDown=function(){var n=e(b).next(x);n.length||!s.loopBottom&&!s.continuousVertical||(n=e(x).first()),n.length&&be(n,null,!1)},Hn.silentMoveTo=function(e,n){requestAnimFrame(function(){Hn.setScrollingSpeed(0,"internal")}),Hn.moveTo(e,n),requestAnimFrame(function(){Hn.setScrollingSpeed(_n.scrollingSpeed,"internal")})},Hn.moveTo=function(e,n){var o=rn(e);"undefined"!=typeof n?cn(e,n):o.length>0&&be(o)},Hn.moveSlideRight=function(e){we("next",e)},Hn.moveSlideLeft=function(e){we("prev",e)},Hn.reBuild=function(n){if(!Vn.hasClass(h)){Yn=!0,requestAnimFrame(function(){Yn=!0});var o=oe.outerWidth();Wn=oe.height(),s.resize&&Je(Wn,o),e(x).each(function(){var n=e(this).find(P),o=e(this).find(z);s.verticalCentered&&e(this).find(A).css("height",ln(e(this))+"px"),e(this).css("height",Wn+"px"),s.scrollOverflow&&(o.length?o.each(function(){on(e(this))}):on(e(this))),o.length>1&&Ne(n,n.find(D))});var t=e(b),i=t.index(x);i&&Hn.silentMoveTo(i+1),Yn=!1,requestAnimFrame(function(){Yn=!1}),e.isFunction(s.afterResize)&&n&&s.afterResize.call(Vn),e.isFunction(s.afterReBuild)&&!n&&s.afterReBuild.call(Vn)}},Hn.setResponsive=function(n){var o=Fn.hasClass(u);n?o||(Hn.setAutoScrolling(!1,"internal"),Hn.setFitToSection(!1,"internal"),e(E).hide(),Fn.addClass(u)):o&&(Hn.setAutoScrolling(_n.autoScrolling,"internal"),Hn.setFitToSection(_n.autoScrolling,"internal"),e(E).show(),Fn.removeClass(u))};var qn,On,zn,Dn=!1,In=navigator.userAgent.match(/(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/),Pn="ontouchstart"in n||navigator.msMaxTouchPoints>0||navigator.maxTouchPoints,Vn=e(this),Wn=oe.height(),Yn=!1,Un=!0,Xn=!0,Nn=[],Kn={};Kn.m={up:!0,down:!0,left:!0,right:!0},Kn.k=e.extend(!0,{},Kn.m);var jn,Qn,Gn,Jn,Zn,$n,_n=e.extend(!0,{},s);e(this).length&&(c(),f());var eo=!1,no=0,oo=0,to=0,io=0,lo=0,ao=(new Date).getTime();n.requestAnimFrame=function(){return n.requestAnimationFrame||n.webkitRequestAnimationFrame||n.mozRequestAnimationFrame||n.oRequestAnimationFrame||n.msRequestAnimationFrame||function(e){e()}}();var ro=0,so=0,co=Wn;Hn.destroy=function(n){Hn.setAutoScrolling(!1,"internal"),Hn.setAllowScrolling(!1),Hn.setKeyboardScrolling(!1),Vn.addClass(h),clearTimeout(Gn),clearTimeout(Qn),clearTimeout(jn),clearTimeout(Jn),clearTimeout(Zn),oe.off("scroll",ce).off("hashchange",He).off("resize",Ke),te.off("click",E+" a").off("mouseenter",E+" li").off("mouseleave",E+" li").off("click",N).off("mouseover",s.normalScrollElements).off("mouseout",s.normalScrollElements),e(x).off("click",j),clearTimeout(Gn),clearTimeout(Qn),n&&Bn()}};var ie={afterRender:function(e){var n=e.find(I),o=e.find(c);n.length&&(o=n.find(D)),o.mouseover()},create:function(e,n){e.find(c).slimScroll({allowPageScroll:!0,height:n+"px",size:"10px",alwaysVisible:!0})},isScrolled:function(e,n){return"top"===e?!n.scrollTop():"bottom"===e?n.scrollTop()+1+n.innerHeight()>=n[0].scrollHeight:void 0},scrollable:function(e){return e.find(P).length?e.find(D).find(c):e.find(c)},scrollHeight:function(e){return e.find(c).get(0).scrollHeight},remove:function(e){e.find(c).children().first().unwrap().unwrap(),e.find(f).remove(),e.find(d).remove()},update:function(e,n){e.find(c).css("height",n+"px").parent().css("height",n+"px")},wrapContent:function(){return'<div class="'+s+'"></div>'}};l=ie});
</script>
<script>$(document).ready(function(){$("#fullpage").fullpage({anchors:["home","projects","contact","4thpage","lastPage"]})});</script>
<link rel="stylesheet" property="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">

</body>
</html>