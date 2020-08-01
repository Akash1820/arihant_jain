<!DOCTYPE html>
<html>

<head>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="awareness/css/header.css">
    <script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
       
/*        marquee*/
        .marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            font-size: 40px;
            color: #b50d29;

        }

        .pp {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -moz-animation: scroll-left 2s linear infinite;
            -webkit-animation: scroll-left 2s linear infinite;
            animation: scroll-left 15s linear infinite;
        }

        @-moz-keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
            }
        }

        @-webkit-keyframes scroll-left {
            0% {
                -webkit-transform: translateX(100%);
            }
            100% {
                -webkit-transform: translateX(-100%);
            }
        }

        @keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
            
        }
/*        3d*/
.banner {
    position: relative;
    height: 180px;
    padding: 11px 0 16px;
    margin: 0 auto;
    text-align: center;
}

.dg-container {
    padding-left: 10%;
    position: relative;
    width: 90%;
    height: 350px;
}

.dg-wrapper {
    width: 400px;
    height: 250px;
    margin: 0 auto;
    position: relative;
    transform-style: preserve-3d;
    perspective: 1000px;
}

.dg-wrapper a {
    width: 100%;
    height: 250px;
    display: block;
    position: absolute;
    left: 0;
    top: 0;
}

.dg-wrapper a:first-child {
    z-index: 2;
}

.dg-wrapper a img {
    display: block;
    box-shadow: 4px 6px 8px 0 rgba(0, 0, 0, 0.2), 4px 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius:25px;
    width: 100%;
    height:350px;
    background: #fff;
}

.dg-wrapper a.dg-transition {
    transition: all 0.5s ease-in-out;
}

.dg-wrapper a.dg-transition-fast {
    transition: all 0.2s ease-in-out;
}

.dg-container nav {
    display: none;
}

.dg-container nav span:hover {
    opacity: 1;
}

.dg-container nav span.dg-next {
    background-position: top right;
    margin-left: 10px;
}

.dg-container #lightButton2 {
    bottom: 20px;
}

.dg-container .button {
     position: relative;
     z-index: 5;
 }

.dg-container .button li {
    cursor: pointer;
    display: inline-block;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    margin-right: 5px;
    background: rgba(255, 255, 255, 0.30);
    border: 1px solid rgba(0, 0, 0, 0.20);
}

.dg-container .button .light {
    background: #01BDFF;
}
 
    </style>
<!--    card-->

    <style>
* {
  box-sizing: border-box;
}



/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding:  10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  body{
  overflow-x: hidden;
}
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
      margin-left: auto;
      margin-right: auto;
  }
     .container {
     width: 100%;
    padding-right: 15px;
    padding-top: 250px;
    padding-left: 8%;
    
}
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
/*    border-radius: 25px;*/
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
        .container {
    width: 100%;
    padding-right: 15px;
    padding-top: 250px;
    padding-left: 8%;
   
}
        
/*        glowing button*/
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.s{
    position: relative;
    display: inline-block;
    padding: 25px 30px;
    margin-left: 40px;
    margin-top: 40px;
    margin-bottom: 20px;
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 50px;
   
}
.s:hover{
    background: ;
    color:brown;
    box-shadow: 0 0 5px brown,
                0 0 25px brown,
                0 0 50px brown,
                0 0 200px brown;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #03e9f4);
}
.s:nth-child(1){
    filter: hue-rotate(270deg);
}
.s:nth-child(2){
    filter: hue-rotate(110deg);
}
.s span{
    position: absolute;
    display: block;
}
.s span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#b50d29);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
.s span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#b50d29);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
.s span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#b50d29);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}


.s span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#b50d29);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}
        body{
            background-color: #fae6f3
        }
        .aa{
            font-size: 20px
        }
        .z{
          font-size: 25px;
            color:white;
            text-align: center;
             -webkit-animation: blink 1s step-end infinite;
            animation: blink 1s step-end infinite;
        }
        @-webkit-keyframes blink { 50% { visibility: hidden; }}
        @keyframes blink { 50% { visibility: hidden; }}
