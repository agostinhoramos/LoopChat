var lpchat = {
	ourl: window.location.origin,
	pass: ["8732HUIR98FH3H","F87UHIRIE8UOIR","E8J3IU42579F83UH2JRHF8","892U309IEWIQFWUQR9"], /* write|read|cripto|permition */

	init: function(){
		var l=document.createElement('link');
		l.rel="stylesheet",l.type="text/css",l.href="./loopychat/css/main.css";
		$("body").append(l);
		$( document ).ready(function() {
			$(__lpc.id).css("display","block");
			var ntfy = parseInt($(__lpc.id+"#badge").data("badge"));
			if( ntfy > 0 ){
				$(__lpc.id+"#badge").data("badge", ntfy );
				$(__lpc.id+"#badge").addClass("badge");
			}
			$(__lpc.id+".btn01").on('click', function (e) {
				lpchat_windws(1,1);
				setTimeout(function(){
					window.__lpc.smsready = true;
				},2000);
				$(this).css("display","none");
				$(__lpc.id+"#badge").removeClass("badge");
				presentation();
			});
		});
	},
	lstmna: function(e){
		var l = e.length;
		var v = '';
		for(i=0; i<l; i++){
			v+='<li><a id="menui'+i+'" >'+e[i]+'</a></li>';
		}
	return v;
	},
	drawC: function(i,a){
	/* title|name|occu|photo|status|notify */
		var bclss = "#plugin-loopy-chat";
		$(bclss).remove(); var m = [];
		m[0]='<div id="'+bclss.split("#")[1]+'" accept-charset="ISO-8859-1" >';
		m[0]+='<div class="warp unselect" >';
		m[0]+='<div id="tb1" class="head" >';
		m[0]+='<p onClick="lpchat_windws(0,1);" id="close" >&times;</p>';
		m[0]+='<div id="title" >&nbsp; '+a[0]+'</div>';
		var mc = lpchat.lstmna(["About <i class='fnt_mrip' >Jooby Chat</i>","<i class='fas fa-play'></i><span class='fnt_mrip' >Mute</span>","Abuse report","Help",'<span class="fnt_attm" >Log out</span>']);
		m[0]+='<img id="toggle" src="./loopychat/img/setting-ctl.png" ></img><div id="menu"><ul>'+mc+'</ul></div>';
		m[0]+='</div><div id="tb2" >';
		m[0]+='<img src="'+a[3]+'" id="avatar" ></img>';
		m[0]+='<img status="'+a[4]+'" id="status" />';
		m[0]+='<p id="name" >'+a[1]+'</p>';
		m[0]+='<p id="morei" >'+a[2]+'</p>';
		m[0]+='<div id="others" >';
		m[0]+='<img src="./loopychat/img/like.png" id="o1" ></img>';
		m[0]+='<img src="./loopychat/img/deslike.png" id="o2" ></img>';
		m[0]+='</div></div><div class="body" >';
		m[0]+='<br/><pre><ul id="applet" ></ul></pre>';
		m[0]+='<br/></div><div class="base" >';
		m[0]+='<textarea placeholder="Write a message..." ></textarea>';
		m[0]+='<img src="./loopychat/img/emoji.png" id="ic1" class="emoji_ico" ></img>';
		m[0]+='<img src="./loopychat/img/annex.png" id="ic2" ></img>';
		m[0]+='<input type="file" multiple></div></div><div class="btn01 unselect" id="btn01" >';
		m[0]+='<a id="badge" data-badge="'+a[5]+'" >';
		m[0]+='<img src="'+a[3]+'" ></img>';
		m[0]+='</a></div><div id="snackbar" ></div></div>';
	
	$("body").append(m[i]);
	},
	snackbar: function(str) {
		if( str.length-1 > 0 ){ sng.p(5);
		$(__lpc.id+"#snackbar").html("<span class='unselect' >"+str+"</span>");
		var x = document.getElementById("snackbar");
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		}
	},
	arrUpload: function(e) {
		var f = e.files;
		var len = f.length;
		var a=[],n=[],s=[],k=0;
		for(i=0; i<len; i++){
			if (f && f[i]) {
				n[i]=f[i].name;
				s[i]=f[i].size;
				var reader = new FileReader();
				reader.onload = function(e) {
					a[k] = e.target.result;k++;
				}
	reader.readAsDataURL(f[i]);
			}
		}
	return [a,n,s];
	},
	getDateTimeNow: function() {
		var date,yy,MM,dd,hh,mm,ss,str;
		var date = new Date();
		yy = date.getFullYear();
		MM = (date.getMonth() + 1);
		dd = date.getDate();
		hh = date.getHours();
		mm = date.getMinutes();
		ss = date.getSeconds();
		if( yy < 10 ){
			yy = "0"+yy;
		}if( MM < 10 ){
			MM = "0"+MM;
		}if( dd < 10 ){
			dd = "0"+dd;
		}if( mm < 10 ){
			mm = "0"+mm;
		}if( ss < 10 ){
			ss = "0"+ss;
		}
		str = yy+""+MM+""+dd+""+hh+""+mm+""+ss
		return str;
	},
	str_to_json: function(x){
	  x = JSON.parse(x);
	  return x;
	},
	json_to_str: function(x){
	  x = JSON.stringify(x);
	  return x;
	},
	ascToStr: function(x){
		var obj = x.split("!");
		var len = obj.length-1;
		var str = "";
		for(i=0;i<len;i++){
			str = str + String.fromCharCode( obj[i] );
		}
		return str;
	},
	ascToInt: function(x){
		var str = "";
		var len = x.length;
		for(i=0;i<len;i++){
			str = str + x.charCodeAt(i)+"!";	
		}
		return str;
	},
	setFile: function(s, d){
		$.ajax({
			type: 'POST',
			url: lpchat.ourl+'/loopychat/php/classes/fn_write.php',
			async: true,
			data: {
				str: s,
				url: d,
				pass: lpchat.pass[0]
			},
			error: function (request, error) {
				return 0;
			},
			success: function (response) {
				if (response == 'OK') {
					return 1;
				} else { return 0; }
			}
		});
		return 1;
	},
	getFile: function(d){
		var str = 0;
		$.ajax({
			type: 'POST',
			url: lpchat.ourl+'/loopychat/php/classes/fn_write.php',
			dataType: 'Text',
			async: false,
			data: {
				url: d,
				pass: lpchat.pass[1]
			},
			success: function(data) {
				str = data;
			}
		});
	return str;
	},
	fn: function(m,d){
		var str = 0;
		$.ajax({
			type: 'POST',
			url: lpchat.ourl+'/loopychat/php/classes/fn.php',
			dataType: 'Text',
			async: false,
			data: {
				d: d,
				m: m
			},
			success: function(data) {
				str = data;
			}
		});
	return str;
	},
	setCookie: function(cname,cvalue,exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	},
	getCookie: function(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
	return "";
	}
};
var sng =  {
	url: "/loopychat/song/",
	t: "lpc-",
	c: ["notify","call","click","alert","info","popup","wrtng"],
	w: ["sms.mp3","call.mp3","click.mp3","alert.mp3","info.mp3","popup.mp3","write.mp3"],
	e: function(e){
	return document.getElementById(e);
	},
	p: function(a){
		try{
			if(window.__lpc.song){
			this.e(this.t+this.c[a]).currentTime = 0;
			this.e(this.t+this.c[a]).play();
			}
		}catch(e){
			sng.init();
			sng.p(a);
		}
	},
	u: function(a){
		try{
			if(window.__lpc.song){
			this.e(this.t+this.c[a]).pause();
			}
		}catch(e){
			sng.init();
			sng.u(a);
		}
	},
	s: function(a){
		try{
			if(window.__lpc.song){
			this.e(this.t+this.c[a]).currentTime = 0;
			this.e(this.t+this.c[a]).pause();
			}
		}catch(e){
			sng.init();
			sng.s(a);
		}
	},
	init: function() {
			var l = this.c.length;
			for(i=0; i<l; i++){
				var a=document.createElement('audio');
				a.setAttribute("id", this.t+this.c[i] );
				a.setAttribute("preload", "auto");
				var s=document.createElement('source');
				s.setAttribute("type","audio/mp3");
				s.setAttribute("src", this.url+""+this.w[i] );
				a.appendChild(s);
				$("body").append(a);
			}
		}
}

