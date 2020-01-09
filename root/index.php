<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>Loopy Chat</title>
</head>
<body style="background-color:#f1f1f1;color:#fff;" >
<div class="code-editor" contenteditable="true" >	
			<span class="control"></span>
			<span class="control"></span>
			<span class="control"></span>
			<pre class="line-numbers">
				<code class="language-css">
/* 
   Just another pure CSS code editor design.
   Designed based on @roybarberuk's amazing Dribbble shot.
   Dribbble shot: http://dribbble.com/shots/1022371-Landing-Page-Element 

   Lea Verou's Prism syntax highlighter is used along with 
   the line number plugin and the Tomorrow-Theme.
*/

dr{
	background-color:red;
}

</code></pre>
</div>

<!-- loopyChat Plugin -->
<script type="text/javascript" src="./loopychat/js/jQuery.js" ></script>
<script type="text/javascript" >
window.__lpc = window.__lpc || {};
window.__lpc.license = "HD783H3E";

window.__lpc.autoclean = true;

(function() {
	var s=document.createElement('script');
	s.src= ('https:' == document.location.protocol ? 'https://' : 'http://') + 'localhost/loopychat/js/main.js';
	s.type='text/javascript';
	s.charset="UTF-8";
	s.async = true;
	$("body").append(s);
})();
</script>
<!-- loopyChat Plugin -->

</body>
</html>
<script>
/**
 * Prism: Lightweight, robust, elegant syntax highlighting
 * MIT license https://www.opensource.org/licenses/mit-license.php/
 * @author Lea Verou http://lea.verou.me
 */(function(){var e=/\blang(?:uage)?-(?!\*)(\w+)\b/i,t=self.Prism={util:{type:function(e){return Object.prototype.toString.call(e).match(/\[object (\w+)\]/)[1]},clone:function(e){var n=t.util.type(e);switch(n){case"Object":var r={};for(var i in e)e.hasOwnProperty(i)&&(r[i]=t.util.clone(e[i]));return r;case"Array":return e.slice()}return e}},languages:{extend:function(e,n){var r=t.util.clone(t.languages[e]);for(var i in n)r[i]=n[i];return r},insertBefore:function(e,n,r,i){i=i||t.languages;var s=i[e],o={};for(var u in s)if(s.hasOwnProperty(u)){if(u==n)for(var a in r)r.hasOwnProperty(a)&&(o[a]=r[a]);o[u]=s[u]}return i[e]=o},DFS:function(e,n){for(var r in e){n.call(e,r,e[r]);t.util.type(e)==="Object"&&t.languages.DFS(e[r],n)}}},highlightAll:function(e,n){var r=document.querySelectorAll('code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code');for(var i=0,s;s=r[i++];)t.highlightElement(s,e===!0,n)},highlightElement:function(r,i,s){var o,u,a=r;while(a&&!e.test(a.className))a=a.parentNode;if(a){o=(a.className.match(e)||[,""])[1];u=t.languages[o]}if(!u)return;r.className=r.className.replace(e,"").replace(/\s+/g," ")+" language-"+o;a=r.parentNode;/pre/i.test(a.nodeName)&&(a.className=a.className.replace(e,"").replace(/\s+/g," ")+" language-"+o);var f=r.textContent;if(!f)return;f=f.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/\u00a0/g," ");var l={element:r,language:o,grammar:u,code:f};t.hooks.run("before-highlight",l);if(i&&self.Worker){var c=new Worker(t.filename);c.onmessage=function(e){l.highlightedCode=n.stringify(JSON.parse(e.data),o);t.hooks.run("before-insert",l);l.element.innerHTML=l.highlightedCode;s&&s.call(l.element);t.hooks.run("after-highlight",l)};c.postMessage(JSON.stringify({language:l.language,code:l.code}))}else{l.highlightedCode=t.highlight(l.code,l.grammar,l.language);t.hooks.run("before-insert",l);l.element.innerHTML=l.highlightedCode;s&&s.call(r);t.hooks.run("after-highlight",l)}},highlight:function(e,r,i){return n.stringify(t.tokenize(e,r),i)},tokenize:function(e,n,r){var i=t.Token,s=[e],o=n.rest;if(o){for(var u in o)n[u]=o[u];delete n.rest}e:for(var u in n){if(!n.hasOwnProperty(u)||!n[u])continue;var a=n[u],f=a.inside,l=!!a.lookbehind,c=0;a=a.pattern||a;for(var h=0;h<s.length;h++){var p=s[h];if(s.length>e.length)break e;if(p instanceof i)continue;a.lastIndex=0;var d=a.exec(p);if(d){l&&(c=d[1].length);var v=d.index-1+c,d=d[0].slice(c),m=d.length,g=v+m,y=p.slice(0,v+1),b=p.slice(g+1),w=[h,1];y&&w.push(y);var E=new i(u,f?t.tokenize(d,f):d);w.push(E);b&&w.push(b);Array.prototype.splice.apply(s,w)}}}return s},hooks:{all:{},add:function(e,n){var r=t.hooks.all;r[e]=r[e]||[];r[e].push(n)},run:function(e,n){var r=t.hooks.all[e];if(!r||!r.length)return;for(var i=0,s;s=r[i++];)s(n)}}},n=t.Token=function(e,t){this.type=e;this.content=t};n.stringify=function(e,r,i){if(typeof e=="string")return e;if(Object.prototype.toString.call(e)=="[object Array]")return e.map(function(t){return n.stringify(t,r,e)}).join("");var s={type:e.type,content:n.stringify(e.content,r,i),tag:"span",classes:["token",e.type],attributes:{},language:r,parent:i};s.type=="comment"&&(s.attributes.spellcheck="true");t.hooks.run("wrap",s);var o="";for(var u in s.attributes)o+=u+'="'+(s.attributes[u]||"")+'"';return"<"+s.tag+' class="'+s.classes.join(" ")+'" '+o+">"+s.content+"</"+s.tag+">"};if(!self.document){self.addEventListener("message",function(e){var n=JSON.parse(e.data),r=n.language,i=n.code;self.postMessage(JSON.stringify(t.tokenize(i,t.languages[r])));self.close()},!1);return}var r=document.getElementsByTagName("script");r=r[r.length-1];if(r){t.filename=r.src;document.addEventListener&&!r.hasAttribute("data-manual")&&document.addEventListener("DOMContentLoaded",t.highlightAll)}})();;