</style>
    </head>

<body>

<div class="container-fluid" style="background-color: #b50d29;">
  
      <div class="row" style="background-color: #b50d29;">
       <div class="col-md-9 order-same order-md-2">
            <div class="date">
    <p class="headernew"><span id="datetime"></span></p>
  </div>
</div>
  <div class="col-md-3 order-same order-md-2">
                                                <div class="icons">
       <a href="https://www.facebook.com/BPRDIndia/"><i class="fa fa-facebook-square" align="right" style="font-size:36px;color:white"></i></a>
     <a href="https://twitter.com/BPRDIndia?s=20"><i class="fa fa-twitter-square" style="font-size:36px;color:white"></i></a>                
    <a href="https://www.youtube.com/channel/UCGhrg_cnnGuhwXfCU16kYow"><i class="fa fa-youtube-square" style="font-size:36px;color:white"></i></a>
</div>
</div>
        </div>
      </div>

         <div class="container-fluid" style="background-color: white;">
    
      <div class="row">
        <div id="logo" class="col-md-8 col-sm-8 col-xs-12 animated fadeInDown">
          <h1 class="logo">
            <a href="/" title="Home">
               <img src="awareness/images/header1.jpeg" alt="Home" style="height: 110px;">
            </a>
          </h1>
        </div>
      <div class="col-md-4 col-sm-4 col-xs-12 search ">
        
        <div class="polaroid">
          <img src="awareness/images/saynotocrime.jpg">
        </div>
          
        </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-expand-md  navbar-dark" style=" width: 100%; background-color: black; padding-top: 0px; padding-bottom: 0px;">
  
 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Anonymous Complaint</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rnt">Report & Track</a>
      </li>    
         <li class="nav-item">
        <a class="nav-link sactive" href="aware">Crime Awareness</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link" href="cybercrime">Cyber Awareness</a>
      </li>  
<!--
         <li class="nav-item">
        <a class="nav-link" href="resources">Resources</a>
      </li>  
-->
         <li class="nav-item">
        <a class="nav-link" href="helpline">Helpline</a>
      </li>  
         <li class="nav-item">
        <a class="nav-link" href="resources">Contact Us</a>
      </li>  
     <!--  <li class="nav-item">
        <a class="nav-link" href="faq">FAQ</a>
      </li>  -->
      <li></li>
    </ul>
  </div> 
</nav>
<br>
<!--
    <div class="container-fluid" style="background-color: black;">
        <div class="row" style="background-color: black;">
        <div class="col-md-12">
             <span class="z">Important!: SAY NO TO CRIME</span>
            </div>
        </div>
    </div>
-->
<!--
    <div class="marquee">
        <p class="pp">Disaster strikes when you waver your concentration.Be Aware!</p>
    </div>
