<?php
@header("Content-Type: text/html;charset=utf-8");
include_once("code.php");
// echo cns('环境监测');exit;
$ooo=0;
if($ooo){
	print_r(12312);
}
echo cns('介绍一个简体中文和繁体中文互换的php函数类，可以实现简体中文汉字和繁体中文字的相互转换，供朋友们下载参考，如果朋友们有更好的此类文件可以上传与我们共同学习分享');
echo "<br />";
echo cns('');exit;
// phpinfo(); 
// echo 25&24;
// print_r(microtime(true));
// print_r(memory_get_usage());
echo date("Y-m-d H:i:s",strtotime("0 day"));
echo "<br />";
echo strtotime("0 day");
echo "<br />";
echo @filesize("test.txt");
echo "<br />";

$file = fopen("test.txt", "r");
// $file = fopen("test.txt", "a+");
// var_dump($file);
// ftruncate($file,100);
fclose($file);

//清空缓存，再次检查文件大小
// clearstatcache();
// echo filesize("test.txt");
exit;
print_r(DIRECTORY_SEPARATOR);
class App{
    function myException($exception) {
        echo "<b>Exception123123:</b> " , $exception->getMessage();
    }
}
 
set_exception_handler(array('App','myException'));
 
// throw new Exception('Uncaught Exception occurred');




class BTException extends Exception {

function method(){
return "打开后备箱，拿出工具，换备胎";
}
}
try{
echo "开车上班<br>";
throw new BTException("车子爆胎了！");
}catch(BTException $e){//相当于Exception $e = new Exception('');
echo $e->getMessage().'<br>';
echo $e->method().'<br>';
echo "换上备胎，继续上班<br>";
exit;
}

echo('<br/>');
// echo intval("门1开关状态: 断开");
echo substr(123,2,1);

/*
功能：PHP伪静态化页面的实现
具体用法:
例如链接为:test.php/year/2006/action/_add.html
mod_rewrite();
$yearn=$_GET["year"];//结果为'2006'
$action=$_GET["action"];//结果为'_add'

*/



///////////////////////
$a = array('d'=>'aass','e'=>'adsdfd','asd'=>'asdsdd','ddfg'=>'dssdf');
$b = array('d'=>'adddd','adsdfd','asdfsddddd','d'=>'aass');
// $d = $a + $b;
$e = array_merge($a,$b);
// var_dump($d);
// var_dump($e);
// print_r($_SERVER);
print_r(@$_SERVER['PATH_INFO']);
// print_r($b);
// print_r($e);





// exit;
/////////////////
$find = array("Hello","world");
$replace = array("B");
$arr = array("Hello","world","!");
print_r(str_replace($find,$replace,$arr));



//////////////////////////
//简单定义实现接口
interface UserInterface{ //定义user接口
 function getname();
}
interface TeacherInterface{ //定义teacher接口
 function getLengthofService();
}
class User implements UserInterface{ //实现user接口
 protected $name="nostop";
 public function getName(){
  return $this->name;
 }
}
class Teacher implements TeacherInterface{ //实现teacher接口
 private $age=23;
 public function getLengthofService(){
  return $this->age;
 }
}
/*$user=new User();
echo $user->getName().'<br />';//nostop
echo $user->getLengthofService().'<br />';//nostop
 $teacher=new Teacher();
echo $teacher->getLengthofService().'<br />';//23 */
//继承类实现接口
class GraduResultudent extends User implements TeacherInterface{ //继承User类 实现接口
// class GraduResultudent extends User{ //继承User类 实现接口
 /* private $teacher;
 public function __construct(){  //定义构造函数
  $this->teacher=new Teacher(); //实例化Teacher对象
 }
 public function getLengthOfService(){ //实现TeacherInterface接口的方法
  return $this->teacher->getLengthOfService();
  // return $this->getLengthOfService();
 } */
  // private $teacher="24";
  // private $User="lss";
	/* public function __construct(){  //定义构造函数
  $this->teacher=new Teacher(); //实例化Teacher对象
  $this->User=new User(); //实例化Teacher对象
 } */
  public function getname(){ //实现TeacherInterface接口的方法
  // return $this->User->getname();
  // return $this->name;
  // return $this->getLengthOfService();
 }
 public function getLengthOfService(){ //实现TeacherInterface接口的方法
  // return $this->teacher->getLengthOfService();
  // return $this->teacher();
  // return $this->teacher;
  return 123;
  // return $this->getLengthOfService();
 }

}
 
