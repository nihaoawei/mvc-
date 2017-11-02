<?php
namespace Controller;
use Controller\Controller;
use Model\UserModel;
use Framework\Upload;

class UserController extends Controller
{
	public $user;
	public $upload;
	public function __construct()
	{
		parent::__construct();
		$this->user = new UserModel();
		$this->upload = new Upload(['path' => 'Upload']);
	}

	public function register()
	{
		$this->display();
	}

	public function doRegister()
	{
		
		$username = $_POST['username'];
		$password = trim($_POST['pass']);
		$rePassword = trim($_POST['repass']);
		$phone = $_POST['phone'];
		$time = time();
		$ip=$_SERVER['REMOTE_ADDR'];
		if (!strcmp($ip , '::1')) {
			$ip = '127.0.0.1';
		}
		$ip = ip2long($ip);
		$data['uname'] = $username;
		$data['pass'] = md5($password);
		$data['rip'] = $ip;
		$data['rtime'] = $time;
		$data['phone']=$phone;
		$data['utype'] = 0 ; 

		//提示信息默认为false
		$Notice = false;
		//验证用户名和密码长度
		if(mb_strlen($username)<=3 || mb_strlen($username)>=12 ){
			$Notice = true;
			$msgArr[] = '<font color=red><b>用户名长度错误：用户名由 3 到 12 个字符组成</b></font>';
		}
		if(mb_strlen($password)<3|| mb_strlen($password)>=12){
			$Notice = true;
			$msgArr[] = '<font color=red><b>密码长度错误：由 5 到 12 个字符组成</b></font>';
		}
		//验证密码不能为纯数字
		if(preg_match("/^\d*$/",$password))  
		{  
   			$Notice = true;
			$msgArr[] = '<font color=red><b>密码错误：密码不能为纯数字</b></font>';
		}
		//判断用户是否已经存在
		if($this->user->doFind($data)){
			$Notice=true;
			$msgArr[]='<font color=red><b>该用户名已存在</b></font>';
		}
		//验证两次密码是否一致
		if($password != $rePassword)
		{
			$Notice = true;
			$msgArr[] = '<font color=red><b>输入错误：两次密码不一致</b></font>';
		}
		//验证电话格式
		if(!preg_match("/^1(3|4|5|7|8)\d{9}$/" , $phone)){
			$Notice = true;
			$msgArr[] = '<font color=red><b>请输入正确的手机号码</b></font>';
		}

		if($Notice){
			$msg = join('<br />',$msgArr);
			//var_dump($_SERVER);
			$url = $_SERVER['HTTP_REFERER'];
			$this->error($msg,$url,3);
			die;
		}else{
			//var_dump($data);
			$add= $this->user->doAdd($data);
			$result= $this->user->doFind($data);
			if ($add) {
				$_SESSION['uname'] = $username;
				$_SESSION['pass'] = md5($password);
				$_SESSION['uid']= $result[0]['uid'];
				$_SESSION['utype'] = $result[0]['utype'];
				$msg = '<font color=green><b>感谢您的注册，现在将以会员身份登录站点</b></font>';
				$url = 'index.php';
				$this->success($msg,$url,3);
				die;
			}
		}

		
	}

	public function doLogin()
	{
		
		$data['uname'] = $_POST['username'];
		$data['pass'] =trim(md5($_POST['password']));
		//登陆成功之后的头部 
		$result = $this->user->doFind($data);
		
		//var_dump($result);
		if($result){
			$username = $data['uname'];
			$password = $data['pass'];
			$this->assign('result' , $result);
		if($result[0]['uname'] == $username && $result[0]['pass']==$password){
		 		if($result[0]['loginlock'] >= 5){
					$msg = '<font color=red><b>您的账号已经被锁定，请联系博主</b></font>';
					$url = 'index.php';
		 			$this->error($msg,$url,3);
		 			die;
		 		}
		 		$_SESSION['uname']=$username;
		 		$_SESSION['uid']= $result[0]['uid'];
		 		$_SESSION['utype'] = $result[0]['utype'];
				
		 		$msg = '<font color=green><b>登陆成功</b></font>';
		 		$url = 'index.php';
		 		$this->success($msg,$url,3);
		 		die;
		 }else{
		 		//查出数据库当前用户登录错误次数select($link , 'w_user','loginlock',"uname='$username'");
		 			$loginlock = $this->user->doFind($data);
		 			//错误次数加1
		 			$arr['loginlock'] = $loginlock[0]['loginlock'] +1;
		 			$aa = $this->user->doupdate($arr,$result[0]['uname']);
		 			//var_dump($aa);
		 			$loginlock = $this->user->doFind($data);
					//判断是否是五次登录错误
		 			if($loginlock[0]['loginlock'] > 4){
		 				$all['allowlogin'] = 1;
		 				$close = $this->user->doupdate($all,$result[0]['uname']);
		 				$url = 'index.php';
		 				$msg = '<font color=red><b>密码连续输错五次，当前账户已被锁定</b></font>';
		 				$this->error($msg,$url,3);
		 				exit;
		 			}
		 		$msg = '<font color=red><b>登录失败，用户名或密码错误</b></font>';
				$url = 'index.php';
				$this->error($msg,$url,3);
		 		die;
		 }

		}
		
		$msg = '<font color=red><b>登录失败，请先注册</b></font>';
		$url = 'index.php';
		$this->error($msg,$url,3);
		die;
	}