-->
    <div class="banner">
        <section id="dg-container" class="dg-container">
            <div class="dg-wrapper">
                <a href="#">
                    <img src="https://cms.qz.com/wp-content/uploads/2018/07/india-sexual-violence-women.jpg?quality=75&strip=all&w=900&h=900&crop=1">
                </a>
                <a href="#">
                    <img src="https://www.jantakhoj.com/blog/wp-content/uploads/2018/05/JK-Blogs-Featured-Images-15-1.png">
                </a>
                <a href="#">
                    <img src="https://satyodaya.com/wp-content/uploads/2019/03/Corruption-2.jpg">
                </a>
                <a href="#">
                    <img src="https://t3.ftcdn.net/jpg/03/52/92/42/240_F_352924298_G05lqcIshKLdZRwxsNRtkAP1gvNAH8MN.jpg">
                </a>
                <a href="#" >
                    <img src="https://astanatimes.com/wp-content/uploads/2014/11/shutterstock_128008547.jpg">
                </a>
            </div>
            <ol class="button" id="lightButton">
                <li index="0">
                <li index="1">
                <li index="2">
                <li index="3">
                <li index="4">
            </ol>
            <nav>
                <span class="dg-prev"></span>
                <span class="dg-next"></span>
            </nav>
        </section>
    </div>
  
    
    <div class="as">
    <div class="container">
    <div class="row">
  <div class="column">
    <div class="card">
         <a href="awaree" class="s">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      <h3>TYPES OF CRIMES</h3>
    </a>
     <img style="width:100%;height:200px;" src="https://www.thehinducentre.com/migration_catalog/wffisb-colloquiumfinal/ALTERNATES/LANDSCAPE_615/colloquiumfinal"/>
      <br>
        <p class="aa">There are many different kinds of crimes, it is generally  divided into four primary categories:Personal crimes, Property crimes, Inchoate crimes, Statutory crimes and Financial crimes.</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
         <a href="crimerate" class="s">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <h3>CRIME RATE</h3>
    </a>
     <img style="width:100%;height:200px" src="https://i.ytimg.com/vi/6PJgJl_bHA4/maxresdefault.jpg"/>
   <br>
        <p class="aa">The crime rate for 100,000 of the population – a universal yardstick – for last year for IPC offences alone was 229.2, showing a 6% rise over the previous year.There is a 15% increase in the total crimes against women. </p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
         <a href="effect" class="s">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <h3>EFFECT OF CRIME</h3>
    </a>
           <img style="width:100%;height:200px" src="https://www.pewresearch.org/wp-content/uploads/2018/06/2018.06.06_religionIndia_featured.jpg"/>
        <br>
        <p class="aa">Crime not only affects economic productivity when victims miss work, but communities are also affected.</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
         <a href="basicawareness" class="s">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
       <h3>Awareness</h3>
        </a>
           <img style="width:100%;height:200px" src="https://rocksdigital.com/wp-content/uploads/2016/10/aware.jpg"/>
   <br>
      <p class="aa">Being aware will give you an insight into your beliefs and whether they are positive or holding you back.</p>
    </div>
  </div>
</div>

    
    </div></div>

    
    
    <footer class="page-footer" style="background-color: black;">

  <!-- Copyright -->
    <div class="row footer-bottom">
        <div  style ="padding :25px;margin-right:0px; text-align: center; color: white;"class="col-md-10">
            Site developed and maintained by Team Code Gear,<a href="https://www.facebook.com/pages/gitam-kablana/384890248243377" style="color: white;">GITAM</a> , Haryana. Send your feedbacks to <a href="https://mail.google.com/mail/u/1/#search/codegearsih2020%40gmail.com"  style="color: white;">codegearsih2020@gmail.com</a> 
        </div>
    </div>
    <script>
var dt = new Date();
document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
</script>
    <script>
    $(function () {
            $('#dg-container').carrousel({
                current: 0,
                autoplay: true,
                interval: 3000
            });
        });