class Result{
 // public static function getUserName(UserInterface $_user){ //注意：这里面的类型变成接口类型
 public static function getUserName($_user){ //注意：这里面的类型变成接口类型
  echo "Name is ".$_user->getName().'<br />';
 }
 public static function getLengthOfService(TeacherInterface $_teacher){ //注意：这里面的类型变成接口类型
  echo "age is ".$_teacher->getLengthOfService();
 }
}
 
$object=new GraduResultudent();
print_r($object);
echo "sui  ".$object->getLengthOfService();
// echo "xiaodi ".$object->getname();
// Result::getUserName($object); //Name is nostop
// Result::getLengthOfService($object); //age is 23
echo "<br />";
//接口实现用户的折扣
interface People{ //定义接口
 function getUserType();
 function getCount();
}
 
/* class VipUser implements People{ //实现接口
 //用户折卡系数
 private $discount=0.8;
 function getUserType(){
  return "VIP用户";
 }
 function getCount(){
  return $this->discount;  
 }
} */
 
/* $vip=new VipUser(); //实现化对象
echo $vip->getUserType().'商品价格：'.$vip->getCount()*100; //VIP用户商品价格：80
 
class Goods{
 var $price=100;
 var $member;
 function run(People $member){ //注意：这里面的参数类型是接口类型
  $this->member=$member;
  $discount=$this->member->getCount();
  $usertype=$this->member->getUserType();
  echo $usertype."商品价格：".$this->price*$discount;
 }
}
$display=new Goods();
$display->run(new VipUser);//VIP用户商品价格：80 */

 echo "<br />"; 

///////////////////////////////
interface demo { 
 const NAME = "名称"; 
 function fun1(); 
 function fun2(); 
} 
interface demo2 { 
 function fun3(); 
 function fun4(); 
} 
interface demo3 { 
 const TEST = "Test"; 
 function fun5(); 
} 
class MyPc implements demo, demo2 { 
 function fun1() { 
 echo "++++++++++<br />"; 
 } 
 function fun2() { 
 echo "----------<br />"; 
 } 
 function fun3() { 
 echo "1111111111<br />"; 
 } 
 function fun4() { 
 echo "2222222222<br />"; 
 } 
} 
class MyPs extends MyPc implements demo3 { 
 function fun5() { 
 echo "继承类后引用接口"; 
 } 
} 
$p = new MyPs; 
$p->fun1(); 
$p->fun2(); 
$p->fun3(); 
$p->fun4(); 
$p->fun5();

/////////////////////////////////
//定义接口 
interface User1{ 
 function getDiscount(); 
 function getUserType(); 
} 
interface User2{ 
 function lss(); 
} 
//VIP用户 接口实现 
class VipUser implements User1,User2{ 
 // VIP 用户折扣系数 
 private $discount = 0.7; 
 public $user = 1; 
 function getDiscount() { 
  return $this->discount; 
 } 
 function getUserType() { 
	 switch($this->user){
		case 1:
		$user_dj='普通用户';
		break;
		case 2:
		$user_dj='VIP用户';
		break;
	}
  return $user_dj; 
 } 
 function lss() { 
 }
} 
//VIP用户 接口实现 
/* class PtUser implements User1{ 
 // 普通 用户折扣系数 
 private $discount = 0.9; 
 function getDiscount() { 
  return $this->discount; 
 } 
 function getUserType() { 
  return "普通用户"; 
 } 
}  */
class Goods{ 
 var $price = 100; 
 var $vc; 
 //定义 User 接口类型参数，这时并不知道是什么用户 
 function run(User2 $vcc,$id){ 
  $this->vc = $vcc; 
  $this->vc->user=$id;
  $discount = $this->vc->getDiscount(); 
 $usertype = $this->vc->getUserType(); 
  echo $usertype."商品价格：".$this->price*$discount; 
 } 
} 
$display = new Goods(); 
if(1!=1){
	
	$ssss='VipUser';
}else{
	$ssss='PtUser';
}
$display ->run(new VipUser,1); //可以是更多其他用户类型 
// $display ->run(new $ssss,); //可以是更多其他用户类型 
echo "<br/>";
// print_r(new $ssss);


