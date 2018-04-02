var ricpop = function(options) {
	this.setting = {
			obj:null,
			pobj:null,
			width:520,
			height:300
			
			}
		$.extend(true, this.setting, options || {});
		if(this.setting["obj"]!=null){
			this.init()
		}
}
ricpop.prototype.init=function(){
	$("<div>",{"class":"hui_div"}).appendTo('body').fadeIn()
	var w=this.setting["obj"].width()
	var h=this.setting["obj"].height()
	var l=this.setting["obj"].offset().left
	var t=this.setting["obj"].offset().top
	if(this.setting["pobj"]!=null){
		l+=this.setting["pobj"].offset().left
		t+=this.setting["pobj"].offset().top
	}
	var jz=lan=='en' ? 'Loading...' :'加载中...';
	var odiv=$("<div>",{"class":"ricpop_div"}).css({"width":w+"px","height":h+"px","left":l+"px","top":t+"px"}).html("<a class='ricpop_close'><img src='images/ricpop/Alert_close.png' /></a>")
	var loading=$("<div>",{"class":"ricpop_loading"}).html("<img src='images/ricpop/loading.gif'> "+jz+"")
	var conle=$("<div>",{"class":"ricpop_conle"}).css({"width":w+"px","height":h+"px",marginLeft:(-w/2)+"px",marginTop:(-h/2)+"px"}).append(this.setting["obj"].clone().css({"margin":"0"}))
	var ric_indiv=$("<div>",{"class":"ric_indiv"})
	loading.appendTo(ric_indiv)
	conle.appendTo(ric_indiv)
	ric_indiv.appendTo(odiv)
	odiv.appendTo("body")
	loading.fadeIn(300)
	conle.fadeOut(300)
	var lef=($(window).outerWidth(true)/2)-(this.setting["width"]/2)
	var to=($(window).outerHeight(true)/2)-(this.setting["height"]/2)
	odiv.animate({left:lef+"px",top:to+"px",width:this.setting["width"]+"px",height:this.setting["height"]+"px"},300,function(){	$(this).children(".ricpop_close").show()})
this.event();
}
ricpop.prototype.event = function() {
		$('.ricpop_close').on('click', $.proxy(this.close, this, $(this)));
	}
ricpop.prototype.setTxt=function(txt){	
$(".ricpop_div").find(".ric_indiv").children().fadeOut().remove()
var ops=$("<div>").css({width:this.setting["width"]+"px",height:this.setting["height"]+"px","display":"none","position":"absolute",left:"50%",top:"50%","marginLeft":-(this.setting["width"]/2)+"px","marginTop":-(this.setting["height"]/2)+"px","zIndex":11}).html(txt)
$(".ricpop_div").find(".ric_indiv").append(ops);
ops.fadeIn()
}
ricpop.prototype.close=function(obj, event){
	
		$this = $(event.target);
		var w=this.setting["obj"].width()
		var h=this.setting["obj"].height()
		var l=this.setting["obj"].offset().left
		var t=this.setting["obj"].offset().top
		if(this.setting["pobj"]!=null){
			l+=this.setting["pobj"].offset().left
			t+=this.setting["pobj"].offset().top
		}
		$this.hide()
		var conle=$("<div>",{"class":"ricpop_conle"}).css({"width":w+"px","height":h+"px",marginLeft:(-w/2)+"px",marginTop:(-h/2)+"px","display":"none"}).append(this.setting["obj"].clone().css({"margin":"0"}))
		
		
		var po=$this.parents(".ricpop_div")
		po.css({"overflow":"hidden"}).children(".ric_indiv").fadeOut(300)
		conle.appendTo(po).fadeIn(300)
		
		po.animate({"width":w+"px","height":h+"px","left":l+"px","top":t+"px"},300,function(){
		$(this).fadeOut(300,function(){$(this).remove()})	
		$(".hui_div").fadeOut(300,function(){$(this).remove()});
		})
		
}