!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,s,i,f;for(var a in y){if(e=[],n=y[a],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,s=0;s<e.length;s++)i=e[s],f=i.split("."),1===f.length?Modernizr[f[0]]=o:(!Modernizr[f[0]]||Modernizr[f[0]]instanceof Boolean||(Modernizr[f[0]]=new Boolean(Modernizr[f[0]])),Modernizr[f[0]][f[1]]=o),C.push((o?"":"no-")+f.join("-"))}}function s(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):_?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function i(){var e=n.body;return e||(e=s(_?"svg":"body"),e.fake=!0),e}function f(e,t,r,o){var f,a,u,l,p="modernizr",d=s("div"),c=i();if(parseInt(r,10))for(;r--;)u=s("div"),u.id=o?o[r]:p+(r+1),d.appendChild(u);return f=s("style"),f.type="text/css",f.id="s"+p,(c.fake?c:d).appendChild(f),c.appendChild(d),f.styleSheet?f.styleSheet.cssText=e:f.appendChild(n.createTextNode(e)),d.id=p,c.fake&&(c.style.background="",c.style.overflow="hidden",l=S.style.overflow,S.style.overflow="hidden",S.appendChild(c)),a=t(d,e),c.fake?(c.parentNode.removeChild(c),S.style.overflow=l,S.offsetHeight):d.parentNode.removeChild(d),!!a}function a(e,n){return!!~(""+e).indexOf(n)}function u(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function l(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function p(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(l(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var s=[];o--;)s.push("("+l(n[o])+":"+r+")");return s=s.join(" or "),f("@supports ("+s+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function d(e,n,o,i){function f(){d&&(delete k.style,delete k.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var l=p(e,o);if(!r(l,"undefined"))return l}for(var d,c,m,v,h,y=["modernizr","tspan"];!k.style;)d=!0,k.modElem=s(y.shift()),k.style=k.modElem.style;for(m=e.length,c=0;m>c;c++)if(v=e[c],h=k.style[v],a(v,"-")&&(v=u(v)),k.style[v]!==t){if(i||r(o,"undefined"))return f(),"pfx"==n?v:!0;try{k.style[v]=o}catch(g){}if(k.style[v]!=h)return f(),"pfx"==n?v:!0}return f(),!1}function c(e,n){return function(){return e.apply(n,arguments)}}function m(e,n,t){var o;for(var s in e)if(e[s]in n)return t===!1?e[s]:(o=n[e[s]],r(o,"function")?c(o,t||n):o);return!1}function v(e,n,t,o,s){var i=e.charAt(0).toUpperCase()+e.slice(1),f=(e+" "+P.join(i+" ")+i).split(" ");return r(n,"string")||r(n,"undefined")?d(f,n,o,s):(f=(e+" "+T.join(i+" ")+i).split(" "),m(f,n,t))}function h(e,n,r){return v(e,t,t,n,r)}var y=[],g={_version:"3.0.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){y.push({name:e,fn:n,options:t})},addAsyncTest:function(e){y.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=g,Modernizr=new Modernizr;var C=[],S=n.documentElement,w="CSS"in e&&"supports"in e.CSS,x="supportsCSS"in e;Modernizr.addTest("supports",w||x);var _="svg"===S.nodeName.toLowerCase(),b=g.testStyles=f,z="Moz O ms Webkit",P=g._config.usePrefixes?z.split(" "):[];g._cssomPrefixes=P;var T=g._config.usePrefixes?z.toLowerCase().split(" "):[];g._domPrefixes=T;var E={elem:s("modernizr")};Modernizr._q.push(function(){delete E.elem});var k={style:E.elem.style};Modernizr._q.unshift(function(){delete k.style}),g.testAllProps=v,g.testAllProps=h,Modernizr.addTest("csstransforms3d",function(){var e=!!h("perspective","1px",!0),n=Modernizr._config.usePrefixes;if(e&&(!n||"webkitPerspective"in S.style)){var t;Modernizr.supports?t="@supports (perspective: 1px)":(t="@media (transform-3d)",n&&(t+=",(-webkit-transform-3d)")),t+="{#modernizr{left:9px;position:absolute;height:5px;margin:0;padding:0;border:0}}",b(t,function(n){e=9===n.offsetLeft&&5===n.offsetHeight})}return e}),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&h("transform","scale(1)",!0)}),o(),delete g.addTest,delete g.addAsyncTest;for(var A=0;A<Modernizr._q.length;A++)Modernizr._q[A]();e.Modernizr=Modernizr}(window,document);


(function ($) {

    $.carrousel = function (options, element) {
        this.$el = $(element);
        this._init(options);
    };

    $.carrousel.defaults = {
        current: 0, // index of current item
        autoplay: true,// slideshow on / off
        interval: 3000  // time between transitions
    };

    $.carrousel.prototype = {
        // 初始化
        _init: function (options) {
            this.options = $.extend(true, {}, $.carrousel.defaults, options);

            this.support3d = Modernizr.csstransforms3d;
            this.support2d = Modernizr.csstransforms;

            this.$wrapper = this.$el.find('.dg-wrapper');
            this.$items = this.$wrapper.children();
            this.itemsCount = this.$items.length;
            this.$nav = this.$el.find('nav');
            this.$navPrev = this.$nav.find('.dg-prev');
            this.$navNext = this.$nav.find('.dg-next');
            this.button = $('#lightButton li');
            this.box = $('.banner');
            this.imgWidth = $('.banner .dg-wrapper img').width();

            this.indexB = 0;
            this.CSSX = 0;
            this.CSSXout = 0;

            this.button[0].classList.add('light');

            this.current = this.options.current;
            this.isAnim = false;
            this.$items.css({
                'opacity': 1
            });
            this._updateWidth();
            this._layout();
            // load the events
            this._loadEvents();
            // slideshow
            if (this.options.autoplay) {
                this._startSlideshow();
            }

            var _self = this;
            for (var i = 0, len = this.button.length; i < len; i++) {     // 点击小圆点
                this.button[i].addEventListener('click', function() {
                    var toIndex = parseInt(this.getAttribute('index'));
                    var toMove = toIndex - _self.indexB;
                    switch (toMove) {
                        case 0:
                            break;
                        case 1:
                            _self._navigate('next', 'dg-transition');
                            break;
                        case -1:
                            _self._navigate('prev', 'dg-transition');
                            break;
                        default:
                            _self._stopSlideshow();
                            var bTime = setInterval(function () {
                                if (!_self.isAnim) {
                                    if (!toMove) {
                                        clearInterval(bTime);
                                        if (_self.options.autoplay) {
                                            _self._startSlideshow();
                                        }
                                    }
                                    else if (toMove > 0) {
                                        _self._navigate('next', 'dg-transition-fast');
                                        toMove--;
                                    }
                                    else if (toMove < 0) {
                                        _self._navigate('prev', 'dg-transition-fast');
                                        toMove++;
                                    }
                                }
                            }, 0);
                            break;
                    }
                });
            }
        },

        // 自适应宽度
        _updateWidth: function () {
            if (this.support3d) {
                if (document.body.clientWidth < 1000) {
                    this.CSSX = ($(this.box).width()  - 10 - this.imgWidth * 0.7) / 2;
                    this.CSSXout = 0;
                }
                else if (document.body.clientWidth >= 1000) {
                    this.CSSX = ($(this.box).width() * 1.2 + 480 - 10 - this.imgWidth * 0.5) / 2 * 0.5;
                    this.CSSXout = ($(this.box).width() * 1.2 + 480 - 10 - this.imgWidth * 0.5) / 2;
                }
            }
            else if (this.support2d) {
                if (document.body.clientWidth < 1464) {
                    this.CSSX = ($(this.box).width() - 10 - this.imgWidth * 0.9) / 2;
                    this.CSSXout = 0;
                }
                else if (document.body.clientWidth >= 1464) {
                    this.CSSX = (($(this.box).width() - 10 - this.imgWidth * 0.8) / 2) * 0.7;
                    this.CSSXout = ($(this.box).width() - 10 - this.imgWidth * 0.8) / 2;
                }
            }
        },

        // 显示小圆点
        _showButton: function () {
            var _self = this;
            for (var i = 0, len = _self.button.length; i < len; i++) {
                if (_self.button[i].classList.contains('light')) {
                    _self.button[i].classList.remove('light');
                    break;
                }
            }
            _self.button[_self.indexB].classList.add('light');
        },

        // 用来绑定点击事件
        _click: function (element, move) {
            var _self = this;
            element.off('click.gallery');
            element.on('click.gallery', function () {
                if (!this.isAnim) {
                    _self._navigate(move);
                    if (_self.options.autoplay) {
                        _self._startSlideshow();
                    }
                }
            });
        },

        // 初始样式
        _layout: function () {
            this._setItems();

            this.$leftItm.css(this._getCoordinates('left'));
            this.$rightItm.css(this._getCoordinates('right'));
            this.$currentItm.css(this._getCoordinates('center')).addClass('dg-center');

            this._click(this.$leftItm, 'prev');
            this._click(this.$prevItm, 'prev');

            this.$currentItm.off('click.carrousel');

            this._click(this.$rightItm, 'next');
            this._click(this.$nextItm, 'next');

            this.$nextItm.css(this._getCoordinates('outright'));
            this.$prevItm.css(this._getCoordinates('outleft'));

            this.$currentItm[0].href = this.$currentItm[0].getAttribute('link');
        },

        // 更新图片位置
        _setItems: function () {

            this.$items.removeClass('dg-center');

            this.$currentItm = this.$items.eq(this.current);
            this.$leftItm = ( this.current === 0 ) ? this.$items.eq(this.itemsCount - 1) : this.$items.eq(this.current - 1);
            this.$rightItm = ( this.current === this.itemsCount - 1 ) ? this.$items.eq(0) : this.$items.eq(this.current + 1);
            this.$nextItm = ( this.$rightItm.index() === this.itemsCount - 1 ) ? this.$items.eq(0) : this.$rightItm.next();
            this.$prevItm = ( this.$leftItm.index() === 0 ) ? this.$items.eq(this.itemsCount - 1) : this.$leftItm.prev();
        },

        _loadEvents: function () {
            var _self = this;
            this.$navPrev.on('click.carrousel', function () {
                _self._navigate('prev');
                return false;
            });

            this.$navNext.on('click.carrousel', function () {
                _self._navigate('next');
                return false;
            });

            this.$wrapper.on('webkitTransitionEnd.carrousel transitionend.carrousel OTransitionEnd.carrousel', function () {
                _self.$currentItm.addClass('dg-center');
                _self.$items.removeClass('dg-transition');
                _self.$items.removeClass('dg-transition-fast');
                _self.isAnim = false;

                // 处理中间元素的href
                _self.$currentItm[0].href = _self.$currentItm[0].getAttribute('link');
                _self.$leftItm[0].href = '#';
                _self.$rightItm[0].href = '#';

                // 处理左右元素的点击事件
                _self._click(_self.$leftItm, 'prev');
                _self._click(_self.$prevItm, 'prev');

                _self.$currentItm.off('click.gallery');

                _self._click(_self.$rightItm, 'next');
                _self._click(_self.$nextItm, 'next');
            });
        },

        // 定义样式
        _getCoordinates: function (position) {
            if (this.support3d) {
                switch (position) {
                    case 'outleft':
                        return {
                             'opacity': 0,
              'visibility': 'hidden'
                        };
                        break;
                    case 'outright':
                        return {
                             'opacity': 0,
              'visibility': 'hidden'
                        };
                        break;
                    case 'left':
                        return {
                            '-webkit-transform': 'translateX(-' + this.CSSX + 'px) translateZ(-300px) rotateY(25deg)',
                            '-moz-transform': 'translateX(-' + this.CSSX + 'px) translateZ(-300px) rotateY(25deg)',
                            '-o-transform': 'translateX(-' + this.CSSX + 'px) translateZ(-300px) rotateY(25deg)',
                            '-ms-transform': 'translateX(-' + this.CSSX + 'px) translateZ(-300px) rotateY(25deg)',
                            'transform': 'translateX(-' + this.CSSX + 'px) translateZ(-300px) rotateY(25deg)',
                            'opacity': 1,
                            'visibility': 'visible'
                        };
                        break;
                    case 'right':
                        return {
                            '-webkit-transform': 'translateX(' + this.CSSX + 'px) translateZ(-300px) rotateY(-25deg)',
                            '-moz-transform': 'translateX(' + this.CSSX + 'px) translateZ(-300px) rotateY(-25deg)',
                            '-o-transform': 'translateX(' + this.CSSX + 'px) translateZ(-300px) rotateY(-25deg)',
                            '-ms-transform': 'translateX(' + this.CSSX + 'px) translateZ(-300px) rotateY(-25deg)',
                            'transform': 'translateX(' + this.CSSX + 'px) translateZ(-300px) rotateY(-25deg)',
                            'opacity': 1,
                            'visibility': 'visible'
                        };
                        break;
                    case 'center':
                        return {
                            '-webkit-transform': 'translateX(0px) translateZ(0px) rotateY(0deg)',
                            '-moz-transform': 'translateX(0px) translateZ(0px) rotateY(0deg)',
                            '-o-transform': 'translateX(0px) translateZ(0px) rotateY(0deg)',
                            '-ms-transform': 'translateX(0px) translateZ(0px) rotateY(0deg)',
                            'transform': 'translateX(0px) translateZ(0px) rotateY(0deg)',
                            'opacity': 1,
                            'visibility': 'visible'
                        };
                        break;
                    case 'hide':
                        return {
                            '-webkit-transform': 'translate(0px) scale(0.7)',
                            'opacity': 1,
                            'visibility': 'visible',
                            'z-index': 1
                        };
                        break;
                }
            }
            else if (this.support2d) {
                switch (position) {
                    case 'outleft':
                        return {
                            '-webkit-transform': 'translate(-' + this.CSSXout + 'px) scale(0.8)',
                            '-moz-transform': 'translate(-' + this.CSSXout + 'px) scale(0.8)',
                            '-o-transform': 'translate(-' + this.CSSXout + 'px) scale(0.8)',
                            '-ms-transform': 'translate(-' + this.CSSXout + 'px) scale(0.8)',
                            'transform': 'translate(-' + this.CSSXout + 'px) scale(0.8)',
                            'opacity': 1,
                            'z-index': 2
                        };
                        break;
                    case 'outright':
                        return {
                            '-webkit-transform': 'translate(' + this.CSSXout + 'px) scale(0.8)',
                            '-moz-transform': 'translate(' + this.CSSXout + 'px) scale(0.8)',
                            '-o-transform': 'translate(' + this.CSSXout + 'px) scale(0.8)',
                            '-ms-transform': 'translate(' + this.CSSXout + 'px) scale(0.8)',
                            'transform': 'translate(' + this.CSSXout + 'px) scale(0.8)',
                            'opacity': 1,
                            'z-index': 2
                        };
                        break;
                    case 'left':
                        return {
                            '-webkit-transform': 'translate(-' + this.CSSX + 'px) scale(0.9)',
                            '-moz-transform': 'translate(-' + this.CSSX + 'px) scale(0.9)',
                            '-o-transform': 'translate(-' + this.CSSX + 'px) scale(0.9)',
                            '-ms-transform': 'translate(-' + this.CSSX + 'px) scale(0.9)',
                            'transform': 'translate(-' + this.CSSX + 'px) scale(0.9)',
                            'opacity': 1,
                            'visibility': 'visible',
                            'z-index': 3
                        };
                        break;
                    case 'right':
                        return {
                            '-webkit-transform': 'translate(' + this.CSSX + 'px) scale(0.9)',
                            '-moz-transform': 'translate(' + this.CSSX + 'px) scale(0.9)',
                            '-o-transform': 'translate(' + this.CSSX + 'px) scale(0.9)',
                            '-ms-transform': 'translate(' + this.CSSX + 'px) scale(0.9)',
                            'transform': 'translate(' + this.CSSX + 'px) scale(0.9)',
                            'opacity': 1,
                            'visibility': 'visible',
                            'z-index': 3
                        };
                        break;
                    case 'center':
                        return {
                            '-webkit-transform': 'translate(0px) scale(1)',
                            '-moz-transform': 'translate(0px) scale(1)',
                            '-o-transform': 'translate(0px) scale(1)',
                            '-ms-transform': 'translate(0px) scale(1)',
                            'transform': 'translate(0px) scale(1)',
                            'opacity': 1,
                            'visibility': 'visible',
                            'z-index': 4
                        };
                    case 'hide':
                        return {
                            '-webkit-transform': 'translate(0px) scale(0.7)',
                            '-moz-transform': 'translate(0px) scale(0.7)',
                            '-o-transform': 'translate(0px) scale(0.7)',
                            '-ms-transform': 'translate(0px) scale(0.7)',
                            'transform': 'translate(0px) scale(0.7)',
                            'opacity': 1,
                            'visibility': 'visible',
                            'z-index': 1
                        }
                        break;
                }
            }
        },

        // 切换
        _navigate: function (dir, speedClass) {
            speedClass = speedClass || 'dg-transition';
            if (!this.isAnim) {
                this._updateWidth();

                this.isAnim = true;
                var _self = this;

                switch (dir) {
                    case 'next' :
                        this.indexB++;
                        if (this.indexB === this.itemsCount) {
                            this.indexB = 0;
                        }
                        this._showButton();
                        this.current = this.$rightItm.index();
                        // current item moves left
                        this.$currentItm.addClass(speedClass).css(this._getCoordinates('left'));

                        // right item moves to the center
                        this.$rightItm.addClass(speedClass).css(this._getCoordinates('center'));

                        // left item moves out
                        this.$leftItm.addClass(speedClass).css(this._getCoordinates('outleft'));

                        this.$nextItm.addClass(speedClass).css(this._getCoordinates('right'));

                        if (this.itemsCount > 5) {
                            this.$prevItm.addClass(speedClass).css(this._getCoordinates('hide'));
                            this.$prevItm.off('click.carrousel');
                        }

                        var nextEle = ( this.$nextItm.index() === this.itemsCount - 1 ) ? this.$items.eq(0) : this.$nextItm.next();
                        $(nextEle).addClass(speedClass).css(this._getCoordinates('outright'));
                        $(nextEle).off('click.carrousel');

                        break;

                    case 'prev' :
                        this.indexB--;
                        if (this.indexB === -1) {
                            this.indexB = this.itemsCount - 1;
                        }
                        this._showButton();
                        this.current = this.$leftItm.index();
                        // current item moves right
                        this.$currentItm.addClass(speedClass).css(this._getCoordinates('right'));

                        // left item moves to the center
                        this.$leftItm.addClass(speedClass).css(this._getCoordinates('center'));

                        // right item moves out
                        this.$rightItm.addClass(speedClass).css(this._getCoordinates('outright'));

                        this.$prevItm.addClass(speedClass).css(this._getCoordinates('left'));

                        if (this.itemsCount > 5) {
                            this.$nextItm.addClass(speedClass).css(this._getCoordinates('hide'));
                            this.$nextItm.off('click.carrousel');
                        }

                        var prevEle = ( this.$prevItm.index() === 0 ) ? this.$items.eq(this.itemsCount - 1) : this.$prevItm.prev();
                        $(prevEle).addClass(speedClass).css(this._getCoordinates('outleft'));
                        $(prevEle).off('click.carrousel');

                        break;
                }
                ;
                this._setItems();
            }
        },

        // 自动切换
        _startSlideshow: function () {
            if (this.slideshow) {
                clearInterval(this.slideshow);
            }
            var _self = this;
            this.slideshow = setInterval(function () {
                if ($('.dg-center')[0] && !_self.isAnim) {
                    _self._navigate('next');
                }
            }, this.options.interval);
        },

        _stopSlideshow: function () {
            clearTimeout(this.slideshow);
        }
    };

    $.fn.carrousel = function (options) {
        if (typeof options === 'object') {
            this.each(function () {
                var instance = $.data(this, 'carrousel');
                if (!instance) {
                    $.data(this, 'carrousel', new $.carrousel(options, this));
                }
            });
        }
        else if (typeof options === 'string') {
            this.each(function () {
                var instance = $.data(this, 'carrousel');
                if (instance) {
                    switch (options) {
                        case 'play':
                            instance._startSlideshow();
                            instance.options.autoplay = true;
                            break;
                        case 'stop':
                            instance._stopSlideshow();
                            instance.options.autoplay = false;
                            break;
                        case 'next':
                            instance._navigate('next');
                            break;
                        case 'prev':
                            instance._navigate('prev');
                            break;
                    }
                }
            });
        }
        else if (typeof options === 'number') {
            this.each(function () {
                var instance = $.data(this, 'carrousel');
                instance.button[options].click();
            });
        }
        return this;
    };

})(jQuery);
    </script>
</body>

</html>