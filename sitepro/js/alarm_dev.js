// JavaScript Document

 var XMLDOM = ["MSXML4.DOMDocument", "MSXML3.DOMDocument", "MSXML2.DOMDocument", "MSXML.DOMDocument", "Microsoft.XmlDom"];

// funcAsync: 回调函数. function onload(xmlDoc, isError){ ... }
function GetMsXml()
{
    var mGetData = null;
   // 创建XML对象
    for(var i=0; i < XMLDOM.length; i++)
	{
		if(window.ActiveXObject)
		{
			//alert("window!");
			try
			{
				mGetData = new ActiveXObject("Microsoft.XmlDom");    // Support IE
				mGetData.async = true;
				break;
			}catch(ex){}
			
		}
		else
		{
			//alert("not window!");
			try
			{
				// Support Firefox, Mozilla, Opera, etc
				mGetData = document.implementation.createDocument("", "", null);    // 创建一个空的 XML 文档对象。
				break;
			}catch(ex){}
		}
	}
    return mGetData;
}

function GetXmlTextByTagName(xml,id)
{
	var Obj, szTxt = "";
	try
	{
		Obj = xml.getElementsByTagName(id);
		
		if (typeof(Obj) == "undefined")
		{
			return szTxt;
		}
		else if ((Obj = Obj.item(0)) == null)
		{
			return szTxt;
		}
		else
		{
			
				if(window.ActiveXObject)
			{
				szTxt = Obj.text;
			}
			else
			{
				szTxt = Obj.textContent;
			}
		}
	}
	catch (objException)
	{
	}
	
	return szTxt;
}


function MM_callJS(jsStr)
{
	return eval(jsStr);
}
$(function(){
	
	MM_callJS('Gett()');

})