	public function outLogin(){

		$_SESSION = [];

		session_destroy();
		$msg = '<font color=green><b>退出成功</b></font>';
		$url = 'index.php';
		$this->success($msg,$url,3);
		die;

	}

	public function xgzl()
	{

		//当$_SESSION['username']不为空时，显示登陆成功页面
		if(!empty($_SESSION['uname'])){
		$username = $_SESSION['uname'];

		//查询出登陆成功状态下的信息
		$data['uname'] = $username;
		//登陆成功之后的头部 
		$result = $this->user->doFind($data);
		//var_dump($result);
		$Notice = false;
			$this->assign('result' , $result);
			if(!empty($_POST)){
						
						$phone = $_POST['phone'];
						
						$uid = $_SESSION['uid'];
						$oderpass=md5($_POST['orderpass']);
						if(!empty($_POST['pass'])){
							$pass=$_POST['pass'];
							$repass = $_POST['repass'];

							//验证密码长度
							if(mb_strlen($pass)<3|| mb_strlen($pass)>=12){
								$Notice = true;
								$msgArr[] = '<font color=red><b>密码长度错误：由 5 到 12 个字符组成</b></font>';
							}
							//验证密码不能为纯数字
							if(preg_match("/^\d*$/",$pass))  
							{  
					   			$Notice = true;
								$msgArr[] = '<font color=red><b>密码错误：密码不能为纯数字</b></font>';
							}
						}
						//验证原密码是否正确select($link,'bbs_user','uid', 'uid='.$_SESSION['uid'].' and password="'.$oderpass.'"');
					
						$old = $this->user->doFindOrder($uid,$oderpass);
						//var_dump($old);
						//die;
							if(!$old)
							{	$Notice = true;
								$msgArr[] = '<font color=red><b>旧密码不正确</b></font>';
								
							}

							//验证电话
							//验证电话格式
							if(!preg_match("/^1(3|4|5|7|8)\d{9}$/" , $phone)){
								$Notice = true;
								$msgArr[] = '<font color=red><b>请输入正确的手机号码</b></font>';
							}
							//die;
							if($Notice){
								$msg = join('<br />',$msgArr);
								//var_dump($_SERVER);
								$url = "index.php?m=user&a=xgzl";
								$this->error($msg,$url,3);
								die;
							}else{
								if(!empty($_POST['pass'])){
									$data['pass'] = md5($_POST['pass']);
								}
								$data['uname'] = $_POST['username'];
								$data['phone'] = $_POST['phone'];
								if(!empty($_FILES['touxiang']['name'])){
									$picture = $this->upload->up('touxiang');
									//var_dump($picture);
									$data['picture'] = 'Upload/'.$picture;
								}
						
								$xiugai = $this->user->doXiuGai($uid,$data);
								if($xiugai){
									$_SESSION['uname'] = $_POST['username'];
									$msg = '<font color=green><b>修改成功</b></font>';
									$url="index.php?m=user&a=xgzl";
									$this->success($msg,$url,3);
									exit;
								}else{
									$msg = '<font color=red><b>修改失败,请联系博主</b></font>';
									$url="index.php?m=user&a=xgzl";
									$this->error($msg,$url,3);
									exit;
								}
						
							}
						
						//var_dump($xiugai);
			}else{
				//var_dump($_SESSION);
				$data['uname'] = $_SESSION['uname'];
				$users = $this->user->doFind($data);
				$this->assign('users' , $users);
				//var_dump($users);
				$this->display();
			}
					
					

		}else{
			$msg = '<font color=red><b>您还没有登录,不能修改资料请登录</b></font>';
			$url="index.php";
			$this->error($msg,$url,3);
			exit;
		}
		
		
	}
}