////////////////////
class cA{
public $name,$age;
public function __construct($n) {
// public function __construct() {
$this->name = $n;
$this->age = 25;
}
function __set($n,$v) {
$this->$n = $v;
}
function __get($n) {
return $this->$n;
}
}
 

class cB1 extends cA{
	public function __construct($n){
		parent::__construct($n);
	}
function funB1() { echo '<h3>Class cB execute success!</h3>'; }
}

/* class cC extends cB1 {
function funC1() { echo '<h3>Class cC FunC1!</h3>'; }
} */
// $a=new cA('asd');
// echo "$a->name : $a->age";
echo "<br/>";
$b=new cB1('John');
// $b->name='John111';
echo "$b->name : $b->age";
echo "<br/>";
// $b->funB1();
// $c=new cC('David');//这里会出错，由于cB也没有构造函数，因此再向上以cA为准，需要一个参数。改为$c=new cC(‘David');即可。
// echo $c->name(); //David

////////////////////////
class myClass{
	public $data;
}

$sss ="aaa";
$obj1 = new myClass();

$obj1->data =&$sss;   //注意，这里是个reference!

$obj2 = clone $obj1;

$obj2->data="bbb";  //这时，$obj1->data的值变成了"bbb" 而不是"aaa"!

 

// print_r($obj1);

// print_r($obj2);

///////////
class test3
{
public $p=5;
function __clone(){ //只在克隆发生时起作用。用于改变在克隆时某些值
$this->p=16;
}
}
$a=new test3();
echo $a->p;
echo "<br/>";
$a->p=8; //如果没有__clone()方法影响，$b的P值将为8
$b = clone $a;
echo $b->p; //15
echo "<br/>";

///////////////
class em{ var $k=56; }
class test1{
	function __construct()
	{ echo $this->addab(new em(),2); }
	 

	function addab(em $j,$c) //这个方法，即可以在内部调用，也可以在外部调用。只要作用域许可。
	{ return $j->k+$c; }
}
$a = new test1();
$b = new em();
echo $a->addab($b,4); //或 $a->addab(new em(),2);
echo "<br/>";
/////////////////////////////////
   
abstract class BaseShop{
Const TAX=0.06; // 在抽象类中定义常量
public function buy($gid) { // 如果定义为抽象方法abstract function buy（）就不能在这里实现主体。
echo('你购买了ID为 :'.$gid.'的商品');
}
public function sell($gid) {
echo('你卖了ID为 :'.$gid.'的商品');
}
public function view($gid) {
echo('你查看了ID为 :'.$gid.'的商品');
}
}
class BallShop extends BaseShop{
var $itme_id = null;
public function __construct()
{
$this->itme_id = 2314;
}
public function open()
{
$this->sell($this->itme_id);
}
public function getTax()
{
echo printf('<h3>平均税率是 %d%%.</h3>',BaseShop::TAX*100);
}
}
$s = new BallShop;
$s->open(); //你卖了ID为 :2314的商品
$s->getTax();	
	
/////////////////////////////////	
class aaa{    
    
private function t(){    
  }    
    
//魔术方法__call    
/*  
$method 获得方法名  
$arg 获得方法的参数集合  
*/    
public function __call($method,$arg){    
    echo '不存在的方法',$method,'方法<br/>';    
    echo '不存在方法中有参数传入<br/>';    
    echo print_r($arg),'<br/>';    
  }    
//魔术方法__callStatic  
  public static function __callStatic($method,$arg){    
    
    echo '不存在的',$method,'静态方法<br/>';    
    echo '还传了一个参数<br/>';    
    echo print_r($arg),'<br/>';    
  }    
    
}    
    