Prism.languages.markup={comment:/&lt;!--[\w\W]*?-->/g,prolog:/&lt;\?.+?\?>/,doctype:/&lt;!DOCTYPE.+?>/,cdata:/&lt;!\[CDATA\[[\w\W]*?]]>/i,tag:{pattern:/&lt;\/?[\w:-]+\s*(?:\s+[\w:-]+(?:=(?:("|')(\\?[\w\W])*?\1|\w+))?\s*)*\/?>/gi,inside:{tag:{pattern:/^&lt;\/?[\w:-]+/i,inside:{punctuation:/^&lt;\/?/,namespace:/^[\w-]+?:/}},"attr-value":{pattern:/=(?:('|")[\w\W]*?(\1)|[^\s>]+)/gi,inside:{punctuation:/=|>|"/g}},punctuation:/\/?>/g,"attr-name":{pattern:/[\w:-]+/g,inside:{namespace:/^[\w-]+?:/}}}},entity:/&amp;#?[\da-z]{1,8};/gi};Prism.hooks.add("wrap",function(e){e.type==="entity"&&(e.attributes.title=e.content.replace(/&amp;/,"&"))});;
Prism.languages.css={comment:/\/\*[\w\W]*?\*\//g,atrule:{pattern:/@[\w-]+?.*?(;|(?=\s*{))/gi,inside:{punctuation:/[;:]/g}},url:/url\((["']?).*?\1\)/gi,selector:/[^\{\}\s][^\{\};]*(?=\s*\{)/g,property:/(\b|\B)[\w-]+(?=\s*:)/ig,string:/("|')(\\?.)*?\1/g,important:/\B!important\b/gi,ignore:/&(lt|gt|amp);/gi,punctuation:/[\{\};:]/g};Prism.languages.markup&&Prism.languages.insertBefore("markup","tag",{style:{pattern:/(&lt;|<)style[\w\W]*?(>|&gt;)[\w\W]*?(&lt;|<)\/style(>|&gt;)/ig,inside:{tag:{pattern:/(&lt;|<)style[\w\W]*?(>|&gt;)|(&lt;|<)\/style(>|&gt;)/ig,inside:Prism.languages.markup.tag.inside},rest:Prism.languages.css}}});;
Prism.languages.clike={comment:{pattern:/(^|[^\\])(\/\*[\w\W]*?\*\/|(^|[^:])\/\/.*?(\r?\n|$))/g,lookbehind:!0},string:/("|')(\\?.)*?\1/g,"class-name":{pattern:/((?:(?:class|interface|extends|implements|trait|instanceof|new)\s+)|(?:catch\s+\())[a-z0-9_\.\\]+/ig,lookbehind:!0,inside:{punctuation:/(\.|\\)/}},keyword:/\b(if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/g,"boolean":/\b(true|false)\b/g,"function":{pattern:/[a-z0-9_]+\(/ig,inside:{punctuation:/\(/}}, number:/\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee]-?\d+)?)\b/g,operator:/[-+]{1,2}|!|&lt;=?|>=?|={1,3}|(&amp;){1,2}|\|?\||\?|\*|\/|\~|\^|\%/g,ignore:/&(lt|gt|amp);/gi,punctuation:/[{}[\];(),.:]/g};
;
Prism.languages.javascript=Prism.languages.extend("clike",{keyword:/\b(var|let|if|else|while|do|for|return|in|instanceof|function|new|with|typeof|try|throw|catch|finally|null|break|continue)\b/g,number:/\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee]-?\d+)?|NaN|-?Infinity)\b/g});Prism.languages.insertBefore("javascript","keyword",{regex:{pattern:/(^|[^/])\/(?!\/)(\[.+?]|\\.|[^/\r\n])+\/[gim]{0,3}(?=\s*($|[\r\n,.;})]))/g,lookbehind:!0}});Prism.languages.markup&&Prism.languages.insertBefore("markup","tag",{script:{pattern:/(&lt;|<)script[\w\W]*?(>|&gt;)[\w\W]*?(&lt;|<)\/script(>|&gt;)/ig,inside:{tag:{pattern:/(&lt;|<)script[\w\W]*?(>|&gt;)|(&lt;|<)\/script(>|&gt;)/ig,inside:Prism.languages.markup.tag.inside},rest:Prism.languages.javascript}}});
;
Prism.hooks.add("after-highlight",function(e){var t=e.element.parentNode;if(!t||!/pre/i.test(t.nodeName)||t.className.indexOf("line-numbers")===-1){return}var n=1+e.code.split("\n").length;var r;lines=new Array(n);lines=lines.join("<span></span>");r=document.createElement("span");r.className="line-numbers-rows";r.innerHTML=lines;if(t.hasAttribute("data-start")){t.style.counterReset="linenumber "+(parseInt(t.getAttribute("data-start"),10)-1)}e.element.appendChild(r)})
;










</script>

<style>
body {
	background: #e16a3f;
}

.code-editor:before,
.code-editor:after,
.code-editor span.control:before,
.code-editor span.after:after {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	content: '';
	position: absolute;
	z-index: 1;
	-webkit-transition: all .5s ease-in-out;
    -moz-transition: wall .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
}

.code-editor {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-o-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	margin: 40px auto 0 auto;
   	width: 750px; 
   	text-align: left;
   	background-color: #473431;
   	border-radius: 0 0 5px 5px;
   	overflow: auto;
   	-webkit-transition: all .5s ease-in-out;
    -moz-transition: wall .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
}

.code-editor:before {
	content: 'Code Editor';
	font-family: 'Consolas';
	color: #222;
	padding-top: 6px; 
	text-align: center;
	top: 25px;
	width: 750px;
	height: 30px;
	background-color: #fafafa;
	border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	-o-border-radius: 5px 5px 0 0;
	-webkit-border-radius: 5px 5px 0 0;
}

.code-editor span.control:before {
	content: '';
	top: 34px;
	z-index: 2;
	padding: 6px;
	border-radius: 20px;
	-moz-border-radius: 20px;
	-o-border-radius: 20px;
	-webkit-border-radius: 20px;
}

.code-editor span.control:nth-child(1):before {
	margin-left: 15px;
	background-color: #df6963;
	
}

.code-editor span.control:nth-child(2):before {
	margin-left: 35px;
	background-color: #f5e18a;
	
}

.code-editor span.control:nth-child(3):before {
	margin-left: 55px;
	background-color: #97c38a;
}

/* -- iPad Screen -- */
@media only screen and (min-width: 480px) and (max-width: 768px) {
	.code-editor {
   		width: 500px; 
	}

	.code-editor:before {
		width: 500px;
	}
}

/* -- iPhone Screen -- */
@media only screen and (max-width: 479px) {
	.code-editor {
		width: 300px;
	}	

	.code-editor:before {
		width: 300px;
	}
}

/**
 * prism.js tomorrow night eighties for JavaScript, CoffeeScript, CSS and HTML
 * Based on https://github.com/chriskempson/tomorrow-theme
 * @author Rose Pritchard
 */

code[class*="language-"],
pre[class*="language-"] {
  color: #ccc;
  font-family: Consolas, Monaco, 'Andale Mono', monospace;
  direction: ltr;
  text-align: left;
  white-space: pre;
  word-spacing: normal;

  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;

  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;

}

/* Code blocks */
pre[class*="language-"] {
  padding: 1em;
  margin: 0em 0;
  height: 500px;
  overflow: auto;
}

:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background: #473431;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
  padding: .1em;
  border-radius: .3em;
  -moz-border-radius: .3em;
  -o-border-radius: .3em;
  -webkit-border-radius: .3em;
}

.token.comment,
.token.block-comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: #999;
}

.token.punctuation {
  color: #ccc;
}


.token.tag,
.token.attr-name,
.token.namespace {
  color: #e2777a;
}

.token.function-name {
  color: #6196cc;
}


.token.boolean,
.token.number,
.token.function {
  color: #f08d49;
}

.token.property,
.token.class-name,
.token.constant,
.token.symbol {
  color: #f8c555;
}

.token.selector,
.token.important,
.token.atrule,
.token.keyword,
.token.builtin {
  color: #cc99cd;
}

.token.string,
.token.attr-value,
.token.regex,
.token.variable {
  color: #7ec699;
}

.token.operator,
.token.entity,
.token.url
{
  color: #67cdcc;
}


.token.important {
  font-weight: bold;
}

.token.entity {
  cursor: help;
}

pre.line-numbers {
	position: relative;
	padding-left: 3.8em;
	counter-reset: linenumber;
	padding-bottom: 1px;
}

pre.line-numbers > code {
	position: relative;
}

.line-numbers .line-numbers-rows {
	position: absolute;
	pointer-events: none;
	top: 0;

	font-size: 100%;
	left: -13em;
	width: 3em; /* works for line-numbers below 1000 lines */
	letter-spacing: -1px;
	background-color: #322422;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;

}

.line-numbers-rows > span {
	pointer-events: none;
	display: block;
	counter-increment: linenumber;
}

.line-numbers-rows > span:before {
	content: counter(linenumber);
	color: #999;
	display: block;
	padding-right: 0.8em;
	text-align: right;
}


#U2E8U {
	color:blue;
	text-decoration: underline;
	cursor:pointer;
}
#U2E8U:hover {
	color:red;
}
</style>
<script>
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}
	
	function lpchat_windws(mod,pos){
		if( mod == 1 ){
			$(__lpc.id+'.warp').css('display','block').removeClass('close').addClass('open');  // open WINDOWS
		}if( mod == 0 ){
			$(__lpc.id+'.warp').css('display','none').removeClass('open').removeClass('minWinds').addClass('close'); //close WINDOWS
			$(__lpc.id+'.btn01').css("display","block");
			window.__lpc.smsready = false;
		}
	}



