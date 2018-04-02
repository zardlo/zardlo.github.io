// JavaScript Document

$(function(){
	//圆环
	(function ($) {	
		$.fn.arcBox= function(options){
			$(this).each(function() {		//多重用，所以要遍历
				var _this=$(this);
				var num=_this.attr('num');		/*数字：百分比*/
				//var color=_this.attr('color');	/*得到圆圈背景颜色2*/
				if(num<50){
				_this.find('.bg').css("background","#5cc276");	/*设置背景颜色2*/
					_this.find("#count").css("color","#5cc276")
					}
				else if(50<=num&&num<70){
				_this.find('.bg').css("background","#ffb93e");	/*设置背景颜色2*/
					_this.find("#count").css("color","#ffb93e")
					}
				else if(num>=70){
					_this.find("#count").css("color","#f75f5f")
					_this.find('.bg').css("background","#f75f5f");	/*设置背景颜色2*/
					}
				var deg =num*3.6;	/*角度*/
				var deg2=0;			
				if(deg>=0 && deg<=180){			//0=<deg=<180
				var pe2=_this.find(".pie2");
					if(pe2.attr("style")!=null)
					{
						setTimeout(function(){_this.find(".pie1").css("transform","rotate(" + deg + "deg)");},500);
					_this.find(".pie2").css("transform","rotate(0deg)")
					
					}else{
					_this.find(".pie1").css("transform","rotate(" + deg + "deg)");
					}
					
				}else if(deg>180 && deg<=360){ //180<deg=<360
					_this.find(".pie1").css("transform","rotate(" +180 + "deg)");	
					deg2=deg-180;	
					setTimeout( function(){	
						_this.find(".pie2").css("transform","rotate(" + deg2 + "deg)");
					},1000)
				}else{
					deg=0;	
				}
				_this.find("#count").text(parseInt((deg + 0.6)/3.6)+'%');
			});	
		}
	})(jQuery);	
	$(".arc-box").arcBox();
	//下拉
	$("body").delegate(".dnbtn","click",function(){
		
		$(this).next(".dropdown-menu").toggle();
		
		})
	$("body").delegate(".dropdown-menu li:not(.off)","click",function(e){
		$(this).parent().prev(".dnbtn").children("span").text($(this).text());
		$("#zc_end .dnbtn span").text($(this).text())		
		$(this).parent().hide();
		})
	//下拉结束
})