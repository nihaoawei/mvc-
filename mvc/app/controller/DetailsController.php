<?php
namespace Controller;
use Controller\Controller;
use Model\DetailsModel;

class DetailsController extends Controller
{
	public $details;

	public function __construct()
	{
		parent::__construct();
		$this->details = new DetailsModel();
	}

	public function details()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->details->doFind($data);
		$this->assign('result' , $result);
		}
		//var_dump($_SERVER);
		//判断帖子ID是否存在
		if(empty($_REQUEST['yid']) || !is_numeric($_REQUEST['yid']))
		{
			$msg = '<font color=red><b>禁止非法操作</b></font>';
			$url = 'index.php?m=like&a=likeindex';

			$this->error($msg,$url,3);
			die;
		}
		$yid = $_GET['yid'];
		$detail = $this->details->doFinddetails($yid);
		$this->assign('detail' , $detail);
		$countHui = $this->details->doCount($yid);
		$this->assign('countHui' , $countHui);
		$Huifu = $this->details->doFindHuifu($yid);
		//var_dump($Huifu);
		$this->assign('Huifu',$Huifu);
		if(!empty($Huifu)){
			$authorid = $Huifu[0]['authorid'];
			$user = $this->details->findUser($yid,$authorid);
			//var_dump($user);
			$this->assign('user',$user);
		}
		
		
		

		
		$this->display();
	}

	public function dohuifu()
	{

		//获得更新语句的数据
		$data['content']=$_POST['content'];
		$content=$_POST['content'];
		$data['tid'] = $_POST['tid'];
		$tid=$_POST['tid'];
		if(empty($_SESSION['uid']))
		{
			$msg = '抱歉，您尚未登录，没有权限在该版块回复,请登陆';
			$url="index.php?m=details&a=details&yid=$tid";
			$this->error($msg,$url,3);
			exit;
		}else{
			$data['authorid']=$_SESSION['uid'];
		}
		$data['addtime']=time();
		$data['Tie']=1;
		$HuiTie = $this->details->doAdd($data);
		//var_dump($HuiTie);
		if($HuiTie){
			$msg = '<font color=green><b>回复成功</b></font>';
			$url = "index.php?m=details&a=details&yid=$tid#huifu";
			$this->success($msg,$url,3);
			exit;
		}else{
			$msg = '<font color=red><b>帖子回复失败，请联系管理员</b></font>';
			$url ="index.php?m=details&a=details&yid=$tid";
			$this->error($msg,$url,3);
			exit;
		}
	}


	public function detailsSui()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->details->doFind($data);
		$this->assign('result' , $result);
		}
		//var_dump($_SERVER);
		//判断帖子ID是否存在
		if(empty($_REQUEST['sid']) || !is_numeric($_REQUEST['sid']))
		{
			$msg = '<font color=red><b>禁止非法操作</b></font>';
			$url = 'index.php?m=like&a=likeindex';

			$this->error($msg,$url,3);
			die;
		}
		$sid = $_GET['sid'];
		$detailSui = $this->details->doFinddetailsSui($sid);

		$this->assign('detailSui' , $detailSui);
		$countHuiSui = $this->details->doCountSui($sid);
		$this->assign('countHuiSui' , $countHuiSui);
		$HuifuSui = $this->details->doFindHuifuSui($sid);
		//var_dump($HuifuSui);
		$this->assign('HuifuSui',$HuifuSui);
		if(!empty($HuifuSui)){
			$authoridSui = $HuifuSui[0]['authorid'];
			$userSui = $this->details->findUserSui($sid,$authoridSui);
			//var_dump($userSui);
			//die;
			$this->assign('userSui',$userSui);
		}
		
		$this->display();
	}

	public function dohuifuSui()
	{

		//获得更新语句的数据
		$data['scontent']=$_POST['content'];
		$content=$_POST['content'];
		$data['tid'] = $_POST['tid'];
		$tid=$_POST['tid'];
		if(empty($_SESSION['uid']))
		{
			$msg = '抱歉，您尚未登录，没有权限在该版块回复,请登陆';
			$url="index.php?m=details&a=detailsSui&sid=$tid";
			$this->error($msg,$url,3);
			exit;
		}else{
			$data['authorid']=$_SESSION['uid'];
		}
		$data['addtime']=time();
		$data['Tie']=1;
		$HuiTieSui = $this->details->doAddSui($data);
		//var_dump($HuiTieSui);
		//die;
		if($HuiTieSui){
			$msg = '<font color=green><b>回复成功</b></font>';
			$url = "index.php?m=details&a=detailsSui&sid=$tid#huifu";
			$this->success($msg,$url,3);
			exit;
		}else{
			$msg = '<font color=red><b>帖子回复失败，请联系管理员</b></font>';
			$url ="index.php?m=details&a=detailsSui&sid=$tid";
			$this->error($msg,$url,3);
			exit;
		}
	}

}