function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}            

function insertChat(who, text, time){
    if (time === undefined){
        time = 0;
    }
    var str = "";
    var date = formatAMPM(new Date());
	
	if( who == 'me' ){
		AIalgorithm.q(text,who);
	}
	
	if( text.split(__lpc.pvcd).length != 3 ){
		text = '<span>'+lpchat.fn("showcode",text)+'</span>';
	}else{ text = text.split(__lpc.pvcd)[1]; }
	
    if (who == "me"){
		if(!AIalgorithm.find){window.__lpc.cntasks[0]++;}
        str = '<li class="'+who+'" ><p class="tooltip-lft" >'+date+'</p>' + text + '</li>';     
    }else if (who == "him"){
		if(!AIalgorithm.find){window.__lpc.cntasks[1]++;}
		if( window.__lpc.smsready ){
			setTimeout(function(){ sng.p(0); },window.__lpc.smarttime);
		}else{
			
		}
		window.__lpc.smarttime = 1;
        str = '<li class="'+who+'" >' + '<img src="'+ __lpc.avatar.img +'" />' + text + '<p class="tooltip-rgt" >'+date+'</p></li>';
    }else if (who == "sys"){
		if(!AIalgorithm.find){window.__lpc.cntasks[2]++;}
		str = '<li class="'+who+'" >' + text + '</li>';
	}else{
		if(!AIalgorithm.find){window.__lpc.cntasks[3]++;}
	}
    setTimeout(
        function(){                        
            $(__lpc.id+"#applet").append(str);
			$(__lpc.id+'.body').scrollTop( $(__lpc.id+'.body')[0].scrollHeight );
        }
	, time);
    
}

