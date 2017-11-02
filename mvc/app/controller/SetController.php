<?php
namespace Controller;
use Controller\Controller;
use Model\SetModel;
require_once 'curl.func.php';

class SetController extends Controller
{
	public $set;

	public function __construct()
	{
		parent::__construct();
		$this->set = new SetModel();
	}

	public function zwjs()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->set->doFind($data);
		//var_dump($result);
			$this->assign('result' , $result);
		}
		
		//var_dump($_POST);
		if(empty($_POST['brith']) || empty($_POST['xing'])){
			//你的appkey
			$astroid = 1;
			$date='1996-03-27';
		}else{
			$date=$_POST['brith'];
			$astroid = $_POST['xing'];
		}
		$appkey = '247e0386dfbef6cd';
		$url1 = "http://api.jisuapi.com/astro/all?appkey=$appkey";
		$url2 = "http://api.jisuapi.com/astro/fortune?appkey=$appkey&astroid=$astroid&date=$date";
			$result3 = curlOpen($url1);
			$xingzuo = curlOpen($url2);
			$jsonarr = json_decode($result3, true);
			$jxingzuo = json_decode($xingzuo,true);
			//var_dump($jxingzuo);
			//var_dump($jsonarr);
			if($jsonarr['status'] != 0)
			{
			    echo $jsonarr['msg'];
			    exit();
			}
			$result3 = $jsonarr['result'];
			$xingzuo = $jxingzuo['result'];
			$pic = $result3[$astroid-1]['pic'];

			 $this->assign('pic' , $pic);
			//var_dump($result3);
			//echo $result['astroid'].' '.$result['astroname'].'<br>';
			 $this->assign('result3' , $result3);
			 $this->assign('xingzuo' , $xingzuo);
			 
			$today = $xingzuo['today'];
			$month = $xingzuo['month'];
			//var_dump($today);

			$this->assign('today' , $today);
			$this->assign('month' , $month);
			
			
			$appkey = '247e0386dfbef6cd';
			$city = '北京';//utf8
			$cityid=1;//任选
			$citycode=101010100;//任选
			
			$url = "http://api.jisuapi.com/weather/query?appkey=$appkey&city=$city";
			$tianqi = curlOpen($url);
			$jsonarr = json_decode($tianqi, true);
			//exit(var_dump($jsonarr));
			if($jsonarr['status'] != 0)
			{
			    echo $jsonarr['msg'];
			    exit();
			}
			 
			$tianqi = $jsonarr['result'];
			/* echo $result['city'].' '.$result['date'].' '.$result['week'].' '.$result['weather'].'<br/>' ;
			echo '最高温度：',$result['temphigh'].' 最低温度：'.$result['templow'].' '.$result['winddirect'].'<br>';
			echo '风力'.$result['windpower'].' 更新时间：'.$result['updatetime'].'<br>';
			echo '指数：<br>';
			foreach($result['index'] as $index)
			{
			    echo $index['iname'].' '.$index['ivalue'].' '.$index['detail']. '<br>';
			}
			echo '空气质量指数：<br>';
			$aqi = $result['aqi'];
			echo $aqi['so2'].' '.$aqi['so224'].' '.$aqi['no2'].' '.$aqi['no224'].' '.$aqi['co']. '<br>';
			echo $aqi['co24'].' '.$aqi['o3'].' '.$aqi['o38'].' '.$aqi['o324'].' '.$aqi['pm10']. '<br>';
			echo $aqi['pm1024'].' '.$aqi['pm2_5'].' '.$aqi['pm2_524'].' '.$aqi['iso2'].' '.$aqi['ino2']. '<br>';
			echo $aqi['ico'].' '.$aqi['io3'].' '.$aqi['io38'].' '.$aqi['ipm10'].' '.$aqi['ipm2_5']. '<br>';
			echo $aqi['aqi'].' '.$aqi['primarypollutant'].' '.$aqi['quality'].' '.$aqi['timepoint']. '<br>';
			echo $aqi['aqiinfo']['level'].' '.$aqi['aqiinfo']['color'].' '.$aqi['aqiinfo']['affect'].' '.$aqi['aqiinfo']['measure']. '<br>'; */
			
			$this->assign('tianqi' , $tianqi);
			$this->display();
		
	}



}
