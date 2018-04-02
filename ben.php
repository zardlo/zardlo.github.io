<?php
@header("Content-Type: text/html;charset=utf-8");
include_once("code.php");
// echo cns('环境监测');exit;
$ooo=0;
if($ooo){
	print_r(12312);
}


///////////////////////////////////////////////////////
// print_r(get_defined_constants());
class Site {
  /* 成员变量 */
  var $url;
  var $title;
  
  /* 成员函数 */
  function setUrl($par){
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL;
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL;
  }
 function changeToArea($address)
 {
     if(strpos($address,'区') !== false) {
         $b = substr($address,0,strrpos($address,'区')).'区';
     }
     if(strpos($address,'县') !== false) {
         $b = substr($address,0,strrpos($address,'县')).'县';
     }
     if(strpos($address,'市') !== false && strpos($address,'县') !== false) {
         $b = substr($address,0,strrpos($address,'市')).'市';
     }
     // return $b;
     echo $b;
 }
}
$str = "13760721151"; 
echo substr_replace($str,"***",4,3);
$runoob = new Site;
$taobao = new Site;
$google = new Site;

// 调用成员函数，设置标题和URL
$runoob->setTitle( "菜鸟教程" );
$taobao->setTitle( "淘宝" );
$google->setTitle( "Google 搜索" );
$google->changeToArea( "广东省广州市天河区新塘县" );

$runoob->setUrl( 'www.runoob.com' );
$taobao->setUrl( 'www.taobao.com' );
$google->setUrl( 'www.google.com' );

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();
$logo='images/logo/logo1.png';
function &bbb()
{
    // $set_modules = false;
    static $cls = "asda";
    

    return $cls;
}
$b=bbb();
print_r($b);
class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


print Foo::$my_static . "\n";

$foo = new Foo();
$bar = new Bar();
print $foo->staticValue() . "\n";
print $bar->fooStatic() . "\n";      // Undefined "Property" my_static 

?>
<script src="js/jquery.js" type="text/javascript"></script>
<style>
.alert_out {
		width: 100%;
		overflow-y: hidden;
		height: 100%;
		display: none;
		position: fixed;
		left: 0;
		top: 0;
		z-index: 996;
	}
	.alert_in1{
		background:#CCC;
		width:465px; 
		height:180px;
		position:absolute;
		margin-left:40%;
		margin-top:0px;
		z-index: 997; 
		line-height:38px;
		top:500px;
		padding-top:10px;
		display: none;
		border: 1px solid #d8d8d8;
		background: #f9f9f9;
	}
	.title_box{
width: 100%;
overflow: hidden;
display: flex;
} 
</style>
<link href="css/setting.css" rel="stylesheet" />
 <link href="css/SetInfo.css" rel="stylesheet" type="text/css" />
<script language="javascript"> 



function ss(dd){
	if(dd==1){
		alert(dd);
	}else{
		alert(123);
	}
	// alert(dd);
}
$(function(){
	// alert(333);
})
	function AlertDiv(){
		$('body').append($('<div class="alert_out"></div>'));
		$('body').append($('<div class="alert_in"></div>'));
	}	function AlertDiv1(){
		$('body').append($('<div class="alert_out"></div>'));
		$('body').append($('<div class="alert_in1"></div>'));
	}
    function wdset(index,type){
		$('.alert_out').hide().remove();
		$('.alert_in1').hide().remove();
		AlertDiv1();
        $('.alert_out').show().height($(window).outerHeight(true));
		var url;
		url='setwd.php?type='+type+'&index='+index;
		// alert(url);exit;
		var posY = $(document).scrollTop();
		//根据滚动条设置弹出框位置
		 // alert(url);exit;
		$('.alert_in1').css("top",posY+400);
        $('.alert_in1').show().load(url);
    }
function showdetail(arr) {
		var array,type,index;
		array=arr.split("|");
		type=array[0];index=array[1];
		$('.alert_out').hide().remove();
		$('.alert_in').hide().remove();
		AlertDiv();
        $('.alert_out').show().height($(window).outerHeight(true));
		var url;
		// alert(type);
		switch(type)
		{
			case '1':
			url='dev_alarm_config_ksd.php?type='+type+'&index='+index+'&dtype=1';
			break;
			case '10':
			url='dev_alarm_config_ksd.php?type='+type+'&index='+index+'&dtype=1';
			break;
			default:
			url='devzn_alarm_config_ksd.php?type='+type+'&index='+index+'&dtype=5';
			break;
		}
		var posY = $(document).scrollTop();
		//根据滚动条设置弹出框位置
		 // alert(url);exit;
		$('.alert_in').css("top",posY+400);
        $('.alert_in').show().load(url);
    }