function resetChat(){
    $(__lpc.id+"#applet").empty();
}
function scroolDw(e){
	setTimeout(function(){
		$(e).scrollTop( $(e)[0].scrollHeight );
	},750);
}

init_jQ();
function init_jQ(){

	$(__lpc.id+".base textarea").on("keyup", function(e){
		if ((e.keyCode === 13 || e.keyCode === 10) && !e.shiftKey ){
			var text = $(this).val();
			if (text !== ""){
				insertChat("me", text);              
				$(this).val('');
				sng.p(5);
			}
			$(this).trigger({type: 'keyup'});
			scroolDw(__lpc.id+'.body');
		}
	}).keypress(function(event) {  if (event.keyCode === 13 && !event.shiftKey ) { event.preventDefault(); }});
	
	$(__lpc.id+'#ic1').click(function(){
		$(__lpc.id+".base textarea").trigger({type: 'keyup', which: 13, keyCode: 13});
	});
	
	$("#toggle").on('click', function (e) {
		sng.p(2);
		toggleClass(this, 'on');
	return false;
	});

	$("body").on('click', function (e) {
		var elem = document.getElementById("toggle");
		if(hasClass(elem, 'on')){
			toggleClass(elem, 'on');
		}	
	});
	
	$(__lpc.id+".base textarea").on('focus', function (e) {
		
	});
	
	$(__lpc.id+".base textarea").on('blur', function (e) {
		
	});
	
	$(__lpc.id+".base #ic2").on('click', function (e) {
		$(__lpc.id+'input[type="file"]').click();
	});
	
	$(__lpc.id+'input[type="file"]').on('change', function (e) {
		console.log( lpchat.arrUpload(this) );
	});
	
	$(__lpc.id+".base textarea").on('change keyup paste click', function (e) {
		var value = $(this).val();
		setTimeout(function(){
			if( value ){
				$(__lpc.id+'.base #ic1').removeClass("emoji_ico");
				$(__lpc.id+'.base #ic1').addClass("send_ico");
			}else{
				$(__lpc.id+'.base #ic1').addClass("emoji_ico");
				$(__lpc.id+'.base #ic1').removeClass("send_ico");
			}
		},100);
	});
	
	var fdbk_01 = null;
	$(__lpc.id+"#tb2 #others #o1").on('click', function (e) {
		sng.p(2);
		if( fdbk_01 == 0 ){
			$(__lpc.id+"#tb2 #others #o2").removeClass("desliked_ico");
			$(__lpc.id+"#tb2 #others #o2").addClass("deslike_ico");
		}
		if( fdbk_01 == null ){
			lpchat.snackbar("Thank you for the rating!");
		}
		var crrn = "like";
		if( !$(this).hasClass(crrn+"d_ico") ){
			$(this).removeClass(crrn+"_ico");
			$(this).addClass(crrn+"d_ico");
			fdbk_01 = 1;
		}
	});
	
	$(__lpc.id+"#tb2 #others #o2").on('click', function (e) {
		sng.p(2);
		if( fdbk_01 == 1 ){
			$(__lpc.id+"#tb2 #others #o1").removeClass("liked_ico");
			$(__lpc.id+"#tb2 #others #o1").addClass("like_ico");
		}
		if( fdbk_01 == null ){
			lpchat.snackbar("Thank you for the rating!");
		}
		var crrn = "deslike";
		if( !$(this).hasClass(crrn+"d_ico") ){
			$(this).removeClass(crrn+"_ico");
			$(this).addClass(crrn+"d_ico");
			fdbk_01 = 0;
		}
	});
}



