<?php
namespace Controller;
use Controller\Controller;
use Model\FatieModel;
use Framework\Upload;
class FatieController extends Controller
{
	public $fatie;
	public $upload;
	public function __construct()
	{
		parent::__construct();
		$this->fatie = new FatieModel();
		$this->upload = new Upload(['path' => 'Upload']);
	}

	public function fatie()
	{

		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->fatie->doFind($data);
		$this->assign('result' , $result);
		}
		if(empty($_SESSION['uid']))
		{
			$msg = '如果你是博主想要发帖请登录';
			$url="index.php?m=like&a=likeindex";
			$this->error($msg,$url,3);
			exit;
		}
		if($_SESSION['uid']!=1){
			$msg = '抱歉，该博客属于个人博客只有博主才能发帖';
			$url="index.php?m=like&a=likeindex";
			$this->error($msg,$url,3);
			exit;
		}
		$this->display();
	}

	public function doFatie()
	{
		if(!empty($_FILES['tupian']['name'])){
			$picture = $this->upload->up('tupian');
			//var_dump($picture);
			$data['ypic'] = 'Upload/'.$picture;					
		}
		//获得更新语句的数据
		$data['content']=$_POST['content'];
		$content=$_POST['content'];
		$data['title']=$_POST['title'];
		$data['yname'] = $_POST['yname'];
		$data['authorid'] = 1;
		

		$data['addtime']=time();
		$data['Tie']=0;
		
		$FaTie = $this->fatie->doAdd($data);

		if($FaTie){
			$title=$_POST['title'];
			$id = $this->fatie->doFindId($title);
			$id=$id[0]['yid'];
			//var_dump($id);
			$msg = '<font color=green><b>新帖发表成功</b></font>';
			$url = "index.php?m=details&a=details&yid=$id";
			$this->success($msg,$url,3);
			exit;
		}else{
			$msg = '<font color=red><b>帖子发表失败，请重试</b></font>';
			$url ="index.php?m=like&a=likeindex";
			$this->error($msg,$url,3);
			exit;
		}
	}
	
	public function fasui()
	{

		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->fatie->doFind($data);
		$this->assign('result' , $result);
		}
		$this->display();
	}
	public function doFasui()
	{
		if(!empty($_FILES['tupian']['name'])){
			$picture = $this->upload->up('tupian');
			//var_dump($picture);
			$data['spic'] = 'Upload/'.$picture;					
		}
		
		$data['stitle']=$_POST['stitle'];
		$data['sname'] = $_POST['sname'];
		$data['authorid'] = 1;
		if(empty($_SESSION['uid']) || $_SESSION['uid']!=1)
		{
			$msg = '如果你是博主想要发帖请登录';
			$url="index.php?m=like&a=likeindex#suibi";
			$this->error($msg,$url,3);
			exit;
		}
		if($_SESSION['uid']!=1){
			$msg = '抱歉，该博客属于个人博客只有博主才能发帖';
			$url="index.php?m=like&a=likeindex#suibi";
			$this->error($msg,$url,3);
			exit;
		}

		$data['addtime']=time();
		$data['Tie']=0;
		//获得更新语句的数据
		$data['scontent']=$_POST['scontent'];
		$content=$_POST['scontent'];
		$FaSui = $this->fatie->doAddSui($data);
		
		if($FaSui){
			$stitle=$_POST['stitle'];
			$id = $this->fatie->doFindIdSui($stitle);

			$id=$id[0]['sid'];
			//var_dump($id);
			//die;
			$msg = '<font color=green><b>新帖发表成功</b></font>';
			$url = "index.php?m=details&a=detailsSui&sid=$id";
			$this->success($msg,$url,3);
			exit;
		}else{
			$msg = '<font color=red><b>帖子发表失败，请重试</b></font>';
			$url ="index.php?m=like&a=likeindex#suibi";
			$this->error($msg,$url,3);
			exit;
		}
	}

}