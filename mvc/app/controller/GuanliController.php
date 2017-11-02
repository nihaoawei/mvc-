<?php
namespace Controller;
use Controller\Controller;
use Model\GuanliModel;

class GuanliController extends Controller
{
	public $guanli;
	public $close;
	public function __construct()
	{
		parent::__construct();
		$this->guanli = new GuanliModel();

		$this->close = new GuanliModel();

	}

	public function guanli()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->guanli->doFind($data);
		$this->assign('result' , $result);
		}

		if(!empty($_GET['close'])){
			if($_GET['close'] == 'yes'){
			$aaa['close'] = 1;
			$this->close->close($aaa);
			}else if($_GET['close'] == 'no'){
				$aaa['close'] = 0;
				$this->close->close($aaa);
			}
		}
		
		$isclose = $this->close->selectClose();
		//var_dump($isclose);

		$this->assign('isclose' , $isclose);
		$this->display();
	}

	public function userGuan()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->guanli->doFind($data);
		$this->assign('result' , $result);
		}
			if(!empty($_GET['delete'])){
			$id = $_GET['id'];
			//var_dump($id);

			$strId = join(',' , $id);
			$result = $this->guanli->doShanchu($strId);

			//var_dump($id);
			//die;
				if($result){
					header('location:index.php?m=guanli&a=userGuan');
				}else{
					$msg = '<font color=red><b>删除失败</b></font>';
					$url = 'index.php?m=guanli&a=userGuan';
					$this->error($msg,$url,3);
				}
	
			}

			if(!empty($_GET['lock'])){
				$uid=$_GET['id'];
				$a['loginlock']=5;
				$lock=$this->guanli->doupdate($uid,$a);
			}
			
			if( !empty($_GET['unlock'])){
				$uid=$_GET['id'];
				$a['loginlock']=0;
				$lock=$this->guanli->doupdate($uid,$a);
			}
			$user = $this->guanli->doSelect();
			//var_dump($user);
			$userCount = $this->guanli->doTotal();
			//var_dump($userCount);
			$this->assign('user',$user);
			$this->assign('userCount',$userCount);
			if(!empty($_GET['close'])){
			if($_GET['close'] == 'yes'){
			$aaa['close'] = 1;
			$this->close->close($aaa);
			}else if($_GET['close'] == 'no'){
				$aaa['close'] = 0;
				$this->close->close($aaa);
			}
		}
		
		$isclose = $this->close->selectClose();
		//var_dump($isclose);

		$this->assign('isclose' , $isclose);
		$this->display();
	}

	public function tieGuan()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->guanli->doFind($data);
		$this->assign('result' , $result);
		}
		if(!empty($_GET['del'])){
			$id = $_GET['id'];
			//var_dump($id);

			$strId = join(',' , $id);

			$result = $this->guanli->doShanchu2($strId);;
			//var_dump($result);
			if($result){
				header('location:index.php?m=guanli&a=tieGuan');
			}else{
				$msg = '<font color=red><b>删除失败</b></font>';
				$url = 'index.php?m=guanli&a=tieGuan';
				$this->error($msg,$url,3);
			}

		}
		
			$ties = $this->guanli->doSelect2();
			//var_dump($ties);
			$tieCount = $this->guanli->doTotal2();
			$this->assign('ties',$ties);
			$this->assign('tieCount',$tieCount);

			if(!empty($_GET['close'])){
			if($_GET['close'] == 'yes'){
			$aaa['close'] = 1;
			$this->close->close($aaa);
			}else if($_GET['close'] == 'no'){
				$aaa['close'] = 0;
				$this->close->close($aaa);
			}
		}
		
		$isclose = $this->close->selectClose();
		//var_dump($isclose);

		$this->assign('isclose' , $isclose);
			$this->display();
	}

	public function huiGuan()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->guanli->doFind($data);
		$this->assign('result' , $result);
		}
		if(!empty($_GET['del'])){
			$id = $_GET['id'];
			//var_dump($id);

			$strId = join(',' , $id);

			$result = $this->guanli->doShanchu3($strId);;
			//var_dump($result);
			if($result){
				header('location:index.php?m=guanli&a=huiGuan');
			}else{
				$msg = '<font color=red><b>删除失败</b></font>';
				$url = 'index.php?m=guanli&a=huiGuan';
				$this->error($msg,$url,3);
			}

		}
			
			$hui = $this->guanli->doSelect3();
			//var_dump($hui);
			$huiCount = $this->guanli->doTotal3();
			$this->assign('hui',$hui);
			$this->assign('huiCount',$huiCount);
			if(!empty($_GET['close'])){
			if($_GET['close'] == 'yes'){
			$aaa['close'] = 1;
			$this->close->close($aaa);
			}else if($_GET['close'] == 'no'){
				$aaa['close'] = 0;
				$this->close->close($aaa);
			}
		}
		
		$isclose = $this->close->selectClose();
		//var_dump($isclose);

		$this->assign('isclose' , $isclose);
			$this->display();
	}

	
}