function presentation(){
	if( __lpc.autoclean ){
		__lpc.autoclean = false;
		resetChat();
		insertChat("sys", css("Bom te ver! <strong>:)</strong><br/><img src='https://cdn-images-1.medium.com/max/800/1*BWZp1CB1u7QE1CAr6eewrA.jpeg' width='50px' height='50px' ></img>"), 1700);
		window.__lpc.dialoglevel++;
	}
}

function i(tg,ex,cl,nm,tr){
	var ty = ["onClick","onKeyup"],g;
	if(tg=='a'){g = 0;}else if(tg=='buttom'){g = 0;}else if(tg=='input'){g = 1;}
	var l = tr.length, s='', t='';
	for( i=0; i<l; i++ ){ t="'"+tr[i]+"'";
		s+='<'+tg[ft(tg,i)]+' '+ty[g]+'="f('+t+',this);" ';
		s+='class="'+cl[ft(cl,i)]+'" '+ex[ft(ex,i)]+' ';
		s+='>'+nm[ft(nm,i)]+'</'+tg[ft(tg,i)]+'>';
	}
return s;
}

function ft(a,l){
	var s = a.length-1, z;
	if( l < s ){
		z = l;
	}else{ z = s; }
return z;
}

function f(e,el){
	var s = false;
	if(e=='rpy'){
		var v = el.innerText;
		insertChat("me",v,1200);
		altcs(v);
		s = true;
	}else if(e.split("::h::")[0]=='hrf'){
		var h = e.split("::h::")[1];
		window.open(h, '_blank');
		s = true;
	}else if(true){
		
	}
if(s){$(".sys").last().remove();}
}

function altcs(s){
	lpchat.snackbar(s);
}


