//
function richcommWin(x,y,w,h,txt){
	var obj = $('<div>',{'id':'win_txt','class':'win_txt'}); 
	obj.css({"width": w+"px","height": h+"px","marginLeft":x+"px","marginTop":y+"px"})
	var strHtml ="<a href='javascript:void(0)'  onclick=\"doOk()\" class=\"win_close\" ><img src='images/ico_close.png'></a>"+txt;
	obj.html(strHtml)
    $(".centers").append(obj); 
    obj.fadeIn(300,function(){ obj.animate({"height":"381px","marginTop":"-191px","width":"960px","marginLeft":"-480px"},300,function(){$(this).children(".win_close").show()})});
	
	//关闭
    this.doOk = function(){ 
	obj.children(".win_close").hide()
	obj.animate({"width": w+"px","height": h+"px","marginLeft":x+"px","marginTop":y+"px"},300,function(){
		$(this).fadeOut(500,function(){$("div#win_txt").remove()})
		})
	  // $("div#win_txt").remove();
    }
}


