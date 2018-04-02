Move={
	bandall:function(){  /*绑定移动特效*/
		$(".panel").undelegate().delegate(".tip","mousedown",function(e){
				$(".tips").stop().animate({left:'-'+$(".tips").width()},500)
			    newtip="";
				if($(this).parent(".tips").width()!==null){
					var X=e.pageX-10-$("#bgpic").offset().left;
					var Y=e.pageY-10-$("#bgpic").offset().top;
				    newtip=$(this).appendTo(".pic").css({"top":Y,"left":X}).addClass("left"); 
					newtip.delegate(".del", "click", function(){
						var col=$(this).parent().parent().removeAttr("style").clone().appendTo(".tips");
						//var L=col.offset().left-$(".pic").col.offset().left;
						// X=col.offset().top-$(".pic").col.offset().top;
					//	console.log(L+" "+X)
					//	col.remove();
 				//	var Np=$(this).parent().parent();
					//Np.animate({left:L,top:X},10000)
				 	});
				}else{
					newtip=$(this);
				}	
				$(document).bind("mousemove",function(e){
					var X=e.pageX-10-$("#bgpic").offset().left;
					var Y=e.pageY-10-$("#bgpic").offset().top;
					newtip.css({"top":Y,"left":X}) 	
					})
			})
			$(".panel").bind("mouseup",function(e){
				$(".tips").stop().animate({left:0},500)
				var X=e.pageX-10-$("#bgpic").offset().left;
				var Y=e.pageY-10-$("#bgpic").offset().top;
				var h=parseFloat($(".pic #bgpic").css("height"));
				var w=parseFloat($(".pic #bgpic").css("width"));
				if(X<(20)||X>(w-40)||Y<(20)||Y>(h-40)){if(newtip!=""){newtip.remove();}}  //超出图片范围直接删除
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
				 tip.X=$(this).position().top;
				 tip.Y=$(this).position().left;
				 tip.text=$(this).children("span").text();
				 tip.tclass=$(this).attr("class");
				tips.push(tip);
			});
			for(var i=0;i<tips.length;i++){
				console.log("top:"+tips[i].X+"left:"+tips[i].Y)
				}
		},
	unbandall:function(){/*清除移动特效*/
		$(".tip").undelegate("mousedown");
		$(".panel").undelegate("mouseup");
		$(".tips").hide();
		}
}

$(function(){
	Move.bandall();/*绑定*/
  //Move.getPoss();  返回全部点的坐标 数组对象

//	Move.resize();

})