var IDURL_TBUSER = "/loopychat/DB/user/";
function signupUSER(d){
	IDURL_TBUSER = IDURL_TBUSER+d[1]+".json";
	if( lpchat.fn("issetdir",IDURL_TBUSER ) == 0 ){
		var str = '{"name":[],"user":[],"mail":[],"pasw":[],"phto":[],"line":[],';
		str += '"webs":[],"tokn":[],"perm":[],"lang":[],"mlog":[],"fdbk":[]}';
		lpchat.setFile(str,IDURL_TBUSER);
	}
	var obj = JSON.parse(lpchat.getFile(IDURL_TBUSER));
	var len = svLuser(d[1]) || obj.user.length;
	obj.name[len] = lpchat.fn("ParsInt",d[0]);
	obj.user[len] = lpchat.fn("ParsInt",d[1]);
	obj.mail[len] = lpchat.fn("ParsInt",d[2]);
	obj.pasw[len] = lpchat.fn("ParsInt",d[3]);
	obj.phto[len] = lpchat.fn("ParsInt",d[4]);
	obj.line[len] = lpchat.fn("ParsInt",d[5]);
	obj.webs[len] = d[6];
	obj.tokn[len] = d[7];
	obj.perm[len] = d[8];
	obj.lang[len] = d[9];
	obj.mlog[len] = lpchat.fn("ParsInt",d[10]);
	obj.fdbk[len] = d[11];
	lpchat.setFile(JSON.stringify(obj),IDURL_TBUSER);
return 1;
}

function svLuser(u){
	var url = "/loopychat/DB/user/log/bin.json";
	var len = null;
	if( lpchat.fn("issetdir",url) == 0 ){
		var s = '{"user":[],"date":[]}';
		lpchat.setFile(s,url);
		var obj = JSON.parse(lpchat.getFile(url));
		len = obj.user.length;
		obj.user[len] = u;
		obj.date[len] = lpchat.getDateTimeNow();
		lpchat.setFile(JSON.stringify(obj),url);
	}else{
		var obj = JSON.parse(lpchat.getFile(url));
		len = obj.user.length;
	}
return len;
}

var AIalgorithm = {
	nqry: 0,
	txt: [],
	who: [],
	numspk: 0,
	find: false,
	bg: JSON.parse(lpchat.getFile("/loopychat/DB/AI/"+window.__lpc.lang+".bin")),
	q: function(q,w){
		var wq = null;
		if( w == 'me' ){
			this.find = false;
			var l = this.bg.qst.length;
			var arrA = [];
			var arrB = [];
			var k = 0;
			for( i=0; i< l; i++ ){
				var s = this.bg.key[i].length;
				for( j=0; j< s; j++ ){
					if(q.toLowerCase().indexOf(this.bg.key[i][j].toLowerCase()) != -1){
						// frase completa....
						this.find = true;
						wq = i;
					}else{
						var a = q.toLowerCase().split(" ");
						var b = this.bg.key[i][j].toLowerCase().split(" ");
						var x = a.length;
						var y = b.length;
						for( m=0; m<x; m++ ){
							for(n=0; n<y; n++){
								if( a[m] === b[n] ){
									arrB[k] = i;
									k++;
								}
							}
							arrA[m] = arrB;
						}
					}
				}
			}
			if( this.rept(arrA[0])[1] >= 3 ){
				this.find = true;
				wq = this.rept(arrA[0])[0];
			}
		}
		
		this.who[this.nqry] = w;
		this.txt[this.nqry] = q;
		this.nqry++;
		if( this.find ){
			this.actn( wq );
		}
		
		if( window.__lpc.cntasks[0] >= this.numspk + 2 && window.__lpc.chatbot && !this.find ){
			setTimeout(function(){ insertChat("him", trouble.trl() ) },3000);
			this.numspk = window.__lpc.cntasks[0];
		}
		
	return this.find;
	},
	rept: function(e) {
		e.sort();
		var current = null;
		var a = [];
		var b = [];
		var cnt = 0;
		var max = -999;
		var pos = -1;
		for (var i = 0; i < e.length; i++) {
			if (e[i] != current) {
				current = e[i];
				cnt = 1;
			} else {
				cnt++;
			}
			if( cnt >= max ){
				max = cnt;
				pos = i;
			}
		}
	return [e[pos],max];
	},
	actn: function(ask){
		var v = this.cfl(this.bg.qst[ask]);
		var q = "Você quis dizer: "+v+"";
		var r = this.bg.awr[ask];
		var l = 1;
		if( window.__lpc.dialoglevel <= this.bg.lvl[ask] && window.__lpc.chatbot ){
			if( v.length > 1 ){
				l = ((v.length/10) * 1000)/4;
				insertChat("him", q, l/2);
			}
			setTimeout(function(){
				insertChat("him", r, 3500);
			},l);
			window.__lpc.smarttime = 2780;
			window.__lpc.dialoglevel++;
		}
	},
	cfl: function(s) {
		return s.charAt(0).toUpperCase() + s.slice(1);
	}
};

