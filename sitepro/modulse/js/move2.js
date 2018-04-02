Move={
	bandall:function(){  /*绑定移动特效*/
		$(".tip").die().live("mousedown",function(e){if(e.target.className!="del"){
				$(".tips").stop().animate({left:'-'+$(".tips").width()},500)
				}
			    newtip="";
				if($(this).parent(".tips").width()!==null){
					var X=e.pageX-10-$("#bgpic").offset().left;
					var Y=e.pageY-10-$("#bgpic").offset().top;
				    newtip=$(this).clone().appendTo(".pic").css({"top":Y,"left":X}).addClass("left"); 
					$(this).remove()
				}else{
					newtip=$(this);
				}	
				$(document).bind("mousemove",function(e){
					var X=e.pageX-10-$("#bgpic").offset().left;
					var Y=e.pageY-10-$("#bgpic").offset().top;
					newtip.css({"top":Y,"left":X}) 
					Move.resize();
					})
			})
			$(".panel").die().live("mouseup",function(e){
				
					$(".tips").stop().animate({left:0},500)
				
				var X=e.pageX-10-$("#bgpic").offset().left;
				var Y=e.pageY-10-$("#bgpic").offset().top;
				var h=parseFloat($(".pic #bgpic").css("height"));
				var w=parseFloat($(".pic #bgpic").css("width"));
				//if(X<(20)||X>(w-40)||Y<(20)||Y>(h-40)){if(newtip!=""){newtip.remove();}}  //超出图片范围直接删除
				newtip=""; /*移除对象绑定*/
				$(document).unbind("mousemove");})	

		},
	resize:function(){/*调整标签出现的位置*/
		$(".pic .tip").each(function(){
			var $tab=$(this).find("table");
			var $tspan=$(this).children("span");
			var topoffe=$("#bgpic").offset().top+$("#bgpic").height()/2-$tspan.offset().top;/*框与中线的距离*/	
			var leftoffe=$("#bgpic").offset().left+$("#bgpic").width()/2-$tspan.offset().left;/*框与中线的距离*/
					if(topoffe<3){		
						$(this).removeClass("bottom");
						$(this).addClass("top");		
						}else{
						$(this).removeClass("top");
						$(this).addClass("bottom")
						}	
					if(leftoffe>3){
						$(this).removeClass("right");
						$(this).addClass("left")
						}
						else{
						$(this).removeClass("left");
						$(this).addClass("right")
					}
			})
		},	
	getPoss:function(){  /*返回标签标题以及坐标的对象数组*/
		  var tips=new Array();
			$(".pic .tip").each(function(index, element) {
				 var tip=new Object();
				 tip.X="f";
				 tip.Y=$(this).position().right;
				 tip.text=$(this).children("span").text();
				 tip.tclass=$(this).attr("class");
				tips.push(tip);
			});
			for(var i=0;i<tips.length;i++){
				console.log("text"+tips[i].tclass)
				}
		},
	unbandall:function(){/*清除移动特效*/
		$(".tip").die("mousedown");
		$(".panel").die("mouseup");
		$(".tips").hide();
		},
		event:function(){//事件
			$("#save").click(function(){
				var POST_DATA={}//坐标数组
				$(".pic>div.tip").each(function(i){
					var p={"id":$(this).attr("rel"),"X":$(this).offset().left,"Y":$(this).offset().top}
						POST_DATA[i]=p
				})
				console.log(POST_DATA)	
			})
		}
		
}

$(function(){
	Move.bandall();/*绑定*/
	$(".del").live("click",function(){
			var obj=$(this).parent().clone().removeAttr("style").css({"visibility":"hidden"})
			obj.appendTo(".tips")
			var t=obj.offset().top-38
			var l=obj.offset().left
			$(this).parent().stop().animate({left:l+"px",top:t+"px"},300,function(){
				$(this).remove();
				obj.css({"visibility":"visible"})
			})
			
		})
	
	Move.resize();
	Move.event();

})