window.__lpc.song = true;
window.__lpc.smsready = false;
window.__lpc.smarttime = 1;
window.__lpc.lang = "pt_pt";
window.__lpc.dialoglevel = 0;
window.__lpc.chatbot = true;
window.__lpc.cntasks = [0,0,0,0];
window.__lpc.pvcd = "::𝔡𝔦𝔰𝔞𝔟𝔩𝔢::";
window.__lpc.avatar = {};
window.__lpc.id = "#plugin-loopy-chat ";
window.__lpc.learn_context = 0;

window.__lpc.grm_dir = "/loopychat/DB/_record_/grammar/";
window.__lpc.grm_phrase_type = ["interrogative", "imperative", "exclamatory", "declarative", "elective", "nominal", "verbal", "unknown"];
window.__lpc.grm_word_type = ["adjective", "adverb", "article", "conjuncao", "interjection", "numeral", "preposition", "pronoun", "substantive", "verb", "unknown"];
window.__lpc.grm_jsFormat = ['{"v":[],"l":[],"c":[],"m":[]}','{"v":[],"l":[],"f":[]}','{"lastcode":0,"type":"","name":"","time":0,"max_len":0,"min_len":0}'];
/*value-level-code-mathercode-*//*value-level-isforbusines*/
lpchat.drawC(0,['Chat with us!','Loopy Chat','Admin Chatbot','/loopychat/img/chat-02.png','1','1']);
jQuery(document).ready(function () {
	lpchat.init();
});

__lpc.avatar.img = $("#plugin-loopy-chat #badge img").attr("src");