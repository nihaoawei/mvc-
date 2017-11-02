<?php
namespace Controller;
use Controller\Controller;
use Model\IndexModel;

include 'curl.func.php';

class IndexController extends Controller
{
	public $index;
	public $close;

	public function __construct()
	{
		parent::__construct();
		$this->index = new IndexModel();

		$this->close = new IndexModel();
	}

	public function index()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->index->doFind($data);
			$this->assign('result' , $result);
		}

		$isclose = $this->close->selectClose();
		if($isclose[0]['close'] == 1 && $_SESSION['utype'] != 1)
		{
			$msg = '<font color=red><b>博客以关闭仅博主可见</b></font>';
			$url = 'index.php';
			$this->error($msg,$url,3);
		}
		$table = 'wzryyx';
		$yxrw = $this->index->doFindAll($table);
		//var_dump($yxrw);
		$this->assign('yxrw' , $yxrw);
		$sui='suibi';
		$suibi = $this->index->doFindAll($sui);
		$this->assign('suibi' , $suibi);
		$this->display();

	}

	public function tianqi()
	{
		/*$appkey = '247e0386dfbef6cd';//你的appkey
		$url = "http://api.jisuapi.com/weather/city?appkey=$appkey";
		$result = curlOpen($url);
		$jsonarr = json_decode($result, true);
		exit(var_dump($jsonarr));
		if($jsonarr['status'] != 0)
		{
		    echo $jsonarr['msg'];
		    exit();
		}
		$result = $jsonarr['result'];

		foreach($result as $val)
		{
		    echo $val['cityid'].' '.$val['parentid'].' '.$val['citycode'].' '.$val['city'].'<br>';
		}*/
			$appkey = '247e0386dfbef6cd';
			$city = '北京';//utf8
			$cityid=1;//任选
			$citycode=101010100;//任选
			
			$url = "http://api.jisuapi.com/weather/query?appkey=$appkey&city=$city";
			$result = curlOpen($url);
			$jsonarr = json_decode($result, true);
			//exit(var_dump($jsonarr));
			if($jsonarr['status'] != 0)
			{
			    echo $jsonarr['msg'];
			    exit();
			}
			 
			$result = $jsonarr['result'];
			echo $result['city'].' '.$result['date'].' '.$result['week'].' '.$result['weather'].'<br/>' ;
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
			echo $aqi['aqiinfo']['level'].' '.$aqi['aqiinfo']['color'].' '.$aqi['aqiinfo']['affect'].' '.$aqi['aqiinfo']['measure']. '<br>';
			
			
			

	}

	public function sreach()
	{
		$keys=$_POST['keys'];
		$this->assign('keys',$keys);

		$sreach = $this->index->dosreach($keys);

		$this->assign('sreach',$sreach);
		//var_dump($sreach);
		$sum = $this->index->doCounts($keys);
		//var_dump($sum);
		$this->assign('sum',$sum);
		$this->display();
	}

}