$a=new aaa();   
$a->xx(1,2,3); 
class cB{
	function __call($method,$n){
		if($method=='showVarType'){
			if(is_numeric($n[0])){ //不能用$n。要用$n[0];
				$this->displayNum();
			}else if (is_array($n[0])){
				$this->displayArr();
			}else{
				$this->displayOther();
			}
		}
	}
	function displayNum() {
		echo '<h3>这是数字!</h3>';
	}
	function displayArr() {
		echo '<h3>这是数组!</h3>';
	}
	function displayOther() {
		echo '<h3>不是数组也不是数字!</h3>';
	}
}
 

$x='a';
$y=array('a','b');
$b=new cB;
$b->showVarType($x); //不是数组也不是数字
$b->showVarType($y); //这是数组

class car{
    //private $ming;
    protected $ming='dsadsa';
    //public $ming;
    function __set($name,$value)
    {
        //另外可以加入判断的代码
		if($value=="本田"){
			$this->$name=$value;
		}else{
			$this->$name=$value.'123';
		}
        
    }
    function __get($name)
    {
        //另外可以加入判断的代码
        return $this->$name;
    }
}
$car1=new car();

$car1->ming='本田';
echo $car1->ming;

$car1->ming='丰田';
echo $car1->ming;
echo $car1->ming;
echo '<br />';
class test{
public static $v = 0;
function __construct(){ self::$v++; }
static function getV(){ return self::$v; }
}
$a = new test();
echo test::getV(); // 返回 1
echo '<br />';
 ob_start();//开启缓冲区
 echo "这是第一次输出内容!\n";
 $ff[1] = ob_get_contents() ; //获取当前缓冲区内容
 ob_flush();//缓冲器清除
 echo "这是第二次输出内容!\n";
 $ff[2] = ob_get_contents() ; //获取当前缓冲区内容
 echo "这是第三次输出内容!\n";
 $ff[3] = ob_get_contents() ; //获取当前缓冲区内容
  echo "<pre>";
  print_r($ff);
// phpinfo();exit;
// echo  getMicrotime();
function unreverse($str){
 for($i=1;$i<=strlen($str);$i++){
  echo substr($str,-$i,1);
 }
}
if (isset($_GET['a']) and isset($_GET['b'])) {
	if ($_GET['a'] != $_GET['b'])
		if (md5($_GET['a']) == md5($_GET['b']))die('Flag: '.$flag);
	// elseprint 'Wrong.';
}
unreverse("abcdefg");//gfedcbc
echo '<br />';
/* 
$starttime = getMicrotime();

 echo $starttime;
 echo '<br/>';

// 记录结束时间
$endtime = getMicrotime();
 echo $endtime; echo '<br/>';
 echo (float)(($endtime-$starttime)*1000); echo '<br/>';
echo 'run time:'.(float)(($endtime-$starttime)*1000).'ms<br>';
echo 'use memory:'.getUseMemory();exit; */

/* for($i=150;$i<=250;$i++){
	echo $i.'=""';
	echo '<br/>';
} */
/* echo  dechex(1311768467302729063) ;
echo  dechex(12) ;
$frombase=1311768467302729063;
$tobase = base_convert($frombase, 10, 16); */
// ob_start();


$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}

array_walk_recursive($fruits, 'test_print');

















//创建可抛出一个异常的函数
function checkNum($number)
 {
 if($number>1)
  {
  throw new Exception("Value must be 1 o1111r below");
  }
 return true;
 }

//在 "try" 代码块中触发异常
try
 {
 checkNum(2);
 //If the exception is thrown, this text will not be shown
 echo 'If you see this, the number is 1 or below';
 $lss='sssssssss';
 }

//捕获异常
catch(Exception $e)
 {
 echo 'Message: ' .$e->getMessage();
 echo '<br/>';
 echo 'Message: ' .$e->getLine();
  echo '<br/>';
 // print_r($e);
 }
 // echo $lss;