var trouble = {
	pt: [
	"Desculpe, não entendi a sua pergunta. Pode repetir?",
	"Estou com dificuldade em entender você. Tente fazer sua pergunta de uma maneira diferente.",
	css("Desculpe, eu não sei sobre isso. <br/>Você pode tentar fazer outra pergunta <br/>Ou iniciar uma <a id='U2E8U' onclick='initChat();' >conversa com a nossa equipe.</a>")
	],
	en: [
	"Sorry, I do not understand your question. Can repeat?",
	"I'm having a hard time understanding you. Try to ask your question in a different way.",
	css("You can try asking another question <br/>Or start a chat with <a id='U2E8U' onclick='initChat();' >our support team</a>.")
	],
	trl: function (){
		var s = '';
		if( __lpc.lang == 'pt_pt' ){
			s = this.pt[Math.floor(Math.random() * this.pt.length)];
		}else if( __lpc.lang == 'en_en' ){
			s = this.en[Math.floor(Math.random() * this.en.length)];
		}
	return s;
	}
};

//signupUSER(["Agostingo De Pina Ramos","1012444","agostinhopina95@gmail.com","senha","/myphoto/i7weufw.png","1","www.portalget.com","TOKEN","777","pt-pt","--",0]);

function css(s){return window.__lpc.pvcd+s+window.__lpc.pvcd;}

function initChat(){
	window.__lpc.chatbot = false;
	__lpc.autoclean = true;
	lpchat.drawC(0,['Chat with us!','Agostinho Ramos','Support Admin',himDATA(["/loopychat/img/agent.png"]),'a','0']);
	jQuery(document).ready(function () {
		init_jQ();
		lpchat.init();
	});
	setTimeout(function(){ $(__lpc.id+".btn01 img").click(); },1500);
}
function himDATA(s){
	$(__lpc.id+"#avatar").attr("src",s[0]);
	$(__lpc.id+".btn01 img").attr("src",s[0]);
	$(__lpc.id+".him img").attr("src",s[0]);
return __lpc.avatar.img = s[0];
}

function urlify(text) {
    var urlRegex = /(https?:\/\/[^\s]+)/g;
    return text.replace(urlRegex, function(url) {
        return ('<a href="' + url + '">' + url + '</a>');
    });
}

var lpc_learn = {
	mdir: __lpc.grm_dir+"not_sure/",
	lang: ["en","pt"],
	context: 0,
	
	a: function ( qury, c ){
		if(c==null){c=0;}
		this.context = c;
		qury = qury.toLowerCase();
		var qlen = qury.length;
		var cl = this.clang();
		var ct = this.ctype();
		var cf = null;
		var d = null;
		var time = 0;
		if( this.isword(qury) ){
			cf = 0;
			d = this.mdir + this.lang[cl]+"/word/"+__lpc.grm_word_type[ct]+"/"+(qury.charAt(0))+"/"+qlen+".json";
		}else{
			cf = 1;
			d = this.mdir + this.lang[cl]+"/phrase/"+__lpc.grm_phrase_type[ct]+"/"+(qlen)+".json";
		}
		
		if( lpchat.fn("issetdir", d ) == 0 ){
			lpchat.setFile(this.__lpc.grm_jsFormat[cf],d);
		}
		try{
			var obj = JSON.parse(lpchat.getFile(d));
		}catch(e){
			console.log(d);
			time = 1500;
		}
		setTimeout(function(){
		var len = obj.v.length;
		if((obj.v).includes(qury)){cf=null;}
		switch(cf) {
			case 0:
				obj.v[len] = qury;
				obj.l[len] = 0;
				obj.c[len] = null;
				obj.m[len] = null;
				break;
			case 1:
				obj.v[len] = qury;
				obj.l[len] = 0;
				obj.f[len] = 0;
				break;
			default:
				;
		}
		lpchat.setFile(JSON.stringify(obj),d);
		},time);
	return 1;
	},
	isword: function (e){
		var r = null;
		if( e.split(" ").length == 1 ){
			r = true;
		}else{
			r = false;
		}
		return r;
	},
	clang: function (){
		var l = window.__lpc.lang;
		if( l == "pt_pt" || l == "pt_br" ){
			return 1;
		}else if( l == "en_en" ){
			return 0;
		}
	},
	ctype: function (){
		if( this.context.length > 0 ){
			return this.context;
		}
		
		//if( /* phrase context */ ){
		//	var s = qury;
		//	if(  ){ /* interrogative */
				
		//	}else if( s.charAt(s.length-1) == '!' && .search(/string1|string2|string3/)){ /* imperative */
				
		//	}else if( s.charAt(s.length-1) == '!' ){ /* exclamatory */
				
		//	}else if( s.charAt(s.length-1) == '!' ){ /* declarative */
				
		//	}else if( s.charAt(s.length-1) == '!' ){ /* elective */
				
		//	}
		//}
		
		return __lpc.learn_context;
	}
};

