// JavaScript Document
var mappop = function(options) {
	this.setting = {
			obj:$("body"),
			width:300,
			tit:"标题",
			txt: "<div style=' padding:20px;text-align:center; color:#fff; font-size:14px;'>加载中...</div>"
			}
		$.extend(true, this.setting, options || {});
		this.init()
}
mappop.prototype.init = function() {
	this.setting["obj"].addClass("zindex")
	var lefts = parseInt(this.setting["obj"].css("left").replace("px"))
	var tops = parseInt(this.setting["obj"].css("top").replace("px"))
	var  wer=this.setting["obj"].parent().outerWidth(true)/2
	var  her=this.setting["obj"].parent().outerHeight(true)/2
	var type=3
	 if(lefts>=wer&&tops<her){
		type=4
	}else if(lefts<wer&&tops>=her){
		type=1
	}else if(lefts>=wer&&tops>=her){
		type=2
	}
	
	if(type==1){
		
		var obj=$("<div>",{"class":"map_info"}).html('<div class="map_infoline" style="width:' + (this.setting["width"]-70) + 'px"><div class="map_infotxt" style="width:'+ (this.setting["width"]-82) +'px;" ><h1 class="map_info_tit">'+this.setting["tit"]+'</h1><div class="map_info_if">'+ this.setting["txt"] +"</div></div></div>")
		obj.appendTo(this.setting["obj"])
		var h=obj.find(".map_infoline").outerHeight(true)
		var t=-(h-7)
		obj.css({"top":t+"px","height":h+"px"}).animate({"width":this.setting["width"]+"px"},500)
	}else if(type==2){
			var obj=$("<div>",{"class":"map_info map_info_tr"}).html('<div class="map_infoline map_infoline_tr" style="width:' + (this.setting["width"]-70) + 'px"><div class="map_infotxt" style="width:'+ (this.setting["width"]-82) +'px;" ><h1 class="map_info_tit">'+this.setting["tit"]+'</h1><div class="map_info_if">'+ this.setting["txt"] +"</div></div></div>")
		obj.appendTo(this.setting["obj"])
		var h=obj.find(".map_infoline").outerHeight(true)
		var t=-(h-7)
		obj.css({"top":t+"px","height":h+"px"}).animate({"width":this.setting["width"]+"px"},500)
	}else if(type==3){
		var obj=$("<div>",{"class":"map_info map_info_bl"}).html('<div class="map_infoline map_infoline_bl" style="width:' + (this.setting["width"]-70) + 'px"><div class="map_infotxt" style="width:'+ (this.setting["width"]-82) +'px;" ><h1 class="map_info_tit">'+this.setting["tit"]+'</h1><div class="map_info_if">'+ this.setting["txt"] +"</div></div></div>")
		obj.appendTo(this.setting["obj"])
		var h=obj.find(".map_infoline").outerHeight(true)
		obj.css({"height":h+"px"}).animate({"width":this.setting["width"]+"px"},500)
	}else if(type==4){
			var obj=$("<div>",{"class":"map_info map_info_br"}).html('<div class="map_infoline map_infoline_br" style="width:' + (this.setting["width"]-70) + 'px"><div class="map_infotxt" style="width:'+ (this.setting["width"]-82) +'px;" ><h1 class="map_info_tit">'+this.setting["tit"]+'</h1><div class="map_info_if">'+ this.setting["txt"] +"</div></div></div>")
		obj.appendTo(this.setting["obj"])
		var h=obj.find(".map_infoline").outerHeight(true)
		obj.css({"height":h+"px"}).animate({"width":this.setting["width"]+"px"},500)
	}
}

mappop.prototype.close=function(){
	var o=this.setting["obj"]
		o.addClass("zindex1").removeClass("zindex")
		o.find(".map_info").animate({"width":"0px"},500,function(){o.removeClass("zindex1");$(this).remove();})
	
}