<?php
namespace Controller;
use Controller\Controller;
use Model\ZhmmModel;
use Framework\Ucpaas;
include 'curl.func.php';

class ZhmmController extends Controller
{
	public $zhmm;
	public $ucpass;
	public function __construct()
	{
		parent::__construct();
		$this->zhmm = new ZhmmModel();
	}

	public function zhmm()
	{
		$this->display();
	}

	public function doZhmm(){
		
			$uname = $_POST['username'];
			$pass = $_POST['repass'];
			
			$result2 = $this->zhmm->doFindlala($uname);
		if(!empty($_POST)){
		

					
					//var_dump($result2);
					/*$appkey = '247e0386dfbef6cd';//你的appkey
					$mobile = "$phone";//手机号 超过1024请用POST
					//echo $mobile;
					//die;
					$pass=$result2[0]['pass'];
					$content = "你好$uname,你通过李维维的博客进行找回密码操作,您的密码是：$pass,如不是本人操作请忽略。【李维维客人博客】";//utf8
					//var_dump($content);
					//die;
					$url = "http://api.jisuapi.com/sms/send?appkey=$appkey&mobile=$mobile&content=$content";
					//echo $url;
					$result = curlOpen($url);
					//var_dump($result);
					$jsonarr = json_decode($result, true);
					//exit(var_dump($jsonarr));
					if($jsonarr['status'] != 0)
					{
					    echo $jsonarr['msg'];
					    exit();
					}
					$result = $jsonarr['result'];
					//echo $result['count'].' '.$result['accountid'].'<br>';*/	
					$yan = $_POST['yan'];
					if($yan == 4903){
						
						$ss['pass'] = md5($pass);
						$uid = $result2[0]['uid'];
						$newpass= $this->zhmm->doupdate($uid,$ss);
						
						//发送邮件
						$msg = '<font color=green><b>密码修改成功！</b></font>';
						$url = 'index.php';
						$this->success($msg,$url,3);
						die;
					}else{
						$msg = '<font color=red><b>验证码错误</b></font>';
						$url = 'index.php';
						$this->success($msg,$url,3);
						die;
						
					}
				}
				
					
					
	
			
			
					
				
		
		}
	
	
	public function doyan()
	{
			$uname = $_POST['username'];
			$phone = $_POST['phone'];
			$Notice= false;
			//验证电话格式
			if(!preg_match("/^1[34578]\d{9}$/" , $phone)){
				$Notice = true;
				$msgArr[] = '<font color=red><b>请输入正确的手机号码</b></font>';
			}
			$result2 = $this->zhmm->doFinduser($uname,$phone);
			if(!$result2)
			{
				$Notice=true;
				$msgArr[] = '<font color=red><b>抱歉，您填写的账户资料不匹配，不能使用取回密码功能，如有疑问请与博主联系</b></font>';
			}

				if($Notice){
					$msg = join('<br />', $msgArr);
					$url='index.php?m=zhmm&a=zhmm';
					$this->error($msg,$url,3);
					die;
				}else{
					//初始化必填
						$options['accountsid']='edc32705393b243a72b59761fe6f731d';
						$options['token']='fe8916b79f07350b814cec92fa9b6220';


						//初始化 $options必填
						$this->ucpass = new Ucpaas($options);

						$appId = "e8721e5af7c24032afc5c59cc99a7d38";
						$to = "$phone";
						$templateId = "144518";
						$param="$uname,4903";
						$this->ucpass->templateSMS($appId,$to,$templateId,$param);
						//echo $this->ucpass->getDevinfo('xml');
					//die;
					
					//发送邮件
						$msg = '<font color=green><b>您验证码已通过短信发送给您，请注意查收</b></font>';
						$url = 'index.php?m=zhmm&a=zhmm';
						$this->success($msg,$url,3);
						die;
					
				}
		
	}

}