$a="abcdef";
$b="abcdef";

$c="1234";
$num = 5;  
$location = 'tree';  
echo sprintf("%1\$g%2\$s",$c,$a);
// echo sprintf("%s%s",$c,$a);
echo '<br />';
echo sprintf("%'0-7s",$c);
echo '<br />';
echo sprintf("%06.2f", $c);
echo '<br />';
$format = 'The %2$s contains %1$d monkeys.That\'s a nice %2$s full of %1$d monkeys.';   // 同样的占位符，使用了多次  
echo sprintf($format, $num, $location); 
echo '<br />';
echo 'hello world'; // 输出点儿内容

// 获取缓冲区的内容，然后写入到1.txt中

$sid = md5(uniqid(rand()));
print_r($sid);
// print_r(uniqid(rand()));
// echo  1|2 ;
$http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';  
echo $http_type . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo '<br/>';
echo $http_type;
echo '<br/>';
// echo $_SERVER['HTTP_X_FORWARDED_PROTO'];
// phpinfo();
$sss=1.222;
echo (int)$sss;
echo '<br/>';
echo microtime();
echo '<br/>';
include_once("function/conn.php");
// include_once("function/session_href.php");
// include("function/rs485_function.php");
	// $file_name="language/dev_History_event.ini";
    // $title=parse_ini_file($file_name,true);
 $dt = date("Y-m-d H:i:s (T)");
		$ss=intval(15.93);
		// header("Content-Type: text/html; charset=gb2312");
/*
**查看WINDOWS系统进程列表,并查找指定进程是否存在
*/

/* $tasklist = $_SERVER["WINDIR"]."/system32/tasklist.exe";       //找到windows系统下tasklist的路径
// print($tasklist);          //打印tasklist的路径
@exec($tasklist,$arr);     //运行tasklist.exe,返回一个数组$arr
// print_r($arr); 
// 记录开始时间
$starttime = getMicrotime();
// echo $starttime;
// echo '<br/>';
$string=implode('&',$arr);
$string= iconv('GB2312', 'UTF-8',$string); 
$arr=explode('&',$string); 
// 记录结束时间

print_r($arr);            //打印数组
//用循环打印进程列表
foreach($arr as $value){
	
    $list = explode(" ",$value);
	// $list[0]= iconv('GB2312', 'UTF-8',$list[0]); 
    print($list[0].'<br />');    
    //查找指定进程并打印
    /* if('php.exe'==$list[0]){
        echo $info[0].'<br />';
    } 
}
$endtime = getMicrotime();
echo 'unique count:'.count($arr).'<br>';
echo 'run time:'.(float)(($endtime-$starttime)*1000).'ms<br>';
echo 'use memory:'.getUseMemory(); 

/**
 * 获取使用内存
 * @return float
 */
/* function getUseMemory(){
    $use_memory = round(memory_get_usage(true)/1024,2).'kb';
    return $use_memory;
} */

/**
 * 获取microtime
 * @return float
 */
/* function getMicrotime(){
    list($usec, $sec) = explode(' ', microtime());
    return (float)$usec + (float)$sec;
} */


///////////////////////////////////
$arr = array();

// 创建100000个随机元素的数组
for($i=0; $i<100000; $i++){
    $arr[] = mt_rand(1,99);
}

// 记录开始时间
$starttime = getMicrotime();

// 去重
$arr = array_unique($arr);

// 记录结束时间
$endtime = getMicrotime();

$arr = array_values($arr);

echo 'unique count:'.count($arr).'<br>';
echo 'run time:'.(float)(($endtime-$starttime)*1000).'ms<br>';
echo 'use memory:'.getUseMemory();

/**
 * 获取使用内存
 * @return float
 */
function getUseMemory(){
    $use_memory = round(memory_get_usage(true)/1024,2).'kb';
    return $use_memory;
}

/**
 * 获取microtime
 * @return float
 */
function getMicrotime(){
    list($usec, $sec) = explode(' ', microtime());
    return (float)$usec + (float)$sec;
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