var str = {
	
	isword: function(e) {
		var alphanum = /^[a-zA-Z0-9]+$/;
		var iw = null;
		var ty = null;
		if( e.split(" ").length == 1 && (alphanum.test(e.charAt(0))&&alphanum.test(e.charAt(e.length-1))) ) {
			iw = 1;
		}else{
			iw = 0;
			var s = e.toLowerCase();
			var l = s.length;
			if( s.charAt(l-1) == '?' || true ){ /* interrogative */
				ty = 0;
			}else if( s.charAt(l-1) == '!' ){
				/*if(  ){
					
				}else{
					
				}*/
			}
		}
		
	return [iw,ty];
	},
	verb: function(e){
		
	}
	/*
	interrogative: function(){
		
	return null;
	},
	imperative: function(){
		
	return null;
	},
	exclamatory: function(){
		
	return null;
	},
	declarative: function(){
		
	return null;
	},
	elective: function(){
		
	return null;
	},
	nominal: function(){
		
	return null;
	},
	verbal: function(){
		
	return null;
	},
	unknown: function(){
		
	return null;
	}*/
};

var firstErrorLine = 0;
var name_r = "";
var type_r = "";
var max_r = -99999;
var min_r = 99999;

var from_type = "nouns";
var from_name = "2syllablenouns";
var posit_tp = 8;

var test = {
	grammar: function(){
		var in_dir = __lpc.grm_dir+"sure/en/word/"+__lpc.grm_word_type[posit_tp]+"/about.js";
		if( lpchat.fn("issetdir", in_dir ) == 0 ){
			lpchat.setFile(__lpc.grm_jsFormat[2], in_dir );
		}
		
		var from_dir = "/test/"+from_type+"/"+from_name+".txt";
		var from_arr = lpchat.getFile(from_dir).split("\r\n");
		var from_len = from_arr.length;
		var obj = null;
		
		for(i=0; i<from_len; i++){
			var qury = from_arr[i].toLowerCase();
			if(qury){
				var qlen = qury.length;
				var to_dir = __lpc.grm_dir+"sure/en/word/"+__lpc.grm_word_type[posit_tp]+"/"+(qury.charAt(0))+"/"+qlen+".json";
				if( lpchat.fn("issetdir", to_dir ) == 0 ){
					lpchat.setFile(__lpc.grm_jsFormat[0], to_dir );
				}
			}
		}
		console.log("Este processo irá terminar em "+(((from_len*130)/1000)/60)+" minutos.");
		
		(function myLoop (k) {
			setTimeout(function () {
				test._ins(k,from_len);
				if (--k){myLoop(k);}
			}, 130);
		})(from_len+1);
	},
	_ins: function(k,l){
			k = k - 1; var e = l - k;
			var from_dir = "/test/"+from_type+"/"+from_name+".txt";
			var from_arr = lpchat.getFile(from_dir).split("\r\n");
			var from_len = from_arr.length;
			var obj = null;
			var qury = from_arr[e];
			if(qury){
				var qlen = qury.length;
				type_r = (qury.charAt(0));
				name_r = qury;
				if( qlen >= max_r ){ max_r = qlen; }
				if( qlen <= min_r ){ min_r = qlen; }
				var to_dir = __lpc.grm_dir+"sure/en/word/"+__lpc.grm_word_type[posit_tp]+"/"+(qury.charAt(0))+"/"+qlen+".json";
					in_dir = __lpc.grm_dir+"sure/en/word/"+__lpc.grm_word_type[posit_tp]+"/about.js";
				try{
					var obj1 = JSON.parse(lpchat.getFile(in_dir));
					obj1.lastcode = obj1.lastcode + 1;
					obj1.type = type_r;
					obj1.name = name_r;
					obj1.time = lpchat.getDateTimeNow();
					obj1.max_len = max_r;
					obj1.min_len = min_r;
							
					obj = JSON.parse(lpchat.getFile(to_dir));
					var len = obj.v.length;
					if(!(obj.v).includes(qury)){
						obj.v[len] = qury;
						obj.l[len] = 2;
						obj.c[len] = obj1.lastcode;
						obj.m[len] = null;
						lpchat.setFile(JSON.stringify(obj),to_dir);
						lpchat.setFile(JSON.stringify(obj1),in_dir);
					}
				}catch(e){
					test._ins(e);
				}
			}
		console.log(k);
		
		if( k == 200 ){
			sng.p(4);
		}
		
		if( e == l ){
			console.log("done :)");
			lpchat.fn("del", from_dir );
		}
	}
};


</script>