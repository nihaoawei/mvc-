<?php
namespace Controller;
use Controller\Controller;
use Model\LikeModel;

class LikeController extends Controller
{
	public $like;

	public function __construct()
	{
		parent::__construct();
		$this->like = new likeModel();
	}

	public function likeindex()
	{
		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->like->doFind($data);
		$this->assign('result' , $result);
		}
		$table = 'wzryyx';
		$yxrw = $this->like->doFindAll($table);
		$this->assign('yxrw' , $yxrw);
		$tu='tupian';
		$tupian = $this->like->doFindAll($tu);
		$this->assign('tupian' , $tupian);
		$sui='suibi';
		$suibi = $this->like->doFindAll($sui);
		$this->assign('suibi' , $suibi);
		$this->display();
	}

}