obj='ben.xml';
function StandardTaxRate10(){    
	$.ajax({        
		url: "./"+obj,        
		dataType: 'xml',        
		type: 'GET',    
		cache: false,             
		error: function(xml)       
		{        
			
		},        
		success: function(xml)       
		 {
			 $(xml).find("breakfast_menu").children("food").each(function()           
			 { 
				console.log($(this).children("name").text())
				
			 })
			 
		 }
		 
	})
}
</script>
<script type="text/javascript">  
    $(document).ready(function() {  
	var odiv=$("<div>",{"class":"ricpop_div"});
	odiv.appendTo("body");
        // $("#msg").ajaxSend(function() {  
            // alert("无论点击按钮1还是按钮2,都会触发我");  
        // });  
    $("<input>", {
		"type": "text",
		"val": "ss",
		focusin: function() {
		$(this).addClass("active");
		},
		focusout: function() {
		 $(this).removeClass("active");
		}
	}).appendTo("form");
	select=get_select({htm:"文学集",value:"1,3"});
	
	// get_select();
	// var  lsss='<option value="volvo">文学集</option>';
	// var lss=$('<select>').html(lsss)
	// var htm=aaa();
	// $('#sss').html(select)

        $("#btn1").click(function() {  
            $.post("test1", function() {  
                $("#msg").val("haha");  
            });  
        });  
  
        $("#btn2").click(function() {  
            $.get("test2", function() {  
                $("#msg").val("haha");  
            });  
        });  
    })  
function get_select(options){
	this.setting={
		htm:123,
		value:123
	}
	$.extend(true, this.setting, options);
	if(this.setting["htm"]=null){
		alert(1)
		return false;
	}
	var opt=this.setting["htm"].split(",");
	var val=this.setting["value"].split(",");
	var str='<select>';
	for(var i=0;i<opt.length;i++){
		str+='<option value="'+val[i]+'">'+opt[i]+'</option>';
	}
	str+='</select>';
	// alert();
	// alert(typeof(htmnum[1]));
	// alert(opthtm.length);
	return str;
}	
function aaa(){
	var htm='<select>';
	htm+='<option value="volvo">文学集</option><option value="saab">哲学</option><option value="opel">雅思</option>';
	htm+='</select>';
	return htm;
}
</script>  
  
<body>  
    <input type="text" id="msg" value="" />  
      
    <button id="btn1">  
        按钮1  
    </button>  
    <button id="btn2">  
        按钮2  
    </button>  
</body> 
<div id='sss'>
</div>
<button onclick="StandardTaxRate10()">  
        123131  
    </button>  
<form action="" enctype="multipart/form-data" method="post" id="formid8">
			<input type="button" value="测试" id="cs" onclick="wdset(1,13)"/>
			<input type="button" value="测试" id="cs" onclick="showdetail('10|1')"/>
              </table>
              	 <!-- 设备索引 --->
                
         </form>
		 <div id="n1">
	<div id="n2">
		<ul id="n3">
			<li id="n4">item1</li>
			<li id="n5">item2</li>
			<li id="n6">item3</li>
		</ul>
	</div>	
</div>
<div style="background:#2d3e50;margin:10px auto;height:124px;line-height:124px">
 <?php /* for($i=0;$i<=52;$i++){
	 $cls='logo'.$i.'.png';
		
			$logo='images/logo/'.$cls.'';
		
		
		if(!file_exists($logo)){
			continue;
		} */
	 ?>
	  <img src="<?php echo $logo; ?>" style="max-width:350px;max-height:124px;display: inline-block; vertical-align: middle;">
<!--<a style="display:block;margin:10px auto;height:124px;text-align: center;"><img style="max-width:350px;" src="<?php echo $logo; ?>" /></a>-->
<?php //}?>

</div>
<div class="article-start-box" style="height: 50px;overflow: auto;position: relative;z-index: 2;">
    <span class="categery">分类栏目</span>
        <select style="position: absolute;z-index: 1;margin-left: 40px;"  class="choose" >
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option>
			<option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option><option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option><option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option><option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option><option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option><option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option><option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option><option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option>
        </select>
    </div>
<div style="text-align: center;width: 500px;height:200px;line-height:200px;border: green solid 1px;">
   <img alt="" src="https://www.baidu.com/img/baidu_jgylogo3.gif" style="display: inline-block; vertical-align: middle;">
</div>
<div style="text-align: center;width: 500px;height:200px;display: table;border: green solid 1px;">
	<span style="display: table-cell;vertical-align: middle;"><img alt="" src="https://www.baidu.com/img/baidu_jgylogo3.gif" style="display: inline-block;"></span>
</div>

<div class="article-start-box">
    <span class="categery">分类栏目</span>
        <select style="position: absolute;z-index: 1;margin-left: 40px;"  class="choose"
        onmousedown="if(this.options.length>6){this.size=7}" onblur="this.size=0" onchange="this.size=0">
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数大学网奥数</option>
            <option value="volvo">文学集</option>
            <option value="saab">哲学</option>
            <option value="opel">雅思</option>
            <option value="audi">大学网奥数</option>
        </select>
    </div>
	<input type="text" class="form-control">
<div class="title_box">
    <div class="title_left"></div>
    <input type="text" value=/>
    <div class="title_right"></div>
</div>
<input type="text" onkeydown='this.onkeyup();' onkeyup='this.size=(this.value.length>4?this.value.length:4);' value="564654654654165654654"> 
<script>
/* var searchinput=$("input");
var textWidth = function (text) {
            var sensor = $('<pre>' + text + '</pre>').css({display: 'none'});
            $('body').append(sensor);
            var width = sensor.width();
            sensor.remove();
			console.log(width)
            return width;
        };
        searchinput.unbind('keyup').bind('keyup', function () {
            $(this).width(textWidth($(this).val() + 200));
        }); */
</script>
<?php 

// file_put_contents('ben.html',ob_get_contents());
// ob_clean();
// include("ben.html");
?>