setInterval("get_warns()",7000);
function get_warns()
{
	$.ajax({
		url:'ajax/get_warns_ajax.php',
		type:'get',
		dataType:'json',
		cache:false,
		success:function(data){//alert(data);
			var len=data.length,i=0,temp='',arr=new Array(['none'],['block']),images;
			images=sys==1 ? 'images1' : 'images'; 
			if(len>0)
			{
				for(i;i<len;i++)
				{
					temp=data[i].split("|");
					
					var val = temp[0].split("_");
					
					//判断是否是SPB.SPC.SPI设备，连线状态图片设置
					if(val[2]=='SP')
					{
						//$("#img_"+val[0]+'_'+val[1]).attr("src",temp[1]);
					}else
					{
						
						//信号采集卡
						if(val[0]==4001)
						{
							var val2 = temp[1].split("_");
							//是否告警 1：告警 0：没告警
							if(val2[0]==1)
							{
								
								//告警时，有自定义的图片
								if(temp[1].substr(2,temp[1].length).length>0)
								{
									//alert('images/hj_'+temp[1].substr(5,temp[1].length));//alert('images/sz_'+temp[1].substr(5,temp[1].length).substr(0,temp[1].substr(5,temp[1].length).length-5)+'3.jpg');
								//	alert(temp[1].substr(5,temp[1].length));
									$("#"+temp[0]).attr("src",images+'/sz_'+temp[1].substr(5,temp[1].length).substr(0,temp[1].substr(5,temp[1].length).length-5)+'3.gif');
								}
								//告警时，没有自定义图片
								else
								{	
									//模拟量默认告警图片
									if(val[1]>=3969 && val[1]<=3970)
									{
										$("#"+temp[0]).attr("src",images+'/sz_lddy3.gif');
									}else if(val[1]>=3971 && val[1]<=3972)
									{
										$("#"+temp[0]).attr("src",images+'/sz_sdjc3.gif');
									}
									//开关量默认告警图片
									else
									{
										$("#"+temp[0]).attr("src",images+'/sz_wsd_red.gif');
									}
								}
								
							}else
							{
								
								//正常时，有自定义的图片
								if(temp[1].substr(2,temp[1].length).length>0)
								{
									//alert(temp[1].substr(5,temp[1].length).substr(0,temp[1].substr(5,temp[1].length).length-4));
									$("#"+temp[0]).attr("src",images+'/sz_'+temp[1].substr(5,temp[1].length).substr(0,temp[1].substr(5,temp[1].length).length-5)+'.gif');
								}
								//正常时，没有自定义图片
								else
								{
									//模拟量默认正常图片
									if(val[1]>=3969 && val[1]<=3970)
									{
										$("#"+temp[0]).attr("src",images+'/sz_lddy.gif');
									}else if(val[1]>=3971 && val[1]<=3972)
									{
										$("#"+temp[0]).attr("src",images+'/sz_sdjc.gif');
									}else
									{
										$("#"+temp[0]).attr("src",images+'/sz_yg.gif');
									}
								}
							}
							
						}else
						{
								var img='';
								//有告警
								//alert(temp[1]);
								if(temp[1]==1)
								{
									
									switch(val[0])
									{
										case '1':
										img=images+"/sz_upsds3.gif";
										break;
										case '10':
										img=images+"/sz_ups3.gif";
										break;
										case '5':
										img=images+"/sz_pd3.gif";
										break;
										case '2':
										img=images+"/sz_fdj3.gif";
										break;
										case '9':
										img=images+"/sz_dwls3.gif";
										break;
										case '30':
										img=images+"/sz_jmpd3.gif";
										break;
										case '31':
										img=images+"/sz_dxpd3.gif";
										break;
										case '4002':
										img=images+"/sz_wsd3.gif";
										break;
										case '13':
										img=images+"/sz_jmkt3.gif";
										break;
										case '4004':
										img=sys==0 && ver==1 ?  images+"/sz_bwsd3.gif" :  images+"/sz_kt3.gif";
										break;
										case '4020':
										img=images+"/sz_kkkg3.gif";
										break;
									}
									
									//单三相
								/*	if(val[0]==1 || val[0]==10)
									{
									$("#"+temp[0]).attr("src",'images/ups2_img.gif');
									}
									//配电
									else if(val[0]==5)
									{
										$("#"+temp[0]).attr("src",'images/UPS2_img.gif');
									}
									//温湿度
									else if(val[0]==4002)
									{
										$("#"+temp[0]).attr("src",'images/hj_sd_red.png');
									}
									//精密空调
									else if(val[0]==13)
									{
										$("#"+temp[0]).attr("src",'images/kt_jingmi_1.jpg');
									}
									//普通空调
									else if(val[0]==4004)
									{
										$("#"+temp[0]).attr("src",'images/kt_img1.gif');
									}*/
								}//没有告警
								else
								{//alert(val[0]);
									switch(val[0])
									{
										case '1':
										img=images+"/sz_upsds.gif";
										break;
										case '10':
										img=images+"/sz_ups.gif";
										break;
										case '5':
										img=images+"/sz_pd.gif";
										break;
										case '2':
										img=images+"/sz_fdj.gif";
										break;
										case '9':
										img=images+"/sz_dwls.gif";
										break;
										case '30':
										img=images+"/sz_jmpd.gif";
										break;
										case '31':
										img=images+"/sz_dxpd.gif";
										break;
										case '4002':
										img=images+"/sz_wsd.gif";
										break;
										case '13':
										img=images+"/sz_jmkt.gif";
										break;
										case '4004':
										img=sys==0 && ver==1 ?  images+"/sz_bwsd.gif" :  images+"/sz_kt.gif";
										break;
										case '4020':
										img=images+"/sz_kkkg.gif";
										break;
									}
									//单三相
								/*	if(val[0]==1 || val[0]==10)
									{
									$("#"+temp[0]).attr("src",'images/UPS1_img.gif');
									}else if(val[0]==5)
									{
										$("#"+temp[0]).attr("src",'images/pd_img1.gif');
									}else if(val[0]==4002)
									{
										$("#"+temp[0]).attr("src",'images/hj_sd.png');
									}
									//精密空调
									else if(val[0]==13)
									{
										$("#"+temp[0]).attr("src",'images/kt_jingmi_1.jpg');
									}
									//普通空调
									else if(val[0]==4004)
									{
										$("#"+temp[0]).attr("src",'images/kt_img1.gif');
									}*/
								}
								//alert(img);
								$("#"+temp[0]).attr("src",img);
						}
					}
				}
			}
			else
			{
				return false;
			}
		}
	});
}
$(document).ready(function() {
	get_warns();
 
});